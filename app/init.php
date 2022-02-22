<?php

session_start();

require('class/Courses.php');
require('class/Locomotives.php');
require('class/Workers.php');
require('class/Part.php');

if(!isset($_SESSION["workers"]))
{
    $workers = new Workers();
    $_SESSION["workers"] = serialize($workers);
}
else
{
    $workers = unserialize($_SESSION["workers"]);
}

if(!isset($_SESSION["courses"]))
{
    $courses = new Courses();
    $_SESSION["courses"] = serialize($courses);
}
else
{
    $courses = unserialize($_SESSION["courses"]);
}

if(!isset($_SESSION["locomotives"]))
{
    $locomotives = new Locomotives();
    $_SESSION["locomotives"] = serialize($locomotives);
}
else
{
    $locomotives = unserialize($_SESSION["locomotives"]);
}





?>