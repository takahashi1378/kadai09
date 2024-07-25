<?php
session_start();

//受け取る
$name = $_SESSION['name'];
$age = $_SESSION['age'];

echo $name . $age;