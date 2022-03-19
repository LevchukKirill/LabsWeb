<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3 (2_a)</title>
</head> 
<body>
    <form name="textStats" method="POST">
        <label>
            Text:
            <br>
            <textarea name="textBody" rows="10" cols="70"></textarea>
        </label>
        <br>
        <input type="submit" name="button1" value="Enter" />
    </form>
</body>

<?php
if ($_POST['button1']) {
$textBody = $_POST["textBody"];
    if (strlen($textBody) == 0) 
        echo "No words..";   
    else  
        echo "Words: " . str_word_count($textBody) . "<br>Chars: " . strlen($textBody);
}
?>