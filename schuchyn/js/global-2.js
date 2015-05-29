$(document).ready(function(){
    navigation();
    categories();
    tags();
    items();
});
$( window ).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > 0){
        var scrollTmp = scroll / 2;
        var scrollValue = 'center -'+ scrollTmp +'px';
        $('#block-main-bg-1').css({'background-position': scrollValue});
    }
    if(scroll > 1600){
        var scrollTmp = ( scroll - 1600 ) / 2;
        var scrollValue = 'center -'+ scrollTmp +'px';
        $('#block-main-bg-2').css({'background-position': scrollValue});
    }

    var scrollpositionhowtobuy = $('#how-to-buy-container').offset().top;
    var scrollpositionabout = $('#block-main-bg-2').offset().top;
    var scrollpositioncontact = $('#contact-container').offset().top;


    if(scroll > scrollpositionhowtobuy - 160 && scroll < scrollpositionabout - 100){
        $('#how-to-buy').addClass('active');
        //var marginLeft = ( $(window).width() - 1200 )  / 2 + 500;
        //$('.block-top-hr').animate({'width':200, 'marginLeft': marginLeft},500);
    }
    else{
        $('#how-to-buy').removeClass('active')
    }
    if(scroll > scrollpositionabout - 117 && scroll < scrollpositioncontact - 150){
        $('#block-about').addClass('active');
    }
    else{
        $('#block-about').removeClass('active')
    }
    if(scroll > scrollpositioncontact - 117){
        $('#contact').addClass('active');
    }
    else{
        $('#contact').removeClass('active')
    }
});
$(window).resize(function(){

});
var parentId;
var openSingle = false;
var openTag = false;
function navigation(){
    $('#how-to-buy').click(function(event){
        event.preventDefault();
        var scrollposition = $('#how-to-buy-container').offset().top - 150;
        $("html, body").animate({scrollTop: scrollposition}, '9000');
    });
    $('#block-about').click(function(event){
        event.preventDefault();
        var scrollposition = $('#block-main-bg-2').offset().top - 97;
        $("html, body").animate({scrollTop: scrollposition}, '9000');
    });
    $('#contact').click(function(event){
        event.preventDefault();
        var scrollposition = $('#contact-container').offset().top - 97;
        $("html, body").animate({scrollTop: scrollposition}, '9000');
    });
    $('a.logo').click(function(){
        $("html, body").animate({scrollTop: 0}, '9000');
    });
    $('#send-postcard').click(function(event){
        event.preventDefault();
        $("html, body").animate({scrollTop: 700}, '9000');
    });
}
function categories(){
    $('.block-cards .left div').click(function(){
        var activeId = $('.active-category').attr('id');
        var thisId = $(this).attr('id');
        if(openTag === true){
            $('#tags-container').addClass('hide').html('');
            openTag = false;
        }
        if(openSingle === false){
            if(thisId != activeId){
                $('#'+activeId).removeClass('active-category').addClass('no-active');
                $('#'+activeId+'-container').addClass('hide');
                $(this).addClass('active-category');
                $('#'+thisId+'-container').removeClass('hide');
            }
        }
        else{
            $('.item-single').addClass('hide');
            $('#'+activeId).removeClass('active-category').addClass('no-active');
            $('#'+thisId+'-container').removeClass('hide');
            $(this).addClass('active-category');
            $('.item-single .flip-container').removeClass('hover');
            openSingle = false;
        }
        items();
    });
    $('.block-cards .item-img').click(function(){
        parentId = $(this).parent().parent().attr('id');
        var imgUrl = $(this).html();
        var backUrl = $('#back-html').html();
        $('#'+parentId).addClass('hide');
        $('.item-single').removeClass('hide');
        $('.item-single .front').html(imgUrl + backUrl);
        openSingle = true;
    });
    $('.item-single .front').click(function(){
        $('.item-single .flip-container').addClass('hover');
        var formaHtml = $('#forma-html').html();
        $('.item-single').addClass('forma');
        $('.item-single .back').html(formaHtml);
    });
}
function payment(){
    $('.item-single .back').html('aplata');
}
function backbutton(){
    $('.item-single').addClass('hide');
    // $('#'+activeId).removeClass('active-category').addClass('no-active');
    $('#'+parentId).removeClass('hide');
    //$('#'+parentId).addClass('active-category');
   // var parentIdCategory = parentId.replace('-container');
    $('.item-single .flip-container').removeClass('hover');
    openSingle = false;
}
function tags(){
    $('.tag a').click(function(event){
        event.preventDefault();
        var filter = $(this).attr('data-filter');
        var containerId = $(this).parent().parent().parent().attr('id');
        var countItems = 0;
        $('#'+containerId).addClass('hide');
        $('#tags-container').html('').removeClass('hide');
        var insertHtml='';
        $('.item').each(function(){
            var id = $(this).attr('id');
            $('#'+ id + ' .tag a').each(function(){
                var filterItem = $(this).attr('data-filter');
                if(filterItem == filter){
                    var newHtml = $(this).parent().parent().html();
                    insertHtml += '<div class="item" id="'+id+'">'+newHtml+'</div>';
                    countItems++;
                }
            });
            if(countItems <= 9){
                $('#tags-container').removeClass('items-tags');
            }
            openTag = true;
        });
        $('#tags-container').html(insertHtml);
        items();
        tags();
    });
}
function items(){
    $('.items').each(function(){
        var containerId = $(this).attr('id');
        $('#'+containerId+' .item').each(function(){
            var tagHeight = $(this).find('.tag').height();
           // alert(tagHeight);
            var marginTop = -tagHeight;
            $(this).find('.item-img').css('marginTop',marginTop);
        });
    });
}