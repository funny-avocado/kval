<?php
	require 'libs/db.php';
	session_start();
?>
<html>
<head>
<title>АниМуха</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="logo2.jpg">
  <style>
  	a {
  			
    	text-decoration: none; /* Отменяем подчеркивание у ссылки */
	} 
  </style>
</head>
<body bgcolor="#000" background="fon1.png">
	

	<header>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!-- анимация слова "пикачу	" -->
<div class="logo">
	<a href="user.php">
<img class="content_imglogo" src="logo2.jpg">
<img class="content_imglogo" src="logo(text).jpg"></a>
</div>


				
				 
				<nav>

					<a class="header_nav_a1" href="anime.php">Аниме</a>
		<img class = "smear_pink_anime" src="smear(pink).png">
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



	
	<div class="content">
		

<?php 
			$db_host='localhost'; // ваш хост
			$db_name='anime'; // ваша бд
			$db_user='root'; // пользователь бд
			$db_pass='root'; // пароль к бд
			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
			$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
			$mysqli->set_charset("utf8mb4"); // задаем кодировку

			$result = $mysqli->query('SELECT * FROM anime1'); // запрос на выборку
			while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
	{
		


        

        echo "<a class='content_a' href='prosmotrAnime(ponO).php?id=" . $row['id'] . " '><img class='content_photo'src='" . $row['photo'] . "' alt='' />";

				echo '<p align="center" class="name">' .$row['name']. '</p>';

        echo "<img class='smear_video'src='" . $row['photo_zad'] . "' alt='' /></a>"; 
	}
?>
		
		<!-- 
			
			<a class="content_a" ><img class="content_photo" src="images/3.jpg"><p class="name" align="center">Клинок рассекающий демонов:<br>Бесконечный поезд</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a href= "prosmotrAnime(ponO).php"class="content_a" ><img class="content_photo" src="images/4a.jpg"><p class="name" align="center">Рыбка Поньо<br>на утёсе</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_a" ><img class="content_photo" src="images/5.jpg"><p class="name" align="center">Ходячий <br>замок</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_a" ><img class="content_photo" src="images/6.jpg"><p class="name" align="center">Унесённая<br>призраками</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_a" ><img class="content_photo" src="images/7.jpg"><p class="name" align="center">Ванпачмен: <br>Путь к становлению героем</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_a" ><img class="content_photo" src="images/8.jpg"><p class="name" align="center">Ди Грэй-мен:<br>Святые</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_aa" ><img class="content_photo" src="images/9.png"><p class="name" align="center"> Мэри и ведьмин<br>цветок</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_aa" ><img class="content_photo" src="images/10.jpg"><p class="name" align="center">Намбака<br>2 сезон</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_aa" ><img class="content_photo" src="images/11.jpg"><p class="name" align="center" >Наруто <br>Уроганные хроники</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>--> 
			
	
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