<?php 

    $varString = "a sample teXT for test";
    echo "TEXT: ".$varString."</br>";

    
    echo "</br> substr: ".substr($varString, 3);
    
    echo "</br> strlen: ".strlen($varString);
    
    echo "</br> str_word_count: ".str_word_count($varString);
    
    
    echo "</br> str_replace: ".str_replace("test", "testing", $varString);
    
    echo "</br> trim: \\\\ see page source for difference";
    $varString1 = "     text with whitespace     ";
    echo "</br>..... text: ".$varString1;
    echo "</br>..... trim : ".trim($varString1);
    
    
    echo "</br> strpos: ".strpos($varString, "am");
    echo "</br> strpos: ";
    $an = strpos($varString, "khd");
    var_dump($an);
    
    echo "</br> strstr: ".strstr($varString, "for");
 
    echo "</br> strtolower: ".strtolower($varString);
 
    echo "</br> strtoupper: ".strtoupper($varString);
 
    echo "</br> explode: ";
    $explode = explode(" ", $varString);
    print_r($explode);

    echo "</br> implode: ";
    $implode = implode(" ", $explode);
    print_r($implode);

    echo "</br> strcmp: ".strcmp("equal", "equal");
    echo "</br> strcmp: ".strcmp("equal", "not equal");

    echo "</br> \$varString.' added text' : ".$varString.' added text';

?>