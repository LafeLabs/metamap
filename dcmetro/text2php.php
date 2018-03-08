<?php

$files1 = scandir("php/");

foreach ($files1 as $value) {
    if($value != "." &&$value != ".."){
        $filebase = explode(".",$value)[0].".php";
        $code = file_get_contents("php/".$value);
        $file = fopen($filebase,"w");// create new file with this name
        fwrite($file,$code); //write data to file
        fclose($file);  //close file      
    }
}

?>