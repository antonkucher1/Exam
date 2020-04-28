<?php
    include 'settings.php';
    $db = new mysqli('localhost', $login, $pass, $database) or die("Ошибка " . mysqli_error($db));
    if (isset($_COOKIE['login'])){
        $email = $_COOKIE['login'];
    }else{
        header('Location: login.php');
    }
   
?>
<!DOCTYPE html>
<html lang="ru">
  <?php include 'head.php' ?>

  <body>

    <div class="container container-footer">
        <br><br>
        <div class="row text-center">
            <h1 style="color: red;">Ошибка</h1>
            <hr>
        </div>
        Неловко вышло. Возможно это ошибка в базе данных...<span style="color: red">:)</span><br>
        <a href="index.php">Вернуться</a>
        
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