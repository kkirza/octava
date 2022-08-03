let quest = $('.FAQ_MA__materials__block-content__question');
$(quest).click(function(){
    if ($(this).parent().hasClass("FAQ_MA__materials__block-content__full")){
        $(this).parent().removeClass('FAQ_MA__materials__block-content__full');
        $(this).next().slideToggle();
        $(this).children('.FAQ_MA__materials__block-content__question-plus').attr('src','img/FAQ_MA__materials__block-content__question-plus.svg');
    }else{
        $(this).parent().addClass('FAQ_MA__materials__block-content__full');
        $(this).next().slideToggle();
        $(this).children('.FAQ_MA__materials__block-content__question-plus').attr('src','img/FAQ_MA__materials__block-content__question-minus.svg');
    }
});