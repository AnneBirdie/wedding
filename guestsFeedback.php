<?php

$dbc = mysqli_connect('localhost', 'root', '', 'wed');

$data = json_decode(file_get_contents('php://input'), true); // convert

$name = $data['name'];
$surname =  $data['surname'];
$registred = $data['registred'];
$checkboxData = $data['checkboxData'];
$comment = $data['comment'];

if (!ctype_space($name) && !ctype_space($surname)){
    $query1 = "INSERT INTO wedding_quests (name_guest, surname_guest, registred, checkboxData, comment)
         VALUES ('$name', '$surname', '$registred', '$comment', '$checkboxData')";
    $result = mysqli_query($dbc, $query1);
}

http_response_code('201');
header('Content-type: application/json');
print json_encode(array('message'=>'Feedback has been sent'));

mysqli_close($dbc);
