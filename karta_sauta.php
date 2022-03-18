<html>
<head>
<title>Пикачу</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="pikachu.png">
  <style>
  	a { 
    	text-decoration: none; /* Отменяем подчеркивание у ссылки */
	} 
  </style>
</head>
<body>
	<header>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!-- анимация слова "пикачу	" -->
<div class="logo"><img class="content_imglogo" src="pikachu.png">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
<h1>
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "Пикачу"]'></span>
</h1>
</div>
<script type="text/javascript"> 
	var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() { 
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>



				
				 
				<nav>
					<a class="header_nav_a" href="index.php">Он</a>
					<a class="header_nav_a" href="">Новинки</a>
					<a class="header_nav_a" href="">▢ Поиск</a>
				</nav>
				<div>



					<a href=""><img class="content_imguser" src="user.png"></a>
					<a href=""><img class="content_imgbasket" src="basket.png"></a>
					<a href="karta_sauta.php"><img class="content_imgmap" src="map.png"></a>
				</div>
	</header>
<content>




	<div class="menu">
		<h2 class="content_text1_h2"><a style= "color: #000000"; href="index.php">Одежда</h2>
		<h3 class="content_text2_h3">
		<a style= "color: #000000"; href="kyrtki.php">Куртки</a><br>
		<a style= "color: #000000"; href="tolstovki.php">Толстовки</a><br>
		<a style= "color: #000000"; href="fytbolki.php">Футболки</a><br>
		<a style= "color: #000000"; href="jins.php">Джинсы</a><br>
		<a style= "color: #000000"; href="karta_sauta.php">Карта<font color="#ffffff">.</font>сайта</a>
	</h3>
	</div>
	<div class="content">





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