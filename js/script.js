$(function() {

    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(result) {
                if (result.isSucces) {
                    $("#contact-form").append("<p class='thank-you'> Votre message a été bien envoyé. Meci de m'avoir contacté :)</p>");
                    $("#contact-form")[0].reset();
                } else {
                    $("#fistname + .comments").html(result.firstnameError);
                    $("#name + .comments").html(result.nameError);
                    $("#email + .comments").html(result.emailError);
                    $("#phone + .comments").html(phoneError);
                    $("#message + .comments").html(result.messageError);

                }
            }
        });
    });


})