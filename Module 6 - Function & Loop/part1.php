<?php

// PHP Strict Mode 
declare(strict_types=1);



// PHP Build In Function 

print_r("Hello");
echo(1+2);
var_dump("Hello");

$string="OSTAD";
$stringLen=strlen($string);
echo $stringLen;




// User defined function
function sum(){
    $num1=10;
    $num2=20;
    echo $num1+$num2;
}
sum();





// Function Params
function sum($x,$y){
    $num1=$x;
    $num2=$y;
    echo $num1+$num2. "<br/>";
}
sum(2,3);
sum(4,5);
sum(100,300);






// Function default or Optional Params
function sum($x,$y=5){
    $num1=$x;
    $num2=$y;
    echo $num1+$num2. "<br/>";
}
sum(2,10);





// Function Params Type Hinting -> int,float,bool,string,array,nullable,
function sum(int $x, int $y){
    $num1=$x;
    $num2=$y;
    echo $num1+$num2. "<br/>";
}
sum(3,5);




// Function  Params Multiple Type Hinting
function sum(int|float|string $age){
    echo $age;
}
sum("4.5");




// Function  Params Null Type Hinting

function sum(?string $age){
    echo $age;
}
sum("4.5");
sum(null);





// Variadic Function 
function WorldCountryList(...$country){
  print_r($country);
}
WorldCountryList("Bangladesh","India","Canada","Thailand","Nepal");







// Anonymous Function
(function (){
    echo "Hello Anonymous";
}
)();









// Function Return - যা রিটার্ন করে তাহার সমান হয়ে যায় - মানে এবং ধরনের 
function addTwoNumber(){
    return 50;
}
echo addTwoNumber()+60;







// Function Return Type -> int,float,bool,void,string,null
function addTwoNumber():bool{
    return false;
}




//Function Multiple Return Type--> Union Return Type 
function demo():int|float|bool|string{
    return 2024;
}




