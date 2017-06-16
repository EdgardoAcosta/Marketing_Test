/**
 * Created by Edgardo Acosta.
 * form.js used in form.php
 */





$(document).ready(function () {

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $('#add').submit(function (event) {
        event.preventDefault();
        var datos = {};
        var objName;
        var objValue;
        $(this).find(':input').each(function () {
            objName = $(this).attr('name');
            objValue = $(this).val();
            datos[objName] = objValue;
        });

        $.post("web_service/add_user_to_list.php", datos, function (result) {

        }, 'json').done(function (result) {
            console.log(result);

            if (result.success == '1') {
                toastr.success(result.msg);
                $('#add').reset();
            }
            else {
                toastr.warning(result.msg);
            }
        }).fail(function (xhr) {
            toastr.error("Sorry something went wrong, try again");
            //console.log(xhr);
        });


    });



});