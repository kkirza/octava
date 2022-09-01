<style>

    /* КАРКАЗ КВИЗ */
    .shutka{
        margin-top: 100px;
        margin-bottom: 100px;
    }
    .quiz__container{	max-width: 1500px;	margin-right: auto;	margin-left: auto; margin-top: 200px}
    .qiuz__layout{overflow: hidden; position: relative;margin-right: 10px; margin-left: 10px;border-radius: 20px; background: url("../img/quiz__background.png"); background-repeat: no-repeat; background-position: center center; background-size: cover; padding: 150px 0px;}
    .quiz__big_title{font-style: normal;font-weight: 900;font-size: 64px;line-height: 120%;text-transform: uppercase;color: #FFFFFF;}
    .quiz__medium_title{max-width: 570px;font-style: normal;font-weight: 900;font-size: 40px;line-height: 120%;text-transform: uppercase;color: #FFFFFF;}
    .quiz__counter{font-style: normal;font-weight: 900;font-size: 24px;line-height: 120%;text-transform: uppercase; color: #FFFFFF; margin-top: 50px;}
    .quiz__status_bar{margin-right: 10px;max-width: 535px; width: auto; height: 9px;background: #F7F7F7;border-radius: 20px;}
    .quiz__status_bar__target{background: #6FCF97; height: 100%; width: 20%;}
    .quiz__quastion{max-width: 785px;margin-top: 20px;font-style: normal;font-weight: 900;font-size: 40px;line-height: 120%;text-transform: uppercase;color: #FFFFFF;}
    .quiz__answers__flex{position: relative; z-index: 4;margin-right: 10px; display: flex; align-items: stretch; justify-content: flex-start; gap: 36px; flex-wrap: wrap; margin-top: 10px;}
    .quiz__answers_check_flex{display: flex; gap: 10px; align-items: center; margin-top: 5px;}
    .quiz__answers__card{transition: height 1s ease;  max-width: 210px;  width: 100%;border-radius:5px; padding: 5px;background-color:#fff; }
    .quiz__answers__photo{object-fit: cover; object-position: center; border: 2px solid transparent; opacity: .5; border-radius: 5px; max-width: 200px; max-height: 100px; width: 100%; height: 100%;}
    .quiz__answers__check__text{font-style: normal;font-weight: 600;font-size: 14px;line-height: 130%;color: #131441;}
    .quiz__input{width: 18px;height: 18px;}
    .quiz__answers__card:hover{transition: height 1s ease;	align-self: baseline;}
    .quiz__answers__card:hover .quiz__answers__photo{ opacity: 1;}
    .quiz__input:checked+label { margin:50px }
    .quiz__answers__card.active .quiz__answers__photo {opacity: 1; border: 3px solid #FFD43A;}
    .quiz__block{max-width: 960px; margin-left: 190px;}
    .quiz__button_flex{display: flex; align-items: center; gap:20px; margin-top: 38px;}
    .quiz__prev__button{display: none; padding: 21px 30px 19px;border: 2px solid #FFFFFF;
        border-radius: 10px; font-style: normal;font-weight: 900;font-size: 14px;line-height: 18px;
        text-align: center;text-transform: uppercase;color: #FFFFFF; background-color: transparent;}
    .quiz__next__button{padding: 21px 30px 19px;border: 2px solid transparent;background: #3B32F5;
        border-radius: 10px; font-style: normal;font-weight: 900;font-size: 14px;line-height: 18px;text-align: center;text-transform: uppercase;color: #FFFFFF; }

    .quiz__feedback__input {margin-top: 30px; max-width: 347px; width: 100%; height: 60px; font-size: 14px; line-height: 18px; background: #FFFFFF;
        border: 1px solid #000000;border-radius: 10px;padding: 22px 20px 20px;color: #000000;outline:none
    }
    .quiz__women{z-index: 3;position: absolute; top:135px;  left: 1029px;}
    .quiz__feedback__input::placeholder {color: #000000;}
    .quiz__feedback__flex{display: flex; gap:15px; max-width: 725px; flex-wrap: wrap;}
    .quiz__feedback__btn{margin-top: 10px;max-width: 710px;padding: 21px 30px 19px;border: 2px solid transparent;background: #3B32F5;
        border-radius: 10px; font-style: normal;font-weight: 900;font-size: 14px;line-height: 18px;text-align: center;text-transform: uppercase;color: #FFFFFF; width: 100%;}
    .quiz__feedback__chk{width: 18px;height: 18px;}
    .quiz__feedback__block__btn_chk{margin-top: 10px;}
    .quiz__feedback__block__chk_lbl{display: flex; align-items: center; gap:10px; margin-top: 10px;}
    label[for="quiz__feedback__chk"]{font-style: normal;font-weight: 400;font-size: 14px;line-height: 130%;color: #FFFFFF;}
    .quiz__feedback__btn:hover, .quiz__next__button:hover  { background: #6A63FF; box-shadow: 0px 4px 24px rgba(0, 0, 0, 0.25);}
    .quiz__prev__button:hover{background: #3B32F5;}
    .quiz__form__feedback{display: none;}
    .quiz__br_mobile{display: none;}
    .quiz__big_star{position: absolute;top: 46px;left: 50px;}
    .quiz__bottom__big_star{position: absolute; bottom: 20px; left: 610px;}
    .quiz__bottom__litle_star{position: absolute; bottom: 70px; left: 450px;}
    .quiz__litle_star{position: absolute;top: 125px;left: 120px; }
    .quiz__surprise__target{position: absolute; top: 225px;left: 755px;}
    .quiz__surprise__target__table, .quiz__surprise__target__mobile{position: absolute;display: none;}
    .quiz__surprise_final{display: none;position: absolute; bottom: 0; left: 730px; z-index: 5;}
    .quiz__medium_title.active{
        display: flex;
        max-width: 608px;
    }
    .quiz__promo__table{position: absolute;    bottom: 232px; left: 297px; display: none;}
    .quiz__promo__desc{position: absolute;bottom: 113px;   left:627px; display: block;}
    .quiz__promo__mobile{position: absolute; top: 279px; right: 0; display: none;}
    @media(max-width:1410px){
        .quiz__women{display: none;}

    }
    @media(max-width:1277px){
        .quiz__surprise_final img{width: 370px;}
        .quiz__surprise_final{
            left: unset;
            right: 25px;
        }
        .quiz__bottom__big_star{left: unset;right: 565px; bottom: 0;}
        .quiz__bottom__litle_star{left: unset;right: 757px; bottom: 45px;}
    }
    @media(max-width:1060px){
        .quiz__surprise__target{width: 195px; top: 280px;}

    }
    @media(max-width:1009px){
        .quiz__surprise__target{width: 195px; top: 358px;}

    }
    @media(max-width:720px){
        .quiz__litle_star{
            display: none;
        }
    }
    @media(max-width:997px){
        .quiz__promo__table{display: block;}
        .quiz__promo__desc{display: none;}
        .quiz__medium_title.active img{display: none;}
        .quiz__medium_title.active {max-width: 508px;}
        .quiz__surprise_final{right: unset; left: 50%; transform: translateX(-50%); overflow: hidden;}

        .quiz__big_title{max-width: 710px;}
        .quiz__surprise__target__table{display: block; top: 417px; left:454px}
        .quiz__surprise__target{display: none;}
        .quiz__bottom__litle_star, .quiz__bottom__big_star{display: none;}
        .quiz__big_star{top: 20px;left: unset; right: 30px;}
        .quiz__litle_star{top: 161px;left: unset; right: 100px;}
        .quiz__women{top: 630px; left: unset; right: 0; display: block;     transform: rotate(15deg);}
        .quiz__women svg{
            width: 230px;
            height: 460px;
        }

        .quiz__block{
            margin-left: 10px;
        }
        .quiz__answers__flex{
            gap:20px;
        }
        .quiz__quastion{
            max-width: 577px;
        }
        .quiz__br_mobile{display: block;}
        .quiz__medium_title, .quiz__answers__flex{max-width: 666px;}
        .quiz__counter {margin-top: 20px;}
        .quiz__button_flex{flex-wrap: wrap; margin-top: 20px;}
        .qiuz__layout{padding-bottom: 100px; padding-top: 100px;}
        .quiz__feedback__flex{flex-direction: column; gap: 10px;}
        .quiz__feedback__input.last_ZK{margin-top: 0;}
        .quiz__form__feedback{max-width: 290px;}
    }
    @media(max-width:632px){
        .quiz__women{
            display: none;
        }
        .quiz__surprise__target__table{display: none;}
    }

    @media(max-width:632px){

        .quiz__surprise__target__table{display: none;}
    }
    @media(max-width:552px){
        .quiz__promo__mobile{display: block;}
        .quiz__bottom__big_star.active{display: block; right: unset; top: 300px; left: 30px;}
        .quiz__bottom__big_star.active svg{width: 50px;height: 50px; }
        .quiz__promo__table{display: none;}
        .quiz__medium_title.active{
            max-width: 350px;
            margin-bottom: 90px;
        }
        .quiz__surprise_final img{width: 150px;}
        .quiz__surprise_final{transform: unset; right: 30px; left: unset;}
        .quiz__surprise__target__mobile{display: block; top:200px; right: 0;}
        .quiz__big_star svg{width: 65px;height: 65px;}
        .quiz__big_star{right: 10px;}
        .quiz__litle_star{display: none;}
        .quiz__big_title{font-size: 40px; max-width: 493px;}
        .quiz__medium_title{font-size: 28px; max-width: 344px;}
        .quiz__quastion{font-size: 28px;}
        .qiuz__layout{margin-left: 5px;margin-right: 5px;}
        .qiuz__layout{padding-bottom: 50px; padding-top: 50px;}
        .quiz__form__feedback{max-width: 100%;}
        .quiz__feedback__input{max-width: 100%;}
        .quiz__status_bar{margin-right: 0;}
        .quiz__block{margin-left: 5px;margin-right: 5px;}
        .quiz__answers__card{max-width: 100%;}
        .quiz__answers__photo{max-width: 100%;}
        .quiz__answers_check_flex{margin-bottom: 10px; margin-left: 5px;}
        .quiz__answers__flex{margin-left: 0;margin-right: 0; gap:10px;}
        .quiz__prev__button {width: 100%;max-width: 100%; }
        .quiz__next__button {width: 100%;max-width: 100%; order:-1}
        .quiz__button_flex{gap: 10px;}
    }

    .quiz__medium_title span{color:#ffd800}
    @media(max-width:430px){
        .quiz__big_star svg{width: 50px;height: 50px;}
        .quiz__big_star{top: 6px;}
    }
    @media(max-width:330px){
        .quiz__big_star{display: none;}
    }
    @media(max-width:352px){
        .quiz__surprise__target__mobile{display: none;}
    }

    @media(max-width:357px){
        .quiz__promo__mobile{ top: 370px; right: 0;}
        .quiz__bottom__big_star.active{top: 390px;}
    }
    @media(max-width:314px){
        .quiz__promo__mobile{ top: 423px; right: 0;}
        .quiz__bottom__big_star.active{top: 444px; left: 10px;}
    }
    .hide_ZK{display: none;}

</style>


<section class="quiz__container">
    <div class="qiuz__layout">
        <div class="quiz__block">
            <div class="class_quiz__answers__parent">
                <div class="quiz__big_title Mont-Heavy">Ответь на 5<br class="quiz__br_mobile"> вопросов</div>
                <div class="quiz__medium_title Mont-Heavy">и мы поможем выбрать направление обучения</div>
                <div class="quiz__counter Mont-Heavy"></div>
                <div class="quiz__status_bar">
                    <div class="quiz__status_bar__target"></div>
                </div>

                <div class="quiz__quastion Mont-Heavy"></div>

                <div class="quiz__answers__flex">

                    <label for="quiz__answers__check_1" class="quiz__answers__card">
                        <img src="assets/img/qui__answers__photo_1.png" alt="" class="quiz__answers__photo">
                        <div class="quiz__answers_check_flex">
                            <input type="checkbox" class="quiz__input" id="quiz__answers__check_1">
                            <div class="quiz__answers__check__text Inter-SemiBold"></div>
                        </div>
                    </label>

                    <label for="quiz__answers__check_2" class="quiz__answers__card">
                        <img src="assets/img/qui__answers__photo_1.png" alt="" class="quiz__answers__photo">
                        <div class="quiz__answers_check_flex">
                            <input type="checkbox" class="quiz__input" id="quiz__answers__check_2">
                            <div class="quiz__answers__check__text Inter-SemiBold"></div>
                        </div>
                    </label>

                    <label for="quiz__answers__check_3" class="quiz__answers__card">
                        <img src="assets/img/qui__answers__photo_1.png" alt="" class="quiz__answers__photo">
                        <div class="quiz__answers_check_flex">
                            <input type="checkbox" class="quiz__input" id="quiz__answers__check_3">
                            <div class="quiz__answers__check__text Inter-SemiBold"></div>
                        </div>
                    </label>

                    <label for="quiz__answers__check_4" class="quiz__answers__card">
                        <img src="assets/img/qui__answers__photo_1.png" alt="" class="quiz__answers__photo">
                        <div class="quiz__answers_check_flex">
                            <input type="checkbox" class="quiz__input" id="quiz__answers__check_4">
                            <div class="quiz__answers__check__text Inter-SemiBold"></div>
                        </div>
                    </label>
                </div>
                <form class="quiz__form__feedback">
                    <div class="quiz__feedback__flex">
                        <input type="text" class="quiz__feedback__input Mont-Heavy" placeholder="ИМЯ" name="name">
                        <input type="text" class="quiz__feedback__input Mont-Heavy last_ZK phone-mask" placeholder="ТЕЛЕФОН" required name="tel">
                    </div>
                    <button class="quiz__feedback__btn Mont-Heavy">ОСТАВИТЬ ЗАЯВКУ</button>
                    <div class="quiz__feedback__block__chk_lbl">
                        <input type="checkbox" class="quiz__feedback__chk" id="quiz__feedback__chk">
                        <label required for="quiz__feedback__chk" class="Inter-Regular">Я даю согласие на обработку персональных данных</label>
                    </div>
                </form>
                <div class="quiz__button_flex">
                    <button class="quiz__prev__button Mont-Heavy">Назад </button>
                    <button class="quiz__next__button Mont-Heavy">Следующий вопрос</button>
                </div>
                <div class="quiz__big_star">
                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.3891 2.06196L48.5236 33.234C48.6978 34.2915 49.5266 35.1203 50.5841 35.2945L81.7561 40.429C83.4311 40.7049 83.4311 43.1132 81.7561 43.3891L50.5841 48.5236C49.5266 48.6978 48.6978 49.5266 48.5236 50.5841L43.3891 81.7561C43.1132 83.4311 40.7049 83.4311 40.429 81.7561L35.2945 50.5841C35.1203 49.5266 34.2915 48.6978 33.234 48.5236L2.06195 43.3891C0.38701 43.1132 0.387003 40.7049 2.06196 40.429L33.234 35.2945C34.2915 35.1203 35.1203 34.2915 35.2945 33.234L40.429 2.06195C40.7049 0.38701 43.1132 0.387003 43.3891 2.06196Z" fill="#FFD43A" stroke="white"/>
                    </svg>
                </div>

                <div class="quiz__litle_star">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.4934 1.07161L22.9256 15.8381C23.0301 16.4726 23.5274 16.9699 24.1619 17.0744L38.9284 19.5066C39.4867 19.5986 39.4867 20.4014 38.9284 20.4934L24.1619 22.9256C23.5274 23.0301 23.0301 23.5274 22.9256 24.1619L20.4934 38.9284C20.4014 39.4867 19.5986 39.4867 19.5066 38.9284L17.0744 24.1619C16.9699 23.5274 16.4726 23.0301 15.8381 22.9256L1.0716 20.4934C0.513307 20.4014 0.513277 19.5986 1.07161 19.5066L15.8381 17.0744C16.4726 16.9699 16.9699 16.4726 17.0744 15.8381L19.5066 1.0716C19.5986 0.513307 20.4014 0.513277 20.4934 1.07161Z" fill="#FFD43A" stroke="white"/>
                    </svg>
                </div>
            </div>

        </div>
        <div class="quiz__women">
            <svg width="358" height="719" viewBox="0 0 358 719" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5 371C27 326.51 64.6085 315.946 86.3823 329.617C113.6 346.704 135.373 370.006 145.483 363.792C155.592 357.578 152.481 326.51 161.035 314.859C169.589 303.208 178.921 296.218 185.92 293.887C192.919 291.557 229.468 290.004 207.694 298.548C185.92 307.092 173.478 314.859 170.367 291.557C167.257 268.256 162.591 269.809 148.593 270.586C134.596 271.363 105.046 244.178 95.7139 230.197C86.3823 216.216 76.273 188.254 77.0506 178.933C77.8283 169.612 83.2717 161.068 89.4928 161.845C95.7139 162.622 133.041 222.429 120.598 214.662C108.156 206.895 105.823 177.38 106.601 164.952C107.378 152.525 101.935 136.99 95.7139 129.223C89.4928 121.456 86.3823 112.912 89.4928 109.805C92.6034 106.698 99.6021 109.805 99.6021 113.688C99.6021 117.572 92.6034 100.484 99.6021 98.1541C106.601 95.824 133.041 118.349 133.041 125.339C133.041 132.33 119.821 143.981 117.488 140.097C115.155 136.214 122.931 110.582 125.264 115.242C127.597 119.902 109.711 132.33 109.711 130.777C109.711 129.223 109.711 110.582 114.377 109.028C119.043 107.475 103.49 124.563 103.49 121.456C103.49 118.349 122.154 136.991 128.375 150.971C134.596 164.952 168.812 248.062 154.814 255.829C140.817 263.596 117.488 250.392 100.38 223.206C83.2717 196.021 91.8257 159.515 91.8257 147.088C91.8257 134.66 85.6046 114.465 78.6059 105.145C73.0069 97.6882 44.1307 71.4868 30.3924 59.3182C34.0214 48.9619 39.7241 27.6279 33.503 25.1424C25.7266 22.0355 19.5055 32.9096 23.3937 36.7933C27.2819 40.6769 66.1637 83.3963 72.3848 77.9593C78.6059 72.5222 71.6072 56.2111 59.165 41.4533C46.7228 26.6956 19.5055 -0.489629 16.3949 1.06381C13.2844 2.61726 -2.26835 11.9378 1.61984 17.3749C5.50804 22.8119 58.3874 79.5126 84.0494 74.0756C104.579 69.7259 100.38 82.6195 95.7139 89.61L106.601 92.7169C105.305 77.9593 105.979 46.1139 119.043 36.7933C135.373 25.1424 147.038 17.3749 133.041 17.3749C119.043 17.3749 101.157 32.9093 101.157 43.0067C101.157 53.1041 99.6021 69.4152 99.6021 71.7454C99.6021 74.0755 124.486 119.902 138.484 119.125C152.481 118.349 176.588 95.047 180.476 81.066C184.365 67.0851 193.696 39.8998 189.808 33.686C185.92 27.4723 157.147 18.1516 153.259 19.705C149.371 21.2585 131.485 31.3559 125.264 38.3464C119.043 45.3369 114.377 72.5221 114.377 81.066C114.377 89.61 145.483 128.446 149.371 119.125C153.259 109.805 146.26 95.8238 150.926 92.7169C155.592 89.61 166.479 96.6003 158.703 77.9593C150.926 59.3182 150.149 33.686 160.258 33.686C170.367 33.686 180.476 65.5315 194.474 71.7454C208.471 77.9593 212.359 87.2796 209.249 92.7169C206.138 98.1541 192.141 103.591 192.141 111.358C192.141 119.125 199.14 135.437 194.474 136.213C189.808 136.99 167.257 140.097 167.257 136.213C167.257 132.33 169.589 112.135 164.924 113.688C160.258 115.242 145.483 119.902 146.26 125.339C147.038 130.777 164.924 152.525 170.367 150.971C175.811 149.418 180.476 148.641 182.809 150.971C185.142 153.301 210.804 185.147 214.692 182.04C218.581 178.933 185.142 146.311 189.808 143.98C194.474 141.65 213.915 143.204 218.581 147.088C223.246 150.971 290.901 220.1 292.456 223.206C294.011 226.313 292.456 248.838 284.68 248.838C276.903 248.838 282.347 232.527 298.677 234.857C315.008 237.187 325.895 284.567 325.895 291.557C325.895 298.548 306.454 314.859 302.565 312.529C298.677 310.199 308.786 291.557 311.897 293.887C315.008 296.218 292.456 310.199 290.901 306.315C289.346 302.432 301.01 277.577 304.898 279.13C308.786 280.684 290.901 293.887 284.68 291.557C278.459 289.227 294.011 275.246 295.567 270.586C297.122 265.926 283.124 262.042 279.236 260.489C275.348 258.935 267.572 246.508 266.794 232.527C266.016 218.546 242.687 202.235 235.689 202.235C228.69 202.235 227.135 206.118 235.689 219.322C244.243 232.527 255.13 260.489 240.354 243.401C228.534 229.731 164.924 160.033 134.596 126.893C128.893 129.223 120.132 136.525 130.708 147.088C143.927 160.292 248.908 279.13 250.464 283.79C252.019 288.451 243.465 292.333 235.689 293.887C227.912 295.441 260.573 295.441 269.905 301.655C279.236 307.869 270.682 392.531 300.232 401.075C329.783 409.619 357 411.949 357 367.676C357 323.403 336.004 281.46 320.451 306.315C304.898 331.17 341.447 352.919 346.113 359.132C350.779 365.346 361.666 396.918 339.892 401.075C318.118 405.233 279.236 360.686 266.794 332.724C254.352 304.762 183.587 320.296 175.033 329.617C166.479 338.938 171.922 404.959 175.033 401.075C178.143 397.192 187.475 349.812 192.141 354.472C196.807 359.132 203.805 396.415 210.804 390.978C217.803 385.541 217.025 338.161 226.357 342.821C235.689 347.482 256.685 387.094 264.461 384.764C272.238 382.434 252.019 326.51 233.356 326.51C214.692 326.51 165.701 317.189 163.368 363.792C161.035 410.396 162.591 425.154 165.701 426.707C168.812 428.261 206.138 411.949 223.246 406.512C240.354 401.075 289.346 400.299 302.565 408.843C315.785 417.387 341.447 488.068 343.003 501.272C344.558 514.477 323.562 554.09 302.565 575.838C281.569 597.586 262.906 599.139 259.018 587.489C255.13 575.838 286.235 554.866 297.122 546.322C308.009 537.778 308.009 503.603 302.565 483.408C297.122 463.213 283.902 411.173 269.127 411.173C254.352 411.173 206.138 417.387 204.583 422.047C203.028 426.707 210.027 446.125 217.803 454.669C225.579 463.213 260.573 516.807 259.018 522.244C257.462 527.681 246.576 533.895 234.911 537.002C223.246 540.109 192.919 566.517 190.586 571.177C188.253 575.838 204.583 591.372 204.583 593.702C204.583 596.032 192.919 593.702 186.697 585.935C180.476 578.168 175.033 580.498 171.145 585.935C167.257 591.372 161.813 600.693 155.592 602.246C149.371 603.8 142.372 603.023 133.818 606.907C125.264 610.79 95.7139 628.655 95.7139 634.869C95.7139 639.84 96.7508 644.707 97.2692 646.519C105.823 643.671 123.242 638.597 124.486 641.082C126.042 644.189 99.6021 668.268 101.935 677.588C103.801 685.045 125.005 707.104 135.373 717.201C141.076 719.013 152.792 718.91 154.037 703.997C155.592 685.356 143.15 672.151 181.254 637.199C219.358 602.246 235.689 589.819 247.353 593.702C259.018 597.586 251.241 616.227 247.353 621.664C243.465 627.101 232.578 640.306 237.244 658.947C241.91 677.588 267.572 694.676 268.349 700.89C269.127 707.104 266.794 711.764 244.243 711.764C221.691 711.764 216.248 700.89 216.248 694.676C216.248 688.462 211.582 676.812 210.804 682.249C210.027 687.686 215.47 702.443 199.14 700.89C186.075 699.647 187.994 660.5 190.586 641.082C210.545 622.441 252.641 587.333 261.351 596.033C272.238 606.907 263.684 617.004 261.351 619.334C259.018 621.664 235.689 637.199 247.353 646.519C259.018 655.84 315.008 651.956 327.45 658.947C339.892 665.937 332.893 675.258 319.673 686.132C306.454 697.006 310.342 705.55 350.779 708.657" stroke="white" stroke-width="2"/>
            </svg>
        </div>
        <div class="quiz__bottom__big_star">
            <svg width="148" height="148" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.9066 1.60007L79.8207 47.403C80.4515 48.0323 81.3695 48.2783 82.2304 48.0487L144.895 31.3392C146.376 30.9443 147.426 32.7629 146.343 33.848L100.54 79.7621C99.9109 80.3929 99.6649 81.3109 99.8944 82.1718L116.604 144.836C116.999 146.317 115.18 147.367 114.095 146.285L68.1811 100.482C67.5503 99.8523 66.6323 99.6063 65.7713 99.8358L3.10708 116.545C1.6261 116.94 0.576173 115.122 1.65866 114.037L47.4616 68.1225C48.0909 67.4917 48.3369 66.5737 48.1073 65.7128L31.3978 3.04849C31.0029 1.5675 32.8215 0.517579 33.9066 1.60007Z" fill="#FFD43A" stroke="white"/>
            </svg>
        </div>
        <div class="quiz__bottom__litle_star">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M41.9561 2.51179L37.4467 25.0345C37.2363 26.0854 37.7191 27.1535 38.6469 27.6898L58.5335 39.1847C60.0032 40.0342 59.1529 42.2874 57.4884 41.9542L34.9656 37.4447C33.9148 37.2343 32.8467 37.7171 32.3104 38.645L20.8155 58.5316C19.966 60.0012 17.7127 59.1509 18.046 57.4864L22.5554 34.9637C22.7658 33.9128 22.283 32.8448 21.3552 32.3084L1.4686 20.8135C-0.00106156 19.964 0.849253 17.7108 2.51374 18.044L25.0365 22.5535C26.0874 22.7639 27.1554 22.2811 27.6917 21.3532L39.1867 1.46664C40.0362 -0.00301814 42.2894 0.847297 41.9561 2.51179Z" fill="#FFD43A" stroke="white"/>
            </svg>
        </div>
        <img src="/assets/img/quiz__surprise__desk.svg" alt="" class="quiz__surprise__target">
        <img src="/assets/img/quiz__surprise__table.svg" alt="" class="quiz__surprise__target__table">
        <img src="/assets/img/quiz__surprise_mobilesvg.svg" alt="" class="quiz__surprise__target__mobile">
        <div class="quiz__surprise_final">
            <img class="active" src="/assets/img/quiz__surprise.svg" alt="">
        </div>
        <div class="quiz__promo__desc hide_ZK">
            <img src="/assets/img/quiz__promo_desc.svg" alt="">
        </div>
        <div class="quiz__promo__table hide_ZK">
            <img src="/assets/img/quiz__promo_table.svg" alt="">
        </div>
        <div class="quiz__promo__mobile hide_ZK">
            <img src="/assets/img/quiz__promo_mobile.svg" alt="">
        </div>
    </div>
</section>