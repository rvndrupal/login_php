$(document).on('submit', '#formlg', function(event) {

    event.preventDefault();

    $.ajax({
            type: 'POST',
            url: 'login.php',
            data: $(this).serialize(),
            dataType: "json",

            beforeSend: function() {

            }

        })
        .done(function(respuesta) {
            console.log(respuesta);
        })
        .fail(function(resp) {
            console.log(resp.responseText);
        })
        .always(function(resp) {
            console.log("complete");
        });


});