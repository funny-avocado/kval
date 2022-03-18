<?php
	require 'libs/db.php';session_start();
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
		<img class = "smear_pink_anime" src="smear (green)1.png">
					<a class="header_nav_a2" href="manga.php">Манга</a>
		<img class = "smear_green_manga" src="smear(pink).png">
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
		
		
		<a class="content_a" ><img class="content_photo" src="images/13.jpg"><p class="name" align="center">Убить <br>сталкера</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_a" ><img class="content_photo" src="images/17.jpg"><p class="name" align="center">Нань Хао и <br>Шан Фэн</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		<a class="content_a" ><img class="content_photo" src="images/19.jpg"><p class="name" align="center">19 Дней<br>Однажды</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
			
			<a class="content_a" ><img class="content_photo" src="images/16.jpg"><p class="name" align="center">Изменщик должен<br>умереть</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_a" ><img class="content_photo" src="images/14.jpg"><p class="name" align="center">Красавиц<br>и чудовище</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a href= "prosmotrLybovnogoSoveta.php" class="content_a" ><img class="content_photo" src="images/18.jpg"><p class="name" align="center">Любовный совет от великого <br>герцога из Ада</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_a" ><img class="content_photo" src="images/15.jpg"><p class="name" align="center">Ветролом<br>.</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_a" ><img class="content_photo" src="images/20.jpg"><p class="name" align="center">О моём перерождении<br>в слизь</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_a" ><img class="content_photo" src="images/21.jpg"><p class="name" align="center">Да, я паук,<br>и что с того?</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_aa" ><img class="content_photo" src="images/22.jpg"><p class="name" align="center"> Токийские<br>мстители</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
		
		<a class="content_aa" ><img class="content_photo" src="images/23.jpg"><p class="name" align="center">Ван<br>Пис</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
			<a class="content_aa" ><img class="content_photo" src="images/24.jpg"><p class="name" align="center" >Путь<br>домохояина</p><img class ="smear_video" src="smear (green)(under video and photo).png"></a>
			
	
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