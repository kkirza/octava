<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='image/x-icon' href="img/favicon.ico">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/font.css">

    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="utils.js"></script>
    <script src="ajax.js"></script>
    <title>Главная</title>
</head>

<body style="background: #F6F6F6">
    <?php require('req/timerPOPUP.php') ?>
    <?php require('req/feedBack_popup.php') ?>
    <?php require('header.php') ?>

    <section class="mainContainer_MA">
        <div class="schoolOfMusic_MA">
            <div class="schoolOfMusic_MA__addressArea">
                <div class="schoolOfMusic_MA__addressArea-time">
                    <img src="img/schoolOfMusic_MA__addressArea-timeIMG.svg" class="schoolOfMusic_MA__addressArea-timeIMG">
                    <div class="schoolOfMusic_MA__addressArea-timeTEXT Inter_Light_MA">с 10:00 до 22:00</div>
                </div>
                <div class="schoolOfMusic_MA__addressArea-address">
                    <img src="img/schoolOfMusic_MA__addressArea-addressIMG.svg" class="schoolOfMusic_MA__addressArea-addressIMG">
                    <div class="schoolOfMusic_MA__addressArea-addressTEXT Inter_Light_MA Lh-130_MA">г. Новосибирск, ул.Серебренниковская,<br>д. 6/1 цокольный этаж, «Октава»</div>
                </div>
            </div>
            <div class="schoolOfMusic_MA__mainContent">
                <div class="schoolOfMusic_MA__headline Up-c_MA Lh-120_MA Mont_Heavy_MA">Школа<br> музыки</div>
                <div class="schoolOfMusic_MA__headline-subtitle Mont_Heavy_MA Lh-120_MA Up-c_MA">исполни свою<br class="schoolOfMusic-noBr_2"> первую песню<br class="schoolOfMusic-noBr"> как в оригинале уже<br class="schoolOfMusic-noBr_2"> через 4 занятия</div>
                <div class="schoolOfMusic_MA__formHeadline Up-c_MA Mont_Heavy_MA">Приходи на бесплатное занятие</div>
                <form class="schoolOfMusic_MA__form sendFORM">
                    <div class="schoolOfMusic_MA__form-flex">
                        <input placeholder="Телефон" class="tel_input_MA tel_input_MA__schoolOfMusic-ver Up-c_MA Mont_Heavy_MA phone-mask" name="tel" required>
                        <button class="Mont_Heavy_MA Up-c_MA accept_button_MA accept_button_MA__schoolOfMusic-ver" type="submit">Оставить заявку</button>
                    </div>
                    <div class="schoolOfMusic_MA__form-checkboxArea">
                        <input type="checkbox" class="checkbox-b_MA" id="schoolOfMusic_MA-checkbox" required><label for="schoolOfMusic_MA-checkbox" class="checkbox-b_MA_label Inter_Regular_MA">Я даю согласие на обработку персональных данных</label>
                    </div>
                </form>
            </div>
            <img src="img/schoolOfMusic_MA_bg__micro.svg" class="schoolOfMusic_MA_bg__micro schoolOfMusic_MA_bg-control" id="schoolOfMusic_MA_bg__micro">
            <img src="img/schoolOfMusic_MA_bg__guitar.svg" class="schoolOfMusic_MA_bg__guitar schoolOfMusic_MA_bg-control" id="schoolOfMusic_MA_bg__guitar">
            <img src="img/schoolOfMusic_MA_bg__piano.svg" class="schoolOfMusic_MA_bg__piano schoolOfMusic_MA_bg-control" id="schoolOfMusic_MA_bg__piano">

            <img src="img/schoolOfMusic_MA__headline-subtitle.svg" class="schoolOfMusic_MA__headline-subtitleIMG">
            <img src="img/schoolOfMusic_MA__headline-subtitleIMG_2.svg" class="schoolOfMusic_MA__headline-subtitleIMG_2">
            <img src="img/schoolOfMusic_MA__headline-subtitleIMG_3.svg" class="schoolOfMusic_MA__headline-subtitleIMG_3">
            <img src="img/schoolOfMusic_MA_mobile.svg" class="schoolOfMusic_MA_mobile">
            <script>
                schoolOfMusic_bg_timer();

                function schoolOfMusic_bg_timer() {

                    setTimeout("document.getElementById('schoolOfMusic_MA_bg__micro').classList.add('schoolOfMusic_opacity_transform_hide')", 3000);
                    setTimeout("document.getElementById('schoolOfMusic_MA_bg__guitar').classList.add('schoolOfMusic_opacity_transform_show')", 3200);
                    setTimeout("document.getElementById('schoolOfMusic_MA_bg__guitar').classList.remove('schoolOfMusic_opacity_transform_show')", 6200);
                    setTimeout("document.getElementById('schoolOfMusic_MA_bg__piano').classList.add('schoolOfMusic_opacity_transform_show')", 6400);
                    setTimeout("document.getElementById('schoolOfMusic_MA_bg__piano').classList.remove('schoolOfMusic_opacity_transform_show')", 9400);
                    setTimeout("document.getElementById('schoolOfMusic_MA_bg__micro').classList.remove('schoolOfMusic_opacity_transform_hide')", 9600)
                }
                setInterval(schoolOfMusic_bg_timer, 10000)
            </script>
        </div>
    </section>
    <section class="mainContainer_MA">
        <div class="loveMusic_MA">
            <div class="loveMusic_MA__content">
                <div class="loveMusic_MA__content-headline Up-c_MA Mont_Heavy_MA">Октава</div>
                <div class="loveMusic_MA__content-subtitle Up-c_MA Mont_Heavy_MA Lh-120_MA">Место, где учишься музыке на любимых песнях<br> и без скучной теории</div>
                <div class="loveMusic_MA__content-text Inter_Light_MA">
                    <div class="loveMusic_MA__content-text-t Lh-130_MA"><span class="Inter_semi_bold_MA darkBlue_MA">Тут ты можешь расслабиться, заняться любимым делом</span> и попасть в сообщество музыкантов, которые помогают друг другу развиваться.</div>
                    <div class="loveMusic_MA__content-text-t loveMusic_MA__content-text-t__second Lh-130_MA">С нашими опытными учителями <span class="Inter_semi_bold_MA darkBlue_MA">ты пройдешь путь от своих первых песен до выступлений</span> на большой сцене или написания собственных песен.</div>
                </div>
            </div>
            <img src="img/loveMusic_MA-IMG.svg" class="loveMusic_MA-IMG">
        </div>
    </section>
    <section class="mainContainer_MA">
        <div class="noLimitation_MA">
            <div class="noLimitation_MA__content">
                <div class="noLimitation_MA__content-headline Mont_Heavy_MA darkBlue_MA Up-c_MA Lh-120_MA">У нас нет<br class="noLimitation__br-show"> никаких<br> ограничений</div>
                <div class="noLimitation_MA-controlPanel Mont_Heavy_MA">
                    <div class="noLimitation_MA-controlPanel_button noLimitation_MA-controlPanel_button__child noLimitation_MA-controlPanel_button__active Up-c_MA">Дети</div>
                    <div class="noLimitation_MA-controlPanel_button noLimitation_MA-controlPanel_button__youth Up-c_MA">Молодежь</div>
                    <div class="noLimitation_MA-controlPanel_button noLimitation_MA-controlPanel_button__adults Up-c_MA">Взрослые</div>
                </div>


                <div class="noLimitation_MA-mainArea">
                    <div class="noLimitation_MA-mainArea__active">


                        <div class="noLimitation_MA-mainArea__active-child noLimitation-activeController">
                            <img src="img/noLimitation_childIMG.png" class="noLimitation_MA-mainArea__active-IMG">
                            <div class="noLimitation_MA-mainArea__active-text">
                                <div class="noLimitation_MA-mainArea__active-text__subtitle Up-c_MA Mont_Heavy_MA darkBlue_MA Lh-120_MA">В Октаве дети проявляются, становятся более уверенными и креативными.</div>
                                <div class="noLimitation_MA-mainArea__active-text__mainTextContainer">
                                    <div class="noLimitation_MA-mainArea__active-text__mainText Inter_Light_MA"><span class="Inter_semi_bold_MA">Занятия музыкой помогают в умственном развитии!</span> Дети, занимающиеся музыкой, быстрее усваивают навыки чтения и умеют яснее выражать свои мысли.</div>
                                    <div class="noLimitation_MA-mainArea__active-text__mainText noLimitation_MA-mainArea__active-text__mainText_mg Inter_Light_MA">Через музыку ребенок <span class="Inter_semi_bold_MA">научится проявляться и найдет свой стиль.</span><br> А первые успешные выступления<br> на большой сцене помогут ребенку<br> <span class="Inter_semi_bold_MA">стать уверенным в себе.</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="noLimitation_MA-mainArea__active-youth noLimitation-activeController display_none">
                            <img src="img/noLimitation_youthIMG.png" class="noLimitation_MA-mainArea__active-IMG">
                            <div class="noLimitation_MA-mainArea__active-text">
                                <div class="noLimitation_MA-mainArea__active-text__subtitle Up-c_MA Mont_Heavy_MA darkBlue_MA Lh-120_MA">Занятия музыкой — возможность отвлечься, стать уверенным и найти свой стиль.</div>
                                <div class="noLimitation_MA-mainArea__active-text__mainTextContainer">
                                    <div class="noLimitation_MA-mainArea__active-text__mainText Inter_Light_MA">Тут <span class="Inter_semi_bold_MA">ты научишься мыслить креативно</span> в любых ситуациях и <span class="Inter_semi_bold_MA">найдешь друзей</span>, подходящих тебе по духу.</div>
                                    <div class="noLimitation_MA-mainArea__active-text__mainText noLimitation_MA-mainArea__active-text__mainText_mg Inter_Light_MA">Мы проведём тебя до выступлений на большой сцене и поможем исполнить детскую мечту.</div>
                                    <img src="img/noLimitation_Stars_1.svg" class="noLimitation_Stars_1">
                                </div>
                            </div>
                        </div>

                        <div class="noLimitation_MA-mainArea__active-adult noLimitation-activeController display_none">
                            <img src="img/noLimitation_adultsIMG.png" class="noLimitation_MA-mainArea__active-IMG">
                            <div class="noLimitation_MA-mainArea__active-text">
                                <div class="noLimitation_MA-mainArea__active-text__subtitle Up-c_MA Mont_Heavy_MA darkBlue_MA Lh-120_MA">
                                    Никогда не поздно заняться тем, что близко душе.
                                    <div class="noLimitation_MA-mainArea__active-text__subtitle-sub">С помощью музыки ты сможешь почувствовать себя моложе, показать пример детям и стать с ними ближе.</div>
                                </div>
                                <div class="noLimitation_MA-mainArea__active-text__mainTextContainer">
                                    <div class="noLimitation_MA-mainArea__active-text__mainText Inter_Light_MA"><span class="Inter_semi_bold_MA">В Октаве ты сможешь отдохнуть от рутины, погрузиться в новую среду и найти новых знакомых</span></div>
                                    <div class="noLimitation_MA-mainArea__active-text__mainText noLimitation_MA-mainArea__active-text__mainText_mg Inter_Light_MA">Занятия музыкой и выступления заряжают и дают такие эмоции, которые не получишь в обычной жизни. Исполни свою детскую мечту.</div>
                                    <img src="img/noLimitation_Stars_2.svg" class="noLimitation_Stars_2">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="noLimitation_MA-mainArea__no-active_container">
                        <div class="noLimitation_MA-mainArea__no-active">

                            <div class="noLimitation_MA-mainArea__no-active-youth_a noLimitation-activeController noLimitation-noActive-pointer">
                                <img src="img/noLimitation_no-activeYouthIMG.png" class="noLimitation_MA-mainArea__no-activeIMG">
                                <div class="noLimitation_MA-mainArea__no-active-text Inter_Light_MA">Занятия музыкой - это возможность <span class="Inter_semi_bold_MA">отвлечься от работы или учебы, стать более уверенным</span> и найти свой собственный стиль.</div>
                            </div>

                            <div class="noLimitation_MA-mainArea__no-active-adults_a noLimitation-activeController noLimitation-noActive-pointer display_none">
                                <img src="img/noLimitation_no-activeAdultsIMG.png" class="noLimitation_MA-mainArea__no-activeIMG noLimitation_MA-mainArea__no-activeIMG__adults">
                                <div class="noLimitation_MA-mainArea__no-active-text Inter_Light_MA">Никогда <span class="Inter_semi_bold_MA">не поздно заняться тем, что близко душе.</span></div>
                            </div>

                            <div class="noLimitation_MA-mainArea__no-active-child_a noLimitation-activeController noLimitation-noActive-pointer display_none">
                                <img src="img/noLimitation_no-activeChildIMG.png" class="noLimitation_MA-mainArea__no-activeIMG noLimitation_MA-mainArea__no-activeIMG__child">
                                <div class="noLimitation_MA-mainArea__no-active-text Inter_Light_MA">В Октаве <span class="Inter_semi_bold_MA">дети проявляются, становятся</span> более <span class="Inter_semi_bold_MA">уверенными и креативными</span></div>
                            </div>

                        </div>


                        <div class="noLimitation_MA-mainArea__no-active noLimitation_MA-mainArea__no-active__mg">

                            <div class="noLimitation_MA-mainArea__no-active-youth_b noLimitation-activeController noLimitation-noActive-pointer display_none">
                                <img src="img/noLimitation_no-activeYouthIMG.png" class="noLimitation_MA-mainArea__no-activeIMG">
                                <div class="noLimitation_MA-mainArea__no-active-text Inter_Light_MA">Занятия музыкой - это возможность <span class="Inter_semi_bold_MA">отвлечься от работы или учебы, стать более уверенным</span> и найти свой собственный стиль.</div>
                            </div>

                            <div class="noLimitation_MA-mainArea__no-active-adults_b noLimitation-activeController noLimitation-noActive-pointer">
                                <img src="img/noLimitation_no-activeAdultsIMG.png" class="noLimitation_MA-mainArea__no-activeIMG noLimitation_MA-mainArea__no-activeIMG__adults">
                                <div class="noLimitation_MA-mainArea__no-active-text Inter_Light_MA">Никогда <span class="Inter_semi_bold_MA">не поздно заняться тем, что близко душе.</span></div>
                            </div>

                            <div class="noLimitation_MA-mainArea__no-active-child_b noLimitation-activeController noLimitation-noActive-pointer display_none">
                                <img src="img/noLimitation_no-activeChildIMG.png" class="noLimitation_MA-mainArea__no-activeIMG noLimitation_MA-mainArea__no-activeIMG__child">
                                <div class="noLimitation_MA-mainArea__no-active-text Inter_Light_MA">В Октаве <span class="Inter_semi_bold_MA">дети проявляются, становятся</span> более <span class="Inter_semi_bold_MA">уверенными и креативными</span></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="noLimitation_MA-mainArea__b-version">


                    <div class="noLimitation__b-version__block noLimitation__b-version__block-trueBG noLimitation__b-version__block-child">
                        <img src="img/noLimitation_childIMG__b-version.png" class="noLimitation__b-version__block__IMG">
                        <div class="noLimitation__b-version__block-container darkBlue_MA">
                            <div class="noLimitation__b-version__block__headline Up-c_MA Lh-120_MA Mont_Heavy_MA">В Октаве дети проявляются, становятся более уверенными и креативными.</div>
                            <div class="noLimitation__b-version__block__text Inter_Regular_MA Lh-130_MA"><span class="Inter_semi_bold_MA">Занятия музыкой помогают в умственном развитии!</span> Дети, занимающиеся музыкой, быстрее усваивают навыки чтения и умеют яснее выражать свои мысли.</div>
                            <div class="noLimitation__b-version__block__text Inter_Regular_MA Lh-130_MA">Через музыку ребенок <span class="Inter_semi_bold_MA">научится проявляться и найдет свой стиль.</span> А первые успешные выступления на большой сцене помогут ребенку <span class="Inter_semi_bold_MA">стать уверенным в себе.</span></div>
                        </div>
                    </div>

                    <div class="noLimitation__b-version__block noLimitation__b-version__block-youth">
                        <img src="img/noLimitation_youthIMG__b-version.png" class="noLimitation__b-version__block__IMG">
                        <div class="noLimitation__b-version__block-container darkBlue_MA">
                            <div class="noLimitation__b-version__block__headline Up-c_MA Lh-120_MA Mont_Heavy_MA">Занятия музыкой — возможность отвлечься, стать уверенным и найти свой стиль.</div>
                            <div class="noLimitation__b-version__block__text Inter_Regular_MA Lh-130_MA">Тут <span class="Inter_semi_bold_MA">ты научишься мыслить креативно</span> в любых ситуациях и <span class="Inter_semi_bold_MA">найдешь друзей</span>, подходящих тебе по духу.</div>
                            <div class="noLimitation__b-version__block__text Inter_Regular_MA Lh-130_MA">Мы проведём тебя до выступлений на большой сцене и поможем исполнить детскую мечту.</span></div>
                        </div>
                    </div>

                    <div class="noLimitation__b-version__block noLimitation__b-version__block-adults">
                        <img src="img/noLimitation_adultsIMG__b-version.png" class="noLimitation__b-version__block__IMG">
                        <div class="noLimitation__b-version__block-container darkBlue_MA">
                            <div class="noLimitation__b-version__block__headline Up-c_MA Lh-120_MA Mont_Heavy_MA">С помощью музыки ты сможешь почувствовать себя моложе, показать пример детям и стать с ними ближе.</div>
                            <div class="noLimitation__b-version__block__text Inter_Regular_MA Lh-130_MA"><span class="Inter_semi_bold_MA">В Октаве ты сможешь отдохнуть от рутины, погрузиться в новую среду и найти новых знакомых</span></div>
                            <div class="noLimitation__b-version__block__text Inter_Regular_MA Lh-130_MA">Занятия музыкой и выступления заряжают и дают такие эмоции, которые не получишь в обычной жизни. Исполни свою детскую мечту.</div>
                        </div>
                    </div>

                </div>

            </div>
            <img src="img/noLimitation_MA-subtitle.svg" class="noLimitation_MA-subtitle">
            <img src="img/noLimitation_MA-subtitle_2.svg" class="noLimitation_MA-subtitle_2">
            <img src="img/noLimitation_MA-subtitle_3.svg" class="noLimitation_MA-subtitle_3">
            <img src="img/noLimitation_Stars_3.svg" class="noLimitation_Stars_3">
        </div>
    </section>
    <section class="mainContainer_MA">
        <div class="youCan_MA">
            <div class="youCan_MA__container">
                <div class="youCan_MA__headline Mont_Extra_Light_MA Lh-120_MA darkBlue_MA Up-c_MA">Уверены,<br class="youCan_MA__1500-brShow"> что <span class="Mont_Heavy_MA">получится<br> у каждого</span></div>
                <div class="youCan_MA__content">
                    <div class="youCan_MA__subtitle Mont_Heavy_MA Lh-120_MA darkBlue_MA Up-c_MA">В Октаве рядом с тобой всегда будут опытные учителя и другие студенты, которые со всем помогут и поддержат.</div>
                    <div class="youCan_MA__subtitle-sub Inter_semi_bold_MA Lh-130_MA darkBlue_MA">У 20 000 наших студентов всё получилось. <br><span class="Inter_Regular_MA">Знаем, что получится и у тебя.</span></div>
                    <div class="youCan_MA__text-headline Mont_Heavy_MA Lh-120_MA darkBlue_MA Up-c_MA">«если у меня нет слуха? если я пою и играю впервые?»</div>
                    <div class="youCan_MA__text Inter_Regular_MA Lh-130_MA darkBlue_MA">Умение петь или играть на каком-либо инструменте — это не талант. <span class="Inter_semi_bold_MA">Это навык, который мы поможем тебе освоить.</span></div>
                </div>
            </div>
            <img src="img/youCanIMG.svg" class="youCanIMG">
            <img src="img/youCanIMG_Note.svg" class="youCanIMG_Note">
        </div>
    </section>

    <div class="container__1500__ZK">
        <div class="card__four__lesson">
            <div class="card__fl__title Mont-Heavy">Уже через <br class="br_fl_card"> 4 занятия</div>
            <div class="card__fl__description Mont-Heavy">ты исполнишь свою первую песню</div>
            <div>
                <form class="fl__card__ZK_four sendFORM" action="send.php" method="post">
                    <input class="inp_txt__ZK_four Mont-Heavy phone-mask" type="tel" name="tel" required placeholder="ТЕЛЕФОН">
                    <button class="btn__fdback__ZK_four Mont-Heavy" type="submit">
                        <p class="fl_text_desktop">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</p>
                        <p class="fl_text_mobile">ЗАПИСАТЬСЯ НА БЕСПЛАТНОЕ ЗАНЯТИЕ</p>
                    </button>
                </form>
                <div class="block__for__lbl__chk_four">
                    <input required id="card_chk__fl_four" type="checkbox">
                    <label class="card_label_for__chk_four Inter-Light" for="card_chk__fl_four">Я даю согласие на обработку персональных данных</label>
                </div>
            </div>
            <div class="block__note__fl">
                <svg width="302" height="297" viewBox="0 0 302 297" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M186.682 188.65C183.517 181.728 185.401 175.357 189.334 170.295C187.935 162.609 185.704 154.333 182.726 147.961C180 142.127 177.532 136.424 175.516 131.245C174.134 134.753 172.287 138.78 169.878 143.401C157.189 167.737 135.834 207.334 122.86 223.738C119.769 227.646 117.154 230.238 115.245 230.993C102.117 236.185 76.4367 226.87 76.699 217.313C76.9613 207.757 89.3907 205.946 101.159 209.095C108.78 211.133 118.826 217.318 122.86 223.738C135.834 207.334 157.189 167.737 169.878 143.401C172.287 138.78 174.134 134.753 175.516 131.245C170.409 118.126 168.2 108.369 172.025 108.357C176.544 108.342 183.163 111.829 175.516 131.245C177.532 136.424 180 142.127 182.726 147.961C185.704 154.333 187.935 162.609 189.334 170.295C192.202 186.056 191.568 199.34 186.682 188.65Z" fill="#FFD43A" />
                    <path d="M284.965 107.565C284.724 107.068 284.125 106.861 283.629 107.102C283.132 107.343 282.924 107.941 283.165 108.438L284.965 107.565ZM287.271 144.8L288.217 145.126L288.217 145.126L287.271 144.8ZM255.815 165.426L255.689 166.418L255.689 166.418L255.815 165.426ZM208.443 158.852L208.35 157.856L208.35 157.856L208.443 158.852ZM186.682 188.65L187.591 188.234L187.591 188.234L186.682 188.65ZM182.726 147.961L181.82 148.385L181.82 148.385L182.726 147.961ZM172.025 108.357L172.028 109.357L172.028 109.357L172.025 108.357ZM169.878 143.401L170.764 143.864L170.764 143.864L169.878 143.401ZM115.245 230.993L114.877 230.063L114.877 230.063L115.245 230.993ZM76.699 217.313L75.6994 217.286L75.6994 217.286L76.699 217.313ZM101.159 209.095L101.418 208.128L101.418 208.128L101.159 209.095ZM122.742 233.801L123.482 234.473L123.482 234.473L122.742 233.801ZM67.8922 219.887C67.5384 219.463 66.9078 219.406 66.4837 219.76C66.0597 220.114 66.0027 220.744 66.3564 221.168L67.8922 219.887ZM283.165 108.438C289.23 120.941 289.759 134.513 286.326 144.474L288.217 145.126C291.835 134.626 291.242 120.506 284.965 107.565L283.165 108.438ZM286.326 144.474C284.251 150.495 281.886 156.105 277.479 159.909C273.126 163.667 266.615 165.792 255.941 164.434L255.689 166.418C266.739 167.824 273.88 165.658 278.786 161.423C283.638 157.235 286.14 151.151 288.217 145.126L286.326 144.474ZM255.941 164.434C245.144 163.061 238.277 160.982 231.535 159.441C224.775 157.897 218.254 156.928 208.35 157.856L208.537 159.848C218.178 158.944 224.48 159.881 231.089 161.391C237.716 162.905 244.762 165.029 255.689 166.418L255.941 164.434ZM208.35 157.856C205.438 158.129 201.798 159.412 198.26 161.434C194.712 163.462 191.191 166.276 188.544 169.681L190.124 170.909C192.58 167.747 195.886 165.095 199.253 163.171C202.63 161.241 205.994 160.086 208.537 159.848L208.35 157.856ZM188.544 169.681C184.449 174.953 182.413 181.717 185.772 189.066L187.591 188.234C184.622 181.738 186.353 175.762 190.124 170.909L188.544 169.681ZM185.772 189.066C186.395 190.429 186.976 191.468 187.521 192.183C187.793 192.541 188.082 192.851 188.392 193.08C188.699 193.308 189.09 193.501 189.544 193.508C190.557 193.525 191.092 192.686 191.346 192.085C191.629 191.415 191.804 190.517 191.91 189.495C192.336 185.398 191.757 178.025 190.318 170.116L188.35 170.474C189.779 178.327 190.317 185.477 189.921 189.289C189.822 190.244 189.671 190.91 189.503 191.307C189.306 191.773 189.266 191.503 189.577 191.509C189.681 191.51 189.689 191.552 189.582 191.473C189.477 191.395 189.318 191.242 189.112 190.971C188.698 190.428 188.189 189.544 187.591 188.234L185.772 189.066ZM190.318 170.116C188.911 162.385 186.66 154.017 183.632 147.538L181.82 148.385C184.748 154.649 186.96 162.832 188.35 170.474L190.318 170.116ZM183.632 147.538C180.913 141.719 178.455 136.037 176.448 130.882L174.584 131.607C176.61 136.811 179.087 142.535 181.82 148.385L183.632 147.538ZM176.448 130.882C173.901 124.338 172.101 118.694 171.406 114.714C171.055 112.703 171.008 111.233 171.215 110.311C171.316 109.86 171.459 109.628 171.572 109.515C171.661 109.426 171.784 109.357 172.028 109.357L172.022 107.357C171.31 107.359 170.665 107.597 170.163 108.096C169.685 108.57 169.413 109.205 169.263 109.875C168.967 111.196 169.075 112.987 169.436 115.058C170.166 119.239 172.025 125.032 174.584 131.607L176.448 130.882ZM172.028 109.357C174.038 109.35 176.336 110.098 177.399 112.872C178.521 115.8 178.39 121.218 174.586 130.878L176.447 131.611C180.289 121.856 180.672 115.822 179.267 112.156C177.803 108.337 174.531 107.349 172.022 107.357L172.028 109.357ZM174.586 130.878C173.219 134.347 171.388 138.343 168.991 142.939L170.764 143.864C173.187 139.218 175.05 135.158 176.447 131.611L174.586 130.878ZM168.991 142.939C156.286 167.306 134.977 206.805 122.075 223.118L123.644 224.358C136.69 207.864 158.092 168.167 170.764 143.864L168.991 142.939ZM122.075 223.118C120.545 225.052 119.15 226.639 117.915 227.827C116.664 229.032 115.647 229.758 114.877 230.063L115.612 231.923C116.751 231.472 117.996 230.525 119.302 229.268C120.626 227.995 122.083 226.332 123.644 224.358L122.075 223.118ZM114.877 230.063C108.639 232.53 99.2143 231.58 91.2877 228.742C87.3461 227.331 83.8635 225.483 81.4034 223.443C78.9113 221.376 77.6457 219.268 77.6986 217.341L75.6994 217.286C75.6211 220.137 77.4672 222.777 80.1267 224.982C82.8181 227.214 86.5269 229.162 90.6136 230.625C98.7434 233.536 108.723 234.647 115.612 231.923L114.877 230.063ZM77.6986 217.341C77.7578 215.186 78.4938 213.52 79.7029 212.242C80.9277 210.948 82.6916 209.999 84.8767 209.405C89.2616 208.212 95.121 208.514 100.901 210.061L101.418 208.128C95.4291 206.527 89.1895 206.16 84.352 207.475C81.9258 208.134 79.7976 209.232 78.2504 210.867C76.6874 212.519 75.7714 214.662 75.6994 217.286L77.6986 217.341ZM100.901 210.061C104.59 211.047 108.909 213.053 112.806 215.609C116.712 218.172 120.102 221.229 122.013 224.27L123.706 223.206C121.583 219.827 117.933 216.581 113.903 213.937C109.863 211.286 105.349 209.18 101.418 208.128L100.901 210.061ZM122.013 224.27C123.051 225.921 123.616 227.51 123.648 228.975C123.679 230.412 123.201 231.808 122.002 233.128L123.482 234.473C125.011 232.79 125.69 230.902 125.647 228.932C125.605 226.991 124.865 225.05 123.706 223.206L122.013 224.27ZM122.002 233.128C120.291 235.012 117.127 236.406 112.91 237.063C108.726 237.715 103.648 237.617 98.2807 236.655C87.5363 234.729 75.8029 229.37 67.8922 219.887L66.3564 221.168C74.6416 231.1 86.8472 236.637 97.9278 238.624C103.473 239.618 108.779 239.731 113.218 239.039C117.625 238.353 121.324 236.849 123.482 234.473L122.002 233.128Z" fill="#131441" />
                    <ellipse cx="82.0428" cy="53.6206" rx="17.7914" ry="9.55955" transform="rotate(-30.6342 82.0428 53.6206)" fill="#FFD43A" />
                    <path d="M90.4845 49.397L90.1082 47.9169C75.4191 44.5286 65.7209 59.1584 76.2994 63.078C86.4989 66.8572 90.006 55.532 90.4845 49.397Z" fill="#FFD43A" />
                    <path d="M64.8024 4.41034C64.3033 4.17381 63.707 4.38665 63.4704 4.88572C63.2339 5.38479 63.4468 5.98111 63.9458 6.21764L64.8024 4.41034ZM78.7087 3.07351L79.6778 2.82713L79.4249 1.83194L78.4367 2.1112L78.7087 3.07351ZM90.4845 49.397L91.4815 49.4747L91.4943 49.3104L91.4537 49.1506L90.4845 49.397ZM76.2994 63.078L75.9519 64.0157L75.9519 64.0157L76.2994 63.078ZM99.0532 53.33C99.4961 53.66 100.123 53.5685 100.453 53.1257C100.783 52.6829 100.691 52.0563 100.248 51.7263L99.0532 53.33ZM63.9458 6.21764C65.7844 7.08901 67.3265 7.51475 68.7127 7.59793C70.1111 7.68185 71.2887 7.41331 72.3836 6.98642C73.4396 6.57475 74.4744 5.98844 75.4858 5.46863C76.5254 4.93437 77.6337 4.41648 78.9806 4.03581L78.4367 2.1112C76.904 2.54436 75.6603 3.13031 74.5716 3.68981C73.4548 4.26377 72.5854 4.76116 71.6572 5.12302C70.768 5.46966 69.8816 5.66448 68.8325 5.60152C67.7711 5.53783 66.4821 5.20644 64.8024 4.41034L63.9458 6.21764ZM77.7395 3.31988L89.1391 48.1633L91.0774 47.6705L79.6778 2.82713L77.7395 3.31988ZM89.1391 48.1633L89.5153 49.6434L91.4537 49.1506L91.0774 47.6705L89.1391 48.1633ZM89.4875 49.3192C89.2555 52.2942 88.2873 56.4572 86.221 59.3777C85.1985 60.823 83.9421 61.9157 82.418 62.4546C80.9062 62.9893 79.0186 63.0191 76.6468 62.1403L75.9519 64.0157C78.6799 65.0265 81.0555 65.0579 83.0849 64.3402C85.1019 63.6269 86.6647 62.2134 87.8537 60.5329C90.2104 57.2018 91.235 52.6348 91.4815 49.4747L89.4875 49.3192ZM76.6468 62.1403C74.2545 61.2539 73.1821 59.8456 72.9116 58.3956C72.6311 56.8924 73.1631 55.0878 74.5135 53.3764C77.2026 49.9685 82.9004 47.2805 89.8835 48.8913L90.333 46.9425C82.6269 45.1649 76.1311 48.0978 72.9434 52.1375C71.3554 54.15 70.5283 56.526 70.9455 58.7624C71.3727 61.0521 73.055 62.9423 75.9519 64.0157L76.6468 62.1403ZM89.8835 48.8913C92.7504 49.5526 95.8501 50.9428 99.0532 53.33L100.248 51.7263C96.8455 49.1903 93.4954 47.6719 90.333 46.9425L89.8835 48.8913Z" fill="#131441" />
                    <ellipse cx="31.4175" cy="96.4358" rx="13.2087" ry="7.09723" transform="rotate(-55.1678 31.4175 96.4358)" fill="#FFD43A" />
                    <path d="M35.8171 90.9811L35.1067 90.0974C24.1412 92.3373 22.1011 105.208 30.4541 104.594C38.5079 104.002 37.3852 95.2722 35.8171 90.9811Z" fill="#FFD43A" />
                    <path d="M4.60701 68.2569C4.05478 68.249 3.60068 68.6902 3.59273 69.2424C3.58479 69.7947 4.02602 70.2488 4.57824 70.2567L4.60701 68.2569ZM13.5835 63.3246L14.3628 62.6981L13.7194 61.8978L12.9365 62.5621L13.5835 63.3246ZM35.8171 90.9811L36.7564 90.6379L36.6998 90.483L36.5965 90.3545L35.8171 90.9811ZM30.4541 104.594L30.5274 105.591L30.5274 105.591L30.4541 104.594ZM42.7626 91.2477C43.3025 91.3641 43.8345 91.0207 43.9508 90.4808C44.0672 89.9409 43.7238 89.4089 43.1839 89.2926L42.7626 91.2477ZM4.57824 70.2567C6.11128 70.2788 7.31876 70.0884 8.3197 69.7022C9.3321 69.3116 10.0748 68.743 10.7026 68.0967C11.3011 67.4805 11.8339 66.7462 12.3473 66.0953C12.8803 65.4196 13.457 64.7434 14.2304 64.0871L12.9365 62.5621C12.0159 63.3432 11.3442 64.1376 10.7771 64.8567C10.1903 65.6006 9.771 66.1853 9.26796 66.7032C8.79412 67.191 8.28566 67.5716 7.59973 67.8363C6.90233 68.1054 5.96431 68.2764 4.60701 68.2569L4.57824 70.2567ZM12.8041 63.9512L34.3274 90.724L35.8861 89.4709L14.3628 62.6981L12.8041 63.9512ZM34.3274 90.724L35.0378 91.6077L36.5965 90.3545L35.8861 89.4709L34.3274 90.724ZM34.8779 91.3243C35.6301 93.3827 36.2445 96.4425 35.7613 98.9884C35.5232 100.243 35.0302 101.315 34.2155 102.102C33.4101 102.88 32.2048 103.463 30.3808 103.597L30.5274 105.591C32.7302 105.43 34.4048 104.699 35.605 103.54C36.7959 102.39 37.4344 100.899 37.7263 99.3613C38.3032 96.3213 37.5723 92.8706 36.7564 90.6379L34.8779 91.3243ZM30.3808 103.597C28.5609 103.731 27.4997 103.134 26.9333 102.328C26.3357 101.478 26.1346 100.178 26.5074 98.6535C27.2484 95.6234 30.1876 92.1229 35.3069 91.0772L34.9066 89.1177C29.0604 90.3118 25.4968 94.3665 24.5646 98.1783C24.1007 100.075 24.2705 102.018 25.297 103.478C26.3546 104.983 28.1708 105.765 30.5274 105.591L30.3808 103.597ZM35.3069 91.0772C37.4088 90.6479 39.8947 90.6296 42.7626 91.2477L43.1839 89.2926C40.0725 88.622 37.3056 88.6276 34.9066 89.1177L35.3069 91.0772Z" fill="#131441" />
                </svg>
            </div>
        </div>
    </div>





    <section class="mainContainer_MA">
        <div class="ourAtmosphere">
            <div class="ourAtmosphere__container">
                <div class="ourAtmosphere__content">
                    <div class="ourAtmosphere__content-headline Lh-120_MA Mont_Heavy_MA Up-c_MA darkBlue_MA">ты влюбишься <br>в нашу атмосферу<br> <span class="Mont_Extra_Light_MA ourAtmosphere__content-headline__spanOff">и останешься тут</span> надолго</div>
                    <div class="ourAtmosphere__content-firstImg bg-options_MA ourAtmosphere__content-unionImgSiz"></div>
                    <div class="ourAtmosphere__content-firstInfoArea darkBlue_MA">
                        <div class="ourAtmosphere__content-firstInfoArea-1number Mont_Heavy_MA">1</div>
                        <div class="ourAtmosphere__content-firstInfoArea-content">
                            <div class="ourAtmosphere__content-firstInfoArea-content-headline Mont_Heavy_MA Lh-120_MA Up-c_MA">обучаем только <br>на твоих любимых песнях любого жанра</div>
                            <div class="ourAtmosphere__content-firstInfoArea-content-text Inter_Regular_MA Lh-130_MA">Так ты точно будешь получать удовольствие <br>от обучения. Перед началом занятий <span class="Inter_semi_bold_MA">ты составишь список из любимых песен и будешь учиться на них.</span></div>
                        </div>
                        <img src="img/ourAtmosphere__content-firstInfoArea-star.svg" class="ourAtmosphere__content-firstInfoArea-star">
                    </div>
                    <div class="ourAtmosphere__content_flexZone">
                        <div class="ourAtmosphere__content_flexZone-left">
                            <div class="ourAtmosphere__content-thirdImg bg-options_MA"></div>
                            <div class="ourAtmosphere__content-firstInfoArea darkBlue_MA">
                                <div class="ourAtmosphere__content-firstInfoArea-1number Mont_Heavy_MA">3</div>
                                <div class="ourAtmosphere__content-firstInfoArea-content">
                                    <div class="ourAtmosphere__content-firstInfoArea-content-headline Mont_Heavy_MA Lh-120_MA Up-c_MA">всех учеников готовим<br> к выступлению на отчетных концертах</div>
                                    <div class="ourAtmosphere__content-firstInfoArea-content-text Inter_Regular_MA Lh-130_MA">На наших атмосферных квартирниках ты <span class="Inter_semi_bold_MA">преодолеешь страх первых выступлений</span>. После этого начнем готовить тебя к масштабным отчетным концертам на <span class="Inter_semi_bold_MA">300+</span> человек.</div>
                                </div>
                            </div>

                            <div class="toPerformance_MA__formHeadline toPerformance_MA__formHeadline__ourAtmosphere Up-c_MA Mont_Heavy_MA">Приходи на бесплатное занятие</div>
                            <form class="main_form_MA sendFORM" action="send.php" method="post">
                                <div class="main_form_MA-flex">
                                    <input placeholder="Телефон" class="tel_input_MA tel_input_MA__schoolOfMusic-ver Up-c_MA Mont_Heavy_MA phone-mask" name="tel" required>
                                    <button class="Mont_Heavy_MA Up-c_MA accept_button_MA accept_button_MA__schoolOfMusic-ver">Оставить заявку</button>
                                </div>
                                <div class="schoolOfMusic_MA__form-checkboxArea">
                                    <input type="checkbox" class="checkbox-b_MA" id="toPerformance_MA-checkbox" required><label for="toPerformance_MA-checkbox" class="checkbox-b_MA_label Inter_Regular_MA">Я даю согласие на обработку персональных данных</label>
                                </div>
                            </form>

                        </div>
                        <div class="ourAtmosphere__content_flexZone-right">

                            <div class="ourAtmosphere__content-secondInfoArea">
                                <div class="ourAtmosphere__content-secondImg bg-options_MA"></div>
                                <div class="ourAtmosphere__content-secondInfoArea-content darkBlue_MA">
                                    <div class="ourAtmosphere__content-secondInfoArea-content-2number Mont_Heavy_MA">2</div>
                                    <div class="ourAtmosphere__content-secondInfoArea-content-text">
                                        <div class="ourAtmosphere__content-secondInfoArea-content-text-headline Lh-120_MA Up-c_MA Mont_Heavy_MA">Как можно быстрее<br>приступаем к практике</div>
                                        <div class="ourAtmosphere__content-secondInfoArea-content-text-text Inter_Regular_MA Lh-130_MA">Даем самую необходимую теорию и делаем упор на практику с первого занятия. Поэтому <span class="Inter_semi_bold_MA">обучение проходит легко и интересно</span>. Мы за то, чтобы ты как можно <span class="Inter_semi_bold_MA">быстрее исполнил первую песню.</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="ourAtmosphere__content-fourthInfoArea">
                                <div class="ourAtmosphere__content-fourthImg ourAtmosphere__content-fourthImg__position"></div>
                                <div class="ourAtmosphere__content-secondInfoArea-content darkBlue_MA">
                                    <div class="ourAtmosphere__content-secondInfoArea-content-2number ourAtmosphere__content-secondInfoArea-content-4number Mont_Heavy_MA">4</div>
                                    <div class="ourAtmosphere__content-secondInfoArea-content-text">
                                        <div class="ourAtmosphere__content-secondInfoArea-content-text-headline Lh-120_MA Up-c_MA Mont_Heavy_MA">Мы - сообщество и друзья</div>
                                        <div class="ourAtmosphere__content-secondInfoArea-content-text-text Inter_Regular_MA Lh-130_MA">В Октаве музыканты <span class="Inter_semi_bold_MA">поддерживают друг друга</span>, объединяются<br> по интересам и <span class="Inter_semi_bold_MA">собираются в группы</span>. Мы проводим мастер-классы, совместные киновечера и вместе играем в настольные игры.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="ourAtmosphere__content-b darkBlue_MA">
                    <div class="ourAtmosphere__content-headline ourAtmosphere__content-headline__desktop Lh-120_MA Mont_Heavy_MA Up-c_MA ">ты влюбишься <br>в нашу<br class="ourAtmosphere_991BrShow"> атмосферу<br> <span class="Mont_Extra_Light_MA">и останешься<br class="ourAtmosphere_991BrShow"> тут</span> надолго</div>
                    <div class="ourAtmosphere__content-headline ourAtmosphere__content-headline__mobile Lh-120_MA Mont_Heavy_MA Up-c_MA ">ты влюбишься <br>в нашу<br class="ourAtmosphere_991BrShow"> атмосферу<br> и останешься<br class="ourAtmosphere_991BrShow"> тут надолго</div>
                    <div class="ourAtmosphere__content-b__contentBlock ourAtmosphere__content-b__contentBlock__firstBlock">
                        <div class="ourAtmosphere__content-b__contentBlock-IMG ourAtmosphere__content-b__contentBlock-IMG__first bg-options_MA"></div>
                        <div class="ourAtmosphere__content-b__contentBlock-content">
                            <div class="ourAtmosphere__content-b__contentBlock-content__number Mont_Heavy_MA">1</div>
                            <div class="ourAtmosphere__content-b__contentBlock-content__text">
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-headline Mont_Heavy_MA Up-c_MA Lh-120_MA">обучаем только <br>на твоих любимых песнях любого жанра</div>
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-text Inter_Regular_MA Lh-130_MA">Так ты точно будешь получать удовольствие <br>от обучения. Перед началом занятий <span class="Inter_semi_bold_MA">ты составишь список из любимых песен</span> и <span class="Inter_semi_bold_MA">будешь учиться на них.</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="ourAtmosphere__content-b__contentBlock">
                        <div class="ourAtmosphere__content-b__contentBlock-IMG ourAtmosphere__content-b__contentBlock-IMG__second bg-options_MA"></div>
                        <div class="ourAtmosphere__content-b__contentBlock-content">
                            <div class="ourAtmosphere__content-b__contentBlock-content__number Mont_Heavy_MA">2</div>
                            <div class="ourAtmosphere__content-b__contentBlock-content__text">
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-headline Mont_Heavy_MA Up-c_MA Lh-120_MA">Как можно быстрее<br>приступаем к практике</div>
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-text Inter_Regular_MA Lh-130_MA">Даем самую необходимую теорию и делаем упор<br> на практику с первого занятия. Поэтому <span class="Inter_semi_bold_MA">обучение проходит легко и интересно</span>. Мы за то, чтобы ты<br> как можно <span class="Inter_semi_bold_MA">быстрее исполнил первую песню.</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="ourAtmosphere__content-b__contentBlock">
                        <div class="ourAtmosphere__content-b__contentBlock-IMG ourAtmosphere__content-b__contentBlock-IMG__third bg-options_MA"></div>
                        <div class="ourAtmosphere__content-b__contentBlock-content">
                            <div class="ourAtmosphere__content-b__contentBlock-content__number Mont_Heavy_MA">3</div>
                            <div class="ourAtmosphere__content-b__contentBlock-content__text">
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-headline Mont_Heavy_MA Up-c_MA Lh-120_MA">всех учеников готовим<br> к выступлению на отчетных концертах</div>
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-text Inter_Regular_MA Lh-130_MA">На наших атмосферных квартирниках ты сможешь <span class="Inter_semi_bold_MA">преодолеть страх первых выступлений</span>. После этого начнем готовить тебя к масштабным отчетным концертам на <span class="Inter_semi_bold_MA">300+</span> человек</div>
                            </div>
                        </div>
                    </div>

                    <div class="ourAtmosphere__content-b__contentBlock">
                        <div class="ourAtmosphere__content-b__contentBlock-IMG ourAtmosphere__content-b__contentBlock-IMG__fourth ourAtmosphere__content-b__contentBlock-IMG__fourth__position"></div>
                        <div class="ourAtmosphere__content-b__contentBlock-content">
                            <div class="ourAtmosphere__content-b__contentBlock-content__number Mont_Heavy_MA">4</div>
                            <div class="ourAtmosphere__content-b__contentBlock-content__text">
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-headline Mont_Heavy_MA Up-c_MA Lh-120_MA">Мы - сообщество и друзья</div>
                                <div class="ourAtmosphere__content-b__contentBlock-content__text-text Inter_Regular_MA Lh-130_MA">В Октаве музыканты <span class="Inter_semi_bold_MA">поддерживают друг друга</span>, объединяются по интересам и <span class="Inter_semi_bold_MA">собираются в группы</span>. Мы проводим мастер-классы, совместные киновечера и вместе играем в настольные игры</div>
                            </div>
                        </div>
                    </div>

                    <div class="toPerformance_MA__formHeadline toPerformance_MA__formHeadline__ourAtmosphere-b Up-c_MA Mont_Heavy_MA">Приходи на бесплатное занятие</div>
                    <form class="main_form_MA sendFORM" action="send.php" method="post">
                        <div class="main_form_MA-flex">
                            <input placeholder="Телефон" class="tel_input_MA tel_input_MA__schoolOfMusic-ver Up-c_MA Mont_Heavy_MA phone-mask" name="tel" required>
                            <button class="Mont_Heavy_MA Up-c_MA accept_button_MA accept_button_MA__schoolOfMusic-ver">Оставить заявку</button>
                        </div>
                        <div class="schoolOfMusic_MA__form-checkboxArea">
                            <input type="checkbox" class="checkbox-b_MA" id="toPerformance_MA-checkbox" required><label for="toPerformance_MA-checkbox" class="checkbox-b_MA_label Inter_Regular_MA">Я даю согласие на обработку персональных данных</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ourAtmosphere__IMAGES">
                <img src="img/ourAtmosphere_star-1.svg" class="ourAtmosphere_star-1">
                <img src="img/ourAtmosphere__arowWithStar-1.svg" class="ourAtmosphere__arrowWithStar-1">
                <img src="img/ourAtmosphere__arrow-2.svg" class="ourAtmosphere__arrow-2">
                <img src="img/ourAtmosphere_star-2.svg" class="ourAtmosphere_star-2">
                <img src="img/ourAtmosphere_star-3.svg" class="ourAtmosphere_star-3">
                <img src="img/ourAtmosphere__arrow-3.svg" class="ourAtmosphere__arrow-3">
            </div>
            <img src="img/ourAtmosphere_star-4.svg" class="ourAtmosphere_star-4">
        </div>
    </section>

    <div class="container__marg">
        <div class="course__main__title Mont-Heavy">КУРСЫ</div>
        <div class="container__course__desk">
            <div class="course__block__services">
                <img src="assets/img/course_vocal.png">
                <div class="course_block_text">
                    <p class="course__title">ВОКАЛ</p>
                    <p class="course__description">На занятиях по барабанам ты получишь такие эмоции, которые не получишь больше нигде в жизни...</p>
                    <a class="course__more" href="vocal.php">ПОДРОБНЕЕ ></a>
                </div>
                <div class="course__btns_block">
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>

            <div class="course__block__services">
                <img src="assets/img/course_acus.png">
                <div class="course_block_text">
                    <p class="course__title">АКУСТИЧЕСКАЯ ГИТАРА</p>
                    <p class="course__description">Тут ты сможешь отдохнуть эмоционально и научиться самостоятельно играть любые песни, подыгрывать себе во...</p>
                    <a class="course__more" href="acoustiс_guitar.php">ПОДРОБНЕЕ ></a>
                </div>
                <div class="course__btns_block">
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>

            <div class="course__block__services">
                <img src="assets/img/course_electro.png">
                <div class="course_block_text">
                    <p class="course__title">ЭЛЕКТРОГИТАРА</p>
                    <p class="course__description">На занятиях по электрогитаре ты
                        научишься играть яркие сольные партии и риффы из твоих любимых песен...</p>
                    <a class="course__more" href="electro_guitar.php">ПОДРОБНЕЕ ></a>
                </div>
                <div class="course__btns_block">
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>


            <div class="course__block__services">
                <img src="assets/img/course_key.png">
                <div class="course_block_text">
                    <p class="course__title">КЛАВИШНЫЕ</p>
                    <p class="course__description">Тут ты сможешь отдохнуть эмоционально
                        и научиться самостоятельно играть любые песни, подыгрывать себе во время пения и писать музыку...</p>
                    <a class="course__more" href="pianino.php">ПОДРОБНЕЕ ></a>
                </div>
                <div class="course__btns_block">
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>

            <div class="course__block__services">
                <img src="assets/img/course_bass.png">
                <div class="course_block_text">
                    <p class="course__title">БАС-ГИТАРА
                    <p class="course__description">Бархатный звук бас-гитары завораживает.
                        Она задает ритм и делает звук в любой композиции более плотным и объемным...</p>
                    <a class="course__more" href="bas_guitar.php">ПОДРОБНЕЕ ></a>
                </div>
                <a class="course__more_420" href="bas_guitar.php">ПОДРОБНЕЕ ></a>
                <div class="course__btns_block">
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>

            <div class="course__block__services">
                <img src="assets/img/course_extreme.png">
                <div class="course_block_text">
                    <p class="course__title last_elem_ZK">ЭКСТРИМ-ВОКАЛ</p>
                    <p class="course__description">Грани вокальных возможностей и
                        уникальная манера исполнения, выплеск чувств через агрессивное звучание...</p>
                    <a class="course__more" href="extreme_vocal.php">ПОДРОБНЕЕ ></a>
                </div>
                <a class="course__more_420" href="extreme_vocal.php">ПОДРОБНЕЕ ></a>
                <div class="course__btns_block">
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>
        </div>
        <div class="container__course__mobl">
            <div class="card_vocal_mobl" id="card_vocal_mobl" flg="">
                <div class="block__title__course">
                    <p class="course_text__title" onclick="GetCardInf('card_vocal_mobl', event)">ВОКАЛ</p>
                    <p class="course__toggle__btn flg" onclick="GetCardInf('card_vocal_mobl', event)"></p>
                </div>

                <div class="course__block__services">
                    <img src="assets/img/course_vocal.png">
                    <div class="course_block_text">
                        <p class="course__title" onclick="GetCardInf('card_vocal_mobl', event)">ВОКАЛ</p>
                        <p class="course__description">Помогаем ученикам расслабиться, сделать их
                            голос сильнее, стать более уверенными в себе и полюбить выступления...</p>
                        <a class="course__more" href="vocal.php">ПОДРОБНЕЕ ></a>
                    </div>
                </div>
                <a class="course__more_420" href="vocal.php">ПОДРОБНЕЕ ></a>
                <div class="course__btns_block">
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                </div>
                <div class="course__block__services">
                    <img src="assets/img/course_extreme.png">
                    <div class="course_block_text">
                        <p class="course__title last_elem_ZK" onclick="GetCardInf('card_vocal_mobl', event)">ЭКСТРИМ-ВОКАЛ</p>
                        <p class="course__description">Грани вокальных возможностей и
                            уникальная манера исполнения, выплеск чувств через агрессивное звучание...</p>
                        <a class="course__more" href="extreme_vocal.php">ПОДРОБНЕЕ ></a>
                    </div>
                </div>
                <a class="course__more_420" href="extreme_vocal.php">ПОДРОБНЕЕ ></a>
                <div class="course__btns_block">
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                    <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                </div>
            </div>

            <div class="course__block__services_card">
                <div class="cont_card_white">
                    <img src="assets/img/course_baraban.png">
                    <div class="course_block_text__card">
                        <p class="course__title__card">БАРАБАНЫ</p>
                        <p class="course__description__card">Помогаем ученикам расслабиться, сделать их голос сильнее, стать более уверенными
                            в себе и полюбить выступления...</p>
                        <a class="course__more__card" href="baraban.php">ПОДРОБНЕЕ ></a>
                    </div>
                </div>
                <a class="course__more__card_420" href="baraban.php">ПОДРОБНЕЕ ></a>
                <div class="course__btns_block">
                    <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                    <button class="btn__course__teacher__card">УЧИТЕЛЯ</button>

                </div>
            </div>

            <div class="container__course__mobl">
                <div class="card_gitar_mobl" id="card_gitar_mobl" flg="">
                    <div class="block__title__course">
                        <p class="course_text__title" onclick="GetCardInf('card_gitar_mobl', event)">ГИТАРА</p>
                        <p class="course__toggle__btn flg" onclick="GetCardInf('card_gitar_mobl', event)"></p>
                    </div>

                    <div class="course__block__services">
                        <img src="assets/img/course_acus.png">
                        <div class="course_block_text">
                            <p class="course__title " onclick="GetCardInf('card_gitar_mobl', event)">АКУСТИЧЕСКАЯ ГИТАРА</p>
                            <p class="course__description">Тут ты отвлечешься от рутины, научиться «с ходу» играть любимые
                                песни и и быть уверенным в любой компании, когда просят сыграть на гитаре...</p>
                            <a class="course__more" href="acoustiс_guitar.php">ПОДРОБНЕЕ ></a>
                        </div>
                    </div>
                    <a class="course__more_420" href="acoustiс_guitar.php">ПОДРОБНЕЕ ></a>
                    <div class="course__btns_block">
                        <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                        <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    </div>

                    <div class="course__block__services">
                        <img src="assets/img/course_electro.png">
                        <div class="course_block_text">
                            <p class="course__title" onclick="GetCardInf('card_gitar_mobl', event)">ЭЛЕКТРОГИТАРА</p>
                            <p class="course__description">На занятиях по электрогитаре ты научишься играть яркие сольные партии и риффы из твоих любимых песен...</p>
                            <a class="course__more" href="electro_guitar.php">ПОДРОБНЕЕ ></a>
                        </div>
                    </div>
                    <a class="course__more_420" href="electro_guitar.php">ПОДРОБНЕЕ ></a>
                    <div class="course__btns_block">
                        <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                        <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    </div>

                    <div class="course__block__services">
                        <img src="assets/img/course_bass.png">
                        <div class="course_block_text">
                            <p class="course__title" onclick="GetCardInf('card_gitar_mobl', event)">БАС-ГИТАРА</p>
                            <p class="course__description">Бархатный звук бас-гитары завораживает. Она задает ритм и делает
                                звук в любой композиции более плотным и объемным...</p>
                            <a class="course__more" href="bas_guitar.php">ПОДРОБНЕЕ ></a>
                        </div>
                    </div>
                    <a class="course__more_420" href="bas_guitar.php">ПОДРОБНЕЕ ></a>
                    <div class="course__btns_block">
                        <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                        <button class="btn__course__teacher" onclick="window.location.href='teachers.php'">УЧИТЕЛЯ</button>
                    </div>
                </div>



                <div class="course__block__services_card">
                    <div class="cont_card_white">
                        <img src="assets/img/course_key.png">
                        <div class="course_block_text__card">
                            <p class="course__title__card">КЛАВИШНЫЕ</p>
                            <p class="course__description__card">Помогаем ученикам расслабиться, сделать их голос сильнее, стать
                                более уверенными в себе и полюбить выступления...</p>
                            <a class="course__more__card" href="pianino.php">ПОДРОБНЕЕ ></a>
                        </div>
                    </div>
                    <a class="course__more__card_420" href="pianino.php">ПОДРОБНЕЕ ></a>
                    <div class="course__btns_block">
                        <button class="btn__course__fdbk popupActive-button">ОСТАВИТЬ ЗАЯВКУ</button>
                        <button class="btn__course__teacher__card">УЧИТЕЛЯ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <?php require_once('req/free_lesson_sofa.php') ?>



    <style>
        .IndexTeacherInfo__MA__slider-blockIMG-links {
            position: absolute;
            right: 5px;
            bottom: 5px;
            display: none
        }

        .IndexTeacherInfo__MA__slider-blockIMG-links__container {
            width: 50px
        }

        .IndexTeacherInfo__MA__slider-blockIMG-links-link {
            width: 50px;
            height: 50px;
            margin-bottom: 5px
        }

        .teacherPrevIMG__ICONS:hover {
            fill: #3B32F5
        }
    </style>
    <section>
        <div class="IndexTeacherInfo__MA">
            <div class="IndexTeacherInfo__MA__container">
                <div class="IndexTeacherInfo__MA__content">
                    <div class="IndexTeacherInfo__MA__content__info">
                        <div class="IndexTeacherInfo__MA__content__info__headline Up-c_MA Mont_Heavy_MA darkBlue_MA Lh-120_MA">Учителя</div>
                        <div class="IndexTeacherInfo__MA__content__info__subtitle Up-c_MA Mont_Heavy_MA Lh-120_MA">Каждый учитель в нашей школе - профессионал с большим опытом преподавания.</div>
                        <div class="IndexTeacherInfo__MA__content__info__text Inter_Regular_MA Lh-130_MA">Эти люди <span class="Inter_semi_bold_MA">любят музыку</span> и <span class="Inter_semi_bold_MA">живут ей</span>.<br> Тут ты найдешь учителя,<br> который подойдет именно тебе или<br> сможет найти общий язык с твоим ребенком. </div>
                    </div>
                    <div class="IndexTeacherInfo__MA__slider__container">
                        <div class="IndexTeacherInfo__MA__slider">
                            <div class="IndexTeacherInfo__MA__slider-wrap">


                                <div class="IndexTeacherInfo__MA__slider-block">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-KARPOVA.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">ВЕРОНИКА КАРПОВА</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">Вокал</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Куда бы ни заводили меня дороги жизни, они приводили к музыке...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-SMIRNOVA.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">СВЕТЛАНА СМИРНОВА</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">Вокал</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Музыка — океан, в нем можно утонуть, а можно научится плавать...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-KUZNECOVA.jpg" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">ИРИНА КУЗНЕЦОВА</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">экстрим Вокал</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Обожаю музыку в разных проявлениях! Особенно вокал...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block IndexTeacherInfo__MA__slider-block__blue">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-TARASOV.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">АЛЕКСАНДР ТАРАСОВ</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">ГИТАРА</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Успех гарантирую всем новичкам, конечно если будете делать домашку...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block IndexTeacherInfo__MA__slider-block__blue">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-LAZO.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">АЛЕКСЕЙ ЛАЗО</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">БАС</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Музыка — это драйв, реализация идей, мыслей и то, что можно...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block IndexTeacherInfo__MA__slider-block__violet">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-POPOV.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">АЛЕКСЕЙ ПОПОВ</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">Барабаны</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«как научиться играть? Всё просто! Берешь палочки и вперёд! Главное делать...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block IndexTeacherInfo__MA__slider-block__violetLight">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-PORTNOV.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">РОСТИСЛАВ ПОРТНОВ</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">Барабаны</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Музыка для меня это образ мышления, стиль жизни. Благодаря этому...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>
                                <div class="IndexTeacherInfo__MA__slider-block IndexTeacherInfo__MA__slider-block__blue">
                                    <div class="IndexTeacherInfo__MA__slider-block__container">
                                        <div class="IndexTeacherInfo__MA__slider-blockIMG__container">
                                            <img src="img/IndexTeacherInfo__MA__slider-blockIMG-KALACHINA.png" class="IndexTeacherInfo__MA__slider-blockIMG">
                                            <?php require('req/prevIMGteacher__links.php') ?>
                                        </div>
                                        <div class="IndexTeacherInfo__MA__slider-block__teacherName">ЕЛИЗАВЕТА КАЛАЧИНА</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__direction">Клавишные</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__description">«Думаете, что я даю уроки по вокалу, но нет, уже 10 лет я связана с фортепиано...»</div>
                                        <div class="IndexTeacherInfo__MA__slider-block__linkArea"><a href="#" class="IndexTeacherInfo__MA__slider-block__link">Подробнее</a><img src="img/IndexTeacherInfo__MA__slider-block__link-arrow.svg" class="IndexTeacherInfo__MA__slider-block__link-arrow"></div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="IndexTeacherInfo__MA__slider__controlPanel">
                            <div class="IndexTeacherInfo__MA__slider__controlPanel__buttons">
                                <img src="img/IndexTeacherInfo__MA__slider_next.svg" class="IndexTeacherInfo__MA__slider_prev IndexTeacherInfo__MA__slider_btn">
                                <img src="img/IndexTeacherInfo__MA__slider_next.svg" class="IndexTeacherInfo__MA__slider_next IndexTeacherInfo__MA__slider_btn">
                            </div>
                            <a href="teachers.php" class="IndexTeacherInfo__MA__slider__controlPanel__link Mont_Heavy_MA Up-c_MA">Посмотреть всех</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        $('.IndexTeacherInfo__MA__slider-block').mouseover(function() {
            $(this).children().children().eq(0).css({
                height: '420px'
            });
            $(this).children().children().eq(0).children().eq(1).css({
                display: 'block'
            });
            $(this).children().children().eq(3).css({
                display: 'none'
            });
        });

        $('.IndexTeacherInfo__MA__slider-block').mouseout(function() {
            $(this).children().children().eq(0).css({
                height: '320px'
            });
            $(this).children().children().eq(0).children().eq(1).css({
                display: 'none'
            });
            $(this).children().children().eq(3).css({
                display: 'block'
            });

        });
    </script>

    <!--БЛОК ОТЗЫВОВ -->
    <div class="mainContainer_MA">
        <?php require_once('req/reviewsBlock.php') ?>
    </div>

    <script src="js/videoScripts.js"></script>
    <!--БЛОК ОТЗЫВОВ -->




    <section class="mainContainer_MA">
        <div class="FAQ_MA">
            <div class="FAQ_MA__container">
                <div class="FAQ_MA__content">
                    <div class="FAQ_MA__headline Mont_Heavy_MA Up-c_MA darkBlue_MA">ОТВЕТЫ<br class="FAQ__mobile-br"> <span class="Mont_Extra_Light_MA">НА ВОПРОСЫ</span></div>
                    <div class="FAQ_MA__subtitle Mont_Heavy_MA Up-c_MA">которые вы часто задаете</div>
                    <div class="FAQ_MA__1500-flex">

                        <div class="FAQ_MA__materials">

                            <div class="FAQ_MA__materials__block">

                                <div class="FAQ_MA__materials__block-content">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Через сколько я получу результат?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Через 4 занятия наши ученики уже исполняют свою первую песню. Но тут все зависит от тебя.
                                        <p>Приходи на бесплатное пробное занятие и наш учитель составит путь твоего развития.</p>
                                    </div>
                                </div>

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">сМогу ли я перейти <br>на другое направление?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Да, ты сможешь перейти в класс по другому направлению в любое время. Доплачивать не нужно.</div>
                                </div>

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Какой нужен уровень,<br> чтобы начать заниматься?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Никаких ограничений. Даже если ты никогда не занимался музыкой, наши учителя помогут тебе пройти путь от первых песен до большой сцены.</div>
                                </div>

                            </div>

                            <div class="FAQ_MA__materials__block">

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg_1500">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Сколько стоит обучение?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">У нас есть разные абонементы и каждый найдет то, что подходит именно ему. Стоимость одного занятия начинается от 650 рублей.
                                        Актуальная информация есть на странице <a href="#" class="Inter_semi_bold_MA" style="text-decoration: underline; color: black">“Направления и цены”</a>. </div>
                                </div>

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">С какого возраста можно привести ребенка в школу?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Это зависит от выбранного направления. В среднем, от 7-8 лет.</div>
                                </div>

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Могу ли я сменить учителя?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Да, ты сможешь сменить учителя в любое время. Доплачивать не нужно.</div>
                                </div>

                            </div>

                            <div class="FAQ_MA__materials__block">

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg_1500">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Буду ли я выступать?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Да! Мы готовим к выступлениям абсолютно всех учеников. Регулярно организуем квартирники и масштабные отчетные концерты, на которых ты сможешь выступить.</div>
                                </div>

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Обязательно для занятий покупать свой инструмент?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Нет, любой ученик нашей школы может бесплатно заниматься в одном из кабинетов в свободное время.</div>
                                </div>

                                <div class="FAQ_MA__materials__block-content FAQ_MA__materials__block-content__mg">
                                    <div class="FAQ_MA__materials__block-content__question">
                                        <div class="FAQ_MA__materials__block-content__question-text">Есть программы обучения для более опытных?</div>
                                        <img src="img/FAQ_MA__materials__block-content__question-plus.svg" class="FAQ_MA__materials__block-content__question-plus">
                                    </div>
                                    <div class="FAQ_MA__materials__block-content__answer">Конечно! Все учителя в нашей школе - опытные музыканты, которые могут усилить ученика любого уровня. С более опытными учениками анализируем стиль игры, разбираем ошибки и изучем профессиональные музыкальные техники.</div>
                                </div>

                            </div>

                        </div>

                        <div class="FAQ-formArea">
                            <form class="FAQ-form sendFORM" action="send.php" method="post">
                                <div class="FAQ-form__headline Mont_Black_MA Up-c_MA Lh-120_MA">Остались вопросы?<br class="FAQ__mobile-br"> Задавай их нам!</div>
                                <div class="FAQ-form__subtitle Inter_Light_MA Lh-130_MA">Оставь любой свой впорос и наш менеджер с тобой свяжется.</div>
                                <div class="FAQ-form__input-flex">
                                    <input placeholder="ИМЯ" type="text" class="FAQ-form__input FAQ-form__input-mainOptions" name="name" required>
                                    <input placeholder="ТЕЛЕФОН" type="tel" class="FAQ-form__input FAQ-form__input-mainOptions phone-mask" name="tel" required>
                                </div>
                                <textarea placeholder="ЗАДАЙ СВОЙ ВОПРОС ТУТ" class="FAQ-form__input-mainOptions FAQ-form__textarea" name="subj" required></textarea><br>
                                <button class="FAQ-form__button FAQ-form__input-mainOptions" type="submit">ОТПРАВИТЬ</button>
                                <div class="schoolOfMusic_MA__form-checkboxArea">
                                    <input type="checkbox" class="checkbox-b_MA" id="FAQ-checkbox" required><label for="FAQ-checkbox" class="checkbox-b_MA_label Inter_Regular_MA ">Я даю согласие на обработку персональных данных</label>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <img src="img/FAQ_guitarist.svg" class="FAQ_guitarist">
        </div>
    </section>

    <?php require('req/contactsAndMap.php') ?>
    <?php require('req/vkSoc.php') ?>

    <div class=screen__footer>
        <?php require('footer.php') ?>
        <?php require_once('modal_thank.php') ?>
    </div>
    <script>
        let vocal = document.getElementById('card_vocal_mobl');
        let gitar = document.getElementById('card_gitar_mobl');

        function GetCardInf(id, ev) {
            let card = document.getElementById(id);
            if (card.getAttribute('flg')) {
                if (!ev.currentTarget.classList.contains('course__toggle__btn')) return;
                card.getElementsByClassName('course__toggle__btn')[0].className = 'course__toggle__btn flg'


                let img = card.getElementsByTagName('img');
                for (let i = 0; i < img.length; i++) {
                    img[i].style.display = 'none';
                    card.getElementsByClassName('course__description')[i].style.display = 'none';
                    if (window.innerWidth > 420) {
                        card.getElementsByClassName('course__more')[i].style.display = 'none';
                    } else {
                        card.getElementsByClassName('course__more_420')[i].style.display = 'none'
                    }
                    card.getElementsByClassName('course__btns_block')[i].style.display = 'none';
                }

                card.setAttribute('flg', '');
            } else {
                let img = card.getElementsByTagName('img');
                for (let i = 0; i < img.length; i++) {
                    img[i].style.display = 'block';
                    card.getElementsByClassName('course__description')[i].style.display = 'block';

                    if (window.innerWidth > 420) {
                        card.getElementsByClassName('course__more')[i].style.display = 'block';
                    } else {
                        card.getElementsByClassName('course__more_420')[i].style.display = 'block'
                    }

                    card.getElementsByClassName('course__btns_block')[i].style.display = 'flex';
                }

                card.setAttribute('flg', '1');
                card.getElementsByClassName('course__toggle__btn')[0].className = 'course__toggle__btn'
            }

        }
        document.addEventListener("DOMContentLoaded", function(event) {
            window.onresize = function() {
                resize_info();
            };
        });

        function resize_info() {
            if (vocal.getAttribute('flg')) {
                let c420 = vocal.getElementsByClassName('course__more_420');
                let more = vocal.getElementsByClassName('course__more');
                if (window.innerWidth > 420 && window.innerWidth <= 640) {
                    for (let i = 0; i < c420.length; i++) {
                        c420[i].style.display = 'none';
                        more[i].style.display = 'block';
                    }

                } else if (window.innerWidth <= 420) {
                    for (let i = 0; i < more.length; i++) {
                        more[i].style.display = 'none';
                        c420[i].style.display = 'block';
                    }
                }
            }
            if (gitar.getAttribute('flg')) {
                let c420 = gitar.getElementsByClassName('course__more_420');
                let more = gitar.getElementsByClassName('course__more');
                if (window.innerWidth > 420 && window.innerWidth <= 640) {
                    for (let i = 0; i < c420.length; i++) {
                        c420[i].style.display = 'none';
                        more[i].style.display = 'block';
                    }

                } else if (window.innerWidth <= 420) {
                    for (let i = 0; i < more.length; i++) {
                        more[i].style.display = 'none';
                        c420[i].style.display = 'block';
                    }
                }
            }
        }
    </script>
</body>

<!--ИСПОЛЬЗУЕТСЯ ТОЛЬКО НА ГЛАВНОЙ -->
<script src="js/noLimitations-controller.js"></script>
<script src="js/FAQ.js"></script>
<script src="js/indexTeacherSlider-controller.js"></script>
<!-- -->
<!--НА ЛЮБОЙ СТРАНИЦЕ С ФОРМАМИ -->
<script src="js/phoneMask.js"></script>
<script>
    $(function() {
        $(".phone-mask").mask("+7(999) 999-9999");
    });
</script>
<script src="js/feedBack_popup.js"></script>
<!-- -->



</html>