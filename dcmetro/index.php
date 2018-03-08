<?php
    $dnaraw = file_get_contents("json/dna.txt");
    $dna =json_decode($dnaraw);
    
?>
<!doctype html>
<html>
<head>
<title>index</title>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
<script id = "bytecodeScript">
/*
<?php

for($x = 0; $x < count($dna); $x++) {
    if($dna[$x] -> type == "bytecode"){
        echo file_get_contents($dna[$x] -> url)."\n";
    }    
}

?>
*/
</script>
<script id = "topfunctions">
<?php

    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "topfunctions"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
    
?>   
</script>
<script id = "actions">
function doTheThing(localCommand){    
    if(localCommand >= 040 && localCommand <= 0176){
        currentHTML += String.fromCharCode(localCommand);
        currentWord += String.fromCharCode(localCommand);
    }
    if(localCommand >= 0200 && localCommand <= 0277){//shapes 
        if(!(localCommand == 0207 && editMode == false) ){
            drawGlyph(currentTable[localCommand]);    	    
        }
    }
    if(localCommand >= 01000 && localCommand <= 01777){//symbol glyphs
            drawGlyph(currentTable[localCommand]);    	    
    } 
    <?php

            for($x = 0; $x < count($dna); $x++) {
                if($dna[$x] -> name == "actions03xx"){
                    echo file_get_contents($dna[$x] -> url);
                }    
            }
            echo "\n";
            for($x = 0; $x < count($dna); $x++) {
                if($dna[$x] -> name == "actions0xx"){
                    echo file_get_contents($dna[$x] -> url);
                }    
            }
            echo "\n";

        
    ?>    
}
</script>
<script id = "jslibrary">
<?php
    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "jslibrary"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
?>
</script>
</head>
<body>
<div id = "page">
<?php

    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "page"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
    
?>
</div>
<script>
</script>
<script id = "init">
init();
function init(){
<?php
    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "init"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
?>
}
</script>
<script id = "redraw">
redraw();
function redraw(){
<?php
    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "redraw"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
?>
}
</script>
<script id = "pageevents">
<?php
    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "pageevents"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
?>
</script>
<?php
    echo "<style>\n";
    for($x = 0; $x < count($dna); $x++) {
        if($dna[$x] -> name == "style"){
            echo file_get_contents($dna[$x] -> url);
        }    
    }
    echo "</style>\n";
?>
</body>
</html>