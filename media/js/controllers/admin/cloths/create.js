$(document).ready(function() {
    //alert('CREATE SECTION');
    form_validation();
});

function submit_form_text() {
    var person = $('input:radio[name=person]:checked').val();
    var type = $("#type").val();
    var price = $('#price').val();
    var size = $('#size').val();
    var termic = $('#paper_termic').val();
    var transfer = $('#paper_transfer').val();
    var custom = $('#custom_logo').val();

    var postData = {person: person, type: type, price: price, size: size, termic: termic,
                    transfer: transfer, custom: custom};

    var request = $.ajax({
        url: document_root + 'admin/cloths/ajax_create',
        data: postData,
        type: "post",
        dataType: 'json',
    });
    // callback handler that will be called on success
   
    request.done(function(response, textStatus, jqXHR) {
        if(response.success=='BAD'){
            alert('Error: '+response.error);
        }  
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
        window.location.href = document_root + 'admin/cloths';
        // reenable the inputs
        //$inputs.prop("disabled", false);
    });
}

function form_validation() {
$('#clothes-validation').validate({
	    rules: {
	      person: {
	        required: true
	      },
	      type: {
	        required: true
	      },
	      price: {
                number:true,
                minlength:4,
                maxlength:6,
	        required: true
              },
              size: {
                minlength:1,
	        required: true
              },
              paper_termic: {
                number:true,
                minlength:4,
                maxlength:6,
	        required: true
              },
              paper_transfer: {
                number:true,
                minlength:4,
                maxlength:6,
	        required: true
              },
              custom_logo: {
                number:true,
                minlength:4,
                maxlength:6,
	        required: true
              },
              
            highlight: function(element) {
				$(element).closest('.input-prepend').removeClass('success').text('Ingrese al menos 3 caracteres');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.span').removeClass('error').addClass('success');
			}
            }
});
    $("#clothes-validation").on('submit', function(e) {
        var isvalidate = $("#clothes-validation").valid();
        //var image = $('#image_src').val();
        if ((isvalidate))
        {
            e.preventDefault();
            submit_form_text();
        }
    });
}