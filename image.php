<?php
header('Content-type: image/png');
$fileId = (int)$_GET['id'];
include '../../images/' . $fileId . '.png'; // не безопасно
//безопасно
//$data = file_get_contents('../../images' . $fileId . '.png');
//echo $data;
