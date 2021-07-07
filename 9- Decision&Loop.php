<?php

    $var1 = rand(1, 6);
    echo "<H3>If</H3>";
    if($var == 6){
        echo "YOU WIN...</br>you rolled a  $var1 ";
    }else if($var == 5){
        echo "IT was close...</br>you rolled a $var1 ";
    }else{
        echo "YOU LOSE...</br>you rolled a  $var1 ";
    }

    $var2 = rand(1, 6);
    $var3 = rand(1, 6); 
    echo "</br></br></br><H3>If</H3>";
    if($var2 == 6 and $var3 == 6){
        echo "YOU ARE THE BEST...</br>you rolled two 6 ";
    }else if($var2 == 6 or $var3 == 6){
        echo "YOU WIN...</br>you rolled a 6 ";
    }else{
        echo "YOU LOSE...</br>you rolled a $var2 and a $var3 ";
    }

    echo "</br></br></br><H3>Switch</H3>";
    $city = "Tehran";
    switch ($city) {
        case 'Tehran':
            echo "Tehran";
            break;
        case "Shiraz":
            echo "Fars";        
        default:
            echo "not famous";
            break;
    }

    echo "</br></br></br><H3>For</H3>";
    for ($i=0; $i < 10; $i++) { 
        echo $i." ";
    }

    echo "</br></br></br><H3>Whlie</H3>";
    while($j <10){
        var_dump($j);
        $j++;
    }

    echo "</br></br></br><H3>Do Whlie</H3>";
    do{
        var_dump($z);
        $z++;
    }while($z <10);
    
    echo "</br></br></br><H3>Foreach</H3>";
    $cities = array("Tehran", "Shiraz", "Mashhad");
    foreach ($cities as $city) {
        echo $city." ";
    }

?>