<?php

// Inheritance

class Father{

   public function addTwoNumber(){
        $num1=10;
        $num2=180;
        echo $num1+$num2;
    }
}



class Son extends Father{



}

$SonObj=new Son();
$SonObj->addTwoNumber();

//$FatherObj=new Father();
//$FatherObj->addTwoNumber();
