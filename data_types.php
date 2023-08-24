<?php
    /*
    PHP Data Types Variables can store data of different types, and different data types can do different things.
    PHP supports the following data types:
    1.String
    2.Integer
    3.Float (floating point numbers - also called double)
    4.Boolean
    5.Array
    6.Object
    7.NULL
    8.Resource
     */
    // PHP String
    $str = "Hello World";
    var_dump($str); //var_dump() function returns variable data type....
    // PHP Integer
    $int = 10;
    var_dump($int);
    // PHP Float
    $float = 10.5;
    var_dump($float);
    // PHP Boolean
    $bool = true;
    var_dump($bool);
    // PHP Array
    $arr = array(1, 2, 3, 4, 5);
    var_dump($arr);
    // PHP Object
    $obj = new stdClass();
    var_dump($obj);
    // PHP NULL
    $null = null;
    var_dump($null);
    // PHP Resource
    $res = fopen("php://stdin", "r");
    var_dump($res);
?>
