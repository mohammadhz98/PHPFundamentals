<?php

    $var1 = 5;
    $var2 = 2;
    
    echo "</br><H3>Relational Operators</H3>";

    echo "</br> 5 == '5' : ";
    var_dump(5 == "5");

    echo "</br> 5 === '5' : ";
    var_dump(5 === "5");

    echo "</br> 5 != '5' : ";
    var_dump(5 != "5");

    echo "</br> 5 !== '5' : ";
    var_dump(5 !== "5");

    echo "</br> 5 < 5 : ";
    var_dump(5 < 5);

    echo "</br> 5 > 5 : ";
    var_dump(5 > 5);

    echo "</br> 5 <= 5 : ";
    var_dump(5 <= 5);

    echo "</br> 5 >= 5 : ";
    var_dump(5 >= 5);

    echo "</br><H3>Arithmetic Operators</H3>";

    echo "</br> + : ";
    echo $var1+$var2;

    echo "</br> - : ";
    echo $var1-$var2;

    echo "</br> * : ";
    echo $var1*$var2;

    echo "</br> / : ";
    echo $var1/$var2;

    echo "</br> % : ";
    echo $var1%$var2;

    echo "</br> \$var1++ : ";
    echo $var1++;
    echo "</br> \$var1 : ".$var1;

    echo "</br> ++\$var1 : ";
    echo ++$var1;

    echo "</br> \$var1 += 2 : ";
    echo $var1 += 2;

    echo "</br> \$var1 -= 4 : ";
    echo $var1 -= 4;

    echo "</br><H3>Logical Operators</H3>";
    echo "</br> true or false : ";var_dump(true or false);
    echo "</br> true and false : ";var_dump(true and false);
    echo "</br> true || false : ";var_dump(true || false);
    echo "</br> true && false : ";var_dump(true && false);

?>