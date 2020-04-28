<?php
    include 'function.php'; 
    include 'settings.php';
    $db = new mysqli('localhost', $login, $pass, $database);
    if (isset($_COOKIE['login'])){
            $email = $_COOKIE['login'];           
    }
    else {    
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
      <?php include 'head.php' ?>
  <body>
    <?php include 'header.php'; ?>

    <div class="container container-footer">
        <br><br>
        <div class="main col-lg-8">
        <div class="row text-center" style="margin-top: 40px">
            <h1>Смартфоны</h1>
            <label for="date">Дата поступления:</label>
            <select id="date">
            <option value="change">Выбрать</option>
            <option value="all">Все</option>
            <?php
              if ($result = $db->query("SELECT * FROM phones")) {        
                                  
                while ($row = $result->fetch_row()) {
                    echo '<option value="'.$row[8].'">'.$row[8].'</option>'; 
                }
            }
            
            ?>
        </select> 
            <hr>
        </div>
        <?php
                        

                        if(isset($_GET['date'])){
                            $dates = $_GET['date'];
                            if ($result = $db->query("SELECT * FROM `phones` WHERE `date` = '$dates'")) {                        
                                while ($row = $result->fetch_row()) {
                                echo '<div class="zadanie">';
                                echo '<h2>';
                                echo $row[1];
                                echo '</h2>';
                                echo 'Цена: ';
                                echo $row[3].' Руб.';
                                echo '<br>';
                                echo '<br>';
                                echo '<a class="btn" href="smartphone.php?id='.$row[0].'">Перейти</a>';
                                echo '</div>';
                                echo '<br>';
                                }
                            }
                        } else {
                            if ($result = $db->query("SELECT * FROM `phones`")) {                        
                                while ($row = $result->fetch_row()) {
                                echo '<div class="zadanie">';
                                echo '<h2>';
                                echo $row[1];
                                echo '</h2>';
                                echo 'Цена: ';
                                echo $row[3].' Руб.';
                                echo '<br>';
                                echo '<br>';
                                echo '<a class="btn" href="smartphone.php?id='.$row[0].'">Перейти</a>';
                                echo '</div>';
                                echo '<br>';
                                }
                            }
                        }
                        
                       
                    
                    ?>
        </div>
            </div><!-- /.container -->
    <?php include 'footer.php' ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/emojione/1.3.0/lib/js/emojione.min.js"></script>
        <script src="./assets/js/script.js"></script>
        <script>
            $( document ).ready(function() {
                $('select').on('change', function() {
                    if (this.value == 'all') {
                        var url = 'http://siter/index.php';
                        window.location.href = url;
                    } else {
                        var url = 'http://siter/index.php';
                        window.location.href = url+ '?date=' + this.value;
                    }
            });
            });
        </script>
  </body>
</html>