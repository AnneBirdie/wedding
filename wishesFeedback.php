<?php

$dbc = mysqli_connect('localhost', 'root', '', 'wed');

$data = json_decode(file_get_contents('php://input'), true); // convert


$comment_wish = $data['comment_wish'];
$name_wish = $data['name_wish'];

if (!ctype_space($comment_wish) && !ctype_space($name_wish)){
    $query = "INSERT INTO wedding__wishes (comment_wish, name_wish)
         VALUES ('$comment_wish', '$name_wish')";
    $result = mysqli_query($dbc, $query);
}

http_response_code('201');
header('Content-type: application/json');
print json_encode(array('message'=>'Feedback has been sent'));

mysqli_close($dbc);