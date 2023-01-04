var contentLeftWidth = $('.content-left').outerWidth()
function setBlockMargin(){
    var paddingLeft = parseInt($('.container').css('padding-left'))
    var marginLeft = parseInt($('.container').css('margin-left'))
    $('.content-left').css('margin-left', marginLeft + paddingLeft)
    $('.content-center').css('padding-left', marginLeft + contentLeftWidth + paddingLeft + 100)
    $('.main-bottom-carousel').css('left', marginLeft + contentLeftWidth + paddingLeft + 100)
    $('.main-content').css('margin-right', marginLeft + paddingLeft)
    $('.card').css('padding-right', marginLeft + paddingLeft)
}

$(document).ready(function (){
    setBlockMargin()
})

$.fn.commentCards = function(){

    return this.each(function(){

        var $this = $(this),
            $cards = $this.find('.card'),
            $current = $cards.filter('.card--current'),
            $next;

        $cards.on('click',function(){
            if ( !$current.is(this) ) {
                $cards.removeClass('card--current card--out card--next');
                $current.addClass('card--out');

                // $('.card-header .card-title').animate({
                //     fontSize: "10px"
                // }, 1000);

                $current = $(this).addClass('card--current');
                $next = $current.next();
                $next = $next.length ? $next : $cards.first();
                $next.addClass('card--next');
            }
        });

        if ( !$current.length ) {
            $current = $cards.last();
            $cards.first().trigger('click');
        }

        $this.addClass('cards--active');

    })

}

$('.cards').commentCards();

window.addEventListener("resize", function() {
    setBlockMargin()
})
