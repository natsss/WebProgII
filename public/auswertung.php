
<!doctype html>
<head>
    <title>
    Auswertung
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
<table border="0" style="border-collapse:separate; ">
    <tbody>
        <tr>
            <td>Name</td>
            <td>
                <?php echo $_GET['Name']; ?>
            </td>
 </tr>
    

   <tr>
       <td>Vorname</td>
       <td>
       <?php echo $_GET['Vorname']; ?>
       </td>

    </tr> 
     <tr>
       <td>Geburtsdatum</td>
         <td>
         <?php echo $_GET['Geburtsdatum']; ?>
         </td>

    </tr>
     <tr>
       <td>Wohnort</td>
         <td>
         <?php echo $_GET['Wohnort']; ?>
         </td>

    </tr>

</tbody>
</table>
</body>
</html>

