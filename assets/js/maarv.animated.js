/*
 * Maarv.animated
 * Version - 1.0
 */

(function( $ ){
    var methods = {
        init : function( options ) {
            methods.scroll(this);

            return this.each(function() {
                var $this = $(this),
                    data = $this.data('setting');

                // Если плагин еще не был инициализирован
                if ( ! data ) {
                    $(this).data('setting', {
                        object :    $this,
                        action :    true,   // Анимация
                        top :       ($this.offset().top - $(window).height()), // Расположение обьекта
                        animated :  $this.data('animated'),   // Анимация
                        delay :     $this.data('delay'),      // Задержка
                        duration :  $this.data('duration'),   // Продолжительность
                        offset :    $this.data('offset')      // Расстояние до начала анимации
                    });
                    $(this).css('visibility','hidden');

                    //console.log($this.data('setting').object);
                }

                methods.start(this);
            });
        },
        scroll : function(_this) {
            $(window).scroll(function() {
                return _this.each(function() {
                    methods.start(this);

                    //console.log('Отступ сверху: '+ $(window).scrollTop() +' > '+ ( $(_this).offset().top - $(window).height()));
                });

            });
        },
        start : function(_this) {
            var $this = $(_this),
                animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

            if ($(window).scrollTop() > $this.data('setting').top) { // Если обьект на мониторе
                if ($this.data('setting').action) { // Если обьект еще не выводился
                    setTimeout(function () {

                        $this.css({
                            'animation-duration' : $this.data('setting').duration,
                            'animation-fill-mode' : 'both',
                            'visibility' : 'visible'
                        })
                            .addClass($this.data('setting').animated).one(animationEnd, function() {
                            $this.removeClass('_animated ' + $this.data('setting').animated);
                        });

                    }, $this.data('setting').delay *1000);

                    $this.data('setting').action = false;
                }
            }
        }
    };
    $.fn.maarvAnimated = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Метод с именем ' +  method + ' не существует для maarvAnimated.lib' );
        }
    };
})( jQuery );
