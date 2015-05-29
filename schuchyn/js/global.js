$(document).ready(function(){
    slider();
});
function slider(){
    $('.navigation .item').hover(function(){
        var activeIdContainer = $('.active-container').attr('id');
        var nextId = $(this).attr('id');
        var nextIdContainer = nextId + '-container';
        if(nextId != activeIdContainer){
            $('#'+activeIdContainer).removeClass('active-container').addClass('hide').fadeOut(0);
            $('#'+activeIdContainer+'-text').fadeOut(0);
            $('#'+nextIdContainer).fadeIn(0).addClass('active-container');
            $('#'+nextIdContainer+'-text').fadeIn(0);
            $('.navigation .active').removeClass('active');
            $(this).addClass('active');
        }
    });
    setInterval(function(){ rotateSlider(); }, 14000);
};
function rotateSlider(){

};