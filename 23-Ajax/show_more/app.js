$(function () {
    $('#show_more').on('click', function (e) {
        var last_id = $('#list li:last').data('id');
        $.post('ajax.php', {'id':last_id},function (response) {
            if(response.hidden){
                $('#show_more').remove();
            }
            $('#list').append(response.html);
        },'json');
        e.preventDefault();
    });
});