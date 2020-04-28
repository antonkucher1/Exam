<?php
include 'function.php';
include 'settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (!isset($_COOKIE['login'])){
        header('Location: register.php');
    }        
        $login = $_COOKIE['login'];
    $single = get_single_by_id(intval($_GET['id']));
    $count = $single['count']-1;
    $ids=$single['id'];
    $sql = "UPDATE `phones` SET `count`= $count WHERE `id` = $ids";
  	if ($result = $db->query($sql)){
  	} else {
  	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Успешно</title>
</head>
<body>
<h1>Вы успешно зарезервировали телефон. Данные к оплате придут к вам на почту. Оставайтесь на связи.</h1>
<a href="index.php">Вернуться на сайт</a>
</body>
</html>