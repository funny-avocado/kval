<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
</head>
<body>
  <?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'root';    // Имя созданного вами пользователя
    $pas = 'root'; // Установленный вами пароль пользователю
    $db_name = 'users';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pas, $db_name); // Соединяемся с базой

    // Ругаемся, если соединение установить не удалось
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    //Если переменная Name передана
    if (isset($_POST["name"])) {
      //Если это запрос на обновление, то обновляем
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE `anime1` SET `Name` = '{$_POST['Name']}',`rejisor` = '{$_POST['rejisor']}' WHERE `ID`={$_GET['red_id']}");
      } else {
          //Иначе вставляем данные, подставляя их в запрос
          $sql = mysqli_query($link, "INSERT INTO `anime1` (`Name`, `rejisor`) VALUES ('{$_POST['Name']}', '{$_POST['rejisor']}')");
      }

      //Если вставка прошла успешно
      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($link, "DELETE FROM `anime1` WHERE `ID` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p>Товар удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($link, "SELECT `ID`, `Name`, `rejisor` FROM `anime1` WHERE `ID`={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }
  ?>
  <form action="" method="post">
    <table>
      <tr>
        <td>Наименование:</td>
        <td><input type="text" name="Name" value="<?= isset($_GET['red_id']) ? $product['Name'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Цена:</td>
        <td><input type="text" name="rejisor" size="3" value="<?= isset($_GET['red_id']) ? $product['rejisor'] : ''; ?>"> руб.</td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
      </tr>
    </table>
  </form>
  <table border='1'>
    <tr>
      <td>Идентификатор</td>
      <td>Наименование</td>
      <td>Цена</td>
      <td>Удаление</td>
      <td>Редактирование</td>
    </tr>
    <?php
      $sql = mysqli_query($link, 'SELECT `ID`, `Name`, `  ` FROM `anime1`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['ID']}</td>" .
             "<td>{$result['Name']}</td>" .
             "<td>{$result['rejisor']} ₽</td>" .
             "<td><a href='?del_id={$result['ID']}'>Удалить</a></td>" .
             "<td><a href='?red_id={$result['ID']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
  </table>
  <p><a href="?add=new">Добавить новый товар</a></p>
</body>
</html>