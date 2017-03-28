<?php

$_GET['Zahl'];
$intN = $_GET['Zahl'];

  function fakultaet ( $intN ) 
  { 
    if ( $intN <= 1 ) 
    { 
      return 1; 
    } 

    for ( $intFaculty = 1; $intN > 1; --$intN ) 
    { 
      $intFaculty *= $intN; 
    } 
    return $intFaculty; 
    
  }

$zahl = fakultaet ($intN);
echo $zahl;

?>