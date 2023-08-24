<?php
    // Variable Syntax
    /* PHP is a Loosely Typed Language that means PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
    va
     */
    $First_name = "Mafuj Ahemd";
    $Last_name = "Bishal";
    $Full_name = $First_name.' '.$Last_name;
    echo "This is $Full_name.";
    $number_1 = 24.54;
    $number_2 = 24.455;
    $sum = $number_1 + $number_2;
    echo "The sum of $number_1 and $number_2 is $sum.";
    echo '<br />';
    $difference = $number_1 - $number_2;
    echo "The difference between $number_1 and $number_2 is $difference.";
    echo '<br/>';
    // PHP Variables Scope
    /*
    In PHP, variables can be declared anywhere in the script.
    The scope of a variable is the part of the script where the variable can be referenced/used.
        PHP has three different variable scopes:
            1.local
            2.global
            3.static
     */
    // Local Scope and Global Scope
    /*A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.Example given below:*/
    $x = 10;
    function test()
    {
        $x = 20;
        echo $x;
    }
    test();
    echo '<br/>';
    echo $x;
    /*A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:*/
    function test2()
    {
        $y = 20;
        echo $y;
    }
    test2();
    echo '<br/>';
    //echo $y; // This will give a error...
    //PHP The global Keyword
    /*The global keyword is used to access a global variable from within a function.To do this, use the global keyword before the variables (inside the function):*/
    $z = 10;
    echo $z; // Here 10
    function test3()
    {
        global $z;
        $z = 20; // now 20
        echo $z; // 20
    }
    test3();//20
    echo '<br/>';
    echo $z;//20
    // PHP The static Keyword
    /*
        Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
     */
    $x = 10;
    function test4()
    {
        static $x = 40;
        echo $x;
        $x++;
    }
    test4();//40
    test4();//41
    test4();//42
    echo '<br/>';
    /*Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
    Note: The variable is still local to the function.
    */

