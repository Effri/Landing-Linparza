<?php
/*
** Template Name: Custom Register Page2
*/
//get_header();
?>
<!-- <div id="container">
    <form method="post" name="myForm">
        Имя <input type="text"  name="frname" />
        Фамилия <input type="text"  name="laname" /> -->
        <!-- User <input type="text"  name="uname" /> -->
        <!-- Почта  <input id="email" type="text" name="uemail" /> -->
<!--         Пароль  <input style="display: none;"type="password"  name="upass" value="linparza2020" />
        <input type="submit" value="Submit" />
    </form>
</div> -->
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
    <form action="" method="post" name="myForm" class="container view__form-registration" id="form">
        <input type="text" name="frname" class="view__input" placeholder="Имя">
        <input type="text" name="laname" class="view__input" placeholder="Фамилия">
        <div class="view__checkbox-block">
            <label for="processing">Я согласен с обработкой данных, предоставленных мною выше.
                <input type="checkbox" id="processing" onchange="document.getElementById('agreement').disabled = !this.checked;" />
<!--                <input type="checkbox" id="processing" />-->
                <span></span>
            </label>
        </div>
<!--         <div class="view__btn_center">
            				<div class="view__btn-center"><button class="make-photo">Сделать фото</button></div>
            				<div class="view__btn-center"><button class="load-photo">Загрузить фото</button></div>
        </div> -->
        <div class="view__checkbox-block second">
                <label for="agreement">Согласен на использование своего изображения в рамках мероприятия. <a href="" class="agreement">Cоглашение</a>
                    <input type="checkbox" id="agreement" onchange="document.getElementById('specialist').disabled = !this.checked;" disabled/>
<!--                    <input type="checkbox" id="agreement" disabled />-->
                    <span></span>
                </label>
        </div>
        <div class="view__checkbox-block first">
            <label for="specialist">Я подтверждаю, что являюсь специалистом здравоохранения.
                <input type="checkbox" id="specialist" onchange="document.getElementById('btnsbm').disabled = !this.checked;" disabled />
                <span></span>
            </label>
        </div>
        <div class="view__btn_center">
            <div class="view__btn-center1"><button id="btnsbm" type="submit" class="load-photo-reg" disabled >Регистрация</button></div>
        </div>
    </form>
	</section>
<script>
    // specialist.onchange = function(){
    //     var button = document.body.getElementsByClassName('load-photo-reg')[0];
    //     if(button.disabled) button.disabled = false;
    //     else button.disabled = true;
    // };

    jQuery('#specialist').on('change', function(){
        if($(this).is(':checked')) $('.load-photo-reg').attr('disabled', false);
        else $('.load-photo-reg').attr('disabled', true);
    });

</script>
</body>

</html>
<?php
get_footer();
?>