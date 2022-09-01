$('.popupActive-button').click(function (){
    $('.feedBack__POPUP').css({display: 'flex'});
    $('body').css({overflow: 'hidden'});
    $('.headerDestroy').css({display: 'none'});
});

$('.feedBack__POPUP__closeButton').click(function (){
    $('.feedBack__POPUP').css({display: 'none'});
    $('body').css({overflow: 'auto'});
    $('.headerDestroy').css({display: 'block'});
});

