<?php
// Static 


class ParentClass{
    public static $num1=100;
    public static $num2=200;
    public static $num3=400;

    static function Syhello(){
        echo "Hello static";
    }
 }
 

ParentClass::Syhello();

