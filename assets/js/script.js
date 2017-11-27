// $(window).scroll(function() {
//   $('.mov').each(function(){
//     var imagePos = $(this).offset().top;
//     var topOfWindow = $(window).scrollTop();
//     if (imagePos < topOfWindow+500) {
//       $(this).addClass('bounceInLeft');
//     }
//   });
// });

// $(window).scroll(function() {
//   $('.moving').each(function(){
//     var imagePos = $(this).offset().top;
//     var topOfWindow = $(window).scrollTop();
//     if (imagePos < topOfWindow+500) {
//       $(this).addClass('bounceInRight');
//     }
//   });
// });

$(document).ready(function () {
    $("[data-maarv='animated']").maarvAnimated();
    coreJsSwitchElement.init();

});

var coreJsSwitchElement = {
    init: function () {
        // Переменные
        // ...
        this.$arElements = $('[data-js-core-switch-element]')
        //...
        this.load();
    },
    load: function () {
        // Обработка DATA
        this.$arElements.each(function () {
            var $this = $(this),
                $name = $this.data('js-core-switch-element'),
                $text = $this.text();
            $textSwitch = $this.data('js-core-switch-element-text')

            $this.data({
                status:      false,
                element:     $('.' + $name),
                text:        $text,
                textSwitch:  $textSwitch
            });
        });
        this.activation();
        this.onStatus();
    },
    activation: function() {
        this.$arElements.each(function () {
            var $this = $(this);
            $($this).on('click', function(){
                $this.data('element').toggleClass('active');

                if($this.data('element').hasClass('active')){
                    $this.text($this.data('textSwitch'));
                    $this.data().status = true;
                }else {
                    $this.text($this.data('text'));
                    $this.data().status = false;
                }


                console.log($this.data('status'));
                if($this.data('status') !== true) {
                    $this.parent().removeClass('error');
                }else{
                    $this.parent().addClass('error');
                }
            });            
        });
    },
    onStatus: function(){
        this.$arElements.each(function () {
            var $this = $(this);
            $($this.data('element')).on('click', function(e){
                if(!$(this).hasClass('active')) {
                    e.preventDefault();
                    $this.parent().addClass('error');
                }else{
                    $this.parent().removeClass('error');
                }
            });
        });
    }
};