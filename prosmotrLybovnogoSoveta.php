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
		


		<img class= "smear_video13" src="smear(red).png">
		<a class="content_ab" ><img class="content_photo_demon" src="images/18.jpg"></a>
				
<a href ="chenieMangi.php" class="content_glava_pereuti" ><p class="name12" align="center">Начать читать</p></a>
					

		<p class="text_name_demon">Любовный совет от великого герцога из Ада</p>
		<p class="rejisor"> Автор:</p>
				<p class="rejisor12">Unfins</p>
		<p class="strana">Тип:</p>
				<p class="strana12">Западный комикс</p>
		<p class="yea">Год релиза:</p>
				<p class="yea1"> 2018</p>
		<p class="janr">Жанр:</p>
				<p class="janr2"> Комедия, сверхъестественное, романтика, повседневность, ГГ мужчина, демоны, магия, монстры, нежить, брат и сестра, владыка демонов, дружба</p>
		<p class="opicanie12a">Описание:</p>
				<p class="opicanie12">История о любви, дружбе и призвании демона.</p>
			
					<a href ="chenieMangi6.php" class="content_glava" ><p class="name1" align="center">Том 1<br>Глава 6</p></a>
							<a href ="chenieMangi5.php" class="content_glava" ><p class="name1" align="center">Том 1<br>Глава 5</p></a>
					<a href ="chenieMangi4.php" class="content_glava" ><p class="name1" align="center">Том 1<br>Глава 4</p></a>
							<a href ="chenieMangi3.php" class="content_glava" ><p class="name1" align="center">Том 1<br>Глава 3</p></a>
					<a href ="chenieMangi2.php" class="content_glava" ><p class="name1" align="center">Том 1<br>Глава 2</p></a>
							<a href ="chenieMangi.php" class="content_glava" ><p class="name1" align="center">Том 1<br>Глава 1</p></a>
					

	
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