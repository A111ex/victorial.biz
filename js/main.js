var metrika = '';
$(function() {
    var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
    if (isIE11)
    {
        $('head').append('<link href="css/ie8.css" rel="stylesheet" type="text/css" />');
    }
	
    $("a.call").fancybox();
	
    //timer();
	
    // $('.slider-review ul').bxSlider({
        // mode: 'fade'
    // });
	
    // $('.slider-video ul').bxSlider({
        // slideWidth: 348,
        // minSlides: 2,
        // maxSlides: 2,
        // moveSlides: 1,
        // slideMargin: 35,
        // pager: false
    // });
	
    $('header .logo a').on('click', function() {
        var target_offset = $('.slide-1').offset();
        var target_top = target_offset.top;
        $('html, body').animate({scrollTop: target_top}, 500);
        return false;
    });


    $(".call_form").submit(function() {
        var form = $(this);
        var error = false;
        form.find('input[type=text]').each(function() {
            if ($(this).val() == '') {
                // $(this).addClass('error')  
                error = true;
            }
        });
		
        if (!error) {
            var data = form.serialize();
            $.ajax({
                type: 'POST',
                url: 'includes/call_back.php',
                dataType: 'json',
                data: data,
                beforeSend: function(data) {
                    form.find('input[type="submit"]').attr('disabled', 'disabled');
                },
                success: function(data) {
                    if (data['error']) {
                        alert(data['error']);
                    } else {
                        yaCounter29653340.reachGoal(metrika);
                        $.fancybox.close()
                        $('.succes_wrapper').animate({'opacity': 'show'})
                        $('input[type="text"]').removeClass('error')
                        $('input[type="text"]').val("")
                    }
                },
                complete: function(data) {
                    form.find('input[type="submit"]').prop('disabled', false);
                }

            });
        }
        return false;
    });

    var my_height = $(window).height();
    $(".succes_wrapper").css({'height': my_height, 'display': 'none'});
    $('.succes_wrapper').click(function() {
        $('.succes_wrapper').animate({'opacity': 'hide'})
        $('input[type="text"]').removeClass('error')
    });
    $('#close_modal').click(function() {
        $('.succes_wrapper').animate({'opacity': 'hide'})
        $('input[type="text"]').removeClass('error')
    });
    $('.succes_close').click(function() {
        $('.succes_wrapper').animate({'opacity': 'hide'})
        $('input[type="text"]').removeClass('error')
    });
    $('.close_btn').click(function() {
        $('.succes_wrapper').animate({'opacity': 'hide'})
        $('input[type="text"]').removeClass('error')
    });
    $('.ok').click(function() {
        $('.succes_wrapper').animate({'opacity': 'hide'})
        $('input[type="text"]').removeClass('error')
        return false;
    });

    $("#form1").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });

    $("#form2").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });

    $("#form3").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });

    $("#form4").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });

    $("#form5").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });

    $("#form6").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });
    $("#form7").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });
    $("#form8").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });
    $("#form9").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
            },
        }
    });


    $("input[name=phone]").mask("+7 (999) 999-99-99");


});
$(window).load(function() {
    $('.main-menu').liLanding();
});
function timer() //РІ Р±Р»РѕРєРµ С‚Р°Р№РјРµСЂР° РґРѕРїРёСЃС‹РІР°Р№С‚Рµ СЃРѕРґРµР¶СЂР°РЅРёРµ Р±Р»РѕРєРѕРІ '00' !!!! С‚РѕРµСЃС‚СЊ <div class="day">00</div>
{
    var now = new Date();
    newDate = new Date((now.getMonth() + 1) + "/" + now.getDate() + "/" + now.getFullYear() + " 23:59:59");
    var totalRemains = (newDate.getTime() - now.getTime());

    if (totalRemains > 1)
    {
        var Days = (parseInt(parseInt(totalRemains / 1000) / (24 * 3600)));
        var Hours = (parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) / 3600));
        var Min = (parseInt(parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) - Hours * 3600) / 60));
        var Sec = parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) - Hours * 3600) - Min * 60;
        if (Sec < 10) {
            Sec = "0" + Sec
        }
        if (Min < 10) {
            Min = "0" + Min
        }
        if (Hours < 10) {
            Hours = "0" + Hours
        }
        if (Days < 10) {
            Days = "0" + Days
        }
        $(".day").each(function() {
            $(this).text(Days);
        });
        $(".hour").each(function() {
            $(this).text(Hours);
        });
        $(".min").each(function() {
            $(this).text(Min);
        });
        $(".sec").each(function() {
            $(this).text(Sec);
        });
        setTimeout(timer, 1000);
    }
}