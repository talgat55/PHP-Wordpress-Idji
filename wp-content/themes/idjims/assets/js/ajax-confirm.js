jQuery(function () {
    jQuery('.confirm.btn-registration.btn-block').click(function (e) {
        e.preventDefault();

        var valuenumber = jQuery("#reg-phone").val();
        var valuecode = jQuery("#reg-code").val();
        if (isNaN(parseInt(valuenumber))) {
            alert('Пожалуйста введите номер телефона');
            return ;
        }
        if (isNaN(parseInt(valuecode))) {
            valuecode = 0;
        }


        if (valuenumber.length != 11) {
            alert('Пожалуйста введите номер телефона корректно');
            return ;
        }
        if(isNaN(parseInt(window.a))){
            var check = false;
        }else{
            if(window.a == valuecode ){

                var check = true;
            }else{
                var check = false;

            }
        }
        var data = {
            action: 'check_account',
            number: valuenumber,
            check: check,
            code: valuecode
        };

        jQuery.post(ajaxurl, data, function (res) {

            if (res.success) {
                if (res.data != '') {
                    obj = jQuery.parseJSON(res.data);

                    if (obj.status == "ok") {
                        window.a = obj.value;
                        jQuery('#reg-code').show();
                        alert('Сейчас на ваш номер выслан код введите его пожалуйста в поле Код подтверждения');
                    } else if (obj.status == "success") {
                        top.location.replace(obj.url);
                        // true confirm code
                    } else if (obj.status == "falsecheck") {

                        alert('Пароли не совпадают, Повторите попытку позже');
                    } else {
                        alert('В данный момент подтверждение не возможно повторите попытку позже!');
                        //console.log(res.data);
                    }

                } else {
                    //alert('В данный момент подтверждение не возможно повторите попытку позже! ');
                    alert('В данный момент подтверждение не возможно повторите попытку позже! ответ пустой ');

                }
            }


        }).fail(function(xhr, textStatus, e) {
            // console.log(xhr.responseText);
        });
    });

});