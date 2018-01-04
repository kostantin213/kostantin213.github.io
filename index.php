
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Мой сайт</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
	 <meta name="description" content="Портал Метеостанция на дому">
	 <meta name="keywords" content="mysayt, погода, дом ">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="shortcut icon" type="image/x-icon" href="img/iconka.ico">
	 <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
	<div id="wrapper">
		<div id="content">
	<header>
		<div id="logo">
			<a href="//mysayt.com" title="На главную">
				<img src="img/logo.png" title="mysayt.com" alt="mysayt.com">
				<span>mysayt</span>
			</a>
		</div>
		<div id="about">
			<a href="" title="Узнать детальне про рекламу">Реклама</a>
			<a href="" title="Написать нам письмо">Обратная связь</a>
		</div>
		<div id="reg_auth">
			<a href="" title="Войти в кабинет пользователя">
				<div id="btn">
					Войти
				</div>
			</a>
			<a href="" title="Зарегистрироваться на сайте">
				<div id="btn">
					Регестрация
				</div>
			</a>
		</div>
	</header>
	<nav>
		<div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
		<div id="hideMenu">
			<a  href="">IT новости</a>
			<a  href="">Видеокурсы</a>
			<a  href="">Сайты на заказ</a>
			<a  href="">Форум</a>
			<a  href="">IT задачи</a>
		</div>
<div id="search">
	<span>Поиск</span> 
	<i class="fa fa-search" aria-hidden="true"></i>
</div>
		<div id="mobileMenu">
			<a  href="">IT новости</a><br>
			<a  href="">Видеокурсы</a><br>
			<a  href="">Сайты на заказ</a><br>
			<a  href="">Форум</a><br>
			<a  href="">IT задачи</a>
			<hr>
			<a  href="">Регистрация</a>
			<a  href="">Войти</a>
		</div>				
	</nav>

	<div id="main">
		<div id="news">
			<h2 class="heading">Новости СПЭТ</h2>
			<div style="clear: both"><br></div>
			<?php
			for ($i = 0; $i < 6; $i++)
				echo '
			<div class="article">
				<img src=https://scotch.io/wp-content/uploads/2015/08/vuejs-cover.png alt="Test" title="Test">
				<span>Lorem ipsum sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span>
			</div>
			';
			?>
			<a href="" title="Посмотреть больше статей">
				<div id="btn">
					Посмотреть больше
				</div>
			</a>
		</div>
	</div>
	<aside>
		<div id="courses">
			<h2 class="heading">Группа по теме ардуино</h2>
			<div style="clear: both"><br></div>
			<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, height: "400"}, 76241493);
</script>
			<a href="https://vk.com/club_arduino" title="Посмотреть еще">
				<div id="btn">
					Посмотреть еще
				</div>
			</a>
		</div>
	</aside>
	<div style="clear: both"><br></div>
		</div>
		<footer>
			<div id="site_name">
				<span>mysayt</span> - метеоДом!
			</div>
			<div id="clear"></div>
			<div id="footer_menu">
				<a href="" title="Узнать детальнее про рекламу">Реклама</a>
				<a href="" title="Поддержать проект">Поддержать проект</a>
				<a href="" title="Написать письмо">Обратная связь</a>
			</div>
			<div id="rights">
				<a href="">Все права защищены &copy; <?=date ('Y')?></a>
			</div>
			<div id="social">
				<a href="https://vk.com/feed" title="Вк"><i class="fa fa-vk" aria-hidden="true"></i></a>
			</div>
		</footer>
	</div>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$('#menuShow').click(function(){
			if ($('#mobileMenu').is(':visible'))
				$('#mobileMenu').hide();
			else
				$('#mobileMenu').show();	
		});
			$(document).scroll(function(){
				if ($(document).width() > 785){
				if ($(document).scrollTop() > $('header').height() + 10)
					$('nav').addClass('fixed');
				else
					$('nav').removeClass('fixed');	
												}
			});
		window.onresize = function(event){
			$('#mobileMenu').hide();
		};
	</script>

</body>
</html>