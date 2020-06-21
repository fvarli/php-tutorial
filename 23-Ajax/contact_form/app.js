$(function () {
    $('#btn-send').on('click', function (e) {
        var form_data = $('#contact-form').serialize();
        $.post('ajax.php', form_data + '&type=contact', function (response) {
            if(response.error){
                $('#success').hide();
                $('#error').html(response.error).show();
                $('#' + response.target).focus();
            }else{
                $('#error').hide();
                $('#success').html(response.success).show();
                $('#contact-form input, #contact-form textarea').val('');
            }
        }, 'json');
        e.preventDefault();
    })
});