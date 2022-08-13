$('.IndexTeacherInfo__MA__slider-block__link__TARASOV').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__TARASOV').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__KARPOVA').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__KARPOVA').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__SMIRNOVA').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__SMIRNOVA').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__KUZNECOVA').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__KUZNECOVA').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__LAZO').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__LAZO').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__POPOV').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__POPOV').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__PORTNOV').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__PORTNOV').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.IndexTeacherInfo__MA__slider-block__link__KALACHINA').click(function (){
    $('.teachersPOPUP').css({display: 'block'});
    $('.teachersPOPUP__container').css({display: 'none'});
    $('.teachersPOPUP__container__KALACHINA').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});






$('.teachersPOPUP__sliderArrow-right').click(function (){
   $('.teachersPOPUP__sliderTape').css({transform: 'translateX(-50%)'});
});
$('.teachersPOPUP__sliderArrow-left').click(function (){
    $('.teachersPOPUP__sliderTape').css({transform: 'translateX(0%)'});
});
$('.closeButton__MA').click(function (){
    $('body').css({overflow: 'auto'});
    $('.teachersPOPUP').css({display: 'none'});
    $('.headerDestroy').css({display: 'block'});
});

window.onkeydown = function( event ) {
    if ( event.keyCode == 27 ) {
        $('body').css({overflow: 'auto'});
        $('.teachersPOPUP').css({display: 'none'});
        $('.headerDestroy').css({display: 'block'});
    }
};

