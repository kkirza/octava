<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <link rel='shortcut icon' type='image/x-icon' href="img/favicon.ico">
    <link rel = "stylesheet" href = "assets/css/font.css">
    <link rel = "stylesheet" href = "assets/css/style.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel = "stylesheet" href = "css/adaptive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="utils.js"></script>
  <script src="ajax.js"></script>
    <title>Как добраться</title>
<body>
<?php require_once ('header.php')?>

<style>
    .wereAreWe__MA{max-width: 1480px; margin-left: 10px; margin-right: 10px; margin-top: 170px}
    .wereAreWe__MA__container{margin-left: 10px; margin-right: 10px}
    .wereAreWe__MA__content{margin-left: 418px}
    .wereAreWe__MA__headline{font-size: 100px; max-width: 948px}
    .wereAreWe__MA__infoArea{display: flex; justify-content: space-between; max-width: 1095px; align-items: center; margin-top: 50px}
    .wereAreWe__MA__infoArea_address{display: flex; align-items: center; justify-content: space-between; width: 427px;}
    .wereAreWe__MA__infoArea_addressPointer{width: 87px; height: 108px}
    .wereAreWe__MA__infoArea_addressText-headline{font-size: 24px}
    .wereAreWe__MA__infoArea_addressText-text{font-size: 16px; margin-top: 10px; max-width: 315px}
    .wereAreWe__MA__infoArea_phoneAndSoc{max-width: 598px;}
    .wereAreWe__MA__infoArea_phoneAndSoc__headline{font-size: 16px}
    .wereAreWe__MA__infoArea_phoneAndSoc__content{display: flex;}
    .wereAreWe__MA__infoArea_phoneAndSoc__content__phone{width: 368px; margin-top: 3px; }
    .wereAreWe__MA__infoArea_phoneAndSoc__content__phone-img{width: 46px; height: 40px; margin-left: 7px}
    .wereAreWe__MA__infoArea_phoneAndSoc__content__phone-container{display: flex; justify-content: space-between; align-items: center}
    .wereAreWe__MA__infoArea_phoneAndSoc__content__phone-phone{font-size: 40px}
    .wereAreWe__MA__infoArea_phoneAndSoc__content__phone-timeContainer{display: flex; justify-content: space-between; width: 242px; font-size: 16px; padding-top: 5px; border-top: 1px solid black}
    .wereAreWe__MA__infoArea_phoneAndSoc__content__icons{display: flex; justify-content: space-between; margin-left: 43px; width: 170px; }
    .wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon{width: 44px; height: 44px}
    .wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon:hover{fill: #6A63FF}
    .wereAreWe__MA__map{width: 1101px; height: 388px; margin-top: 50px}

    @media (max-width: 1600px){
        .wereAreWe__MA__content{margin-left: 170px}
    }
    @media (max-width: 1310px){
        .wereAreWe__MA__content{margin-left: 0}
        .wereAreWe__MA__infoArea{}
    }
    @media (max-width: 1140px){
        .wereAreWe__MA__infoArea{display: block}
        .wereAreWe__MA__infoArea_phoneAndSoc__content{display: block;}
        .wereAreWe__MA__infoArea_phoneAndSoc__content__icons{margin-left: 0; margin-top: 23px}
        .wereAreWe__MA__infoArea_phoneAndSoc{margin-top: 50px}
        .wereAreWe__MA__map{width: 800px}
    }
    @media (max-width: 991px){
        .wereAreWe__MA__headline{max-width: 560px; font-size: 64px}
    }
    @media (max-width: 842px){
        .wereAreWe__MA__headline{max-width: 560px; font-size: 64px}
        .wereAreWe__MA__map{width: 550px}
    }
    @media (max-width: 557px){
        .wereAreWe__MA__headline{max-width: 320px; font-size: 40px}
        .wereAreWe__MA__map{width: 340px; height: 365px}
        .wereAreWe__MA__infoArea{margin-top: 20px}
        .wereAreWe__MA{margin-left: 5px; margin-right: 5px; margin-top: 116px}
        .wereAreWe__MA__container{margin-left: 5px; margin-right: 5px}
        .wereAreWe__MA__infoArea_addressText-headline{font-size: 18px}
        .wereAreWe__MA__infoArea_addressText-text{max-width: 229px; font-size: 14px}
        .wereAreWe__MA__infoArea_address{width: 339px;}
        .wereAreWe__MA__infoArea_phoneAndSoc__content__phone-phone{font-size: 30px}
        .wereAreWe__MA__infoArea_phoneAndSoc__content__phone-container{width: 290px}
    }
</style>

<section class="mainContainer_MA darkBlue_MA" style="overflow: hidden">
    <div class="wereAreWe__MA">
        <div class="wereAreWe__MA__container">
            <div class="wereAreWe__MA__content">
                <div class="wereAreWe__MA__headline Up-c_MA Mont_Heavy_MA">Где находимся?</div>
                <div class="wereAreWe__MA__infoArea">

                    <div class="wereAreWe__MA__infoArea_address">
                        <img src="img/wereAreWe__MA__infoArea_addressPointer.svg" class="wereAreWe__MA__infoArea_addressPointer">
                        <div class="wereAreWe__MA__infoArea_addressText">
                            <div class="wereAreWe__MA__infoArea_addressText-headline Up-c_MA Mont_Heavy_MA Lh-120_MA">Удобное место<br> в центре города:</div>
                            <div class="wereAreWe__MA__infoArea_addressText-text Inter_Light_MA Lh-130_MA">г. Новосибирск, ул.Серебренниковская, д. 6 1 цокольный этаж, "Октава"</div>
                        </div>
                    </div>

                    <div class="wereAreWe__MA__infoArea_phoneAndSoc">
                        <div class="wereAreWe__MA__infoArea_phoneAndSoc__headline Up-c_MA Mont_Heavy_MA">Свяжись с нами любым удобным способом</div>
                        <div class="wereAreWe__MA__infoArea_phoneAndSoc__content">

                            <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone">
                                <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone-container">
                                    <img src="img/wereAreWe__MA__infoArea_phoneAndSoc__content__phone-img.svg" class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone-img">
                                    <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone-phone Mont_Extra_Light_MA">+7(383)375-37-25</div>
                                </div>
                                <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone-timeContainer">
                                    <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone-timeText Inter_semi_bold_MA">мы на связи</div>
                                    <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__phone-time Inter_Light_MA">с 10:00 до 22:00</div>

                                </div>
                            </div>

                            <div class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons">
                                <a href="#" target="_blank">
                                    <svg width="53" height="54" viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon">
                                        <path d="M26.5016 0.599609C11.9211 0.599609 0.101562 12.4191 0.101562 26.9996C0.101562 41.5801 11.9211 53.3996 26.5016 53.3996C41.0821 53.3996 52.9016 41.5801 52.9016 26.9996C52.9016 12.4191 41.0821 0.599609 26.5016 0.599609ZM36.6546 30.3849C36.6546 30.3849 38.9893 32.6894 39.5641 33.7591C39.5806 33.7811 39.5888 33.8031 39.5943 33.8141C39.8281 34.2074 39.8831 34.5126 39.7676 34.7409C39.5751 35.1204 38.9151 35.3074 38.6896 35.3239H34.5646C34.2786 35.3239 33.6791 35.2496 32.9531 34.7491C32.3948 34.3586 31.8448 33.7179 31.3086 33.0936C30.5083 32.1641 29.8153 31.3611 29.1168 31.3611C29.0281 31.361 28.9399 31.3749 28.8556 31.4024C28.3276 31.5729 27.6511 32.3264 27.6511 34.3339C27.6511 34.9609 27.1561 35.3211 26.8068 35.3211H24.9176C24.2741 35.3211 20.9218 35.0956 17.9518 31.9634C14.3163 28.1271 11.0438 20.4326 11.0163 20.3611C10.8101 19.8634 11.2363 19.5966 11.7011 19.5966H15.8673C16.4228 19.5966 16.6043 19.9349 16.7308 20.2346C16.8793 20.5839 17.4238 21.9726 18.3176 23.5346C19.7668 26.0811 20.6551 27.1151 21.3673 27.1151C21.5009 27.1135 21.632 27.0796 21.7496 27.0161C22.6791 26.4991 22.5058 23.1854 22.4646 22.4979C22.4646 22.3686 22.4618 21.0156 21.9861 20.3666C21.6451 19.8964 21.0648 19.7176 20.7128 19.6516C20.8553 19.455 21.043 19.2956 21.2601 19.1869C21.8981 18.8679 23.0476 18.8211 24.1888 18.8211H24.8241C26.0616 18.8376 26.3806 18.9174 26.8288 19.0301C27.7363 19.2474 27.7556 19.8331 27.6758 21.8379C27.6511 22.4071 27.6263 23.0506 27.6263 23.8096C27.6263 23.9746 27.6181 24.1506 27.6181 24.3376C27.5906 25.3579 27.5576 26.5156 28.2781 26.9914C28.372 27.0503 28.4806 27.0817 28.5916 27.0821C28.8418 27.0821 29.5953 27.0821 31.6358 23.5814C32.2651 22.4546 32.812 21.2837 33.2721 20.0779C33.3133 20.0064 33.4343 19.7864 33.5773 19.7011C33.6828 19.6473 33.7999 19.6199 33.9183 19.6214H38.8161C39.3496 19.6214 39.7153 19.7011 39.7841 19.9074C39.9051 20.2346 39.7621 21.2329 37.5263 24.2606L36.5281 25.5779C34.5013 28.2344 34.5013 28.3691 36.6546 30.3849Z" fill="#131441" class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon"/>
                                    </svg>
                                </a>
                                <a href="#" target="_blank">
                                    <svg width="53" height="54" viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon">
                                        <path d="M0.112158 53.3996L3.68144 40.2841C1.32956 36.2524 0.0939312 31.6671 0.101598 26.9996C0.101598 12.4189 11.9209 0.599609 26.5016 0.599609C41.0823 0.599609 52.9016 12.4189 52.9016 26.9996C52.9016 41.5803 41.0823 53.3996 26.5016 53.3996C21.8361 53.4071 17.2528 52.1724 13.2224 49.8224L0.112158 53.3996ZM16.9738 14.6127C16.6329 14.6339 16.2998 14.7237 15.9944 14.8767C15.708 15.0389 15.4466 15.2416 15.2182 15.4786C14.9014 15.777 14.7219 16.0357 14.5292 16.2865C13.5535 17.5563 13.0286 19.115 13.0376 20.7164C13.0429 22.01 13.3808 23.2693 13.9088 24.4467C14.9885 26.828 16.7653 29.3492 19.1122 31.6856C19.6772 32.2479 20.2289 32.8129 20.8229 33.3382C23.7359 35.9029 27.2071 37.7524 30.9605 38.7397L32.4627 38.9693C32.9511 38.9957 33.4395 38.9588 33.9305 38.935C34.6994 38.8953 35.4501 38.6871 36.1297 38.3252C36.4754 38.1471 36.8128 37.9533 37.1408 37.7444C37.1408 37.7444 37.2543 37.6705 37.4708 37.5068C37.8272 37.2428 38.0463 37.0553 38.342 36.7465C38.5611 36.5194 38.7512 36.2528 38.8964 35.9492C39.1023 35.5189 39.3082 34.6978 39.3927 34.0141C39.456 33.4913 39.4376 33.2062 39.4296 33.0294C39.4191 32.7469 39.1841 32.4538 38.928 32.3297L37.3916 31.6407C37.3916 31.6407 35.0948 30.6401 33.6929 30.0013C33.5451 29.9368 33.3867 29.9001 33.2257 29.893C33.045 29.8745 32.8625 29.8948 32.6904 29.9526C32.5183 30.0105 32.3605 30.1045 32.2277 30.2283V30.223C32.2145 30.223 32.0377 30.3735 30.1289 32.6861C30.0194 32.8334 29.8685 32.9446 29.6955 33.0057C29.5224 33.0669 29.3351 33.0751 29.1574 33.0294C28.9854 32.9834 28.8169 32.9251 28.6532 32.8551C28.3258 32.7178 28.2123 32.665 27.9879 32.5673L27.9747 32.5621C26.4644 31.9027 25.066 31.012 23.8299 29.9221C23.4973 29.6317 23.1884 29.3149 22.8716 29.0086C21.8329 28.014 20.9278 26.8887 20.1788 25.6611L20.023 25.4103C19.9111 25.2418 19.8207 25.06 19.7537 24.8691C19.6534 24.481 19.9148 24.1695 19.9148 24.1695C19.9148 24.1695 20.5563 23.4673 20.8546 23.0871C21.103 22.7712 21.3348 22.4425 21.5489 22.1024C21.8605 21.6008 21.9581 21.086 21.7945 20.6874C21.0553 18.8816 20.2897 17.0838 19.5029 15.2991C19.3472 14.9454 18.8852 14.6919 18.4654 14.6418C18.3229 14.6259 18.1803 14.6101 18.0377 14.5995C17.6832 14.5819 17.3279 14.5854 16.9738 14.6101V14.6127Z" fill="#131441" class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon"/>
                                    </svg>
                                </a>
                                <a href="#" target="_blank">
                                    <svg width="53" height="54" viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon">
                                        <path d="M26.5016 0.599609C11.9168 0.599609 0.101562 12.4166 0.101562 26.9996C0.101562 41.5826 11.9185 53.3996 26.5016 53.3996C41.0863 53.3996 52.9016 41.5826 52.9016 26.9996C52.9016 12.4166 41.0846 0.599609 26.5016 0.599609ZM39.4682 18.6862L35.1352 39.1044C34.815 40.5522 33.9532 40.903 32.7507 40.2217L26.1507 35.3573L22.9674 38.4231C22.6165 38.774 22.3184 39.0721 21.6371 39.0721L22.1055 32.3545L34.3364 21.304C34.8695 20.8356 34.2189 20.5699 33.5154 21.0383L18.3993 30.5542L11.8845 28.5206C10.4691 28.0743 10.4367 27.1052 12.1825 26.4239L37.6355 16.6082C38.8176 16.1824 39.8497 16.8961 39.4665 18.6845L39.4682 18.6862Z" fill="#131441" class="wereAreWe__MA__infoArea_phoneAndSoc__content__icons-icon"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1617.4360647822311!2d82.92807250260184!3d55.01868154189618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe677bd422a59%3A0x1eebe30d517b127b!2zT0tUQVZBLCDRhtC10L3RgtGAINC80YPQt9GL0LrQsNC70YzQvdC-0LPQviDQvtCx0YDQsNC30L7QstCw0L3QuNGPINC4INGC0LLQvtGA0YfQtdGB0LrQvtCz0L4g0YDQsNC30LLQuNGC0LjRjw!5e0!3m2!1sru!2sru!4v1657814295358!5m2!1sru!2sru" width="694" height="388" style="border:0; border-radius: 20px; " class="wereAreWe__MA__map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
</section>




    <div class="screen__footer">
        <?php require_once('footer.php')?>
    </div>
    <?php require_once ('modal_thank.php')?>

</body>

</html>