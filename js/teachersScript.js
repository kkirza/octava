if( window.innerWidth >= 1325 ){
    $('.teachersSlider__teacher__VOCAL').detach().appendTo('.teachersSlider__teachersBlock');
    $('.teachersSlider__teacher__GUITAR').detach().appendTo('.teachersSlider__teachersBlock');
    $('.teachersSlider__teacher__DRUMS').detach().appendTo('.teachersSlider__teachersBlock');
    $('.teachersSlider__teacher__KEYS').detach().appendTo('.teachersSlider__teachersBlock');
}
if( window.innerWidth <1325 ){
    $('.teachersSlider__teacher__VOCAL').detach().appendTo('.teachersSlider__teachersBlock__tapeVOCAL');
    $('.teachersSlider__teacher__GUITAR').detach().appendTo('.teachersSlider__teachersBlock__tapeGUITAR');
    $('.teachersSlider__teacher__DRUMS').detach().appendTo('.teachersSlider__teachersBlock__tapeDRUMS');
    $('.teachersSlider__teacher__KEYS').detach().appendTo('.teachersSlider__teachersBlock__tapeKEYS');
}

window.addEventListener('resize', function() {
    if( window.innerWidth >= 1325 ){
        $('.teachersSlider__teacher__VOCAL').detach().appendTo('.teachersSlider__teachersBlock');
        $('.teachersSlider__teacher__GUITAR').detach().appendTo('.teachersSlider__teachersBlock');
        $('.teachersSlider__teacher__DRUMS').detach().appendTo('.teachersSlider__teachersBlock');
        $('.teachersSlider__teacher__KEYS').detach().appendTo('.teachersSlider__teachersBlock');
    }
    if( window.innerWidth <1325 ){
        $('.teachersSlider__teacher__VOCAL').detach().appendTo('.teachersSlider__teachersBlock__tapeVOCAL');
        $('.teachersSlider__teacher__GUITAR').detach().appendTo('.teachersSlider__teachersBlock__tapeGUITAR');
        $('.teachersSlider__teacher__DRUMS').detach().appendTo('.teachersSlider__teachersBlock__tapeDRUMS');
        $('.teachersSlider__teacher__KEYS').detach().appendTo('.teachersSlider__teachersBlock__tapeKEYS');
    }
});

let slidesCountGUITAR = $('.teachersSlider__teacher__GUITAR').length;
let slidesCountVOCAL = $('.teachersSlider__teacher__VOCAL').length;
let slidesCountDRUMS = $('.teachersSlider__teacher__DRUMS').length;
let slidesCountKEYS = $('.teachersSlider__teacher__KEYS').length;

let blockLength = 377;
let sliderLengthGUITAR = blockLength * slidesCountGUITAR - 30;
let sliderLengthVOCAL = blockLength * slidesCountVOCAL - 30;
let sliderLengthDRUMS = blockLength * slidesCountDRUMS - 30;
let sliderLengthKEYS = blockLength * slidesCountKEYS - 30;

let sliderButtonNEXT__GUITAR = $('.IndexTeacherInfo__MA__slider_btnNext-GUITAR');
let sliderButtonPREV__GUITAR = $('.IndexTeacherInfo__MA__slider_btnPrev-GUITAR');

let sliderButtonNEXT__VOCAL = $('.IndexTeacherInfo__MA__slider_btnNext-VOCAL');
let sliderButtonPREV__VOCAL = $('.IndexTeacherInfo__MA__slider_btnPrev-VOCAL');

let sliderButtonNEXT__DRUMS = $('.IndexTeacherInfo__MA__slider_btnNext-DRUMS');
let sliderButtonPREV__DRUMS = $('.IndexTeacherInfo__MA__slider_btnPrev-DRUMS');

let sliderButtonNEXT__KEYS = $('.IndexTeacherInfo__MA__slider_btnNext-KEYS');
let sliderButtonPREV__KEYS = $('.IndexTeacherInfo__MA__slider_btnPrev-KEYS');

let sliderCounterGUITAR = 0;
let sliderTranslateGUITAR = 0;

let sliderCounterVOCAL = 0;
let sliderTranslateVOCAL = 0;

let sliderCounterDRUMS = 0;
let sliderTranslateDRUMS = 0;

let sliderCounterKEYS = 0;
let sliderTranslateKEYS = 0;

$('.teachersSlider__teachersBlock__tapeGUITAR').width(sliderLengthGUITAR);
$('.teachersSlider__teachersBlock__tapeVOCAL').width(sliderLengthVOCAL);
$('.teachersSlider__teachersBlock__tapeDRUMS').width(sliderLengthDRUMS);
$('.teachersSlider__teachersBlock__tapeKEYS').width(sliderLengthKEYS);

sliderButtonNEXT__GUITAR.click(function(){
    if (sliderCounterGUITAR != slidesCountGUITAR){
        sliderCounterGUITAR++;
        sliderTranslateGUITAR = sliderCounterGUITAR * blockLength;
        $('.teachersSlider__teachersBlock__tapeGUITAR').css({transform: 'translateX(-'+sliderTranslateGUITAR+'px)'});

    }
    if (sliderCounterGUITAR >= slidesCountGUITAR){
        sliderCounterGUITAR = 0;
        sliderTranslateGUITAR = sliderCounterGUITAR * blockLength;
        $('.teachersSlider__teachersBlock__tapeGUITAR').css({transform: 'translateX(-'+sliderTranslateGUITAR+'px)'});

    }
});
sliderButtonPREV__GUITAR.click(function(){
    if (sliderCounterGUITAR == 0){
        sliderCounterGUITAR = slidesCountGUITAR;
        sliderTranslateGUITAR = sliderCounterGUITAR * blockLength;
        $('.teachersSlider__teachersBlock__tapeGUITAR').css({transform: 'translateX(-'+sliderTranslateGUITAR+'px)'});
    }
    if (sliderCounterGUITAR != 0){
        sliderCounterGUITAR--;
        sliderTranslateGUITAR = sliderCounterGUITAR * blockLength;
        $('.teachersSlider__teachersBlock__tapeGUITAR').css({transform: 'translateX(-'+sliderTranslateGUITAR+'px)'});
    }
});





sliderButtonNEXT__VOCAL.click(function(){
    if (sliderCounterVOCAL != slidesCountVOCAL){
        sliderCounterVOCAL++;
        sliderTranslateVOCAL = sliderCounterVOCAL * blockLength;
        $('.teachersSlider__teachersBlock__tapeVOCAL').css({transform: 'translateX(-'+sliderTranslateVOCAL+'px)'});

    }
    if (sliderCounterVOCAL >= slidesCountVOCAL){
        sliderCounterVOCAL = 0;
        sliderTranslateVOCAL = sliderCounterVOCAL * blockLength;
        $('.teachersSlider__teachersBlock__tapeVOCAL').css({transform: 'translateX(-'+sliderTranslateVOCAL+'px)'});

    }
});
sliderButtonPREV__VOCAL.click(function(){
    if (sliderCounterVOCAL == 0){
        sliderCounterVOCAL = slidesCountVOCAL;
        sliderTranslateVOCAL = sliderCounterVOCAL * blockLength;
        $('.teachersSlider__teachersBlock__tapeVOCAL').css({transform: 'translateX(-'+sliderTranslateVOCAL+'px)'});
    }
    if (sliderCounterVOCAL != 0){
        sliderCounterVOCAL--;
        sliderTranslateVOCAL = sliderCounterVOCAL * blockLength;
        $('.teachersSlider__teachersBlock__tapeVOCAL').css({transform: 'translateX(-'+sliderTranslateVOCAL+'px)'});
    }
});



sliderButtonNEXT__DRUMS.click(function(){
    if (sliderCounterDRUMS != slidesCountDRUMS){
        sliderCounterDRUMS++;
        sliderTranslateDRUMS = sliderCounterDRUMS * blockLength;
        $('.teachersSlider__teachersBlock__tapeDRUMS').css({transform: 'translateX(-'+sliderTranslateDRUMS+'px)'});

    }
    if (sliderCounterDRUMS >= slidesCountDRUMS){
        sliderCounterDRUMS = 0;
        sliderTranslateDRUMS = sliderCounterDRUMS * blockLength;
        $('.teachersSlider__teachersBlock__tapeDRUMS').css({transform: 'translateX(-'+sliderTranslateDRUMS+'px)'});

    }
});
sliderButtonPREV__DRUMS.click(function(){
    if (sliderCounterDRUMS == 0){
        sliderCounterDRUMS = slidesCountDRUMS;
        sliderTranslateDRUMS = sliderCounterDRUMS * blockLength;
        $('.teachersSlider__teachersBlock__tapeDRUMS').css({transform: 'translateX(-'+sliderTranslateDRUMS+'px)'});
    }
    if (sliderCounterDRUMS != 0){
        sliderCounterDRUMS--;
        sliderTranslateDRUMS = sliderCounterDRUMS * blockLength;
        $('.teachersSlider__teachersBlock__tapeDRUMS').css({transform: 'translateX(-'+sliderTranslateDRUMS+'px)'});
    }
});



sliderButtonNEXT__KEYS.click(function(){
    if (sliderCounterKEYS != slidesCountKEYS){
        sliderCounterKEYS++;
        sliderTranslateKEYS = sliderCounterKEYS * blockLength;
        $('.teachersSlider__teachersBlock__tapeKEYS').css({transform: 'translateX(-'+sliderTranslateKEYS+'px)'});

    }
    if (sliderCounterKEYS >= slidesCountKEYS){
        sliderCounterKEYS = 0;
        sliderTranslateKEYS = sliderCounterKEYS * blockLength;
        $('.teachersSlider__teachersBlock__tapeKEYS').css({transform: 'translateX(-'+sliderTranslateKEYS+'px)'});

    }
});
sliderButtonPREV__KEYS.click(function(){
    if (sliderCounterKEYS == 0){
        sliderCounterKEYS = slidesCountKEYS;
        sliderTranslateKEYS = sliderCounterKEYS * blockLength;
        $('.teachersSlider__teachersBlock__tapeKEYS').css({transform: 'translateX(-'+sliderTranslateKEYS+'px)'});
    }
    if (sliderCounterKEYS != 0){
        sliderCounterKEYS--;
        sliderTranslateKEYS = sliderCounterKEYS * blockLength;
        $('.teachersSlider__teachersBlock__tapeKEYS').css({transform: 'translateX(-'+sliderTranslateKEYS+'px)'});
    }
});


function teachersREVERSE(){
    $('.teachersSlider__teacher, .teachersSlider__teacherBlock-resizeBLOCK').css({display: 'block'})
}
$('.teachersSlider__controlPanel__sortingButton__GUITAR').click(function(){
    teachersREVERSE();
    $('.teachersSlider__controlPanel__sortingButton').removeClass('teachersSlider__controlPanel__sortingButton__active');
    $(this).addClass('teachersSlider__controlPanel__sortingButton__active');
    $('.teachersSlider__teacher__VOCAL, .teachersSlider__teacher__DRUMS, .teachersSlider__teacher__KEYS, .teachersSlider__teacherBlock-resizeBLOCK__VOCAL, .teachersSlider__teacherBlock-resizeBLOCK__DRUMS, .teachersSlider__teacherBlock-resizeBLOCK__KEYS').css({display: 'none'});
});
$('.teachersSlider__controlPanel__sortingButton__VOCAL').click(function(){
    teachersREVERSE();
    $('.teachersSlider__controlPanel__sortingButton').removeClass('teachersSlider__controlPanel__sortingButton__active');
    $(this).addClass('teachersSlider__controlPanel__sortingButton__active');
    $('.teachersSlider__teacher__GUITAR, .teachersSlider__teacher__DRUMS, .teachersSlider__teacher__KEYS, .teachersSlider__teacherBlock-resizeBLOCK__GUITAR, .teachersSlider__teacherBlock-resizeBLOCK__DRUMS, .teachersSlider__teacherBlock-resizeBLOCK__KEYS').css({display: 'none'});
});
$('.teachersSlider__controlPanel__sortingButton__DRUMS').click(function(){
    teachersREVERSE();
    $('.teachersSlider__controlPanel__sortingButton').removeClass('teachersSlider__controlPanel__sortingButton__active');
    $(this).addClass('teachersSlider__controlPanel__sortingButton__active');
    $('.teachersSlider__teacher__GUITAR, .teachersSlider__teacher__VOCAL, .teachersSlider__teacher__KEYS, .teachersSlider__teacherBlock-resizeBLOCK__VOCAL, .teachersSlider__teacherBlock-resizeBLOCK__KEYS, .teachersSlider__teacherBlock-resizeBLOCK__GUITAR').css({display: 'none'});
});
$('.teachersSlider__controlPanel__sortingButton__KEYS').click(function(){
    teachersREVERSE();
    $('.teachersSlider__controlPanel__sortingButton').removeClass('teachersSlider__controlPanel__sortingButton__active');
    $(this).addClass('teachersSlider__controlPanel__sortingButton__active');
    $('.teachersSlider__teacher__GUITAR, .teachersSlider__teacher__VOCAL, .teachersSlider__teacher__DRUMS, .teachersSlider__teacherBlock-resizeBLOCK__VOCAL, .teachersSlider__teacherBlock-resizeBLOCK__DRUMS, .teachersSlider__teacherBlock-resizeBLOCK__GUITAR').css({display: 'none'});
});
$('.teachersSlider__controlPanel__sortingButton__ALL').click(function(){
    teachersREVERSE();
    $('.teachersSlider__controlPanel__sortingButton').removeClass('teachersSlider__controlPanel__sortingButton__active');
    $(this).addClass('teachersSlider__controlPanel__sortingButton__active');
});


    $('.IndexTeacherInfo__MA__slider-blockIMG__container').mouseover(function(){
    $(this).css({height: '420px'});
    $(this).next().next().next().css({display: 'none'});
    $(this).children().eq(1).css({display: 'block'});
});

$('.IndexTeacherInfo__MA__slider-blockIMG__container').mouseout(function(){
    $(this).css({height: '320px'});
    $(this).next().next().next().css({display: 'block'});
    $(this).children().eq(1).css({display: 'none'});
});


