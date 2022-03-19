<?php

if (!empty($_POST)) 
{
    $_SESSION = $_POST;
}

if (!empty($_SESSION)) 
{
    echo "<ul>";
    foreach ($_SESSION as $k => $v)
        echo "<li>" . $k . ":  " . $v . "</li>";
    echo "</ul>";
}