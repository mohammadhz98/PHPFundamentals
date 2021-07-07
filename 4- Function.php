<?php

    function funcSimple(){
        echo "hello world!";
    }
    funcSimple();


    function funcWithInput($input){
        echo "Input = ".$input;
    }
    funcWithInput("some text");

    function funcWithReturn($input1, $input2){
        return $input1 + $input2;
    }
    $resault = funcWithReturn(5, 10);
    echo $resault;

?>