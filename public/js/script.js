AOS.init();

$('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});



var iconButton1 = $("#About");
iconButton1.on("click", function() {
    $('.about-numbers').each(function (){
        $(this).removeClass('aos-animate');
        setTimeout(function() {
            $('.about-numbers').addClass('aos-animate');
        }, 400);
    });
});


var iconButton2 = $("#About");
iconButton2.on("click", function() {
    $('.caption-numbers').each(function (){
        $(this).removeClass('aos-animate');
        setTimeout(function() {
            $('.caption-numbers').addClass('aos-animate');
        }, 400);
    });

});

var iconButton3 = $("#History");
iconButton3.on("click", function() {
    $('.divv').each(function (){
        $(this).removeClass('aos-animate');
        setTimeout(function() {
            $('.divv').addClass('aos-animate');
        }, 400);
    });

});

var iconButton4 = $("#About");
iconButton4.on("click", function() {
    $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});

(function() {
    const timeline = document.querySelector(".timeline ol"),
        elH = document.querySelectorAll(".timeline li > div"),
        arrows = document.querySelectorAll(".arrows .arrow"),
        arrowPrev = document.querySelector(".arrows .arrow__prev"),
        arrowNext = document.querySelector(".arrows .arrow__next"),
        firstItem = document.querySelector(".timeline li:first-child"),
        lastItem = document.querySelector(".timeline li:last-child"),
        xScrolling = 1200,
        disabledClass = "disabled";

    window.addEventListener("load", init);
    function init() {
        setEqualHeights(elH);
        animateTl(xScrolling, arrows, timeline);
        setSwipeFn(timeline, arrowPrev, arrowNext);
        setKeyboardFn(arrowPrev, arrowNext);
    }

    function setEqualHeights(el) {
        let counter = 0;
        for (let i = 0; i < el.length; i++) {
            const singleHeight = el[i].offsetHeight;
            if (counter < singleHeight) {
                counter = singleHeight;
                console.log("3");
            }
        }
        for (let i = 0; i < el.length; i++) {
            el[i].style.height = `${counter}px`;
        }
    }

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function setBtnState(el, flag = true) {
        if (flag) {
            el.classList.add(disabledClass);
        } else {
            if (el.classList.contains(disabledClass)) {
                el.classList.remove(disabledClass);
            }
            el.disabled = false;
        }
    }

    function animateTl(scrolling, el, tl) {
        let counter = 0;
        for (let i = 0; i < el.length; i++) {
            el[i].addEventListener("click", function() {
                if (!arrowPrev.disabled) {
                    arrowPrev.disabled = true;
                }
                if (!arrowNext.disabled) {
                    arrowNext.disabled = true;
                }
                const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
                if (counter === 0) {
                    tl.style.transform = `translateX(-${scrolling}px)`;
                } else {
                    const tlStyle = getComputedStyle(tl);
                    // add more browser prefixes if needed here
                    const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
                    const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
                    tl.style.transform = `translateX(${values}px)`;
                }

                setTimeout(() => {
                    isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
                    isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
                }, 800);

                counter++;
            });
        }
    }

    function setSwipeFn(tl, prev, next) {
        const hammer = new Hammer(tl);
        hammer.on("swipeleft", () => next.click(
        ));
        hammer.on("swiperight", () => prev.click(

        ));
    }



    function setKeyboardFn(prev, next) {
        document.addEventListener("keydown", (e) => {
            if ((e.which === 37) || (e.which === 39)) {
                const timelineOfTop = timeline.offsetTop;
                const y = window.pageYOffset;
                if (timelineOfTop !== y) {
                    window.scrollTo(0, timelineOfTop);
                }
                if (e.which === 37) {
                    prev.click();
                } else if (e.which === 39) {
                    next.click();
                }
            }
        });
    }
})();





$(document).ready(function(){
    let span =$('.span-back');
    if(span.attr('name') == 'credit') {
        $('body main').css("background-image", "linear-gradient(244deg, #92278f -25%, #0091c6 145%)");
    }
    else if(span.attr('name') == 'vacancy') {
        $('body main').css("background-image", "linear-gradient(244deg, rgb(238, 177, 17) -22%, rgb(0, 145, 198) 124%)");
    }
    else if(span.attr('name') == 'news') {
        $('body main').css("background-image", "linear-gradient(244deg, #934e8e -25%, #0091c6 124%)");
    }
    else if(span.attr('name') == 'finance') {
        $('body main').css("background-color", "#40a1ce");
    }
    else if(span.attr('name') == 'furniture') {
        $('body main').css("background-color", "#a771a3");
    }
    else if(span.attr('name') == 'overdraft') {
        $('body main').css("background-image", "linear-gradient(241deg, rgb(0, 178, 89) 5%, rgb(0, 170, 115) 20%, rgb(0, 153, 172) 37%, rgb(0, 145, 198))");
    }
    else if(span.attr('name') == 'branch') {
        $('body main').css("background-image", "linear-gradient(244deg, #92278f -25%, #0091c6 145%)");
    }

});



$(document).ready(function () {

    let boxs = $(".send_message");

    let contents = $(".span");
    $(boxs).each(function () {

      $(this).click(function () {
        $(this).css("display", "none");
        let dataCategoryOfLeftMenu = $(this).data("category");

        $(contents).each(function () {

          let dataCategoryofContent = $(this).data("category");

          if (dataCategoryOfLeftMenu == dataCategoryofContent) {
            $(this).css("display", "block");
            // if (dataCategoryOfLeftMenu == "kalkulyator" || dataCategoryOfLeftMenu == "online" ) {
            //     $(".sertler").css("display", "block");
            //   }
            //   else{
            //     $(".sertler").css("display", "none");
            //   }
          }
          else {
            $(this).css("display", "none");
          }
        })
      })
    })
  })



$(document).ready(function (){
    $('.connection-left select').wrap('<div class="select_wrapper"></div>')
    $('select').parent().prepend('<span>'+ $(this).find(':selected').text() +'</span>');

    $('.connection-left select').css('display', 'none');
    $('.connection-left select').parent().append('<ul class="select_inner"></ul>');
    $('.connection-left select').children().each(function(){
      var opttext = $(this).text();
      var optval = $(this).val();
      $('.connection-left select').parent().children('.select_inner').append('<li id="' + optval + '">' + opttext + '</li>');
});



$('.connection-left select').parent().find('li').on('click', function (){
      var cur = $(this).attr('id');
      $('.connection-left select').parent().children('span').text($(this).text());
      $('.connection-left select').children().removeAttr('selected');
      $('.connection-left select').children('[value="'+cur+'"]').attr('selected','selected');
      //console.log($('select').children('[value="'+cur+'"]').text());
           $('.connection-left select').parent().removeClass('openSelect');

       $('.connection-left select').parent().find('ul').hide();
    });
    $('.connection-left select').parent().find('span').on('click', function (){
       $('.connection-left select').parent().find('ul').slideToggle(200);

         $('.connection-left select').parent().toggleClass('openSelect');


    });
});




$(document).ready(function (){
    $('.partner-select1 select').wrap('<div class="select_wrapper"></div>')
    $('.partner-select1 select').parent().prepend('<span>'+ 'Şəhər*' +'</span>');
    $('.partner-select1 select').css('display', 'none');
    $('.partner-select1 select').parent().append('<ul class="select_inner"></ul>');
    $('.partner-select1 select').children().each(function(){
      var opttext = $(this).text();
      var optval = $(this).val();
      $('.partner-select1 select').parent().children('.select_inner').append('<li id="' + optval + '">' + opttext + '</li>');
    });



    $('.partner-select1 select').parent().find('li').on('click', function (){
      var cur = $(this).attr('id');
      $('.partner-select1 select').parent().children('span').text($(this).text());
      $('.partner-select1 select').children().removeAttr('selected');
      $('.partner-select1 select').children('[value="'+cur+'"]').attr('selected','selected');
      //console.log($('select').children('[value="'+cur+'"]').text());
           $('.partner-select1 select').parent().removeClass('openSelect');

       $('.partner-select1 select').parent().find('ul').hide();
    });
    $('.partner-select1 select').parent().find('span').on('click', function (){
       $('.partner-select1 select').parent().find('ul').slideToggle(200);

         $('.partner-select1 select').parent().toggleClass('openSelect');
    });
});


$(document).ready(function (){
        $('.partner-select2 select').wrap('<div class="select_wrapper"></div>')
        $('.partner-select2 select').parent().prepend('<span>'+ 'Kateqoriya*' +'</span>');
        $('.partner-select2 select').css('display', 'none');
        $('.partner-select2 select').parent().append('<ul class="select_inner"></ul>');
        $('.partner-select2 select').children().each(function(){
          var opttext = $(this).text();
          var optval = $(this).val();
          $('.partner-select2 select').parent().children('.select_inner').append('<li id="' + optval + '">' + opttext + '</li>');
        });



        $('.partner-select2 select').parent().find('li').on('click', function (){
          var cur = $(this).attr('id');
          $('.partner-select2 select').parent().children('span').text($(this).text());
          $('.partner-select2 select').children().removeAttr('selected');
          $('.partner-select2 select').children('[value="'+cur+'"]').attr('selected','selected');
          //console.log($('select').children('[value="'+cur+'"]').text());
               $('.partner-select2 select').parent().removeClass('openSelect');

           $('.partner-select2 select').parent().find('ul').hide();
        });
        $('.partner-select2 select').parent().find('span').on('click', function (){
           $('.partner-select2 select').parent().find('ul').slideToggle(200);

             $('.partner-select2 select').parent().toggleClass('openSelect');


        });
});



$(document).ready(function (){
    var count = 0;
    var active_category = $('#active_leader_cat').find('a').attr('name');
    $('#leaders .section-part').each(function (){
        if ($(this).attr('id') != active_category){
            $(this).hide();
        }
        else{
            $(this).show();
            count++;
        }
    });
    if (count == 0){
        $('#none_text2').css('display','block');
    }
    else{
        $('#none_text2').css('display','none');
    }
});


$('li[name=leader_category]').on('click', function (){
    var count = 0;
    $('.nav-pills .active').removeClass('active');
    $(this).addClass('active');
    var active_category = $(this).find('a').attr('name');
    $('#leaders .section-part').each(function (){
        if ($(this).attr('id') != active_category){
            $(this).hide();
        }
        else{
            $(this).show();
            count++;
        }
    });
    if (count == 0){
        $('#none_text2').css('display','block');
    }
    else{
        $('#none_text2').css('display','none');
    }
    document.getElementById('leaders').scrollTop = 0;
});





$(".connection-cap").click(function(){
    $("#connection").animate({bottom: '0px'});
    $(".connection-right").css({visibility: 'visible'});
});
$(".span-x").click(function(){
    $("#connection").animate({bottom: '-600px'});
    $(".connection-right").css({visibility: 'hidden'});
});

function closeNav() {
    document.getElementById("myNav").style.width = "0";
}
function openNav() {
    document.getElementById("myNav").style.width = "600px";
}

//second nav
function closeOwnNav() {
    document.getElementById("myOwnNav").style.width = "0";
}
function openOwnNav() {
    document.getElementById("myOwnNav").style.width = "600px";
}


$(document).ready(function (){
    if ($('#mainpage-' +
        'span').text() == '1'){
        $('#nonable').hide();
    }
});
$('#qeydiyyat').on('click', function(){
    $(".login").css("display", "none");
    $(".signin").css("display", "block");
})

$('.card').on('click', function() {
    if ($(this).css('z-index') == '10'){
        var clicks = $(this).data('clicks');
        if (clicks) {
            $('#nonable').animate({bottom: '0px'});
        }
        else {
            $('#nonable').animate({bottom: '-250px'});
        }
        $(this).data("clicks", !clicks);
    }

    // setTimeout(function (){
    //     if ($('#nonable').css('bottom') == '0px'){
    //         $('.card--out').css('pointer-events', ' ');
    //     }
    //     else{
    //         $('.card--out').css('pointer-events', 'none');
    //     }
    // }, 500);
});


var i = 0,
    a = 0,
    isBackspacing = false,
    isParagraph = false;

// Typerwrite text content. Use a pipe to indicate the start of the second line "|".
var textArray = [
    "Hər kəs üçün|istehlak və mikro-biznes kreditləri",
];

// Speed (in milliseconds) of typing.
var speedForward = 100, //Typing Speed
    speedWait = 1500, // Wait between typing and backspacing
    speedBetweenLines = 100, //Wait between first and second lines
    speedBackspace = 50; //Backspace Speed

//Run the loop
typeWriter("output", textArray);

function typeWriter(id, ar) {
    var element = $("#" + id),
        aString = ar[a],
        eHeader = element.children("h1"), //Header element
        eParagraph = element.children("p"); //Subheader element

    // Determine if animation should be typing or backspacing
    if (!isBackspacing) {

        // If full string hasn't yet been typed out, continue typing
        if (i < aString.length) {

            // If character about to be typed is a pipe, switch to second line and continue.
            if (aString.charAt(i) == "|") {
                isParagraph = true;
                eHeader.removeClass("cursor");
                eParagraph.addClass("cursor");
                i++;
                setTimeout(function(){ typeWriter(id, ar); }, speedBetweenLines);

                // If character isn't a pipe, continue typing.
            } else {
                // Type header or subheader depending on whether pipe has been detected
                if (!isParagraph) {
                    eHeader.text(eHeader.text() + aString.charAt(i));
                } else {
                    eParagraph.text(eParagraph.text() + aString.charAt(i));
                }
                i++;
                setTimeout(function(){ typeWriter(id, ar); }, speedForward);
            }

            // If full string has been typed, switch to backspace mode.
        } else if (i == aString.length) {

            isBackspacing = true;
            setTimeout(function(){ typeWriter(id, ar); }, speedWait);

        }

        // If backspacing is enabled
    } else {

        // If either the header or the paragraph still has text, continue backspacing
        if (eHeader.text().length > 0 || eParagraph.text().length > 0) {

            // If paragraph still has text, continue erasing, otherwise switch to the header.
            if (eParagraph.text().length > 0) {
                eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
            } else if (eHeader.text().length > 0) {
                eParagraph.removeClass("cursor");
                eHeader.addClass("cursor");
                eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
            }
            setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);

            // If neither head or paragraph still has text, switch to next quote in array and start typing.
        } else {

            isBackspacing = false;
            i = 0;
            isParagraph = false;
            a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
            setTimeout(function(){ typeWriter(id, ar); }, 1500);

        }
    }
}

$('.leader_main_link').on('click', function (){
    var src = $(this).attr('id');
    $('.leader_main').attr('src',src);
});

$(document).on("click", function(event){
    if (!$(event.target).parents('#nonable').length){
        $('#nonable').animate({bottom: '-250px'});
    }
})

