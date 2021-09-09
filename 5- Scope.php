<?php

    /*  
        PHP Variables Scopes
            local
            global
            static
    */



    /*
    Global and Local Scope
        A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
    */
    $x = 5; // global scope

    function xTest() {
      // using x inside this function will generate an error
      echo "<p>Variable x inside function is: \$x</p>";
    }
    xTest();
    
    echo "<p>Variable x outside function is: $x</p>";


    /*
        A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
    */
    function zTest() {
        $z = 5; // local scope
        echo "<p>Variable z inside function is: $z</p>";
      }
      zTest();
      
      // using z outside the function will generate an error
      echo "<p>Variable z outside function is: $z</p>";



    /*
        PHP The global Keyword
            he global keyword is used to access a global variable from within a function.
    */
    $q = 5;
    $w = 10;
    
    function qwTest() {
      global $q, $w;
      $w = $q + $w;
    }
    
    qwTest();
    echo $w; // outputs 15



    /*
        PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
    */
    $a = 5;
    $s = 10;
    
    function asTest() {
      $GLOBALS['s'] = $GLOBALS['a'] + $GLOBALS['s'];
    }
    
    asTest();
    echo $s; // outputs 15


  
    /*
        PHP The static Keyword
            Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
            Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
    */
    function iTest() {
        static $i = 0;
        echo $i;
        $i++;
      }
      
      iTest();
      iTest();
      iTest();


?>