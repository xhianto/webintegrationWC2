$(document).ready(function () {
    $("#oefeningDropDown").change(function () {
        $(this).find("option:selected").each(function () {
            var optionValue = $(this).attr("value");
            if (optionValue) {
                $(".oefening").not("#" + optionValue).hide();
                $("#" + optionValue).show();
            }
            else {
                $(".oefening").hide();
            }
        });
    }).change();
})