<?php
require 'libs/db.php';
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
?>
<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script type="text/javascript">
  jQuery(document).ready(function($){  
$('#slow_nav  ul li').hover(
            function () {
                $('ul', this).stop().slideDown(400);
            }, 
            function () {
                $('ul', this).stop().slideUp(400);            
            }
        );
});
</script>



</head>
<body>
  <header>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!-- анимация слова "пикачу " -->
<div class="logo">
<img class="content_imglogo" src="logo2.jpg">
<img class="content_imglogo" src="logo(text).jpg">



        
         
        <nav>

          <a class="header_nav_a1" href="anime.php">Аниме</a>
    <img class = "smear_pink_anime" src="smear (green)1.png">
          <a class="header_nav_a2" href="manga.php">Манга</a>
    <img class = "smear_green_manga" src="smear (green)1.png">
          <a class="header_nav_a3" href="index.php">Чат</a>
    <img class = "smear_green_chat" src="smear (green)1.png">
        </nav>
        <div>


          <a href="exit.php"><p class="user_name"><?php echo $_SESSION['user']->name ?></p></a>
                    
                
          <a href="vxod.php"><img class="content_imguser" src="user2.png"></a>
        </div>
  </header>
<content>
<img class = "ten" src="ten.png">
<content>
  <?php
    $host = 'localhost';  
    $user = 'root';    
    $pass = 'root'; 
    $db_name = 'anime'';   
    $link = mysqli_connect($host, $user, $pass, $db_name); 

    
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    
    if (isset($_POST["name"])) {
      //Если запрос на обновление, то обновляем
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE `anime1` SET `photo` = '{$_POST['photo']}',`name` = '{$_POST['name']}',`price` = '{$_POST['price']}' WHERE `id`={$_GET['red_id']}");
      } else {
          //Иначе вставляем данные
          $sql = mysqli_query($link, "INSERT INTO `anime1` (`photo`,`name`, `price`) VALUES ('{$_POST['photo']}', '{$_POST['name']}', '{$_POST['price']}')");
      }

      
      if ($sql)
        echo '<p>Успешно!</p>';
      } 
    

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($link, "DELETE FROM `anime1` WHERE `id` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p>Товар удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    //Если передана переменная red_id, то надо обновлять данные
    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($link, "SELECT `id`, `photo`, `name`, `price` FROM `anime1` WHERE `id`={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }


  ?>

  <form action="" method="post">
    <table>
    <tr>
        <td>Фото:</td>
        <td><input type="text" name="photo" value="<?= isset($_GET['red_id']) ? $product['photo'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Наименование:</td>
        <td><input type="text" name="name" id="text" value="<?= isset($_GET['red_id']) ? $product['name'] : '';?>" > 
          <input type="button" value="B" id="button" />
          <script type="text/javascript">
          document.getElementById("button").addEventListener('click', function () {
              var text = document.getElementById('text');
              text.value += '<b></b>';
          });
          </script> 

          <input type="button" value="I" id="button1" />
          <script type="text/javascript">
          document.getElementById("button1").addEventListener('click', function () {
              var text = document.getElementById('text');
              text.value += '<i></i>';
          });
          </script> 

          <input type="button" value="U" id="button2" />
          <script type="text/javascript">
          document.getElementById("button2").addEventListener('click', function () {
              var text = document.getElementById('text');
              text.value += '<u></u>';
          });
          </script>

             
      </tr>
      <tr>
        <td>Цена:</td>
        <td><input type="text" name="price" size="3" value="<?= isset($_GET['red_id']) ? $product['price'] : ''; ?>"> руб.</td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
      </tr>
    </table>
  </form>
  <table border='1'>
    <tr>
      <td>Идентификатор</td>
      <td>Фото</td>
      <td>Наименование</td>
      <td>Цена</td>
      <td>Удаление</td>
      <td>Редактирование</td>
    </tr>
    <?php
      $sql = mysqli_query($link, 'SELECT `id`, `photo`,`name`, `price` FROM `anime1`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['id']}</td>" .
             "<td>{$result['photo']}</td>" .
             "<td>{$result['name']}</td>" .
             "<td>{$result['price']} ₽</td>" .
             "<td><a href='?del_id={$result['id']}'>Удалить</a></td>" .
             "<td><a href='?red_id={$result['id']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
  </table>
  <div id="dab">
  <p><a href="?add=new">Добавить новый товар</a></p>
</div>
</content>
  <footer>
    <div class="wrapper">
      <div class="footer">
        <a style= "text decoration: none; color: #ffffff"; ><u>Мы в социальных сетях</u>
          
      </div>
      <div class="content">

        <img class="content_img2" src="images/instagram.png">
        
        <img class="content_img3" src="images/Vkontakte.png">
        
        <img class="content_img4" src="images/facebook.png">
        
        <img class="content_img5" src="images/pinterest.png">
        
          <a class="content_b" style= "text decoration: none; color: #ffffff"> <u>Магазин расположен по адресу:<br> г. Пенза, ул. Московская, 147</a>
          <a class="content_b" style= "text decoration: none; color: #ffffff"> <u>Сделать предворительбный <br>заказ по немеру:</u> +7 (937) 418 19 46</a>
      </div>
    </div>
  </footer>
 

</body>
</html>