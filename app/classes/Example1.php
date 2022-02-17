<?php


namespace App\classes;


abstract class Example1
{
    public $hello = "arif";
    protected $helloOne = "abcd";
    public $helloTwo = "santo";

    public function helloFour()
    {
        echo "hello  four";
    }
    abstract function  helloFive();


}