<!doctype html><html lang="ru">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "assets/css/font.css">
    <link rel = "stylesheet" href = "assets/css/style.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="utils.js"></script>
    <script src="ajax.js"></script>
    <title>Главная</title>
</head>
<body style="background: #F6F6F6">
<?php require('req/feedBack_popup.php')?>
<?php require('req/POPUP_teachers.php')?>
<?php require_once ('header.php')?>

<div class="mainContainer_MA" style="position: relative">
    <div class="reviewsPage">
        <div class="reviewsPageContainer">
            <div class="reviewsPageContent">
                <div class="reviewsPageContent__headline Up-c_MA Mont_Heavy_MA Lh-120_MA">Отзывы</div>
                <div class="reviewsPageContent__subtitle Up-c_MA Mont_Heavy_MA">От наших учеников</div>
                <div class="reviewsPageContent__text Inter_Light_MA">В Октаве каждый получит опыт<br> настоящих живых выступлений.</div>

                <div class="reviewsPage__videoArea">

                    <div class="reviews__videoBlock reviews__videoBlock__mgTop IndexTeacherInfo__MA__slider-block__blue bg_opt_all_MA">
                        <div class="reviews__videoPrevIMG reviews__videoPrevIMG_1video bg_opt_all_MA">
                            <div class="reviews__videoInfoArea">
                                <img src="img/VideoRew/Play.svg" class="reviews__videoPlayIMG">
                                <div class="reviews__videoName Mont_Heavy_MA Up-c_MA">Аня</div>
                            </div>
                            <div class="reviews__videoBlock__PlayArea">
                                <div style="text-align: center">
                                    <img src="img/VideoRew/PlayBIG.png" class="reviews__videoBlock__BIGplayIMG">
                                    <div class="reviews__videoBlock__PlayArea__text Inter_semi_bold_MA">Смотреть отзыв</div>
                                </div>
                            </div>
                            <video width="328" height="538" class="reviews__videoBlock__VIDEO NoActiveVideo" controls="controls">
                                <source src="video/reviews/video_1.MP4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            </video>
                        </div>
                    </div>

                    <div class="reviews__videoBlock reviews__videoBlock__mgTop reviews__videoBlock__mgLeft_1 IndexTeacherInfo__MA__slider-block__blue bg_opt_all_MA">
                        <div class="reviews__videoPrevIMG reviews__videoPrevIMG_2video bg_opt_all_MA">
                            <div class="reviews__videoInfoArea">
                                <img src="img/VideoRew/Play.svg" class="reviews__videoPlayIMG">
                                <div class="reviews__videoName Mont_Heavy_MA Up-c_MA">ВАРЯ</div>
                            </div>
                            <div class="reviews__videoBlock__PlayArea">
                                <div style="text-align: center">
                                    <img src="img/VideoRew/PlayBIG.png" class="reviews__videoBlock__BIGplayIMG">
                                    <div class="reviews__videoBlock__PlayArea__text Inter_semi_bold_MA">Смотреть отзыв</div>
                                </div>
                            </div>
                            <video width="328" height="538" class="reviews__videoBlock__VIDEO NoActiveVideo" controls="controls">
                                <source src="video/reviews/video_2.MP4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            </video>
                        </div>
                    </div>

                    <div class="reviews__videoBlock reviews__videoBlock__mgTop reviews__videoBlock__mgLeft_2 IndexTeacherInfo__MA__slider-block__blue bg_opt_all_MA">
                        <div class="reviews__videoPrevIMG reviews__videoPrevIMG_3video bg_opt_all_MA">
                            <div class="reviews__videoInfoArea">
                                <img src="img/VideoRew/Play.svg" class="reviews__videoPlayIMG">
                                <div class="reviews__videoName Mont_Heavy_MA Up-c_MA">Лев</div>
                            </div>
                            <div class="reviews__videoBlock__PlayArea">
                                <div style="text-align: center">
                                    <img src="img/VideoRew/PlayBIG.png" class="reviews__videoBlock__BIGplayIMG">
                                    <div class="reviews__videoBlock__PlayArea__text Inter_semi_bold_MA">Смотреть отзыв</div>
                                </div>
                            </div>
                            <video width="328" height="538" class="reviews__videoBlock__VIDEO NoActiveVideo" controls="controls">
                                <source src="video/reviews/video_3.MP4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            </video>
                        </div>
                    </div>

                    <div class="reviews__videoBlock reviews__videoBlock__mgTop reviews__videoBlock__mgLeft_3  IndexTeacherInfo__MA__slider-block__blue bg_opt_all_MA">
                        <div class="reviews__videoPrevIMG reviews__videoPrevIMG_4video bg_opt_all_MA">
                            <div class="reviews__videoInfoArea">
                                <img src="img/VideoRew/Play.svg" class="reviews__videoPlayIMG">
                                <div class="reviews__videoName Mont_Heavy_MA Up-c_MA">Рита</div>
                            </div>
                            <div class="reviews__videoBlock__PlayArea">
                                <div style="text-align: center">
                                    <img src="img/VideoRew/PlayBIG.png" class="reviews__videoBlock__BIGplayIMG">
                                    <div class="reviews__videoBlock__PlayArea__text Inter_semi_bold_MA">Смотреть отзыв</div>
                                </div>
                            </div>
                            <video width="328" height="538" class="reviews__videoBlock__VIDEO NoActiveVideo" controls="controls">
                                <source src="video/reviews/video_4.MP4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            </video>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <img src="img/reviewsPage.svg" class="reviewsPageIMG">
    <img src="img/reviewsPageWord.svg" class="reviewsPageWord">
    <img src="img/reviewsPageNotes.svg" class="reviewsPageNotes">
    <img src="img/reviewsPageALT.svg" class="reviewsPageALT">
    <img src="img/reviewsPageNotesALT.svg" class="reviewsPageNotesALT">


</div>

<script>
    $('.reviews__videoBlock').click(function (){
        if ($(this).children().children().eq(2).hasClass('NoActiveVideo')){

            $('.reviews__videoInfoArea').css({opacity: ''});
            $('.reviews__videoBlock__PlayArea').css({opacity: ''});
            $('.reviews__videoBlock__VIDEO').css({opacity: '0'});
            $('.reviews__videoPrevIMG').removeClass('no_bg_MA');

            $('.reviews__videoBlock__VIDEO').addClass('NoActiveVideo');

            $(this).children().children().eq(2).removeClass('NoActiveVideo');

            if ($('.reviews__videoBlock__VIDEO').hasClass('NoActiveVideo')){
                $('.reviews__videoBlock__VIDEO').trigger('pause');
            }

            $(this).children().addClass('no_bg_MA');
            $(this).children().children().eq(0).css({opacity: '0'});
            $(this).children().children().eq(1).css({opacity: '0'});
            $(this).children().children().eq(2).css({opacity: '1'});
        }
    });
</script>

<?php require_once ('req/free_lesson_sofa.php')?>
<?php require_once ('req/contactsAndMap.php')?>

<div class=screen__footer>
    <?php require ('footer.php')?>
    <?php require_once ('modal_thank.php')?>
</div>
</body>

<!--НА ЛЮБОЙ СТРАНИЦЕ С ФОРМАМИ -->
<script src="js/phoneMask.js"></script>
<script>$(function(){$(".phone-mask").mask("+7(999) 999-9999");});</script>
<!-- -->



</html>

