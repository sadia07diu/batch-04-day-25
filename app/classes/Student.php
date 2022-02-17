<?php


namespace App\classes;

use App\classes\User;
use App\classes\InterfaceClass;
use App\classes\Example;
use App\classes\Example1;
class Student extends Example1  implements InterfaceClass,Example
{
    use Example2;
    protected $country = "bangladesh";
    public function __construct()
    {
        $this->name = "basis";
        $this->city = "Ctg";

    }

    public function manage()
    {
//        echo $this->country;
//        echo $this->index();
//        echo "institute name is $this->name & city is  $this->city" ;
//        echo $this->helloFour();
        echo $this->cr;

    }
    public function one()
    {
       echo "hello one";
    }
    public function two()
    {
        echo "hello two";
    }
    public function  three()
    {
        echo "hello three";
    }
    public function helloFive()
    {
        echo "hello five";
    }


}