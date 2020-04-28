<?php

include '../function.php';
include '../settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
    if (!isset($_COOKIE['email'])){
        header('Location: login.php');
    }
	
?>
<?php 
        $single = get_user_by_id(intval($_GET['id']));
    ?>
<!DOCTYPE html>
<html lang="ru">
  <?php include '../head.php' ?>

  <body>
    <?php include '../header.php'; ?>
    
    <div class="container">
        <br><br>
        <div class="row text-left">
            <h1>Страница пользователя</h1>
            <hr>
             
                <div class="col-lg-4">
                    <img src="../avatars/default.png">
                </div>
              <div class="col-lg-4">
                <table class="profile-table">
               
                <tr>
                    <td>ФИО: </td>
                    <td><?=$single['username']; ?></td>
                </tr>
                 <tr>
                    <td>Email: </td>
                    <td><?=$single['email']; ?></td>
                </tr>
                <tr>
                    <td>Группа: </td>
                    <td><?=$single['n_group']; ?></td>
                </tr>
                <tr>
                    <td>Уровень: </td>
                    <td>
                        <?php 
                        switch ($single['type']) {
                            case '1':
                                echo 'Слабый';
                                break;
                            case '2':
                                echo 'Средний';
                                break;
                            case '3':
                                echo 'Сильный';
                                break;
                            case '4':
                                echo 'Админ';
                                break;
                            default: echo 'Без уровня';
                                break;
                        }
                            


                        ?>  
                    </td>
                </tr>
            </table>
              </div>
            
        </div>
                
        
    </div><!-- /.container -->
    <?php include 'footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>