<?php
/*
 Template name: Landingphoto
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
    <div class="container">
            <div class="view__btn-center" style="margin: 0 auto; margin-bottom: 30px"><button class="make-photo"><a href="https://moovieer.com" >Главная</a></button></div>
    </div>

        <div id="content" class="content__photo">
        <?php echo do_shortcode( '[gravityform id="1"]' ); ?>
        </div>
        <div id="content1" class="content__photo">
            <form id="featured_upload" method="post" action="#" enctype="multipart/form-data">
            <input type="file" name="my_image_upload" id="my_image_upload"  multiple="false" />
            <input type="hidden" name="post_id" id="post_id" value="55" />
            <?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>
            <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Отправить" />
        </form>
            <?php
        // Проверим защиту nonce и что пользователь может редактировать этот пост.
        if ( 
            isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] ) 
            && wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
            && current_user_can( 'edit_post', $_POST['post_id'] )
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
                echo "Медиафайл был успешно загружен!";
            }

        } else {
            echo "Проверка не пройдена. Невозможно загрузить файл.";
        }
        ?>
        <style>
            button, button[disabled]:hover, button[disabled]:focus, input[type="button"], input[type="button"][disabled]:hover, input[type="button"][disabled]:focus, input[type="reset"], input[type="reset"][disabled]:hover, input[type="reset"][disabled]:focus, input[type="submit"], input[type="submit"][disabled]:hover, input[type="submit"][disabled]:focus {
            background: #1a1a1a;
            border: 0;
            border-radius: 2px;
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.046875em;
            line-height: 1;
            padding: 0.84375em 0.875em 0.78125em;
            text-transform: uppercase;
        }
        </style>
        </div>
	</section>
</body>
<?php wp_footer(); ?>

</html>