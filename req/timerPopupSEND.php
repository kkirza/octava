<?php
$jsonPOPUP = file_get_contents('timerPOPUP.json');
$jsonPOPUP_UNDECODE = json_decode($jsonPOPUP, TRUE);
$jsonPOPUP_UNDECODE['headline'] = $_POST["timerPOPUP_headline"];
$jsonPOPUP_UNDECODE['text'] = $_POST["timerPOPUP_text"];
$jsonPOPUP_UNDECODE['img'] = $_FILES['timerPOPUP_img']['name'];
$jsonPOPUP_UNDECODE['time'] = $_POST["timerPOPUP_time"];
$jsonPOPUP_UNDECODE['time2'] = $_POST["timerPOPUP_time2"];
move_uploaded_file($_FILES['timerPOPUP_img']['tmp_name'], 'timerPOPUP_IMG/' .$_FILES['timerPOPUP_img']['name']);
file_put_contents('timerPOPUP.json', json_encode($jsonPOPUP_UNDECODE));
header( 'Location: http://www.oktavamusic.ru/', true, 301 );
?>
