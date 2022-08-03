<section class="feedBack__POPUP darkBlue_MA">
    <div class="feedBack__POPUP__container">
        <div class="feedBack__POPUP__content">
            <img src="img/closeButton__MA.png" class="feedBack__POPUP__closeButton">
            <div class="feedBack__POPUP__headline Up-c_MA Mont_Heavy_MA Lh-120_MA">Записаться<br> на бесплатное пробное занятие</div>
            <div class="feedBack__POPUP__text Inter_Light_MA Lh-130_MA">Напиши своё имя и телефон. Наш менеджер перезвонит, запишет тебя на занятие, расскажет что как и ответит на все вопросы</div>
            <form class="feedBack__POPUP__form sendFORM" action="send.php" method="post">
                <input placeholder="ИМЯ" class="feedBack__POPUP__input" name="name">
                <input placeholder="ТЕЛЕФОН" class="feedBack__POPUP__input phone-mask" name="tel">
                <button class="feedBack__POPUP__button" type="submit">ОСТАВИТЬ ЗАЯВКУ</button>
                <div class="schoolOfMusic_MA__form-checkboxArea">
                    <input type="checkbox" class="checkbox-b_MA" id="feedBack__POPUP" required><label for="feedBack__POPUP" class="checkbox-b_MA_label Inter_semi_bold_MA">Я даю согласие на обработку персональных данных</label>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
.thankYou__MA{position: fixed; top: 0; left: 0; width: 100%; height: 100vh; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.22); display: none}
.thankYou__MA__container{background: white; padding: 30px; position: relative; border-radius: 20px}
.thankYou__MA__headline{font-size: 64px;}
.thankYou__MA__text{font-size: 16px; margin-top: 15px; max-width: 400px}
.thankYou__MA__button{width: 423px; display: flex; align-items: center; height: 60px; justify-content: center; background: #3B32F5; color: white; font-size: 14px; border-radius: 10px; margin-top: 20px}
.thankYou__MA__button:hover{background: #6A63FF; cursor: pointer}
.thankYou__MA__close{width: 44px; height: 44px; position: absolute; right: -46px; top: -46px}
.thankYou__MA__close:hover{opacity: .5; cursor: pointer}
max-width: 577px{
.thankYou__MA__close{width: 35px; height: 35px; position: absolute; right: 0; top: -37px}
.thankYou__MA__headline{font-size: 40px;}
.thankYou__MA__container{padding: 20px 10px;}
.thankYou__MA__text{font-size: 14px; margin-top: 15px; max-width: 300px}
.thankYou__MA__button{width: 300px; margin-top: 10px; height: 60px}
}
</style>

<section class="thankYou__MA darkBlue_MA">
<div class="thankYou__MA__container">
<img src="img/closeButton__MA.png" class="thankYou__MA__close">
<div class="thankYou__MA__headline Up-c_MA Mont_Heavy_MA">Спасибо</div>
<div class="thankYou__MA__text Inter_Light_MA">Наши менеджеры уже бегут к телефону, чтобы скорее вам перезвонить :)</div>
<div class="thankYou__MA__button Mont_Heavy_MA Up-c_MA">Вернуться на сайт</div>
</div>
</section>

<script>
$('.thankYouActive-button').click(function (){
$('.thankYou__MA').css({display: 'flex'});
$('body').css({overflow: 'hidden'});
});

$('.thankYou__MA__button, .thankYou__MA__close').click(function (){
$('.thankYou__MA').css({display: 'none'});
$('body').css({overflow: 'auto'});
});
</script>
