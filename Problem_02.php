<?php
/**
 * Take a variable named "key", now set the key value by passing setter and print it via getter method.
 */
 class MyName{
     public $key;

     function setValue($value){
        $this->key = $value;
     }

     function getValue(){
        return $this->key;
     }
 }

$MyName = new MyName();
$MyName->setValue("This is value...");
echo $MyName->getValue();