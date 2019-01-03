

function ValidateYear(currentYear, year) {
    if (parseInt(year) == parseInt(currentYear)) {
        $(".fa-caret-left").hide();
        $(".fa-caret-right").show();
    }
    if (parseInt(year) > parseInt(currentYear)) {
        $(".fa-caret-left").show();
        $(".fa-caret-right").hide();
    }
}