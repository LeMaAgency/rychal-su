$(document).ready(function () {
    $('.feedback-form').on('submit', function(e) {
        e.preventDefault();
        var curForm = $(this),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0);
        BX.showWait(waitElement);
        $.post($(this).attr('action'), $(this).serialize(), function(ans) {
            BX.closeWait(waitElement);

            curForm.find('input:not([type="submit"]):not([type="button"]), textarea').css({'border': '0px solid'});
            curForm.find('.item-error').empty();
            if(ans && ans.errors)
            {
                for(var inputName in ans.errors)
                {
                    curForm.find('[name="' + inputName + '"]').first()
                        .css({border: '2px solid red'}).closest('.form-group').find('.item-error').html(ans.errors[inputName]);
                }
            }
            else
            {
                $.fancybox.open('<div style="color:green;padding:35px;">Ваше сообщение успешно отправлено</div>');
                curForm.find('input:not([type="submit"]):not([type="button"]), textarea').val('');
            }
        }, 'json')
        return false;
    })
})