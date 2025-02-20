<?php



// Inheritance Overriding

class Father{

    public function addTwoNumber($a,$b){
         echo $a+$b;
     }
 }
 
 
 
 class Son extends Father{
 
 
    
 }
 
 $SonObj=new Son();
 $SonObj->addTwoNumber(100,500);



 // MD RABBIL HASAN