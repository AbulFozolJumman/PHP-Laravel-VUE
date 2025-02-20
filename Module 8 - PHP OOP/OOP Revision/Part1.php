<?php

// PHP Class & Object - Variable,Function,Variable use 


class person{
    
    public $firstName="OSTAD";
    public $lastName="Limited";

    public function getName1(){
        echo "Hello I am name";
    }
   
    public function getName2(){
        $this->getName1();
    }
    

}

$obj=new person();

$obj->getName1();





