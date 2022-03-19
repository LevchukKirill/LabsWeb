<?php
//1.a
$regex = "/a..b/";
$matches = 0;
$subject = "ahbb acb aebb aeqb aee adc axa aadf abxc";
preg_match_all($regex, $subject, $matches);
print_r($matches);

//1.b
function cube($matches)
{
    $numb = pow($matches[0], 3);
    return $numb;
}
$pattern = "/[0-9]/";
$subject = 'a1b2c3';
echo "<br>".preg_replace_callback($pattern, 'cube', $subject);
?>