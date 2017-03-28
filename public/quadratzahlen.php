<!doctype html>
<head>
    <title>
    Quadratzahlen
    </title>
   <style type="text/css">
       td, th {border: solid 1px #000000;}
       td, th {padding-left: 100px;}
       td, th {padding-right: 100px;}
       td, th {border-collapse:separate;}
       td, th {text-align: center}
   </style>
</head>

<body>
<?php

if (isset($_GET['Limit'])) {
?>
    

<?php for ($i = 0; $i < $_GET['Limit']; $i++) 

{ 
?>
<table>
<tr>
    <td><?php echo "$i".'<br>';?></td>
    <td><?php echo ($i*$i).'<br>';?></td>
    </tr>
</table>
<?php 
}
?>





<?php

} else {
  ?>
  
<form action="">
<input type="text" name="Limit" placeholder="Limit">
</form>

 <?php }

?>
    
</body>
</html>



