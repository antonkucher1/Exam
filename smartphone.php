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
<html lang="ru">
  <?php include 'head.php' ?>
  <body>
    <?php include 'header.php'; ?>
    
    <div class="container container-footer">

        <div class="main col-lg-8" style="margin-top: 100px;">
        <div class="row text-left">
        <h1><?=$single['marka']; ?></h1>            
        <i><?=$single['company']; ?></i>
        <hr>
        
        <img src="img/<?=($single["src"]);?>" alt="" style="height: 250px;">
        <br>
        <br>
        <?=($single["text"]);?> 
        </div>
        <div class="row text-left">
            <h3>Все характеристики:</h3>
            <table class="telephone-table">
            <tr>
                <td>Марка</td>
                <td><?=$single['marka']; ?></td>
        
            </tr>
            <tr>
                <td>Производитель</td>
                <td><?=$single['company']; ?></td>
        
            </tr>
            <tr>
                <td>Камера</td>
                <td><?=$single['camera']; ?></td>
        
            </tr>
            <tr>
                <td>Количество на складе</td>
                <td><?=$single['count']; ?></td>
            </tr>
            <tr>
                <td>Цена</td>
                <td><?=$single['price']; ?></td>
                    </tr>
            </table>
        </div>
        <div class="row">
       <a href="buy.php?id=<?=$single['id'];?>" class="btn">Купить</a></div>
       <?php include 'comment/comments.php' ?>
        

        </div>
   </div><!-- /.container -->
    <?php include 'footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/emojione/1.3.0/lib/js/emojione.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>