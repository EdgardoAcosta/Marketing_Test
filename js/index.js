/**
 * Created by Edgardo Acosta.
 * Index.js used in index.php
 */


$(document).ready(function () {
    //initializes variables for toastr
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

    //Change card effect
    $(".pricing-card").mouseover(function () {
        $(this).addClass("card-overlay");
    });
    $(".pricing-card").mouseout(function () {
        $(this).removeClass("card-overlay");
    });


});