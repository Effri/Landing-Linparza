<?php
/*
 Template name: LandingAuthor
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Landing Linparza</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <?php wp_head(); ?>
</head>

<body class="">
<!-- View - 1 Block -->
<section class="view-main">
    <!-- Header -->
    <div class="bg__view-main"></div>
		<header class="container header">
			<div class="header__logo">
				<img src="https://moovieer.com/wp-content/uploads/logo.png" alt="logo">
			</div>
<!--            <div class="view__btn_open mob-none"><a href="">Вход в зрительный зал</a></div>-->
			<div class="header__logo">
				<img class="header__left" src="https://moovieer.com/wp-content/uploads/logo_2.png" alt="logo_2">
			</div>
		</header>
    <form class="container view__form-registration">
        <input type="text" name="" class="view__input" placeholder="Имя">
        <input type="text" name="" class="view__input" placeholder="Фамилия">
<!--         <div class="view__checkbox-block">
            <label>Я согласен с обработкой данных, предоставленных мною выше.
                <input type="checkbox" id="processing" onchange="document.getElementById('agreement').disabled = !this.checked;" />
                <span></span>
            </label>
        </div>
         <div class="view__btn_center">
            				<div class="view__btn-center"><button class="make-photo">Сделать фото</button></div>
            				<div class="view__btn-center"><button class="load-photo">Загрузить фото</button></div>
        </div> -->
<!--         <div class="view__checkbox-block second">
                <label>Согласен на использование своего изображения в рамках мероприятия. <a href="" class="agreement">Cоглашение</a>
                    <input type="checkbox" id="agreement" onchange="document.getElementById('specialist').disabled = !this.checked;" />
                    <span></span>
                </label>
        </div>
        <div class="view__checkbox-block first">
            <label>Я подтверждаю, что являюсь специалистом здравоохранения.
                <input type="checkbox" id="specialist" />
                <span></span>
            </label>
        </div> -->
    </form>
    <div style="margin-left: auto; margin-right: auto;" class="container view__form-registration view__btn_center">
            <div class="view__btn-center"><button class="make-photo">Войти</button></div>
            <div class="view__btn-center"><a class="view__btn-center-href" style="width: inherit;" href="/reg2/"> <button type="test" id="rand" class="load-photo">Регистрация</button></a></div>
        </div>
	</section>

</body>
<?php //wp_footer(); ?>

</html>