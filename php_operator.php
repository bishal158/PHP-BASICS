<?php
    /*
    PHP divides the operators in the following groups:

        Arithmetic operators
        Assignment operators
        Comparison operators
        Increment/Decrement operators
        Logical operators
        String operators
        Array operators
        Conditional assignment operators
    */
    //Arithmetic operators:
    echo "Arithmetic operators:";
    echo "<br>";
    $a = 10;
    $b = 20;
    $c = $a + $b;//Addition
    $d = $a - $b;//Subtraction
    $e = $a * $b;//Multiplication
    $f = $a / $b;//Division
    $g = $a % $b;//Modulus
    $h = $a ** $b;//Exponentiation
    echo $c;
    echo '<br>';
    echo $d;
    echo '<br>';
    echo $e;
    echo '<br>';
    echo $f;
    echo '<br>';
    echo $g;
    echo '<br>';
    echo $h;
    echo '<br>';
    //Assignment operators:
    echo "Assignment operators:";
    echo "<br>";
    $i = 10;
    $j = 20;
    $k = $i += $j;
    $l = $i -= $j;
    $m = $i *= $j;
    $n = $i /= $j;
    $o = $i %= $j;
    $p = $i **= $j;
    echo $k;
    echo '<br>';
    echo $l;
    echo '<br>';
    echo $m;
    echo '<br>';
    echo $n;
    echo '<br>';
    echo $o;
    echo '<br>';
    echo $p;
    echo '<br>';
    //Comparison operators:
    echo "Comparison operators:";
    echo "<br>";
    $A = 10;
    $B = 20;
    $C = $A == $B;//Equal
    $D = $A!= $B;//Not equal
    $E = $A > $B;//Greater than
    $F = $A < $B;//Less than
    $G = $A >= $B;//Greater than or equal
    $H = $A <= $B;//Less than or equal
    $I = $A===$B;//Identical
    var_dump($C);
    echo '<br>';
    var_dump($D);
    echo '<br>';
    var_dump($E);
    echo '<br>';
    var_dump($F);
    echo '<br>';
    var_dump($G);
    echo '<br>';
    var_dump($H);
    echo '<br>';
    var_dump($I);
    echo '<br>';
    //Increment/Decrement operators:
    echo "Increment/Decrement operators:";
    echo "<br>";
    $J = 10;
    $K = 20;
    $L = ++$J;//Pre-increment:- Increments $J by one, then returns $J
    $M = --$K;//Pre-decrement:- Decrements $K by one, then returns $K
    $O = $J++;//Post-increment:- Increments $J by one, then returns $J
    $P = $K--;//Post-decrement:- Decrements $K by one, then returns $K
    echo '<br>';
    echo $L;
    echo '<br>';
    echo $M;
    echo '<br>';
    echo $O;
    echo '<br>';
    echo $P;
    echo '<br>';
    //Logical operators:
    echo "Logical operators:";
    echo "<br>";
    $Q = 10;
    $R = 20;
    if ($Q==10 and $R==20) {
        echo "Both conditions are true";
    }
    echo "<br>";
    if ($Q==10 or $R==2) {
        echo "One of the conditions is true";
    }
    echo "<br>";
    if ($Q==1 xor $R==20) {
        echo "True if either Q or R is true, but not both";
    }
    echo "<br>";

    //String operators:
    echo "String operators:";
    echo "<br>";
    $txt1 = "Hello";
    $txt2 = "World";
    $txt3 = "Hello Bishal.";
    $txt4 = "How Are You?";
    $result1 = $txt1. $txt2;
    $txt3 .= $txt4;
    echo $result1;
    echo '<br>';
    echo $txt3;
    echo '<br>';
    //Conditional operators:
    echo "Conditional operators:";
    echo "<br>";
    // if empty($user) = TRUE, set $status = "anonymous"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo("<br>");
    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = (empty($user)) ? "anonymous" : "logged in";