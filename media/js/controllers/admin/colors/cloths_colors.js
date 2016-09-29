$(document).ready(function() {
    upload_image();
    form_validation();
});

function submit_form_text() {
    var name = $('#name').val();
    var description = $('#description').val();
    var image = $('#image_src').val();

    var postData = {name: name, description: description, image: image};

    var request = $.ajax({
        url: document_root + 'admin/colors/ajax_colors',
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
        window.location.href = document_root + 'admin/colors';
        // reenable the inputs
        //$inputs.prop("disabled", false);
    });
}

function upload_image() {
    //var input = $('#images');
    var input = document.getElementById("images");
    var formdata = false;

    if (window.FormData) {
        formdata = new FormData();
        //$("#btn").css({"display":"none"});								
    }

    input.addEventListener("change", function(evt) {
        $("#response").html("Cargando el logo...");
        var img;
        var reader;
        var file;

        for (var i = 0; i < this.files.length; i++) {
            file = this.files[i];

            if (!!file.type.match(/image.*/)) {
                if (window.FileReader) {
                    reader = new FileReader();
                    reader.onloadend = function(e) {
                    //showUploadedItem();
                    };
                    reader.readAsDataURL(file);
                }
                if (formdata) {
                    formdata.append("images[]", file);
                }
            }
        }

        if (formdata) {
            $.ajax({
                url: document_root + 'admin/Colors/ajax_color_img',
                type: "POST",
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(res) {
                    //$("#response").html(res);
                    if (res.success=='OK') {
                        $('#image_src').val(res.image);
                        var image_tag='<img src="'+document_root+res.image+'" \\>';
                        $('#picture').html(image_tag);
                    }
                    else{
                        $("#response").html(res.success); 
                    }
                }
            });
        }
    }, false);
}

function form_validation() {
    //span.removeClass('valid');
    $('#color-validation').validate({
        rules: {
            name: {
                minlength: 3,
                required: true
            },
            description: {
                required: false
            },
            images: {
                required: true
            },
            highlight: function(element) {
                $(element).closest('.input-prepend').removeClass('success').addClass('error');
            },
            success: function(element) {
                element
                        .text('OK!').addClass('valid')
                        .closest('.input-prepend').removeClass('error').addClass('success');
            }
        }
    });
$('#color-validation').validate({
	    rules: {
	      name: {
	        minlength: 3,
	        required: true
	      },
	      description: {
	        required: false
	      },
	      image: {
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
    $("#color-validation").on('submit', function(e) {
        var isvalidate = $("#color-validation").valid();
        var image = $('#image_src').val();
        if ((isvalidate))
        {
            e.preventDefault();
            submit_form_text();
        }
    });
}



