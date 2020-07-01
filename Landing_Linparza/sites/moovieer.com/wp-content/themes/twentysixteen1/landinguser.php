<?php
    if(!is_user_logged_in()) {
    wp_redirect( 'https://moovieer.com/authorize/' );
    exit;
    } 
?>
<?php
/*
 Template name: LandingPage12
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Landing Linparza</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <style>

    .swiper-container {
      width: 70%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <?php wp_head(); ?>
</head>

<body class="">
<!-- View - 1 Block -->
<section class="view-main-two">
    <!-- Header -->
    <div class="bg__view-main"></div>
		<header class="header">
			<div class="header__logo">
				<img src="https://moovieer.com/wp-content/uploads/logo.png" alt="logo">
			</div>
<!--            <div class="view__btn_open mob-none"><a href="">Вход в зрительный зал</a></div>-->
			<div class="header__logo logo__center">
				<img class="header__left" src="https://moovieer.com/wp-content/uploads/logo_2.png" alt="logo_2">
			</div>
		</header>
<!--    <form action="" class="view__form-registration">-->
<!--        <input type="text" class="view__input">-->
<!--        <input type="text"class="view__input">-->
<!--        <input type="checkbox" id="politics" onclick="check();" value="" autocomplete="off"/>-->
<!--        Нажимая на кнопку "Отправить заказ", я даю <a href="ссылка на страницу согласия">согласие на обработку персональных данных.</a>-->
<!--    </form>-->
		<h1 class="container view__title">
			2020 – год прорыва в лечении <i>BRCA</i> - ассоциированных опухолей женской репродуктивной системы
		</h1>
		<div class="view__video" id="video">
            <div id="timer_wrap">
                <div id="clock">
                    <div id='day'>
                        <p id='day0'></p>
                        <p id='day1'></p>
                    </div>
                    <div id="razd">
                        :
                    </div>
                    <div id='hour'>
                        <p id='hour0'></p>
                        <p id='hour1'></p>
                    </div>
                    <div id="razd">
                        :
                    </div>
                    <div id='min'>
                        <p id='min0'></p>
                        <p id='min1'></p>
                    </div>
                    <div id="razd">
                        :
                    </div>
                    <div id='sec'>
                        <p id='sec0'></p>
                        <p id='sec1'></p>
                    </div>
                </div>
            </div>
<!-- 		<script src="https://broadcast.comdi.com/player/js/embed.min.js"-->
<!--	data-comdi-event="ehngncnu"></script>-->
		</div>
    <div class="view__video1">
		<div class="view__video-btn">
			<div class="view__btn_open"><a href="">Вход в зрительный зал</a>
                <div class="view__phone1">
                    <div class="view__technical">Телефон технической поддержки</div>
<!--                    <a href="tel:8(800)250-55-29">8 800 250-55-29</a>-->
                    <div class="phone">8-800-250-55-29</div>
                </div></div>
			<div class="view__btn_flex">
				<div class="view__btn1"><button class="make-photo">Сделать фото</button></div>
				<div class="view__btn1"><button class="load-photo">Загрузить фото</button></div>
			</div>
		</div>

    </div>
	</section>
	<!-- Speaker - 2 Block -->
	<section class="speaker">
		<h1 class="speaker__title">СПИКЕРЫ</h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img style="width: 450px;" src="https://moovieer.com/wp-content/uploads/speaker_5.png" alt="Nechushkina"></div>
                <div class="swiper-slide"><img style="width: 450px;" src="https://moovieer.com/wp-content/uploads/speaker_5.png" alt="Nechushkina"></div>
                <div class="swiper-slide"><img style="width: 450px;" src="https://moovieer.com/wp-content/uploads/speaker_5.png" alt="Nechushkina"></div>
                <div class="swiper-slide"><img style="width: 450px;" src="https://moovieer.com/wp-content/uploads/speaker_5.png" alt="Nechushkina"></div>
                <div class="swiper-slide"><img style="width: 450px;" src="https://moovieer.com/wp-content/uploads/speaker_5.png" alt="Nechushkina"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
<!-- 		<div class="speaker__slider">
			<div class="speaker__item">
                <img src="https://moovieer.com/wp-content/uploads/speakers_1_2.png" alt="Nechushkina">
            </div>
            <div class="speaker__item">
                <img src="https://moovieer.com/wp-content/uploads/speakers_3_4.png" alt="Nechushkina">
            </div>
            <div class="speaker__item">
                <img src="https://moovieer.com/wp-content/uploads/speaker_5.png" alt="Nechushkina">
            </div> -->

<!--			<div class="speaker__item">-->
<!--				<img src="https://moovieer.com/wp-content/uploads/Demidova.png" alt="Demidova">-->
<!--				<div class="speaker__text">-->
<!--					<div class="speaker__text-title">Демидова Ирина Анатольевна-->
<!--					</div>-->
<!--					<div class="speaker__text-subtext">К.м.н., заведующая молекулярно-биологической лабораторией-->
<!--						ГБУЗ<br>-->
<!--						«МГОБ 62 ДЗМ», Москва</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="speaker__item">-->
<!--				<img src="https://moovieer.com/wp-content/uploads/Nechushkina.png" alt="Nechushkina">-->
<!--				<div class="speaker__text">-->
<!--					<div class="speaker__text-title">Нечушкина Валентина Михайловна</div>-->
<!--					<div class="speaker__text-subtext">Д.м.н., Заместитель директора Института онкогинекологии и-->
<!--						маммологии-->
<!--						ФГБУ «НМИЦ акушерства, гинекологии-->
<!--						и перинатологии им. В.И. Кулакова Министерства здравоохранения Российской Федерации»</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="speaker__item">-->
<!--				<img src="https://moovieer.com/wp-content/uploads/Demidova.png" alt="Demidova">-->
<!--				<div class="speaker__text">-->
<!--					<div class="speaker__text-title">Демидова Ирина Анатольевна-->
<!--					</div>-->
<!--					<div class="speaker__text-subtext">К.м.н., заведующая молекулярно-биологической лабораторией-->
<!--						ГБУЗ<br>-->
<!--						«МГОБ 62 ДЗМ», Москва</div>-->
<!--				</div>-->
<!--			</div>-->
<!-- 		</div> -->
	</section>

	<!-- Events - 3 Block -->
	<section class="container events hidden">
		<h1 class="events__title">ПОСМОТРЕТЬ ПРОШЕДШИЕ МЕРОПРИЯТИЯ</h1>
		<div class="events__slider">
			<div class="events__item">
				<img src="https://moovieer.com/wp-content/uploads/video_1.png" alt="video_1">
				<div class="events__info">Запись меропрятия 30.06</div>
			</div>
			<div class="events__item">
				<img src="https://moovieer.com/wp-content/uploads/video_2.png" alt="video_2">
				<div class="events__info">Запись меропрятия 7.07</div>
			</div>
			<div class="events__item">
				<img src="https://moovieer.com/wp-content/uploads/video_1.png" alt="video_1">
				<div class="events__info">Запись меропрятия 30.06</div>
			</div>
			<div class="events__item">
				<img src="https://moovieer.com/wp-content/uploads/video_2.png" alt="video_2">
				<div class="events__info">Запись меропрятия 7.07</div>
			</div>
		</div>
	</section>

	<a href="" class="information-connection">Техническая информация по подключению</a>

	<!-- Description - 4 Block -->
	<section class="description">
<!--        <div class="bg__description"></div>-->
		<h1 class="description__title">Линпарза®</h1>
		<div class="container description__about">
			<div class="description__text">– единственный PARP-ингибитор, одобренный
				в России к применению в качестве поддерживающей
				монотерапии ВПЕРВЫЕ выявленного распространенного
				рака яичников с мутацией в генах <i>BRCA</i> 1/2 c ответом
				на ПЕРВУЮ ЛИНИЮ химиотерапии<a  class="description__color1">1</a></div>
			<div class="description__text margin">– первый зарегистрированный в России ингибитор
				PARP, предлагающий альтернативу химиотерапии
				пациентам с метастатическим HER2-негативным
				раком молочной железы с герминальной мутацией
				в генах <i>BRCA</i> 1/2<a class="description__color1">1</a></div>
			<div class="description__instruction">
				<div id="more_info" class="description__color">1.</div> Инструкция по медицинскому применению лекарственного
				препарата Линпарза® (таблетки, покрытые пленочной оболочкой,
				10 и 150 мг). Регистрационное удостоверение ЛП-009941 от 26.11.2019.
				Доступно по <a href="https://grls.rosminzdrav.ru/Grls_View_v2.aspx?routingGuid=ee405ef3-3e04-4869-bc85-7a1e9098d33d&t" class="href__green">ссылке</a>. (дата обращения 07.06.2020).
			</div>
		</div>
	</section>

	<!-- Contacts - 5 Block -->
	<section class="contacts">
		<div class="contacts__block">
			<h1 class="contacts__title">Телефон технической поддержки</h1>
			<div class="contacts__phone">
<!--				<a href="tel:8(495)123-45-67">8 (495) 123-45-67</a>-->
<!--				<a href="tel:8(495)123-45-67">8 (495) 123-45-67</a>-->
                <a href="tel:8(800)250-55-29">8-800-250-55-29</a>
			</div>
			<div class="contacts__text">Материал предназначен для специалистов здравоохранения. Имеются
				противопоказания.<br>
				Перед применением ознакомьтесь, пожалуйста, с полной инструкцией по медицинскому применению
				лекарственного
				препарата, перейдя по ссылке. Если Вам стало известно
				о нежелательной реакции при использовании лекарственного препарата «АстраЗенека», пожалуйста, сообщите
				эту
				информацию в медицинский отдел компании. Вы можете написать
				нам по электронной почте <a href="mailto:Safety.Russia@astrazeneca.com"
					class="href__green">Safety.Russia@astrazeneca.com</a> , заполнить веб-форму<br> <a
					href="https://aereporting.astrazeneca.com"
					class="href__green">https://aereporting.astrazeneca.com</a> или связаться с нами по телефону 8 (495)
				799-56-99, доб.2580 </div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer">
		<div class="footer__img">
			<img src="https://moovieer.com/wp-content/uploads/logo_3.png" alt="logo_3">
		</div>
		<div class="footer__info">ООО «АстраЗенека Фармасьютикалз»<br>
			Россия 123112, Москва, 1-й Красногвардейский проезд, д.21 стр. 1<br>
			Тел.: +7 (495) 799 56 99, факс: +7 (495) 799 56 98<br>
			<a href="www.astrazeneca.ru" class="href__green">www.astrazeneca.ru</a>
		</div>
	</footer>


	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      centeredSlides: true,
      //width: 500,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          //width: 1250,
          slidesPerView: 1,
          spaceBetween: 0,//20,
        },
        768: {
          //width: 1250,
          slidesPerView: 1,
          spaceBetween: 0,//40,
        },
        1250: {
            centeredSlides: false,
          //width: 1250,
          slidesPerView: 2,
          spaceBetween: 25,//50,
        },
      }
    });
  </script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.speaker__slider').slick({
				infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
  				speed: 300,
				prevArrow: '<div class="prev speaker"><img src="https://moovieer.com/wp-content/uploads/arrow_left.png" alt=""></div>',
				nextArrow: '<div class="next speaker"><img src="https://moovieer.com/wp-content/uploads/arrow_right.png" alt=""></div>',
				// slidesToShow: 2,
				// slidesToScroll: 2,
				// responsive: [
				// {
				// 		breakpoint: 3440,
				// 		settings: {
				// 			slidesToShow: 2,
				// 			slidesToScroll: 2
				// 		}
				// 	},
				// {
				// 		breakpoint: 1980,
				// 		settings: {
				// 			slidesToShow: 2,
				// 			slidesToScroll: 2
				// 		}
				// 	},
				// {
				// 		breakpoint: 1440,
				// 		settings: {
				// 			slidesToShow: 1,
				// 			slidesToScroll: 1
				// 		}
				// 	},
				// 	{
				// 		breakpoint: 1024,
				// 		settings: {
				// 			slidesToShow: 1,
				// 			slidesToScroll: 1
				// 		}
				// 	},{
				// 		breakpoint: 480,
				// 		settings: {
				// 			slidesToShow: 2,
				// 			slidesToScroll: 2
				// 		}
				// 	},
				// ]
			});
		});

		$(document).ready(function () {
			$('.events__slider').slick({
				infinite: true,
				// slidesToShow: 2,
				// slidesToScroll: 2,
				prevArrow: '<div class="prev events"><img src="https://moovieer.com/wp-content/uploads/arrow_left.png" alt=""></div>',
				nextArrow: '<div class="next events"><img src="https://moovieer.com/wp-content/uploads/arrow_right.png" alt=""></div>',
				responsive: [
				{
						breakpoint: 3440,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
				{
						breakpoint: 1980,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
				{
						breakpoint: 1440,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
				]
			});
		});

        $(document).ready(function () {
            function get_timer() {
                //в date_new поменять месяц с "July" на свой месяц на английском и с учётом регистра
                //также тут можно поменять число, год и время показа вебинара
                var date_new = "July 1,2012 18:00";
                var date_t = new Date(date_new);
                var date = new Date();
                var timer = date_t - date;
                if(date_t > date) {
                    var day = parseInt(timer/(60*60*1000*24));
                    if(day < 10) {
                        day = '0' + day;
                    }
                    day = day.toString();

                    var hour = parseInt(timer/(60*60*1000))%24;
                    if(hour < 10) {
                        hour = '0' + hour;
                    }
                    hour = hour.toString();

                    var min = parseInt(timer/(1000*60))%60;
                    if(min < 10) {
                        min = '0' + min;
                    }
                    min = min.toString();

                    var sec = parseInt(timer/1000)%60;
                    if(sec < 10) {
                        sec = '0' + sec;
                    }
                    sec = sec.toString();

                    if(day[1] == 9 &&
                        hour[0] == 2 &&
                        hour[1] == 3 &&
                        min[0] == 5 &&
                        min[1] == 9 &&
                        sec[0] == 5 &&
                        sec[1] == 9) {
                        animation($("#day0"),day[0]);
                    }
                    else {
                        $("#day0").html(day[0]);
                    }
                    if(hour[0] == 2 &&
                        hour[1] == 3 &&
                        min[0] == 5 &&
                        min[1] == 9 &&
                        sec[0] == 5 &&
                        sec[1] == 9) {
                        animation($("#day1"),day[1]);
                    }
                    else {
                        $("#day1").html(day[1]);
                    }
                    if(hour[1] == 3 &&
                        min[0] == 5 &&
                        min[1] == 9 &&
                        sec[0] == 5 &&
                        sec[1] == 9) {
                        animation($("#hour0"),hour[0]);
                    }
                    else {
                        $("#hour0").html(hour[0]);
                    }
                    if(min[0] == 5 &&
                        min[1] == 9 &&
                        sec[0] == 5 &&
                        sec[1] == 9) {
                        animation($("#hour1"),hour[1]);
                    }
                    else {
                        $("#hour1").html(hour[1]);
                    }
                    if(min[1] == 9 &&
                        sec[0] == 5 &&
                        sec[1] == 9) {
                        animation($("#min0"),min[0]);
                    }
                    else {
                        $("#min0").html(min[0]);
                    }
                    if(sec[0] == 5 && sec[1] == 9) {
                        animation($("#min1"),min[1]);
                    }
                    else {
                        $("#min1").html(min[1]);
                    }
                    if(sec[1] == 9) {
                        animation($("#sec0"),sec[0]);
                    }
                    else {
                        $("#sec0").html(sec[0]);
                    }
                    animation($("#sec1"),sec[1]);
                    setTimeout(get_timer,1000);
                }
                else {
                    $("#video").html("<script src='https://broadcast.comdi.com/player/js/embed.min.js' data-comdi-event='ehngncnu'/>");
                }

            }
            function animation(vibor,param) {
                vibor.html(param)
                    .css({'marginTop':'-20px','opacity':'0'})
                    .animate({'marginTop':'0px','opacity':'1'});
            }
            get_timer();
        });
	</script>



</body>

<?php wp_footer(); ?>
</html>