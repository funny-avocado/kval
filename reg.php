<?php
	require 'libs/db.php';
session_start();
	if(isset($_POST['reg'])) {
		$user = R::dispense('users');
		$user->name = $_POST['name'];
		$user->login = $_POST['login'];		
		$user->pas = $_POST['psw'];
		R::store($user)==$name;
		header('Location: anime.php');
	}
?>


<html>
<head>
<title>АниМуха</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="logo2.jpg">
  <style>
  	
  </style>
</head>
<body bgcolor="#000" background="fon1.png">
	

	<header>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!-- анимация слова "пикачу	" -->
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


					<a href="user.php"><img class="content_imguser" src="user2.png"></a>
				</div>
	</header>
<content>
<img class = "ten" src="ten.png">



	
	<div class="content2">
		


<img class="orange1" src="orange.png">
	<div class="container">

    <h1 align="center">Регистрация</h1>
    <p align="center">Заполните, чтобы создать учётную запись</p>


				  <form action="reg.php" method="post">
				    <label for="name"><b>Имя</b></label>
				    <input type="text" placeholder="Введите имя" name="name" required>

				    <label for="login"><b>Логин</b></label>
				    <input type="text" placeholder="Введите почту" name="login" required>

				    <label for="psw"><b>Пароль</b></label>
				    <input type="password" placeholder="Введите пароль" name="psw" required>
				   

				    
				    <button type="submit" name="reg" class="registerbtn"  >Регистрация</button>

				  </form>
  </div>

  <div class="container_signin">
    <p class="yze_akk">Уже есть аккаут? Тогда просто войдите в него! <a href="vxod.php"> <font color= "blue" class = "vouti"><b>Войти</b></font></a>.</p>
  </div>

		
</div>
</content>
	<footer>
		<div class="wrapper">
			<div class="footer">
<a class="content_b"> Мы в социальных сетях!</a>
				<!-- анимация картинок сот.сетей -->
			</div>
				<a href="https://www.instagram.com/funny_avocad0/"><img class="content_img2" src="images/instagram.png">
				<script type="text/javascript">
					$('.content_img2').width(55).hover(function(){
					$(this).stop().animate({width: 70});
					},
					function(){
					$(this).stop().animate({width: 55});
					});
				</script>
				<a href="https://vk.com/funny_avocad0"><img class="content_img3" src="images/Vkontakte.png">
				<script type="text/javascript">
					$('.content_img3').width(55).hover(function(){
					$(this).stop().animate({width: 70});
					},
					function(){
					$(this).stop().animate({width: 55});
					});
				</script>
				<a href="https://www.facebook.com/profile.php?id=100011783825640"><img class="content_img4" src="images/facebook.png">
				<script type="text/javascript">
					$('.content_img4').width(55).hover(function(){
					$(this).stop().animate({width: 70});
					},
					function(){
					$(this).stop().animate({width: 55});
					});
				</script>
				<a href="https://www.pinterest.ru/elenaryzhik2/_saved/"><img class="content_img5" src="images/pinterest.png">
				<script type="text/javascript">
					$('.content_img5').width(55).hover(function(){
					$(this).stop().animate({width: 70});
					},
					function(){
					$(this).stop().animate({width: 55});
					});
				</script>
			</div>

		</div>
	</footer>

</body>
</html>