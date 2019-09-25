<?php
    $numParagraphs = $_POST['paragraphs'];
    $text =$_POST['text'];
    
    $textExplode = explode(' ', $text); //converts to array
    
    print_r($textExplode);
    
    foreach($textExplode as $key => $value) {
        echo "<p>$key Value: $value</p>";
    }
    
    //use implode function, to turn it back into a string
    $textImplode = implode(' ', $textExplode);
    //or output using a foreach loop
    
     for($i = 1; $i < $numParagraphs; $i++){
       // Output a pargraph
        echo"<p>$textImplode</p>";
    }

?>
