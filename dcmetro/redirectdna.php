<?php
/*
redirectdna.php
open dna file, encode into json object, loop through object and 
replace each url with one with a new base defined by $newbaseurl. 

This code needs to be edited then metabolized with txt2php on each use, since the 
base url needs to be edited.
*/

$dnaraw = file_get_contents("json/dna.txt");
$dna = json_decode($dnaraw);

$newbaseurl = "http://www.actiongeometry.org/page/";

foreach ($dna as $value) {
    $value->url = $newbaseurl.$value->type."/".$value->name.".txt";
}

$data = json_encode($dna,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

$file = fopen("json/dnaout.txt","w");// create new file with this name
fwrite($file,$data); //write data to file
fclose($file);  //close file

?>