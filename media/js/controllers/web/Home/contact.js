$(document).ready(function() {
    $('#sendButton').live('click', function() {
        doContact();
    });

});

function doContact() {
    var name= $('#name').val();
    var email= $('#email').val();
    var time= $('#time').val();
    var message= $('#message').val();
     var postData = {
     "name": name,
     "email": email,
     "message": message,
     "time": time,
     };
    

    //var postData = '';

    var clothingBar = $('.right-col');

    var request = $.ajax({
        url: document_root + 'home/acontact',
        data: postData,
        type: "post",
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        $('#sendButton').attr("disabled", true);
        $('#dialog').html('Gracias '+name+' por contactarnos te responderemos lo m&aacute;s pronto');
        $('#dialog').dialog();
    });

    // callback handler that will be called on failure
    request.fail(function(jqXHR, textStatus, errorThrown) {
        // log the error to the console
        console.error(
                "The following error occured: " +
                textStatus, errorThrown
                );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function() {
        // reenable the inputs
        //$inputs.prop("disabled", false);
    });


}