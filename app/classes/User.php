<?php


namespace App\classes;


class User
{
    protected $name = "BITM";
    protected $city = "Dhaka";

    public function index()
    {
        echo "institute name is $this->name & city is  $this->city" ;
    }

}