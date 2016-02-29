(function(){
  "use strict";

$(document).ready(function () {

    $('body').on("input", "#number", function () {
        var number = $('#number').val();
        if (number !== "" && Number(number)) {
            $('#allertnumber').hide();
        }
        else if (number === "") {
            $('#allertnumber').hide();
        } else {
            $('#allertnumber').show();
        }
    });

    $('body').on("input", "#password2, #password", function () {
        if ($('#password2').val() !== "") {
            var haslo = $('#password').val();
            var haslo2 = $('#password2').val();
            if (haslo == haslo2) {
                $('#alertps2').hide();
            }
            else {
                $('#alertps2').show();
            }
        }
    });
});

    })();