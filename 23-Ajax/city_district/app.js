$(function () {
    $('#city').on('change', function () {
        var city_code = $(this).val();
        if(city_code){
            $.post('ajax.php',{'city_code': city_code}, function (response) {
                $('#district').html(response).removeAttr('disabled');
            })
        }else{
            $('#district').html('<option>Select A District</option>').attr('disabled', 'disabled');
        }
    })
});