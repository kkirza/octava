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


let videoSlidesCount = $('.reviews__videoBlock').length;
let videoBlockLength = 377;
let videoSliderLength = videoBlockLength * videoSlidesCount - 30;

let videoSliderNextBtn = $('.reviewsController__buttons-Button__next');
let videoSliderPrevBtn = $('.reviewsController__buttons-Button__prev');

let videoSliderCounter = 0
let videoSliderTranslate = 0;


$('.reviews__videoArea').width(videoSliderLength);


videoSliderNextBtn.click(function(){
    if (videoSliderCounter != videoSlidesCount){
        videoSliderCounter++;
        videoSliderTranslate = videoSliderCounter * videoBlockLength;
        $('.reviews__videoArea').css({transform: 'translateX(-'+videoSliderTranslate+'px)'});

    }
    if (videoSliderCounter >= videoSlidesCount){
        videoSliderCounter = 0;
        videoSliderTranslate = videoSliderCounter * videoBlockLength;
        $('.reviews__videoArea').css({transform: 'translateX(-'+videoSliderTranslate+'px)'});

    }

});
videoSliderPrevBtn.click(function(){
    if (videoSliderCounter == 0){
        videoSliderCounter = videoSlidesCount;
        videoSliderTranslate = videoSliderCounter * videoBlockLength;
        $('.reviews__videoArea').css({transform: 'translateX(-'+videoSliderTranslate+'px)'});
    }
    if (videoSliderCounter != 0){
        videoSliderCounter--;
        videoSliderTranslate = videoSliderCounter * videoBlockLength;
        $('.reviews__videoArea').css({transform: 'translateX(-'+videoSliderTranslate+'px)'});
    }

});



