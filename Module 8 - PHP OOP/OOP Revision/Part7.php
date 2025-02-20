<?php

// abstract

abstract class Father{

    function print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }
}



class Son extends Father{

}


$SonObj=new Son();
$SonObj->print100();


//$FatherObj=new Father();
//$FatherObj->print100();
