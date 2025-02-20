<?php

// Final Keyword


class Father{

   public final function print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }
}



class Son extends Father{

    public function print100(){
        for($i=0;$i<=5;$i++){
            echo "$i <br/>";
        }
    }
}


$SonObj=new Son();
$SonObj->print100();
