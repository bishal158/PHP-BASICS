<?php
    //PHP String Functions
    /*
    In this chapter we will look at some commonly used functions to manipulate strings. These functions are used to manipulate strings in PHP.
    We will look at the following functions:
        - strlen()
        - substr()
        - substr_count()
        - strpos()
        - strrpos()
        - substr_replace()
        - str_pad()
        - str_repeat()
        - strtolower()
        - strtoupper()
        - trim()
        - substr_compare()
        - rtrim()
        - ltrim()
        - Join()
        - str_split()
        More functions: https://www.w3schools.com/php/php_ref_string.asp
     */
    //strlen() - Return the Length of a String.
    $str1 = "Hello World";
    echo "The length of the string is: ". strlen($str1). "<br>";

    //substr() - Return a substring or part of a string.
    $str2 = "Hello World";
    echo "The first 5 characters of the string are: ". substr($str2, 0, 5);
    //str_word_count() - Count Words in a String.
    $str3 = "Hello World";
    echo "<br>The number of words in the string are: ". str_word_count($str3);

    //substr_count() - Return the number of occurrences of a substring in a string.
    $str4 = "Hello World";
    echo "<br>The number of occurrences of the word 'World' in the string are: ". substr_count($str4, "World");
    //strrev() - Reverse a String.
    $str5 = "Hello World";
    echo "<br>The reverse of the string is: ". strrev($str5);

    //strpos() - Return the position of a substring within a string.
    $str6 = "Hello World";
    echo "<br>The position of the word 'World' in the string is: ". strpos($str6, "World");
    //strrpos() - Return the position of the last occurrence of a substring within a string.
    $str7 = "Hello World";
    echo "<br>The position of the last occurrence of the word 'World' in the string is: ". strrpos($str7, "World");

    //substr_replace() - Replace a substring within a string.
    $str8 = "Hello World";
    echo "<br>The string with the word 'World' replaced is: ". substr_replace($str8, "PHP", 10, 0);
    //strtolower() - Convert the string in lowercase
    $str9 = "Hello World";
    echo "<br>The string in lowercase is: ". strtolower($str9);
    //strtoupper() - Convert the string in uppercase
    $str10 = "Hello World";
    echo "<br>The string in uppercase is: ". strtoupper($str10);