$(function () {
    // $.ajax
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: {'full_name': 'John Doe'},
        success: function (response) {
            if(response.full_name){
                alert(response.full_name);
                console.log(response);
            }
        },
        dataType: 'json'
    });

    // $.post
    /*$.post('ajax.php', {'test_name': 'Jane Dove'}, function (response) {
        console.log(response)
    }, 'json');*/

    // $.get
    /*$.get('ajax.php', {'name': 'Test Name'}, function (response) {
        console.log(response)
    }, 'json');*/
});