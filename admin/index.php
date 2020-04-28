<?php
    
    include '../function.php'; 
    include '../settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);

    if (!isset($_COOKIE['login'])){
             header('Location: login.php');
    }
	$email = $_COOKIE['login'];
   
?>
<!DOCTYPE html>
<html lang="ru">

  <?php include '../head.php' ?>

<body>
    <?php include '../header.php'; ?>

    <div class="container">
        <br><br>
        <div class="row text-center">
            <h1>Админ-панель</h1>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Добавить смартфон</h3>
                <form class="admin-form" method="post" action="state-add.php">
                    <input type="text" name="marka" placeholder="Марка"><br> <br>
                    <input type="text" name="company" placeholder="Производитель"><br><br>
                    <input type="text" name="camera" placeholder="Камера"><br><br>
                    <input type="text" name="price" placeholder="Цена"><br><br>
                    <textarea name="text"><b>Описание</b> Нужно оформлять в таком стиле! </textarea><br><br>
                    <input type="text" name="count" placeholder="Количество"><br><br>
                    <input type="text" name="date" placeholder="Дата"><br> <br>
                    <input class="btn btn-success" type="submit" name="submit"><br>
                </form>
            </div>
           
        </div>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
