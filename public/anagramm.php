<?php

$_GET['wort1'];
$_GET['wort2'];
$a = $_GET['wort1'];
$b = $_GET['wort2'];

function is_anagram($a, $b) {
    return(count_chars($a, 1) == count_chars($b, 1));
}


if (is_anagram($a, $b) == 1) {
    
    echo "Anagramm vorhanden";
}
else {
    
    echo "Kein Anagramm vorhanden";
}



?>