<?php
/**
 * Make a Class Named "MyName", print out your name by calling method and pass by method parameters.
 */

 class MyName{
     function name($fname, $lname){
        printf("My name is %s %s.", $fname, $lname);
     }
 }

$MyName = new MyName();
echo $MyName->name("Md. Shahinul", "Islam");