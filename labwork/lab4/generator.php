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

    //$text ="Corned beef drumstick beef tongue. Meatball frankfurter andouille tail, //turkey jowl burgdoggen tri-tip swine shoulder rump ball tip bacon picanha. //Landjaeger swine pancetta jerky tri-tip, pork belly doner sausage t-bone //pork chop burgdoggen pastrami prosciutto. Leberkas spare ribs turkey boudin //jerky meatball strip steak tail, pig ham hock tri-tip brisket sausage ribeye //beef ribs.";
?>
