<?php

    echo "<H3>display arrays</H3>";
    $array1 = array("first", "second", "third");
    echo "echo \$array1 = ";echo $array1;
    echo "</br> var_dump \$array1 = ";var_dump($array1);
    echo "</br> print_r \$array1 = ";print_r($array1);
 
    $array2 = ["forth", "fifth", "sexth"];
    echo "</br> \$array2 = ";var_dump($array2);

    $array3 = array("first" => 1, "second" => 2, "third" => 3);
    echo "</br> \$array3 = ";var_dump($array3);
 
    echo "</br></br></br><H3>array_push</H3>";  
    $array2[] = "7";
    array_push($array2, "8");
    echo "push \$array2 = ";var_dump($array2);

    echo "</br></br></br><H3>array_pop</H3>";
    array_pop($array2);
    echo "pop \$array2 = ";var_dump($array2);

    echo "</br></br></br><H3>array_shift on list </H3>";
    echo "array_shift \$array2 : ".array_shift($array2);
    echo "</br> \$array2 = ";var_dump($array2);

    echo "</br></br></br><H3>array_shift on dictionary</H3>";
    echo "array_shift : \$array3 ".array_shift($array3);
    echo "</br> \$array3 = ";var_dump($array3);

    echo "</br></br></br><H3>array_unshift</H3>";
    echo "array_unshift \$array2 : ".array_unshift($array2, "forth");
    echo "</br> \$array2 = ";var_dump($array2);

    echo "</br></br></br><H3>count</H3>";
    echo "count(\$array1) : ".count($array1);

    echo "</br></br></br><H3>sizeof</H3>";
    echo "sizeof(\$array1) : ".sizeof($array1);

    echo "</br></br></br><H3>pointer on array index</H3>";
    echo "current(\$array1) : ".current($array1);
    echo "</br> next(\$array1) : ".next($array1);
    echo "</br> current(\$array1) : ".current($array1);
    echo "</br> prev(\$array1) : ".prev($array1);
    echo "</br> next(\$array1) : ".next($array1);
    echo "</br> next(\$array1) : ".next($array1);
    echo "</br> next(\$array1) : ".next($array1);
    echo "</br> reset(\$array1) : ".reset($array1);
    echo "</br> prev(\$array1) : ".prev($array1);
    echo "</br> end(\$array1) : ".end($array1);
    echo "</br> key(\$array1) : ".key($array1);

    echo "</br></br></br><H3>array_slice</H3>";
    echo "array_slice(\$array2, 1, 3) = ";var_dump(array_slice($array2, 1, 3));

    echo "</br></br></br><H3>array_search</H3>";
    echo "array_search '7' in \$array2 = ";var_dump(array_search(7, $array2));
    echo "</br> array_search '7' in \$array2 = ";echo array_search(7, $array2);
    echo "</br> array_search '5' in \$array2 = ";var_dump(array_search('5', $array2));
    echo "</br> array_search '5' in \$array2 = ";echo array_search('5', $array2);
    echo "</br> array_search 7 in \$array2 = ";var_dump(array_search(7, $array2));
    echo "</br> array_search 7 in \$array2 = ";var_dump(array_search(7, $array2, true));

    echo "</br></br></br><H3>in_array</H3>";
    echo "in_array '7' in \$array2 = ";var_dump(in_array(7, $array2));
    echo "</br> in_array '7' in \$array2 = ";echo in_array(7, $array2);
    echo "</br> in_array '5' in \$array2 = ";var_dump(in_array('5', $array2));
    echo "</br> in_array '5' in \$array2 = ";echo in_array('5', $array2);
    echo "</br> in_array 7 in \$array2 = ";var_dump(in_array(7, $array2));
    echo "</br> in_array 7 in \$array2 = ";var_dump(in_array(7, $array2, true));

    echo "</br></br></br><H3>add values of an array to vars in a list</H3>";
    $person = array("Mohamad", "25", "Man");
    list($name, $age, $sex, $something) = $person;
    echo " \$person = ";var_dump($person);
    echo "</br> \$person => \$name = ".$name." ..... \$age = ".$age." ..... \$sex = ".$sex." ..... \$something = ".$something;

    echo "</br></br></br><H3>sort</H3>";
    $arraysorting = array(3 => "third", 4 => "forth", 5 => "5", 6 => 6, 7 => true);
    echo " \$arraysorting = ";var_dump($arraysorting);
    echo "</br> sort(\$arraysorting) = ";var_dump(sort($arraysorting));
    echo "</br> \$arraysorting = ";var_dump($arraysorting);

    echo "</br></br></br><H3>asort</H3>";
    $arraysorting = array(3 => "third", 4 => "forth", 5 => "5", 6 => 6, 7 => true);
    echo " \$arraysorting = ";var_dump($arraysorting);
    echo "</br> asort(\$arraysorting) = ";var_dump(asort($arraysorting));
    echo "</br> \$arraysorting = ";var_dump($arraysorting);

    echo "</br></br></br><H3>ksort</H3>";
    $arraysorting = array(3 => "third", 4 => "forth", 5 => "5", 6 => 6, 7 => true);
    echo " \$arraysorting = ";var_dump($arraysorting);
    echo "</br> ksort(\$arraysorting) = ";var_dump(ksort($arraysorting));
    echo "</br> \$arraysorting = ";var_dump($arraysorting);

    echo "</br></br></br><H3>natsort</H3>";
    $arraysorting = array("t1", "t2", "t10");
    echo " \$arraysorting = ";var_dump($arraysorting);
    echo "</br> natsort(\$arraysorting) = ";var_dump(natsort($arraysorting));
    echo "</br> \$arraysorting = ";var_dump($arraysorting);
    echo "</br> asort(\$arraysorting) = ";var_dump(asort($arraysorting));
    echo "</br> \$arraysorting = ";var_dump($arraysorting);


?>