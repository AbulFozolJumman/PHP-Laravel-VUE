<?php

// Constructors In Inheritance

// Constructor Only Father 

//  Constructor Only Son 

// Constructor in Father & Son

class Father{

    function __construct()
    {
        echo "I am Father Constructor Function";
    }

}


class Son extends Father{
 
    function __construct()
    {
        parent::__construct();

        echo "I am Son Constructor Function";
    }

}

$ObjSon=new Son();