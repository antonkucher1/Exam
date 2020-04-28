<?php 
include '../function.php';
include '../settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (!isset($_COOKIE['login'])){
        header('Location: login.php');
    }
    $email = $_COOKIE['login'];
            $query = "SELECT * FROM users WHERE `login` = '$email'";
            if ($result = $db->query($query)) 
            {
            /* выборка данных и помещение их в массив */
                while ($row = $result->fetch_row()) 
                {
                  $uid=$row[0];
                  $email=$row[1];
                }
            }
  	$text=$_POST['text'];
    $time=date('d.m.Y');
    $url = $_SERVER['HTTP_REFERER'];
    $sql = "INSERT INTO `comments` (`user_id`,`user_name`, `text`, `url`, `date`) VALUES ('$uid','$email', '$text', '$url', '$time')";
  	if ($result = $db->query($sql)){
        $last=$_SERVER['HTTP_REFERER'];
  		header("Location: $last");
  	} else {
  		header("Location: ../error.php");
  	}

?>