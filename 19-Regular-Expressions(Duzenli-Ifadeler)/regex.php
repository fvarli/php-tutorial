<?php
//preg_match()
//preg_match_all()

$text = 'I like PHP.';
$result = preg_match('/\bphp\b/i', $text);
/*
if($result){
    echo "Yes";
}else{
    echo "No";
}

echo '<br>';
*/
//@^(?:http://)?([^/]+)@i

$url = 'http://www.php.net/index.html';
preg_match('@^(?:http://)?([^/]+)@i', $url,$result);
//print_r($result);


$date = '2020-06-06';
//$pattern = '/(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})/';
//preg_match($pattern, $date,$result);
//print_r($result);

$correct_format = '/^\d{4}-\d{2}-\d{2}$/';

$result = preg_match($correct_format,$date);

if($result){
    echo "correct";
}else{
    echo "not correct";
}
echo '<br>';


$email = 'test@test.com.tr';
$email_pattern = '/^(\w+)@([a-z]+)\.([a-z]{2,})(.[a-z]{2,}|)$/';
/*$result = preg_match($email_pattern, $email);

if($result){
    echo "valid email";
}else{
    echo "invalid email";
}
*/
preg_match($email_pattern, $email, $result);
print_r($result);