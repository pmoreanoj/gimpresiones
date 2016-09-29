$(document).ready(function() {
    upload_image();
    form_validation();
    
    $('#clothing_type').live('change', function() {
        onTypeClick($(this));
    });
    
     $('#clothing_genre').live('change', function() {
        onGenreClick($(this));
    });

});

function onGenreClick(object) {
    var genre = object.val();

    var postData = {genre: genre};

    var request = $.ajax({
        url: document_root + 'admin/items/ajax_get_type',
        data: postData,
        type: "post",
        dataType: 'json',
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {

        $('#type_load').html(response.html);

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


function onTypeClick(object) {
    var genre=$('#clothing_genre').val();
    var type = object.val();

    var postData = {genre:genre, type: type};

    var request = $.ajax({
        url: document_root + 'admin/items/ajax_get_size',
        data: postData,
        type: "post",
        dataType: 'json',
    });


    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {

        $('#size_load').html(response.html);

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
        //window.location.href = document_root + 'admin/items';
        // reenable the inputs
        //$inputs.prop("disabled", false);
    });

}
function submit_form_text() {
    var name = $('#name').val();
    var clothing_id = $('#clothing_id').val();
    var first_color = $("#first_color").val();
    var second_color = $("#second_color").val();
    var image = $('#image_src').val();

    var postData = {name: name, clothing_id: clothing_id, first_color: first_color, second_color: second_color, image: image};

    var request = $.ajax({
        url: document_root + 'admin/items/ajax_item',
        data: postData,
        type: "post",
        dataType: 'json',
    });


    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {

        if (response.success == 'BAD') {
            alert('Error: ' + response.error);
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
        window.location.href = document_root + 'admin/items';
        // reenable the inputs
        //$inputs.prop("disabled", false);
    });


}

function upload_image() {
//PATO MOREANO
//
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
                url: document_root + 'admin/Items/ajax_item_img',
                type: "POST",
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(res) {
                    //$("#response").html(res);
                    if (res.success == 'OK') {
                        $('#image_src').val(res.image);
                        var image_tag = '<img src="' + document_root + res.image + '" \\>';
                        $('#picture').html(image_tag);
                    }
                    else {
                        $("#response").html(res.success);
                    }
                }
            });
        }
    }, false);
}

function form_validation() {
    //span.removeClass('valid');
    $('#item-validation').validate({
        rules: {
            name: {
                minlength: 5,
                required: true
            },
            first_color: {
                required: true
            },
            second_color: {
                required: true
            },
            image: {
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

    $("#item-validation").on('submit', function(e) {
        var isvalidate = $("#item-validation").valid();
        var image = $('#image_src').val();
        if ((isvalidate))
        {
            e.preventDefault();
            submit_form_text();
        }
    });
}