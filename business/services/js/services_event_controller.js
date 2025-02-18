let controller_url = 'services/controller/services_controller.php'


$(document).on('click', '.card_services', function () {
    var user_request = 'fetch_services';

    $.post(controller_url, {
        user_request:user_request
    }, function (data) {
        var response = JSON.parse(data);
        if(response.status == 'success'){
            $('#main_content_container').html(response.view);
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: response.message
            });
        }
    });
});
