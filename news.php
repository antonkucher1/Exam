<?php
include 'function.php';
include 'settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (isset($_COOKIE['login'])){
            
            $email = $_COOKIE['login'];

    }else{
        header('Location: login.php');
    }      


	// refs count
	
?>
<!DOCTYPE html>
<html lang="ru">
  <?php include 'head.php' ?>

  <body>
    <?php include 'header.php'; ?>
 
    <div class="container container-footer">
        <div class="main col-lg-8">
        <br><br>
        <div class="row text-center">
            <h1>Новости</h1>
            <hr>
        </div>
        <?php 
                    if ($result = $db->query("SELECT * FROM news")) {                        
                        while ($row = $result->fetch_row()) {
                          echo '<div class="zadanie">';
                        echo '<h2>';
                        echo $row[1];
                        echo '</h2>';
                        echo mb_strimwidth($row[2], 0, 90, "..."); 
                        echo '<br>';
                        echo '<br>';
                        echo '<a class="btn" href="new.php?id='.$row[0].'">Перейти</a>';
                        echo '</div>';
                        echo '<br>';
                        }
                    }
                    ?>
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