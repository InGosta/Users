<?php
header("Content-type: text/html; charset=utf-8");
require_once 'connection.php'; 
include 'AddLogs.php';

if(isset($_POST['family']) && isset($_POST['name']) && isset($_POST['secondName']) && isset($_POST['password']) ){

	$link = mysqli_connect($host, $user, '', $database) 
    or die("Ошибка " . mysqli_error($link));
mysqli_query($link,'SET NAMES utf8');


    $family = htmlentities(mysqli_real_escape_string($link, $_POST['family']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $secondName = htmlentities(mysqli_real_escape_string($link, $_POST['secondName']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));

  
  $query ="INSERT INTO user VALUES ('$family', '$name', '$secondName', '$password', NULL);";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 



      mysqli_close($link);
  }
header("Location: ".$_SERVER['HTTP_REFERER']);