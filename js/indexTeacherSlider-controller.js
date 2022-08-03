let slidesCount = $('.IndexTeacherInfo__MA__slider-block').length;
let blockLength = 377;
let sliderLength = blockLength * slidesCount - 30;

let IndexSliderNextBtn = $('.IndexTeacherInfo__MA__slider_next');
let IndexSliderPrevBtn = $('.IndexTeacherInfo__MA__slider_prev');

let sliderCounter = 0
let sliderTranslate = 0;


$('.IndexTeacherInfo__MA__slider-wrap').width(sliderLength);

if (sliderCounter == 0){
    IndexSliderPrevBtn.css({opacity: .5});
}
IndexSliderNextBtn.click(function(){
    if (sliderCounter != slidesCount){
        sliderCounter++;
        sliderTranslate = sliderCounter * blockLength;
        $('.IndexTeacherInfo__MA__slider-wrap').css({transform: 'translateX(-'+sliderTranslate+'px)'});

    }
    if (sliderCounter >= slidesCount){
        sliderCounter = 0;
        sliderTranslate = sliderCounter * blockLength;
        $('.IndexTeacherInfo__MA__slider-wrap').css({transform: 'translateX(-'+sliderTranslate+'px)'});

    }
    if (sliderCounter > 0){
        IndexSliderPrevBtn.css({opacity: 1});
    } else {
        IndexSliderPrevBtn.css({opacity: .5});
    }
    if (sliderCounter == slidesCount-1){
        IndexSliderNextBtn.css({opacity: .5});
    } else {
        IndexSliderNextBtn.css({opacity: 1});
    }
});
IndexSliderPrevBtn.click(function(){
    if (sliderCounter == 0){
        sliderCounter = slidesCount;
        sliderTranslate = sliderCounter * blockLength;
        $('.IndexTeacherInfo__MA__slider-wrap').css({transform: 'translateX(-'+sliderTranslate+'px)'});
    }
    if (sliderCounter != 0){
        sliderCounter--;
        sliderTranslate = sliderCounter * blockLength;
        $('.IndexTeacherInfo__MA__slider-wrap').css({transform: 'translateX(-'+sliderTranslate+'px)'});
    }
    if (sliderCounter > 0){
        IndexSliderPrevBtn.css({opacity: 1});
    } else {
        IndexSliderPrevBtn.css({opacity: .5});
    }

    if (sliderCounter == slidesCount-1){
        IndexSliderNextBtn.css({opacity: .5});
    } else {
        IndexSliderNextBtn.css({opacity: 1});
    }
});


