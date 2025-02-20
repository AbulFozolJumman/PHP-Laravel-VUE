<?php

// Inheritance Overriding

class Father{

   public function addTwoNumber(){
        $num1=10;
        $num2=180;
        echo $num1+$num2;
    }
}



class Son extends Father{


    public function addTwoNumber(){
        $num1=10;
        $num2=160;
        echo $num1+$num2;
    }

}

$SonObj=new Son();
$SonObj->addTwoNumber();


