<?php
/*
 Template name: Landingphoto
*/
?>
<!DOCTYPE html>
<html style="height: 100%;" lang="ru">

<head>
	<title>Landing Linparza</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <?php wp_head(); ?>
</head>
<style>
    @media screen and (min-width: 44.375em) {
	body:not(.custom-background-image):before,
	body:not(.custom-background-image):after {
        background: none;
        background-repeat: no-repeat;
		display: block;
		height: 21px;
		left: 0;
		position: fixed;
		width: 100%;
		z-index: 99;
    }
} 
</style>  
<body style="background: url(https://moovieer.com/wp-content/uploads/fon_1920-1100.png) no-repeat;
    height: 100%;
    background-size: cover;" class="">
<!-- View - 1 Block -->
<section class="view-main-three1">
    <!-- Header -->
<!--    <div class="bg__view-main"></div>-->
		<header class="container header">
			<div class="header__logo">
				<img src="https://moovieer.com/wp-content/uploads/logo.png" alt="logo">
			</div>
<!--            <div class="view__btn_open mob-none"><a href="">Вход в зрительный зал</a></div>-->
			<div class="header__logo">
				<img class="header__left" src="https://moovieer.com/wp-content/uploads/logo_2.png" alt="logo_2">
			</div>
		</header>
    <form class="container view__form-registration1">
<!--         <input type="text" name="" class="view__input" placeholder="Имя">
        <input type="text" name="" class="view__input" placeholder="Фамилия"> -->
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
<!--     <div style="margin-left: auto; margin-right: auto;" class="container view__form-registration view__btn_center">
            <div class="view__btn-center"><button class="make-photo" id="snowContent">Войти</button></div>
            <div class="view__btn-center"><button id="showContent" class="load-photo">Регистрация</button></div>
        </div>
    <div> -->
    <div class="container photo__center">Уважаемый
        коллега! Для участия в мероприятии,
        пожалуйста, загрузите свое фото. Так вы
        сможете оставить себе память об этом дне.</div>
    <div class="container">
            <div class="view__btn-center2" style="margin: 0 auto; margin-bottom: 30px"><button class="make-photo"><a href="https://moovieer.com" >Вход на сайт</a></button></div>
    </div>

        <div id="content" class="content__photo">
        <?php echo do_shortcode( '[gravityform id="1"]' ); ?>
        </div>
        <div id="content1" class="content__photo">
<!--            <div class="load-file-five">Загрузите фотографии до 5шт.</div>-->
            <form id="featured_upload" method="post" action="#" enctype="multipart/form-data">
            <input type="file" name="my_image_upload" id="my_image_upload"/>
<!--             <input type="file" id="selectedFile" /> -->
<!--             <input id="ass" type="button" value="Выбрать файлы..." onclick="document.getElementById('my_image_upload').click();" /> -->
            <input class="view__btn-center" type="hidden" name="post_id" id="post_id" value="55" />
            <?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>
            <input class="view__btn-center" id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Загрузить" />
            <div id="demo" style="font-weight: 300;"></div>
        </form>
            <?php
        // Проверим защиту nonce и что пользователь может редактировать этот пост.
        if ( 
            isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] ) 
            && wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
            //&& current_user_can( 'edit_post', $_POST['post_id'] )
        ) {
            // все ок! Продолжаем.
            // Эти файлы должны быть подключены в лицевой части (фронт-энде).
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            require_once( ABSPATH . 'wp-admin/includes/media.php' );

            // Позволим WordPress перехватить загрузку.
            // не забываем указать атрибут name поля input - 'my_image_upload'
            $attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );

            if ( is_wp_error( $attachment_id ) ) {
                echo "Ошибка загрузки медиафайла.";
            } else {
                echo "<script> window.location.replace('http://moovieer.com/'); </script>";
                echo "Фотография установлена";
                exit;
            }

        } else {
//            echo "Загрузите фотографии до 5шт.";
        }
        ?>
<!--        <style>-->
<!--            button, button[disabled]:hover, button[disabled]:focus, input[type="button"], input[type="button"][disabled]:hover, input[type="button"][disabled]:focus, input[type="reset"], input[type="reset"][disabled]:hover, input[type="reset"][disabled]:focus, input[type="submit"], input[type="submit"][disabled]:hover, input[type="submit"][disabled]:focus {-->
<!--            background: #1a1a1a;-->
<!--            border: 0;-->
<!--            border-radius: 2px;-->
<!--            color: #fff;-->
<!--            font-weight: 700;-->
<!--            letter-spacing: 0.046875em;-->
<!--            line-height: 1;-->
<!--            padding: 0.84375em 0.875em 0.78125em;-->
<!--            text-transform: uppercase;-->
<!--        }-->
<!--        </style>-->
        </div>
	</section>
</body>
<!-- <script>
document.getElementById('miup').onchange = function () {
    document.getElementById("demo").innerHTML = 'Изображения выбраны, нажмите "Загрузить"';//alert('Изображения выбраны, нажмите "Загрузить" '); //+ this.value);
};
</script> -->
<style>
    #ass{
    margin-right: 15px;
    letter-spacing: 1.48px;
    /* line-height: 40.5px; */
    text-transform: inherit !important;
    /* font-weight: 500; */
    font-size: 20px !important;
    font-weight: 300 !important;
    width: 166px !important;
    background-color: #fff !important;
    color: #004f72 !important;
    width: 250px !important;
    }
    .gform_wrapper div.validation_error {
    margin-top: 50px !important;
    color: #ffffff !important;
    font-size: 1em !important;
    font-weight: 700 !important;
    margin-bottom: 25px !important;
    border-top: 2px solid #ffffff !important;
    border-bottom: 2px solid #ffffff !important;
    padding: 16px 0 !important;
    clear: both !important;
    width: 100% !important;
    text-align: center !important;
    }
    .gform_wrapper .validation_message {
    color: #ffffff !important;
    font-weight: 700 !important;
    letter-spacing: normal !important;
    text-align: center !important;
    }
    </style>
<?php wp_footer(); ?>
</html>