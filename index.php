<?php

session_start();


//echo rand(10,100);

//$_SESSION["name"] = "BITM";
//$_SESSION["city"] = "Dhaka";
//$_SESSION["country"] = "Bangladesh";
//$_SESSION["mobile"] = "016457";

require_once "vendor/autoload.php";
use App\Classes\Home;
use App\classes\Student;
$home =new Home();
$home->index();
//$student = new Student();
//$student->manage();