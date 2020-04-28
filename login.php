<?php 
include 'settings.php';
    $db = new mysqli('localhost', $login, $pass,$database);
  if (isset($_COOKIE['login']))
    {
            header('Location: index.php');
    }
    $login= $_POST["login"];
    $password = md5($_POST["password"]);
    
    
    if (isset($_POST['submit']))
    {
      $query = "SELECT * FROM users WHERE login='$login' and password='$password'";

            if ($result = mysqli_query($db, $query)) 
            {
              $count = mysqli_num_rows($result);
              if($count == 1)
              {
                  while ($row = mysqli_fetch_row($result)) 
                  {
                      setcookie("login",$row[1],time() + 60*60*24*30*12, '/');
                  }
                  header('Location: index.php'); 
              }
            }
            else
              {
                echo '<script>alert("Пользователя не существует или введен неверный пароль");</script>';
              }
   }
       
   
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Exam</title>
  </head>
<body>



      <form class="form-horizontal" method="post">
        <span class="heading">АВТОРИЗАЦИЯ</span>
        <div class="form-group">
          <input type="login" class="form-control" name="login" id="inputEmail" placeholder="Логин">
          <i class="fa fa-user"></i>
        </div>
        <div class="form-group help">
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Пароль">
          <i class="fa fa-lock"></i>
        </div>
        <div class="form-group">
          <div class="main-checkbox">
            <input type="checkbox" value="none" id="checkbox1" name="check"/>
            <label for="checkbox1"></label>
          </div>
          <span class="text">Запомнить</span>
          <button name="submit" type="submit" class="btn btn-default">ВХОД</button>
        </div>
      </form>
 
   
</body>
</html>