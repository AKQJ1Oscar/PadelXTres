/**
 * Created by oscar on 21/05/2015.
 */
function ajaxMail(name_, email_, phone_, message_){
    var parametros = {
        "name_" : name_,
        "email_" :  email_,
        "phone_" : phone_,
        "message_" : message_
    };
    $.ajax({
        data:  parametros,
        url:   'mail/contact_me.php',
        type:  'post',
        beforeSend: function () {
            $("#resultado").html("Procesando, espere por favor...");
        },
        success:  function (response) {
            $("#resultado").html(response);
        }
    });
}
