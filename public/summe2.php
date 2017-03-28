<table border="1">
<?php

$limit = 5;

// Ziel 1+2+3+4+5

$summe = 0;

for ($i = 1; $i<= $limit; $i++) {
echo "<tr><td>$i</td><td>$summe</td></tr>";
$summe = $summe + $i;

}

echo $summe;

?>
</table>