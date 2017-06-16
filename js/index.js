/**
 * Created by Edgardo Acosta.
 * Index.js used in index.php
 */


function register_user(email) {
}

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

    console.log("Ready");
    $(".pricing-card").mouseover(function () {
        $(this).addClass("card-overlay");
    });
    $(".pricing-card").mouseout(function () {
        $(this).removeClass("card-overlay");
    });


});