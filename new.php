<?php
    include 'function.php';
    include 'settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (isset($_COOKIE['login'])){
            
            $email = $_COOKIE['login'];

    }else{
        header('Location: login.php');
    }
    $single = get_single_by_id_news($_GET['id']);	
?>
<!DOCTYPE html>
<html lang="ru">
  <?php include 'head.php' ?>

  <body>
    <?php include 'header.php'; ?>
    
    <div class="container container-footer">
    <div class="main col-lg-8" style="margin-top:40px">
        <br><br>
        <div class="row text-left">
            <h1><?=$single['zagolovok']; ?></h1>
            <hr>
            <?=($single["text"]);?> 
        </div>
       
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