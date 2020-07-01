<?php
    if(is_user_logged_in()) {
    wp_redirect( 'https://moovieer.com/' );
    exit;
    } 
?>
<?php
/*
 Template name: LandingAuthor
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head> 
<div id="ex1" class="modal">
    <div class="grid-container">
        <div class="Desc"><b style="text-align: center;">Разрешение на использование изображения гражданина</b> </br></br>

Я, участник мероприятия «2020 – год прорыва в лечении BRCA-ассоциированных опухолей женской репродуктивной системы» (далее также «Пользователь») настоящим даю свое согласие на использование моего фотографического/видео изображения, полученного представителями Организации, с упоминанием моих персональных данных (Ф.И.О.), для следующих целей (как всех одновременно, так и нескольких и любых из них):
- хранение в базе данных Организации, компании «АстраЗенека ЮК Лимитед» (зарегистрированной по адресу: 2 Kingdom Street, London W2 6BD, England/Англия, Лондон, W2 6BD, Кингдом Стрит, 2), а также любых аффилированных с ними компаний;
- при необходимости, размещение на корпоративном сайте и любых информационных/промоционных материалах Организации, компании «АстраЗенека ЮК Лимитед» (зарегистрированной по адресу: 2 Kingdom Street, London W2 6BD, England/Англия, Лондон, W2 6BD, Кингдом Стрит, 2), а также любых аффилированных с ними компаний;
- использование в отношении неограниченного круга лиц в презентациях, выступлениях, докладах, иных публичных выступлениях Организации, компании «АстраЗенека ЮК Лимитед» (зарегистрированной по адресу: 2 Kingdom Street, London W2 6BD, England/Англия, Лондон, W2 6BD, Кингдом Стрит, 2), а также любых аффилированных с ними компаний.

</br></br>
Настоящее разрешение действует со дня его подтверждения до 14.07.2021 г.
        </div>
    <div class="None"></div>
    <div class="Field">Для ООО «АстраЗенека Фармасьютикалз», зарегистрированного по адресу: 123100, город Москва, 1-й Красногвардейский проезд, дом 21, строение 1, этаж 30, комнаты 13 и 14 (далее по тексту – «Организация»)</div>
</div>
</br>
</br>
  <a href="#" rel="modal:close">Закрыть</a>
</div>
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
<section class="view-main-three2">
    <!-- Header -->
<!--    <div class="bg__view"></div>-->
		<header class="container header">
			<div class="header__logo">
				<img src="https://moovieer.com/wp-content/uploads/logo.png" alt="logo">
			</div>
<!--            <div class="view__btn_open mob-none"><a href="">Вход в зрительный зал</a></div>-->
			<div class="header__logo">
				<img class="header__left" src="https://moovieer.com/wp-content/uploads/logo_2.png" alt="logo_2">
			</div>
		</header>
        <div id="regz" style="margin-left: auto; margin-right: auto;" class="container view__form-registration view__btn_center">
            <div class="view__btn-center"><button id="showContent" class="make-photo">Войти</button></div>
            <div class="view__btn-center"><button id="showContent1" class="view__btn-center-href" style="width: inherit;"> Регистрация</button></div>
            <!--            <div class="view__btn-center"><a class="view__btn-center-href" style="width: inherit;" href="/reg2/"> <button type="test" id="rand" class="load-photo">Регистрация</button></a></div>-->
        </div>
    <form style="display:none;" id="username_login" action="" method="post" name="myForm" class="container view__form-registration">
        <input name="" type="text" id="name" class="view__input" onKeyUp="translit()" placeholder="Имя"/>
        <input name="" type="text" id="name2" class="view__input" onKeyUp="translit1()" placeholder="Фамилия"/>
        <input type="hidden" id="frname" name="frname" class="view__input" placeholder="Имя">
        <input type="hidden" id="laname" name="laname" class="view__input" placeholder="Фамилия">
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
        <div class="view__btn_center__reg">
            <div class="view__btn-center1"><button id="btnsbm" type="submit" class="load-photo-reg">Войти</button></div>
        </div>
       <!--  <div style="margin-left: auto; margin-right: auto;" class="container view__form-registration view__btn_center">
            <div class="view__btn-center"><button id="btnjn" type="submit" name="submit" class="make-photo">Войти</button></div> -->
            <!-- <div class="view__btn-center"><button id="btnsbm" type="submit" class="view__btn-center-href" style="width: inherit;"> Регистрация</button></div> -->
            <!--            <div class="view__btn-center"><a class="view__btn-center-href" style="width: inherit;" href="/reg2/"> <button type="test" id="rand" class="load-photo">Регистрация</button></a></div>-->
        <!-- </div> -->
    </form>
    <form style="display:none;" action="" method="post" name="myForm" class="container view__form-registration" id="form">
        <input name="" type="text" id="name3" class="view__input" onKeyUp="translit2()" placeholder="Имя"/>
        <input name="" type="text" id="name4" class="view__input" onKeyUp="translit3()" placeholder="Фамилия"/>
        <input type="hidden" id="frname1" name="frname1" class="view__input" placeholder="Имя">
        <input type="hidden" id="laname1" name="laname1" class="view__input" placeholder="Фамилия">
        <div class="view__checkbox-block frst">
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
                <label for="agreement">Согласен на использование своего изображения в рамках мероприятия. <a href="#ex1" rel="modal:open" class="agreement">Cоглашение</a>
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
        <div class="view__btn_center__reg">
            <div class="view__btn-center1"><button id="btnsbm" type="submit" class="load-photo-reg" disabled >Войти</button></div>
        </div>
    </form>

	</section>

</body>
<script>
function translit() {
    var str = document.getElementById("name").value;
    var space = '-';
    var link = '';
    var transl = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
        'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
        'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
        'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space,
        'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya'
    }
if (str != '')
    str = str.toLowerCase();
 
for (var i = 0; i < str.length; i++){
    if (/[а-яё]/.test(str.charAt(i))){ // заменяем символы на русском
        link += transl[str.charAt(i)];
    } else if (/[a-z0-9]/.test(str.charAt(i))){ // символы на анг. оставляем как есть
        link += str.charAt(i);
    } else {
        if (link.slice(-1) !== space) link += space; // прочие символы заменяем на space
    }
}
    document.getElementById("frname").value = link;
}
</script>
<script>
function translit1() {
    var str = document.getElementById("name2").value;
    var space = '-';
    var link = '';
    var transl = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
        'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
        'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
        'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space,
        'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya'
    }
if (str != '')
    str = str.toLowerCase();
 
for (var i = 0; i < str.length; i++){
    if (/[а-яё]/.test(str.charAt(i))){ // заменяем символы на русском
        link += transl[str.charAt(i)];
    } else if (/[a-z0-9]/.test(str.charAt(i))){ // символы на анг. оставляем как есть
        link += str.charAt(i);
    } else {
        if (link.slice(-1) !== space) link += space; // прочие символы заменяем на space
    }
}
    document.getElementById("laname").value = link;
}
</script>
<script>
function translit2() {
    var str = document.getElementById("name3").value;
    var space = '-';
    var link = '';
    var transl = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
        'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
        'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
        'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space,
        'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya'
    }
if (str != '')
    str = str.toLowerCase();
 
for (var i = 0; i < str.length; i++){
    if (/[а-яё]/.test(str.charAt(i))){ // заменяем символы на русском
        link += transl[str.charAt(i)];
    } else if (/[a-z0-9]/.test(str.charAt(i))){ // символы на анг. оставляем как есть
        link += str.charAt(i);
    } else {
        if (link.slice(-1) !== space) link += space; // прочие символы заменяем на space
    }
}
    document.getElementById("frname1").value = link;
}
</script>
<script>
function translit3() {
    var str = document.getElementById("name4").value;
    var space = '-';
    var link = '';
    var transl = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
        'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
        'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
        'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space,
        'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya'
    }
if (str != '')
    str = str.toLowerCase();
 
for (var i = 0; i < str.length; i++){
    if (/[а-яё]/.test(str.charAt(i))){ // заменяем символы на русском
        link += transl[str.charAt(i)];
    } else if (/[a-z0-9]/.test(str.charAt(i))){ // символы на анг. оставляем как есть
        link += str.charAt(i);
    } else {
        if (link.slice(-1) !== space) link += space; // прочие символы заменяем на space
    }
}
    document.getElementById("laname1").value = link;
}
</script>
<script>
    // specialist.onchange = function(){
    //     var button = document.body.getElementsByClassName('load-photo-reg')[0];
    //     if(button.disabled) button.disabled = false;
    //     else button.disabled = true;
    // };

    jQuery('#specialist').on('change', function(){
        if(jQuery(this).is(':checked')) jQuery('.load-photo-reg').attr('disabled', false);
        else jQuery('.load-photo-reg').attr('disabled', true);
    });

</script>
 <script>
jQuery('#username_login').on('submit',function(e){
    e.preventDefault();
    var data = jQuery(this).serializeArray();
    data.push({ name:'action',value:'username_login' });
    jQuery.ajax({
        url:"<?php echo admin_url('admin-ajax.php'); ?>",
        type: 'POST',
        dataType: 'json',
        data:data,
        error:function(response){
        },    
        success:function(response){ 
            if(response.errorcode == 0){
                alert('Вы авторизованы!')
                location.reload();
            } else{
                alert('Такой пользователь не зарегистрирован, пожалуйста, зарегистрируйтесь');
                location.reload();
            } 
        } 
    });
});
</script>
<script>
let content = document.getElementById("username_login")
let show = document.getElementById("showContent")
let hide = document.getElementById("hideContent")
let reg = document.getElementById("regz")

show.addEventListener("click", () => {
    content.style.display = "block"
    reg.style.display = "none"
})

hide.addEventListener("click", () => {
    content.style.display = "none"
})
</script>  
<script>
let content1 = document.getElementById("form")
let show1 = document.getElementById("showContent1")
let hide1 = document.getElementById("hideContent1")
let reg1 = document.getElementById("regz")

show1.addEventListener("click", () => {
    content1.style.display = "block"
    reg1.style.display = "none"
})

hide1.addEventListener("click", () => {
    content1.style.display = "none"
})
</script>  
<?php //wp_footer(); ?>

</html>