<?php

if('POST' === $_SERVER['REQUEST_METHOD']) {
   create($_POST['tAds'],$_POST['category'],$_POST['heading']);
}

function create($type,$category,$name) {
    $file = fopen("./tAds/$type/$category/$name.txt", 'w+');
    if ($type = "Sell"){
    $text = "Seller: " . $_POST['email'] . "  ";
    }
    if ($type = "Buy"){
    $text = "Buyer: " . $_POST['email'] . "  ";
    }
    fwrite($file,$text);
    fwrite($file,$_POST['description']);

    fclose($file);
}