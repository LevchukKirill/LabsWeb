<?php
$_SESSION["name"] = $_POST["name"];
$_SESSION["surname"] = $_POST["surname"];
$_SESSION["age"] = $_POST["age"];
if (isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["age"])) {
    echo "Name:  {$_SESSION['name']}<br>";
    echo "Surname:  {$_SESSION['surname']}<br>";
    echo "Age:  {$_SESSION['age']}<br>";
}