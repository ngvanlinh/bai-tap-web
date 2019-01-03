
var curentYear = '2018';
var fieldId = '1';
ValidateYear(curentYear, '2018');
$(function () {
    $(".fa-caret-right").click(function (e) {
        e.preventDefault();
        $(".current-month").hide();
        $(".next-month").fadeIn();
        $("#Year").text('2019');
        ValidateYear(curentYear, '2019');
    });
    $(".fa-caret-left").click(function (e) {
        e.preventDefault();
        $(".next-month").hide();
        $(".current-month").fadeIn();
        $("#Year").text('2018');
        ValidateYear(curentYear, '2018');
    });
});
$(document).ready(function () {                          
    var timeZone = $("#TimeZone").find("option:selected").val();
    loadPitch('12', timeZone, '2018', fieldId,'');
    loadMonth();                         
    $('html, body').animate({ scrollTop: $('#item-positon').position().top }, 'slow');                            
});