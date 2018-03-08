<?php

$dnaraw = file_get_contents("json/dna.txt");
$dna = json_decode($dnaraw);

for($x = 0; $x < count($dna); $x++) {
    if($dna[$x] -> name == "topfunctions"){
        echo file_get_contents($dna[$x] -> url);
    }    
}



?>