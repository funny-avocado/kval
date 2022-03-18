<?php
	require 'libs/db.php';
	session_start();
	$id = $_GET['id'];
	'SELECT * FROM `anime1` WHERE `id` = ' . $id . ' '
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
		<img class = "smear_green_manga" src="smear (green)1.png">
					<a class="header_nav_a3" href="index.php">Чат</a>
		<img class = "smear_green_chat" src="smear (green)1.png">
				</nav>
				<div>

<?php echo $_SESSION['user']->name ?>
					<a href="vxod.php"><img class="content_imguser" src="user2.png"></a>

				</div>
	</header>
<content>
<img class = "ten" src="ten.png">



	
	<div class="content">
		
		
		<img class ="smear_video55" src="smear (green)(under video and photo).png">
		<img class= "smear_video13" src="smear(red).png">
		<a class="content_ab" ><img class="content_photo" src="images/4a.jpg"></a>
				<video class = "video" controls="controls" poster="video(ponO).jpg">
					 <source  src="Ponyo Fish on the Cliff.mp4">
				</video>
		<p class="text_name">Рыбка Поньо на утёсе</p>
		<p class="rejisor"> Режисёр:</p>
				<p class="rejisor1">Хаяо Миядзаки</p>
		<p class="strana">Страна:</p>
				<p class="strana1">Япония</p>
		<p class="yea">Год выхода:</p>
				<p class="yea1"> 2008</p>
		<p class="janr">Жанр:</p>
				<p class="janr1"> Мультфильм, приключения, семейный, фэнтези, аниме</p>
		<p class="opicanie">Описание:</p>
				<p class="opicanie1">Маленькая любопытная рыбка Поньо — дочь колдуна и прекрасной морской богини — уплывает из дома, чтобы понаблюдать за жизнью людей. Поньо застревает в банке и оказывается выброшенной на берег. Её подбирает пятилетний Сосукэ. Малыши привязываются друг к другу, и теперь у Поньо только одно желание — стать человеком.</p>




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