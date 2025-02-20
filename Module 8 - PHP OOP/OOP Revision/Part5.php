<?php
// Parent Keyword


class ParentClass{

   public static $num1=100;
   public static $num2=200;
   public static $num3=400;

   public  $num4=100;
   public  $num5=200;
   public  $num6=700;


}


class ChildClass extends ParentClass{

       

        public function addNumber(){

            $sum=$this->num4+$this->num5+$this->num6;
            echo $sum;
        }

}

$ChildObj=new ChildClass();
$ChildObj->addNumber();