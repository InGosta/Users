<?php
require_once 'connection.php'; 
include 'DelLogs.php';

$link = mysqli_connect($host, $user, '', $database) 
    or die("Ошибка " . mysqli_error($link));
    if(isset($_POST['id'])){

    $id = mysqli_real_escape_string($link, $_POST['id']);

    $query ="DELETE FROM `user` WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}

    mysqli_close($link);
    
   header("Location: ".$_SERVER['HTTP_REFERER']);