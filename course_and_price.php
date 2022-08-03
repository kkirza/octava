<!doctype html>
<html lang = "en">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport"
        content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
  <link rel = "stylesheet" href = "assets/css/font.css">
  <link rel = "stylesheet" href = "assets/css/style.css">
  <link rel = "stylesheet" href = "assets/css/header.css">
  <link rel = "stylesheet" href = "assets/css/footer.css">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel = "stylesheet" href = "css/adaptive.css">
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="utils.js"></script>
  <script src="ajax.js"></script>
  <title>Document</title>
<body>
<?php require('req/feedBack_popup.php')?>
<?php require_once('header.php')?>


<div class="container__1500__ZK">



<div class="main__card__course">
	<div class="block__in__card__elem__top">
		<div class="block__clock__text__ZK">
			<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M9 0C4.02991 0 0 4.02991 0 9C0 13.9701 4.02991 18 9 18C13.9701 18 18 13.9701 18 9C18 4.02991 13.9701 0 9 0ZM12.5458 11.7663L11.9712 12.5498C11.9587 12.5668 11.943 12.5813 11.9249 12.5922C11.9068 12.6032 11.8867 12.6104 11.8658 12.6136C11.8449 12.6168 11.8236 12.6158 11.803 12.6107C11.7825 12.6056 11.7632 12.5965 11.7462 12.5839L8.42344 10.1612C8.40274 10.1463 8.38591 10.1267 8.37437 10.104C8.36284 10.0812 8.35693 10.0561 8.35714 10.0306V4.5C8.35714 4.41161 8.42946 4.33929 8.51786 4.33929H9.48415C9.57254 4.33929 9.64487 4.41161 9.64487 4.5V9.4721L12.5096 11.5433C12.5819 11.5935 12.598 11.694 12.5458 11.7663Z" fill="#131441"/>
				</svg>
				

			<div class="block__contacts__time Inter-Light black_ZK">с 10:00 до 22:00</div>
		</div>
		<div class="block__clock__text__ZK">
			<svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.00008 0C3.58908 0 8.14446e-05 3.589 8.14446e-05 7.995C-0.0289186 14.44 7.69608 19.784 8.00008 20C8.00008 20 16.0291 14.44 16.0001 8C16.0001 3.589 12.4111 0 8.00008 0ZM8.00008 12C5.79008 12 4.00008 10.21 4.00008 8C4.00008 5.79 5.79008 4 8.00008 4C10.2101 4 12.0001 5.79 12.0001 8C12.0001 10.21 10.2101 12 8.00008 12Z" fill="#131441"/>
				</svg>
				
				

			<div class="block__contacts__geo Inter-Light black_ZK">г. Новосибирск, ул.Серебренниковская, 6/1 цокольный
				этаж, «Октава»</div>
		</div>
	</div>
	<div class="block__in__card__elem__center">
		<div class="container__card__main__course">
			<div class="card__main__title Mont-Heavy black_ZK">Курсы<br class="br_for_tabl"> и цены</div>
			<div class="card__block__form_course">
				<div class="come__to__us Mont-Heavy black_ZK">ПРИХОДИ НА БЕСПЛАТНОЕ ЗАНЯТИЕ</div>
				<form class="sendFORM">
					<div class="course__main__card__ZK">
						<input name=tel required class="inp_txt__ZK_course Mont-Heavy phone-mask" type="tel" placeholder="ТЕЛЕФОН">
						<button class="btn__fdback__ZK_course Mont-Heavy " type="submit popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
					</div>
					<div class="block__for__lbl__chk_course">
						<input required id="card_chk__course_and_price" type="checkbox">
						<label class="card_label_for__chk_course Inter-Light black_ZK" for="card_chk__course_and_price">Я даю согласие на
							обработку персональных данных</label>
					</div>

				</form>
			</div>
		</div>
	</div>
	<div class="note__micro__course__ZK_price">
		<svg width="154" height="142" viewBox="0 0 154 142" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M106.48 12.062L111.203 40.7364C111.377 41.7938 112.206 42.6226 113.264 42.7968L141.938 47.5199C143.613 47.7958 143.613 50.2042 141.938 50.4801L113.264 55.2032C112.206 55.3774 111.377 56.2062 111.203 57.2636L106.48 85.938C106.204 87.613 103.796 87.613 103.52 85.938L98.7968 57.2636C98.6226 56.2062 97.7938 55.3774 96.7364 55.2032L68.062 50.4801C66.387 50.2042 66.387 47.7958 68.062 47.5199L96.7364 42.7968C97.7938 42.6226 98.6226 41.7938 98.7968 40.7364L103.52 12.062C103.796 10.387 106.204 10.387 106.48 12.062Z"
				fill="#FFD43A" stroke="#131441" />
			<path
				d="M23.5069 100.945C23.6005 100.389 24.3995 100.389 24.4931 100.945L26.7821 114.552C26.8887 115.186 27.3877 115.682 28.0225 115.784L41.7993 118.006C42.3598 118.097 42.3598 118.903 41.7993 118.994L28.0225 121.216C27.3877 121.318 26.8887 121.814 26.7821 122.448L24.4931 136.055C24.3995 136.611 23.6005 136.611 23.5069 136.055L21.2179 122.448C21.1113 121.814 20.6123 121.318 19.9775 121.216L6.20075 118.994C5.64024 118.903 5.64023 118.097 6.20075 118.006L19.9775 115.784C20.6123 115.682 21.1113 115.186 21.2179 114.552L23.5069 100.945Z"
				fill="#FFD43A" stroke="#131441" />
		</svg>
	</div>
	<div class="note__micro__course__ZK_2">
		<svg width="501" height="428" viewBox="0 0 501 428" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M464.136 288.559C468.852 280.39 467.999 269.41 462.215 256.439C456.438 243.48 445.783 228.638 431.092 212.848C401.715 181.274 356.281 145.995 301.749 114.511C247.217 83.0268 193.947 61.3189 151.914 51.6649C130.895 46.8372 112.714 45.0306 98.6023 46.5064C84.4772 47.9837 74.5416 52.7343 69.8252 60.9034C65.1088 69.0724 65.9624 80.0522 71.7457 93.0235C77.5233 105.982 88.1783 120.824 102.869 136.614C132.246 168.188 177.681 203.467 232.212 234.951C286.744 266.435 340.014 288.143 382.047 297.797C403.067 302.625 421.247 304.431 435.359 302.956C449.484 301.478 459.419 296.728 464.136 288.559Z"
				stroke="#131441" />
			<path
				d="M429.762 366.759C434.478 358.59 433.625 347.61 427.841 334.639C422.064 321.68 411.409 306.838 396.718 291.049C367.341 259.474 321.906 224.195 267.375 192.711C212.843 161.227 159.573 139.519 117.54 129.865C96.5206 125.037 78.3398 123.231 64.2283 124.707C50.1032 126.184 40.1676 130.934 35.4512 139.104C30.7348 147.273 31.5884 158.252 37.3717 171.224C43.1493 184.183 53.8042 199.024 68.4949 214.814C97.872 246.388 143.307 281.668 197.838 313.152C252.37 344.635 305.64 366.343 347.673 375.997C368.692 380.825 386.873 382.632 400.985 381.156C415.11 379.679 425.045 374.928 429.762 366.759Z"
				stroke="#131441" />
			<path
				d="M267.255 61.4215L259.073 91.8087C258.888 92.497 258.35 93.0346 257.662 93.22L227.274 101.402L257.662 109.583C258.35 109.769 258.888 110.306 259.073 110.995L267.255 141.382L275.436 110.995C275.622 110.306 276.159 109.769 276.848 109.583L307.235 101.402L276.848 93.22C276.159 93.0346 275.622 92.497 275.436 91.8087L267.255 61.4215Z"
				fill="#FFD43A" stroke="#131441" stroke-width="2" />
			<path
				d="M203.288 293.315C203.155 292.822 202.455 292.822 202.322 293.315L197.057 312.869C196.918 313.386 196.515 313.789 195.999 313.928L176.444 319.193C175.951 319.326 175.951 320.026 176.444 320.158L195.999 325.423C196.515 325.562 196.918 325.966 197.057 326.482L202.322 346.036C202.455 346.53 203.155 346.53 203.288 346.036L208.553 326.482C208.692 325.966 209.095 325.562 209.611 325.423L229.166 320.158C229.659 320.026 229.659 319.326 229.166 319.193L209.611 313.928C209.095 313.789 208.692 313.386 208.553 312.869L203.288 293.315Z"
				fill="#FFD43A" stroke="#131441" />
			<path
				d="M398.758 316.412L399.097 317.353L398.758 316.412C399.429 316.171 400.177 316.305 400.723 316.764L400.079 317.529L400.723 316.764L441.173 350.798L423.279 301.055C423.038 300.384 423.172 299.635 423.631 299.09L424.396 299.734L423.631 299.09L457.665 258.639L407.922 276.533C407.251 276.775 406.503 276.641 405.957 276.182L365.507 242.148L383.401 291.891L382.46 292.229L383.401 291.891C383.642 292.561 383.508 293.31 383.049 293.855L349.015 334.306L398.758 316.412Z"
				fill="#FFD43A" stroke="#131441" stroke-width="2" />
		</svg>
</div>
</div>

    <style>
        .singleSubscription{max-width: 1480px; margin-right: 10px; margin-left: 10px; position: relative; margin-top: 150px}
        .singleSubscription__container{margin-left: 10px; margin-right: 10px; display: flex}
        .singleSubscription__headline{font-size: 16px;}
        .singleSubscription__headline__2{margin-left: 117px; font-size: 64px; max-width: 536px}
        .singleSubscriptionIMG{position: absolute; width: 551px; height: 191px; left: 180px; top: 393px}
        .singleSubscriptionIMG_2{display: none}
        .singleSubscriptionIMG_3{display: none}
        .singleSubscription__priceContainer{margin-left: 29px; width: 727px}
        .singleSubscription__block{max-width: 727px;  background: white; border-radius: 10px}
        .singleSubscription__block__bg{background: url("img/singleSubscriptionBG.png"); background-size: cover; background-repeat: no-repeat}
        .singleSubscription__block__mg{margin-top: 15px}
        .singleSubscription__block__blockHeadline{font-size: 24px}
        .singleSubscription__block_container{margin-left: 15px; padding-top: 15px; padding-bottom: 15px}
        .singleSubscription__block__blockSubtitle{ font-size: 16px; margin-top: 0;}
        .singleSubscription__block__priceZone{margin-top: 15px; display: flex;}
        .singleSubscription__block__priceString{display: flex}
        .singleSubscription__block__priceString2{display: flex; margin-top: 0}
        .singleSubscription__block__priceString__headline{font-size: 24px}
        .singleSubscription__block__priceString__number{font-size: 24px; margin-left: 60px}
        .singleSubscription__block__priceString___priceName{font-size: 16px}
        .singleSubscription__block__priceString___price{font-size: 16px; margin-left: 114px}
        .singleSubscription__button{background: #3B32F5; display: flex; justify-content: center; align-items: center; color: white; font-size: 12px; width: 157px; height: 30px; margin-top: 10px; border-radius: 5px}
        .singleSubscription__button:hover{cursor: pointer; background: #6A63FF }
        .singleSubscription__block__priceLeft{padding-right: 65px; border-right: 1px solid #e3e3e3}
        .singleSubscription__block__priceRight{margin-left: 60px}
        .singleSubscription__priceContainer-mobile{display: none}

        @media (max-width: 1500px){
            .singleSubscription__container{display: block}
            .singleSubscription__headline__2{margin-left: 170px; margin-top: 50px}
            .singleSubscriptionIMG{display: none}
            .singleSubscription__priceContainer{margin-left: 170px; margin-top: 50px}
            .singleSubscriptionIMG_2{display: block; position: absolute; top: 30px; left: 420px; width: 450px; height: 155px}
        }
        @media (max-width: 935px){
            .singleSubscription__headline__2{margin-left: 0}
            .singleSubscription__priceContainer{margin-left: 0}
            .singleSubscriptionIMG_2{ left: 220px;}
        }
        @media (max-width: 765px){
            .singleSubscription__block__priceLeft{padding-right: 45px;}
            .singleSubscription__block__priceRight{margin-left: 40px}
            .singleSubscription__priceContainer{width: unset; max-width: 727px}
        }
        @media (max-width: 712px){
            .singleSubscription__block__priceLeft{padding-right: 45px;}
            .singleSubscription__block__priceRight{margin-left: 40px}
            .singleSubscription__priceContainer{width: unset; max-width: 727px}
            .singleSubscription__block__priceString__number{font-size: 24px; margin-left: 40px}
            .singleSubscription__block__priceString___price{font-size: 16px; margin-left: 84px}
            .singleSubscriptionIMG_2{display: none}
        }

        @media (max-width: 670px){
            .singleSubscription__block__priceLeft{padding-right: 5px;}
            .singleSubscription__block__priceRight{margin-left: 8px}
            .singleSubscription__container{margin-left: 5px; margin-right: 5px}
            .singleSubscription__block__priceZone{margin-top: 15px; display: flex;}
        }

        @media (max-width: 670px){
            .singleSubscription__priceContainer-mobile{display: block}
            .singleSubscription__block__priceZone{margin-top: 15px; display: block;}
            .singleSubscriptionIMG_3{display: block; position: absolute; width: 286px; height: 100px; top: 0; left: 50px}
            .singleSubscription__priceContainer{display: none}
            .singleSubscription__headline__2{font-size: 40px;}
            .singleSubscription{margin-left: 5px; margin-right: 5px}
            .singleSubscription__priceContainer-mobile__block{max-width: 350px; padding-top: 5px; padding-bottom: 5px; border-radius: 10px; background: white}
            .singleSubscription__block__bg{background: url("img/singleSubscriptionBG-mobile.png"); background-size: cover; background-repeat: no-repeat}

            .singleSubscription__priceContainer-mobile__block__mg{margin-top: 20px}
            .singleSubscription__priceContainer-mobile{margin-top: 30px}
            .singleSubscription__priceContainer-mobile__headline{max-width: 340px; font-size: 28px; line-height: 120%}
            .singleSubscription__priceContainer-mobile__subtitle{font-size: 14px; line-height: 130%; margin-top: 0}
            .singleSubscription__button{width: 130px; height: 30px; margin-top: 4px}
            .singleSubscription__priceContainer-mobile__content__right-string1{font-size: 30px}
            .singleSubscription__priceContainer-mobile__content__right-string2{font-size: 16px; margin-top: -7px}
            .singleSubscription__priceContainer-mobile__content{display: flex; margin-top: 10px}
            .singleSubscription__priceContainer-mobile__content__headline{font-size: 18px}
            .singleSubscription__priceContainer-mobile__content__right{margin-left: 70px; margin-top: -10px}
        }
    </style>
    <section class="mainContainer_MA darkBlue_MA">
        <div class="singleSubscription">
            <div class="singleSubscription__container">
                <div class="singleSubscription__headline Up-c_MA Mont_Heavy_MA">Тарифы</div>
                <div class="singleSubscription__headline__2 Up-c_MA Mont_Heavy_MA Lh-120_MA">У нас <br>единый абонемент<br> на все Курсы</div>
                <img src="img/singleSubscriptionIMG.svg" class="singleSubscriptionIMG">
                <img src="img/singleSubscriptionIMG_2.svg" class="singleSubscriptionIMG_2">
                <img src="img/singleSubscriptionIMG_3.svg" class="singleSubscriptionIMG_3">

                <div class="singleSubscription__priceContainer">
                    <div class="singleSubscription__block singleSubscription__block__bg">
                        <div class="singleSubscription__block_container">
                            <div class="singleSubscription__block__blockHeadline Up-c_MA  Mont_Heavy_MA" style="color: white">Индивидуальные занятия</div>
                            <div class="singleSubscription__block__blockSubtitle Inter_Light_MA" style="color: white">Самый быстрый результат и занятия в нужном тебе темпе.</div>
                            <div class="singleSubscription__block__priceZone">
                                <div class="singleSubscription__block__priceLeft">
                                    <div class="singleSubscription__block__priceString">
                                        <div class="singleSubscription__block__priceString__headline Up-c_MA Mont_Heavy_MA" style="color: white">8 занятий</div>
                                        <div class="singleSubscription__block__priceString__number Mont_Extra_Light_MA" style="color: white">6.790 ₽</div>
                                    </div>
                                    <div class="singleSubscription__block__priceString2">
                                        <div class="singleSubscription__block__priceString___priceName Inter_Light_MA" style="color: white">цена 1 занятия</div>
                                        <div class="singleSubscription__block__priceString___price Inter_Light_MA" style="color: white">849 ₽</div>
                                    </div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__block__priceRight">
                                    <div class="singleSubscription__block__priceString">
                                        <div class="singleSubscription__block__priceString__headline Up-c_MA Mont_Heavy_MA" style="color: white">4 занятия</div>
                                        <div class="singleSubscription__block__priceString__number Mont_Extra_Light_MA" style="color: white">3.590 ₽</div>
                                    </div>
                                    <div class="singleSubscription__block__priceString2">
                                        <div class="singleSubscription__block__priceString___priceName Inter_Light_MA" style="color: white">цена 1 занятия</div>
                                        <div class="singleSubscription__block__priceString___price Inter_Light_MA" style="color: white">898 ₽</div>
                                    </div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="singleSubscription__block singleSubscription__block__mg">
                        <div class="singleSubscription__block_container">
                            <div class="singleSubscription__block__blockHeadline Up-c_MA  Mont_Heavy_MA" style="color: black">Группа из 2 человек</div>
                            <div class="singleSubscription__block__blockSubtitle Inter_Light_MA" style="color: black">Для тех, кто хочет заниматься с другом.</div>
                            <div class="singleSubscription__block__priceZone">
                                <div class="singleSubscription__block__priceLeft">
                                    <div class="singleSubscription__block__priceString">
                                        <div class="singleSubscription__block__priceString__headline Up-c_MA Mont_Heavy_MA" style="color: black">8 занятий</div>
                                        <div class="singleSubscription__block__priceString__number Mont_Extra_Light_MA" style="color: black">5.990 ₽</div>
                                    </div>
                                    <div class="singleSubscription__block__priceString2">
                                        <div class="singleSubscription__block__priceString___priceName Inter_Light_MA" style="color: black">цена 1 занятия</div>
                                        <div class="singleSubscription__block__priceString___price Inter_Light_MA" style="color: black">749 ₽</div>
                                    </div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__block__priceRight">
                                    <div class="singleSubscription__block__priceString">
                                        <div class="singleSubscription__block__priceString__headline Up-c_MA Mont_Heavy_MA" style="color: black">4 занятия</div>
                                        <div class="singleSubscription__block__priceString__number Mont_Extra_Light_MA" style="color: black">3.190 ₽</div>
                                    </div>
                                    <div class="singleSubscription__block__priceString2">
                                        <div class="singleSubscription__block__priceString___priceName Inter_Light_MA" style="color: black">цена 1 занятия</div>
                                        <div class="singleSubscription__block__priceString___price Inter_Light_MA" style="color: black">798 ₽</div>
                                    </div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="singleSubscription__block singleSubscription__block__mg">
                        <div class="singleSubscription__block_container">
                            <div class="singleSubscription__block__blockHeadline Up-c_MA  Mont_Heavy_MA" style="color: black">Группа из 5 человек</div>
                            <div class="singleSubscription__block__blockSubtitle Inter_Light_MA" style="color: black">Самая выгодная цена для тех, кто хочет найти компанию в школе <br>и заниматься вместе.</div>
                            <div class="singleSubscription__block__priceZone">
                                <div class="singleSubscription__block__priceLeft">
                                    <div class="singleSubscription__block__priceString">
                                        <div class="singleSubscription__block__priceString__headline Up-c_MA Mont_Heavy_MA" style="color: black">8 занятий</div>
                                        <div class="singleSubscription__block__priceString__number Mont_Extra_Light_MA" style="color: black">5.090 ₽</div>
                                    </div>
                                    <div class="singleSubscription__block__priceString2">
                                        <div class="singleSubscription__block__priceString___priceName Inter_Light_MA" style="color: black">цена 1 занятия</div>
                                        <div class="singleSubscription__block__priceString___price Inter_Light_MA" style="color: black">636 ₽</div>
                                    </div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__block__priceRight">
                                    <div class="singleSubscription__block__priceString">
                                        <div class="singleSubscription__block__priceString__headline Up-c_MA Mont_Heavy_MA" style="color: black">4 занятия</div>
                                        <div class="singleSubscription__block__priceString__number Mont_Extra_Light_MA" style="color: black">2.690 ₽</div>
                                    </div>
                                    <div class="singleSubscription__block__priceString2">
                                        <div class="singleSubscription__block__priceString___priceName Inter_Light_MA" style="color: black">цена 1 занятия</div>
                                        <div class="singleSubscription__block__priceString___price Inter_Light_MA" style="color: black">673 ₽</div>
                                    </div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="singleSubscription__priceContainer-mobile">
                    <div class="singleSubscription__priceContainer-mobile__block singleSubscription__block__bg" style="color: white">
                        <div style="margin-left: 5px">
                            <div class="singleSubscription__priceContainer-mobile__headline Up-c_MA Mont_Heavy_MA">Индивидуальные занятия</div>
                            <div class="singleSubscription__priceContainer-mobile__subtitle Inter_Light_MA">Самый быстрый результат и занятия <br>в нужном тебе темпе.</div>
                            <div class="singleSubscription__priceContainer-mobile__content" style="border-bottom: 1px solid #e0e0e0; padding-bottom: 10px">
                                <div class="singleSubscription__priceContainer-mobile__content__left">
                                    <div class="singleSubscription__priceContainer-mobile__content__headline Up-c_MA Mont_Heavy_MA">8 занятий</div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__priceContainer-mobile__content__right">
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string1 Mont_Extra_Light_MA">6.790 ₽</div>
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string2 Inter_Light_MA">848 ₽ <span style="font-size: 10px">цена 1 занятия</span></div>
                                </div>
                            </div>
                            <div class="singleSubscription__priceContainer-mobile__content">
                                <div class="singleSubscription__priceContainer-mobile__content__left">
                                    <div class="singleSubscription__priceContainer-mobile__content__headline Up-c_MA Mont_Heavy_MA">8 занятий</div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__priceContainer-mobile__content__right">
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string1 Mont_Extra_Light_MA">3.590 ₽</div>
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string2 Inter_Light_MA">898 ₽ <span style="font-size: 10px">цена 1 занятия</span></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="singleSubscription__priceContainer-mobile__block singleSubscription__priceContainer-mobile__block__mg" style="color: #131441">
                        <div style="margin-left: 5px">
                            <div class="singleSubscription__priceContainer-mobile__headline Up-c_MA Mont_Heavy_MA">Индивидуальные занятия</div>
                            <div class="singleSubscription__priceContainer-mobile__subtitle Inter_Light_MA">Самый быстрый результат и занятия <br>в нужном тебе темпе.</div>
                            <div class="singleSubscription__priceContainer-mobile__content" style="border-bottom: 1px solid #e0e0e0; padding-bottom: 10px">
                                <div class="singleSubscription__priceContainer-mobile__content__left">
                                    <div class="singleSubscription__priceContainer-mobile__content__headline Up-c_MA Mont_Heavy_MA">8 занятий</div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__priceContainer-mobile__content__right">
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string1 Mont_Extra_Light_MA">5.990 ₽</div>
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string2 Inter_Light_MA">748 ₽ <span style="font-size: 10px">цена 1 занятия</span></div>
                                </div>
                            </div>
                            <div class="singleSubscription__priceContainer-mobile__content">
                                <div class="singleSubscription__priceContainer-mobile__content__left">
                                    <div class="singleSubscription__priceContainer-mobile__content__headline Up-c_MA Mont_Heavy_MA">8 занятий</div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__priceContainer-mobile__content__right">
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string1 Mont_Extra_Light_MA">3.190 ₽</div>
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string2 Inter_Light_MA">798 ₽ <span style="font-size: 10px">цена 1 занятия</span></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="singleSubscription__priceContainer-mobile__block singleSubscription__priceContainer-mobile__block__mg" style="color: #131441">
                        <div style="margin-left: 5px">
                            <div class="singleSubscription__priceContainer-mobile__headline Up-c_MA Mont_Heavy_MA">Индивидуальные занятия</div>
                            <div class="singleSubscription__priceContainer-mobile__subtitle Inter_Light_MA">Самый быстрый результат и занятия <br>в нужном тебе темпе.</div>
                            <div class="singleSubscription__priceContainer-mobile__content" style="border-bottom: 1px solid #e0e0e0; padding-bottom: 10px">
                                <div class="singleSubscription__priceContainer-mobile__content__left">
                                    <div class="singleSubscription__priceContainer-mobile__content__headline Up-c_MA Mont_Heavy_MA">8 занятий</div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__priceContainer-mobile__content__right">
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string1 Mont_Extra_Light_MA">5.090 ₽</div>
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string2 Inter_Light_MA">636 ₽ <span style="font-size: 10px">цена 1 занятия</span></div>
                                </div>
                            </div>
                            <div class="singleSubscription__priceContainer-mobile__content">
                                <div class="singleSubscription__priceContainer-mobile__content__left">
                                    <div class="singleSubscription__priceContainer-mobile__content__headline Up-c_MA Mont_Heavy_MA">8 занятий</div>
                                    <div class="singleSubscription__button Up-c_MA Mont_Heavy_MA popupActive-button popupActive-button">Оставить заявку</div>
                                </div>
                                <div class="singleSubscription__priceContainer-mobile__content__right">
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string1 Mont_Extra_Light_MA">2.690 ₽</div>
                                    <div class="singleSubscription__priceContainer-mobile__content__right-string2 Inter_Light_MA">673 ₽ <span style="font-size: 10px">цена 1 занятия</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="container__marg flex_course_ZK">
    <div class="course__main__subtitle Mont-Heavy">КУРСЫ</div>
      <div class ="container__course__desk" >
        <div class="course__block__services">
          <img src = "assets/img/course_vocal.png">
          <div class="course_block_text">
            <p class="course__title">ВОКАЛ</p>
            <p class="course__description">Помогаем ученикам расслабиться, сделать их
                                           голос сильнее, стать более уверенными в себе и полюбить выступления...</p>
            <a  class="course__more" href = "vocal.php">ПОДРОБНЕЕ ></a>
          </div>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>

        <div class="course__block__services">
          <img src = "assets/img/course_acus.png">
          <div class="course_block_text">
            <p class="course__title">АКУСТИЧЕСКАЯ ГИТАРА</p>
            <p class="course__description">Тут ты отвлечешься от рутины, научиться
                                           «с ходу» играть любимые песни и и быть уверенным в любой компании, когда просят сыграть на гитаре...</p>
            <a  class="course__more" href = "acoustiс_guitar.php">ПОДРОБНЕЕ ></a>
          </div>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>

        <div class="course__block__services">
          <img src = "assets/img/course_electro.png">
          <div class="course_block_text">
            <p class="course__title">ЭЛЕКТРОГИТАРА</p>
            <p class="course__description">На занятиях по электрогитаре ты
                                           научишься играть яркие сольные партии и риффы из твоих любимых песен...</p>
            <a  class="course__more" href = "electro_guitar.php">ПОДРОБНЕЕ ></a>
          </div>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>

        <div class="course__block__services">
          <img src = "assets/img/course_baraban.png">
          <div class="course_block_text">
            <p class="course__title">БАРАБАНЫ</p>
            <p class="course__description">На занятиях по барабанам ты получишь такие
                                           эмоции, которые не получишь больше нигде в жизни. Это энергия, эмоции и удовольствие...</p>
            <a  class="course__more" href = "baraban.php">ПОДРОБНЕЕ ></a>
          </div>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>

        <div class="course__block__services">
          <img src = "assets/img/course_key.png">
          <div class="course_block_text">
            <p class="course__title">КЛАВИШНЫЕ</p>
            <p class="course__description">Тут ты сможешь отдохнуть эмоционально
                                           и научиться самостоятельно играть любые песни, подыгрывать себе во время пения и писать музыку...</p>
            <a  class="course__more" href = "pianino.php">ПОДРОБНЕЕ ></a>
          </div>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>

        <div class="course__block__services">
          <img src = "assets/img/course_bass.png">
          <div class="course_block_text">
            <p class="course__title">БАС-ГИТАРА
            <p class="course__description">Бархатный звук бас-гитары завораживает.
                                           Она задает ритм и делает звук в любой композиции более плотным и объемным...</p>
            <a  class="course__more" href = "bas_guitar.php">ПОДРОБНЕЕ ></a>
          </div>
          <a  class="course__more_420" href = "bas_guitar.php">ПОДРОБНЕЕ ></a>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>

        <div class="course__block__services last_elem_ZK">
          <img src = "assets/img/course_extreme.png">
          <div class="course_block_text">
            <p class="course__title">ЭКСТРИМ-ВОКАЛ</p>
            <p class="course__description">Грани вокальных возможностей и
                                           уникальная манера исполнения, выплеск чувств через агрессивное звучание...</p>
            <a  class="course__more" href = "extreme_vocal.php">ПОДРОБНЕЕ ></a>
          </div>
          <a  class="course__more_420" href = "extreme_vocal.php">ПОДРОБНЕЕ ></a>
          <div class="course__btns_block">
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </div>
        </div>
      </div>
      <div class ="container__course__mobl" >
        <div class="card_vocal_mobl" id="card_vocal_mobl"  flg="">
          <div class="block__title__course">
            <p class="course_text__title">ВОКАЛ</p>
            <p class ="course__toggle__btn flg" onclick="GetCardInf('card_vocal_mobl')"></p>
          </div>

          <div class="course__block__services">
            <img src = "assets/img/course_vocal.png">
            <div class="course_block_text">
              <p class="course__title">ВОКАЛ</p>
              <p class="course__description">Помогаем ученикам расслабиться, сделать их
                                             голос сильнее, стать более уверенными в себе и полюбить выступления...</p>
              <a  class="course__more" href = "vocal.php">ПОДРОБНЕЕ ></a>
            </div>
          </div>
          <a  class="course__more_420" href = "vocal.php">ПОДРОБНЕЕ ></a>
          <div class="course__btns_block">
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
          </div>
          <div class="course__block__services last_elem_ZK">
            <img src = "assets/img/course_extreme.png">
            <div class="course_block_text">
              <p class="course__title ">ЭКСТРИМ-ВОКАЛ</p>
              <p class="course__description">Грани вокальных возможностей и
                                             уникальная манера исполнения, выплеск чувств через агрессивное звучание...</p>
              <a  class="course__more" href = "extreme_vocal.php">ПОДРОБНЕЕ ></a>
            </div>
          </div>
          <a  class="course__more_420" href = "extreme_vocal.php">ПОДРОБНЕЕ ></a>
          <div class="course__btns_block">
            <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
            <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
          </div>
        </div>


        <div class ="container__course__mobl" >
          <div class="card_gitar_mobl" id="card_gitar_mobl"  flg="">
            <div class="block__title__course">
              <p class="course_text__title">ГИТАРА</p>
              <p class ="course__toggle__btn flg" onclick="GetCardInf('card_gitar_mobl')"></p>
            </div>

            <div class="course__block__services">
              <img src = "assets/img/course_acus.png">
              <div class="course_block_text">
                <p class="course__title">АКУСТИЧЕСКАЯ ГИТАРА</p>
                <p class="course__description">Тут ты отвлечешься от рутины, научиться «с ходу» играть любимые
                                               песни и и быть уверенным в любой компании, когда просят сыграть на гитаре...</p>
                <a  class="course__more" href = "acoustiс_guitar.php">ПОДРОБНЕЕ ></a>
              </div>
            </div>
            <a  class="course__more_420" href = "acoustiс_guitar.php">ПОДРОБНЕЕ ></a>
            <div class="course__btns_block">
              <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
              <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            </div>

            <div class="course__block__services">
              <img src = "assets/img/course_electro.png">
              <div class="course_block_text">
                <p class="course__title">ЭЛЕКТРОГИТАРА</p>
                <p class="course__description">На занятиях по электрогитаре ты научишься играть яркие сольные партии и риффы из твоих любимых песен...</p>
                <a  class="course__more" href = "electro_guitar.php">ПОДРОБНЕЕ ></a>
              </div>
            </div>
            <a  class="course__more_420" href = "electro_guitar.php">ПОДРОБНЕЕ ></a>
            <div class="course__btns_block">
              <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
              <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            </div>

            <div class="course__block__services">
              <img src = "assets/img/course_bass.png">
              <div class="course_block_text">
                <p class="course__title">БАС-ГИТАРА</p>
                <p class="course__description">Бархатный звук бас-гитары завораживает. Она задает ритм и делает
                                               звук в любой композиции более плотным и объемным...</p>
                <a  class="course__more" href = "bas_guitar.php">ПОДРОБНЕЕ ></a>
              </div>
            </div>
            <a  class="course__more_420" href = "bas_guitar.php">ПОДРОБНЕЕ ></a>
            <div class="course__btns_block">
              <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
              <button class="btn__course__teacher"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            </div>
          </div>


          <div class="course__block__services_card">
            <div class="cont_card_white">
              <img src = "assets/img/course_baraban.png">
              <div class="course_block_text__card">
                <p class="course__title__card">БАРАБАНЫ</p>
                <p class="course__description__card">Помогаем ученикам расслабиться, сделать их голос сильнее, стать более уверенными
                                                     в себе и полюбить выступления...</p>
                <a  class="course__more__card" href = "baraban.php">ПОДРОБНЕЕ ></a>
              </div>
            </div>
            <a  class="course__more__card_420" href = "baraban.php">ПОДРОБНЕЕ ></a>
            <div class="course__btns_block">
              <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
              <button class="btn__course__teacher__card"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>

            </div>
          </div>
          <div class="course__block__services_card">
            <div class="cont_card_white">
              <img src = "assets/img/course_key.png">
              <div class="course_block_text__card">
                <p class="course__title__card">КЛАВИШНЫЕ</p>
                <p class="course__description__card">Помогаем ученикам расслабиться, сделать их голос сильнее, стать
                                                     более уверенными в себе и полюбить выступления...</p>
                <a  class="course__more__card" href = "pianino.php">ПОДРОБНЕЕ ></a>
              </div>
            </div>
            <a  class="course__more__card_420" href = "pianino.php">ПОДРОБНЕЕ ></a>
            <div class="course__btns_block">
              <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
              <button class="btn__course__teacher__card"  onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
            </div>
          </div>
        </div>
</div>
</div>

    <style>
        .course__where__pass__lesson__flex{ display: flex; align-items: start; justify-content: space-between;}
        .course__where__pass__lesson__container{ margin: 100px 10px 100px 10px;}

        .course__text__wpl__main__title{margin-bottom: 50px;font-size: 64px; line-height: 120%; text-transform: uppercase; color: #000000;}
        .course__wpl__title{ margin-bottom: 15px;font-weight: 900; font-size: 24px; line-height: 120%; text-transform: uppercase; color: #000000;}
        .course__wpl__two__obj__flex{ margin-bottom: 100px; line-height: 130%; color: #000000; font-weight: 300; font-size: 16px;    display: flex; align-items: start; justify-content: space-between;}
        .course__wpl__obj__left, .course__wpl__obj__right{max-width: 230px; font-family: "Inter_light_MA"}
        .course__wpl__contacts__container{width: fit-content; padding: 20px; background-color: white; border-radius: 20px;}
        .course__wpl__contacts__title{ max-width:495px;
            width: 100%;  margin-bottom: 10px;font-size: 39px; line-height: 120%; text-transform: uppercase; color: #131441;}
        .course__wpl__contacts__description{margin-bottom: 30px;font-weight: 300;font-size: 16px;line-height: 130%;color: #131441;}
        .course__wpl__right{ width: fit-content;  display: grid;}
        .course__wpl__right img:not(:last-child){   margin-bottom: 30px;}
        .course__wpl__right img{ border-radius: 20px; max-width: 725px;
            width: 100%; }
        .course__wpl__left{max-width: 535px; margin-left: 200px;
            margin-right: 30px;}
        .course__wpl__right__img__3{
            max-height:320px ;}
        .course__wpl__left__write__there{ margin-bottom: 5px; font-size: 24px; line-height: 120%; text-transform: uppercase; color: #000000;}
        .course__wpl__obj__right span {font-weight: bold}
        .course__wpl__block__mess{ display: flex; align-items: center; gap: 15px;}
        .course__wpl__block__mess svg path{transition: fill .3s ease}
        .course__wpl__block__mess svg path:hover{fill: #3B32F5; cursor: pointer; transition: fill .3s ease}
        @media (max-width: 1100px){
            .course__wpl__right{max-width: 535px;
                margin-left: 200px;}
            .course__where__pass__lesson__flex{
                display: block;}
            .course__wpl__left{   margin-bottom: 50px;}
        }
        @media (max-width: 997px) {
            .course__wpl__left,.course__wpl__right{ margin-left: 10px;  margin-right: 10px;}
            .course__wpl__right{max-width: 100%; }
            .course__wpl__two__obj__flex{ margin-bottom: 50px;}
        }

        @media (max-width: 552px){
            .course__wpl__right img{border-radius: 10px;}
            .course__wpl__right{  margin-right: 0;    margin-left: 0;}
            .course__where__pass__lesson__container{ margin-top: 50px;   margin-left: 5px;   margin-right: 5px;}
            .course__wpl__contacts__title {font-size: 28px;}
            .br__course__wpl__1{ display: none;}
            .course__wpl__block__mess svg { width: 42px; height: 42px;    }
            .course__wpl__left__write__there{font-size: 18px; line-height: 120%;}
            .course__text__wpl__main__title{font-size: 40px; line-height: 120%;}
            .course__wpl__title{font-size: 18px; line-height: 120%;}
            .course__wpl__two__obj__flex{ margin-bottom: 30px; font-size: 14px; line-height: 130%;}
            .course__wpl__obj__left, .course__wpl__obj__right{max-width: 160px;}
            .course__wpl__contacts__container{ border-radius: 10px;
                padding: 15px 5px;}
            .course__wpl__contacts__description{font-size: 14px; margin-bottom: 20px;}
            .course__wpl__left{  margin-left: 0px;  margin-right: 0px;  margin-bottom: 30px;}
            .course__text__wpl__main__title , .course__wpl__title , .course__wpl__two__obj__flex{
                margin-left: 5px;
                margin-right: 5px;}
        }
    </style>
    <div class="course__where__pass__lesson__container">
        <div class = "course__where__pass__lesson__flex">
            <div class = "course__wpl__left">
                <div class = "course__text__wpl__main__title Mont-Heavy">ГДЕ ПРОХОДЯТ <br>ЗАНЯТИЯ?</div>
                <div class="course__wpl__title Mont-Heavy">У НАС ЕСТЬ 6 РАЗНЫХ КЛАССОВ ДЛЯ ЗАНЯТИЙ.</div>
                <div class = "course__wpl__two__obj__flex">
                    <div class = "course__wpl__obj__left">В каждом из них есть <br>все необходимое <br>оборудование, хорошая звукоизоляция и уютная атмосфера.</div>
                    <div class="course__wpl__obj__right">Если не получается между занятиями тренироваться <br>дома, то можно <span>бесплатно заниматься в любом <br>из свободных классов.</span></div>
                </div>
                <div class = "course__wpl__contacts__container">
                    <div class = "course__wpl__contacts__title Mont-Heavy">ХОЧЕШЬ НА <br class="br__course__wpl__1">ОНЛАЙН-ЭКСКУРСИЮ?</div>
                    <div class = "course__wpl__contacts__description Inter-Light">Напиши нам в личные сообщения, и мы проведем тебе онлайн-экскурсию по школе</div>
                    <div class = "course__wpl__left__write__there Mont-Heavy">НАПИШИ НАМ ТУТ</div>
                    <div class = "course__wpl__block__mess">
                        <a href = "#">
                            <svg  class = "course__wpl__vk" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4999 0.94043C10.5925 0.94043 0.939941 10.593 0.939941 22.5004C0.939941 34.4078 10.5925 44.0604 22.4999 44.0604C34.4073 44.0604 44.0599 34.4078 44.0599 22.5004C44.0599 10.593 34.4073 0.94043 22.4999 0.94043ZM30.7916 25.265C30.7916 25.265 32.6983 27.1471 33.1676 28.0207C33.1811 28.0387 33.1879 28.0566 33.1924 28.0656C33.3832 28.3868 33.4282 28.636 33.3338 28.8224C33.1766 29.1324 32.6376 29.2851 32.4535 29.2986H29.0847C28.8512 29.2986 28.3616 29.2379 27.7687 28.8292C27.3128 28.5103 26.8636 27.987 26.4257 27.4772C25.7721 26.7181 25.2062 26.0623 24.6357 26.0623C24.5633 26.0622 24.4913 26.0736 24.4224 26.096C23.9912 26.2352 23.4387 26.8506 23.4387 28.4901C23.4387 29.0021 23.0344 29.2963 22.7492 29.2963H21.2063C20.6808 29.2963 17.9431 29.1122 15.5176 26.5542C12.5487 23.4212 9.87611 17.1374 9.85365 17.079C9.68522 16.6725 10.0333 16.4546 10.4129 16.4546H13.8153C14.269 16.4546 14.4172 16.7309 14.5205 16.9757C14.6418 17.2609 15.0864 18.395 15.8163 19.6707C16.9999 21.7503 17.7253 22.5948 18.307 22.5948C18.416 22.5935 18.5232 22.5657 18.6191 22.5139C19.3782 22.0917 19.2367 19.3855 19.2031 18.824C19.2031 18.7184 19.2008 17.6135 18.8123 17.0835C18.5338 16.6994 18.0599 16.5535 17.7725 16.4996C17.8888 16.339 18.0421 16.2088 18.2194 16.12C18.7404 15.8595 19.6792 15.8213 20.6112 15.8213H21.13C22.1406 15.8348 22.4011 15.8999 22.7672 15.992C23.5083 16.1694 23.524 16.6478 23.4589 18.285C23.4387 18.7499 23.4185 19.2754 23.4185 19.8953C23.4185 20.03 23.4117 20.1737 23.4117 20.3265C23.3893 21.1597 23.3623 22.1052 23.9507 22.4937C24.0275 22.5418 24.1162 22.5675 24.2068 22.5678C24.4111 22.5678 25.0265 22.5678 26.6929 19.7089C27.2068 18.7886 27.6534 17.8324 28.0292 16.8477C28.0629 16.7893 28.1617 16.6096 28.2785 16.54C28.3647 16.496 28.4602 16.4737 28.557 16.4749H32.5568C32.9925 16.4749 33.2912 16.54 33.3473 16.7084C33.4461 16.9757 33.3293 17.7909 31.5035 20.2636L30.6882 21.3393C29.0331 23.5088 29.0331 23.6189 30.7916 25.265V25.265Z" fill="#131441"/>
                            </svg>
                        </a>

                        <a href = "#">
                            <svg class = "course__wpl__phone" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.948594 44.0604L3.8635 33.3494C1.94281 30.0569 0.933709 26.3122 0.93997 22.5004C0.93997 10.5928 10.5924 0.94043 22.5 0.94043C34.4075 0.94043 44.0599 10.5928 44.0599 22.5004C44.0599 34.408 34.4075 44.0604 22.5 44.0604C18.6898 44.0666 14.9468 43.0582 11.6553 41.139L0.948594 44.0604ZM14.719 12.3845C14.4405 12.4018 14.1685 12.4751 13.9191 12.6001C13.6852 12.7325 13.4717 12.8981 13.2852 13.0916C13.0265 13.3353 12.8799 13.5466 12.7225 13.7514C11.9257 14.7884 11.4971 16.0613 11.5044 17.3691C11.5087 18.4256 11.7846 19.454 12.2158 20.4156C13.0976 22.3603 14.5486 24.4193 16.4653 26.3273C16.9267 26.7865 17.3773 27.2479 17.8624 27.677C20.2413 29.7714 23.0762 31.2819 26.1414 32.0881L27.3682 32.2757C27.7671 32.2973 28.1659 32.2671 28.5669 32.2477C29.1948 32.2153 29.808 32.0453 30.3629 31.7497C30.6452 31.6042 30.9208 31.4459 31.1886 31.2753C31.1886 31.2753 31.2813 31.215 31.4581 31.0813C31.7492 30.8657 31.9281 30.7126 32.1696 30.4604C32.3486 30.2749 32.5038 30.0572 32.6224 29.8093C32.7905 29.4578 32.9587 28.7873 33.0277 28.2289C33.0794 27.802 33.0643 27.5692 33.0579 27.4247C33.0493 27.194 32.8574 26.9547 32.6482 26.8534L31.3934 26.2907C31.3934 26.2907 29.5177 25.4735 28.3729 24.9518C28.2522 24.8992 28.1228 24.8692 27.9913 24.8634C27.8438 24.8482 27.6947 24.8648 27.5542 24.9121C27.4136 24.9593 27.2848 25.0361 27.1763 25.1372V25.1329C27.1655 25.1329 27.0211 25.2558 25.4623 27.1444C25.3728 27.2647 25.2496 27.3555 25.1083 27.4054C24.967 27.4554 24.814 27.4621 24.6689 27.4247C24.5284 27.3872 24.3908 27.3396 24.2571 27.2824C23.9897 27.1703 23.897 27.1272 23.7138 27.0474L23.703 27.0431C22.4696 26.5046 21.3276 25.7772 20.3181 24.8871C20.0464 24.6499 19.7942 24.3912 19.5355 24.1411C18.6872 23.3288 17.948 22.4099 17.3363 21.4073L17.2091 21.2025C17.1178 21.0649 17.0439 20.9164 16.9892 20.7605C16.9073 20.4436 17.1207 20.1892 17.1207 20.1892C17.1207 20.1892 17.6446 19.6157 17.8883 19.3052C18.0911 19.0472 18.2804 18.7788 18.4553 18.501C18.7097 18.0914 18.7895 17.671 18.6558 17.3454C18.0521 15.8707 17.4269 14.4025 16.7844 12.945C16.6572 12.6561 16.2799 12.4492 15.9371 12.4082C15.8207 12.3953 15.7042 12.3823 15.5878 12.3737C15.2983 12.3593 15.0082 12.3622 14.719 12.3823V12.3845Z" fill="#131441"/>
                            </svg>
                        </a>

                        <a href = "#">
                            <svg class = "course__wpl__telegram" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4999 0.94043C10.5891 0.94043 0.939941 10.591 0.939941 22.5004C0.939941 34.4099 10.5905 44.0604 22.4999 44.0604C34.4108 44.0604 44.0599 34.4099 44.0599 22.5004C44.0599 10.591 34.4094 0.94043 22.4999 0.94043ZM33.0894 15.7111L29.5508 32.386C29.2893 33.5684 28.5854 33.8549 27.6034 33.2985L22.2134 29.3259L19.6137 31.8297C19.3271 32.1162 19.0837 32.3596 18.5273 32.3596L18.9099 26.8736L28.8984 17.849C29.3338 17.4665 28.8024 17.2495 28.2279 17.632L15.8831 25.4034L10.5627 23.7426C9.40676 23.3781 9.38033 22.5867 10.8061 22.0303L31.5927 14.0141C32.558 13.6664 33.401 14.2492 33.088 15.7097L33.0894 15.7111Z" fill="#131441"/>
                            </svg>
                        </a>


                    </div>

                </div>

            </div>
            <div class="course__wpl__right">
                <img src = "assets/img/background__wpl__gray.png" class = "course__wpl__right__img__1">
                <img src = "assets/img/background__wpl__gray.png" class = "course__wpl__right__img__2">
                <img src = "assets/img/background__wpl__gray.png" class = "course__wpl__right__img__3">
            </div>
        </div>
    </div>
    <?php require_once ('req/free_lesson_sofa.php')?>

    <?php require_once ('req/contactsAndMap.php')?>
</div>
  <div class="screen__footer">
  <?php require_once('footer.php')?>
  
  </div>
  <?php require_once ('modal_thank.php')?>
  <script>
            let vocal = document.getElementById('card_vocal_mobl');
            let gitar = document.getElementById('card_gitar_mobl');

            function GetCardInf(id){
                let card = document.getElementById(id);
                if (card.getAttribute('flg')) {
                    card.getElementsByClassName('course__toggle__btn')[0].className = 'course__toggle__btn flg'


                    let img = card.getElementsByTagName('img');
                    for (let i = 0; i < img.length; i ++) {
                        img[i].style.display = 'none';
                        card.getElementsByClassName('course__description')[i].style.display = 'none';
                        if( window.innerWidth > 420 ){
                            card.getElementsByClassName('course__more')[i].style.display = 'none';
                        }
                        else {
                            card.getElementsByClassName('course__more_420')[i].style.display = 'none'
                        }
                        card.getElementsByClassName('course__btns_block')[i].style.display = 'none';
                    }

                    card.setAttribute('flg','');
                }
                else {
                    let img = card.getElementsByTagName('img');
                    for (let i = 0; i < img.length; i ++) {
                        img[i].style.display = 'block';
                        card.getElementsByClassName('course__description')[i].style.display = 'block';

                        if( window.innerWidth > 420 ){
                            card.getElementsByClassName('course__more')[i].style.display = 'block';
                        }
                        else {
                            card.getElementsByClassName('course__more_420')[i].style.display = 'block'
                        }

                        card.getElementsByClassName('course__btns_block')[i].style.display = 'flex';
                    }

                    card.setAttribute('flg','1');
                    card.getElementsByClassName('course__toggle__btn')[0].className = 'course__toggle__btn'
                }

            }
            document.addEventListener("DOMContentLoaded", function(event)
            {
                window.onresize = function() {
                    resize_info();
                };
            });

            function resize_info()
            {
                if (vocal.getAttribute('flg')) {
                    let c420 = vocal.getElementsByClassName('course__more_420');
                    let more = vocal.getElementsByClassName('course__more');
                    if (window.innerWidth > 420 && window.innerWidth <= 640) {
                        for (let i = 0; i < c420.length; i++ ) {
                            c420[i].style.display = 'none';
                            more[i].style.display = 'block';
                        }

                    }
                    else if (window.innerWidth <= 420) {
                        for (let i = 0; i < more.length; i++ ) {
                            more[i].style.display = 'none';
                            c420[i].style.display = 'block';
                        }
                    }
                }
                if (gitar.getAttribute('flg')) {
                    let c420 = gitar.getElementsByClassName('course__more_420');
                    let more = gitar.getElementsByClassName('course__more');
                    if (window.innerWidth > 420 && window.innerWidth <= 640) {
                        for (let i = 0; i < c420.length; i++ ) {
                            c420[i].style.display = 'none';
                            more[i].style.display = 'block';
                        }

                    }
                    else if (window.innerWidth <= 420) {
                        for (let i = 0; i < more.length; i++ ) {
                            more[i].style.display = 'none';
                            c420[i].style.display = 'block';
                        }
                    }
                }
            }

        </script>
</body>

<!--НА ЛЮБОЙ СТРАНИЦЕ С ФОРМАМИ -->
<script src="js/phoneMask.js"></script>
<script>$(function(){$(".phone-mask").mask("+7(999) 999-9999");});</script>
<script src="js/feedBack_popup.js"></script>
<!-- -->

</html>