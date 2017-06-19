$(function () {
    $('ul.delay-show li').css({left: '40px', opacity: 0});
    $('ul.delay-show li').hide();
    $('#slide-link').click(function () {
        var op = $('ul.delay-show li').css('opacity');
        if (op === '0') {
            $('ul.delay-show li').show();
            $('ul.delay-show li').each(function (i) {
                $(this).delay(300 * i).animate({left: '0', opacity: 1}, 700);
            });
        } else {
            var delayed = function () {
                var def = $.Deferred();
                $('ul.delay-show li').each(function (i) {
                    $(this).delay(300 * i).animate({left: '40px', opacity: 0}, 700);
                });

                return def.promise();
            };
            var getObjs = function () {
                $('ul.delay-show').hide();
            };
            delayed().then(getObjs);
        }
    });

    $('.slide-link').click(function () {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top + -100;
        $("html, body").animate({scrollTop: position}, speed, "swing");
        return false;
    });
    $('form :submit').click(function (event) {
        var TIMEOUT = 10000;
        var target = event.target;
        var $form = $(target).closest('form');
        var $submit = $form.find(':submit');

        // clickしたsubmitの値をhiddenに保存
        var $hidden = $('<input/>', {
            type: 'hidden',
            name: target.name,
            value: target.value
        }).appendTo($form);

        event.preventDefault();
        event.stopPropagation();

        // 全てのsubmitを無効化
        $submit.prop('disabled', true);

        // 時間経過でsubmitの無効化を解除
        setTimeout(function () {
            $hidden.remove();
            $submit.prop('disabled', false);
        }, TIMEOUT);

        $form.submit();
    });

    $('#btn-login').click(function () {
        $('#login').modal();
    });
    $('.slide-box').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('slide-up');
        } else {
            $(this).stop().removeClass('slide-up');
        }
    });

});


