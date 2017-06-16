/**
 * Created by Edgardo Acosta.
 * Index.js used in index.php
 */




$(document).ready(function () {

    $(".pricing-card").mouseover(function () {
        $(this).addClass("card-overlay");
    });
    $(".pricing-card").mouseout(function () {
        $(this).removeClass("card-overlay");
    });


});