<?php
include 'function.php';
include 'settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (!isset($_COOKIE['login'])){
        header('Location: register.php');
    }        
        $login = $_COOKIE['login'];
    $single = get_single_by_id(intval($_GET['id']));
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Покупка <?=$single['marka']?></title>
</head>
<body>
<h1>Покупка телефона</h1>
<p>Вы уверены что хотите приобрести <?=$single['marka']?> за <?=$single['price']?> рублей?</p>
<a href="countMinus.php?id=<?=$single['id']?>" class="btn">Уверен, купить</a>
</body>
</html>