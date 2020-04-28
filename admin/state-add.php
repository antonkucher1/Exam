<?php
    include '../function.php'; 
    include '../settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (!isset($_COOKIE['login'])){
        header('Location: login.php');
    }
    $marka = $_POST['marka'];
    $camera = $_POST['camera'];
    $company = $_POST['company'];
    $price = $_POST['price'];
    $text = $_POST['text'];
    $count = $_POST['count'];
    $date = $_POST['date'];

  	$sql = "INSERT INTO `phones` (`marka`, `camera`, `price`, `text`, `company`, `count`, `src`, `date`) VALUES ('$marka', '$camera', '$price', '$text', '$company', '$count', 'none', '$date')";
  	if ($result = $db->query($sql)){
          echo '<script>alert("Успешно");</script>';
          echo '<a href="../index.php">Вернуться</a>';
  	} else {
        echo '<script>alert("Ошибка");</script>';
  	}
	
	 
?>