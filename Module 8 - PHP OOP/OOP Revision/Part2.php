<?php


/*

// Constrcutor & its parameter 

1. constructor itself a function *
2. auto executed function *
3. constructor function can take param *
4. constructor can't return *
*/



class car{


    public function __construct($a,$b,$c){
        $num1=50;
        $num2=50;
        echo $num1 + $num2+ $a+$b+$c;
    }

}

$obj=new car(10,20,30);



