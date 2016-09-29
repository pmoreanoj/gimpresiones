$(document).ready(function() {
    alert('EDIT SECTION');
    upload_image();
    form_validation();

});


function submit_form_text() {
    var id = $('#unique').val();
    var name = $('#name').val();
    var type = $('input:radio[name=type]:checked').val()
    var category = $('#category').val();
    var description = $('#description').val();
    var image = $('#image_src').val();


    var postData = {id:id, name: name, type: type, category: category, description: description, image: image};


    var request = $.ajax({
        url: document_root + 'admin/logos/ajax_edit_logo',
        data: postData,
        type: "post",
        dataType: 'json'
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        window.location.href = document_root + 'admin/items';
        //if(response.success=='BAD'){
          //  alert('Error: '+response.error);
        //}
        
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
        window.location.href = document_root + 'admin/logos';
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
        $("#response").html("Cambiando el logo...");
        var img;
        var reader;
        var file;

        for (var i = 0; i < this.files.length; i++) {
            file = this.files[i];

            if (!!file.type.match(/image.*/)) {
                if (window.FileReader) {
                    reader = new FileReader();
                    reader.onloadend = function(e) {
                    //showUploadedItem(e.target.result, file.fileName);
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
                url: document_root + 'admin/Logos/ajax_upload_edit',
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
                        //$('#picture').attr('src', res.image);
                       
                        //$('#picture_div').html(" "); //Option 1
                        $("#picture").attr('src',document_root+res.image);
                    }
                    else{
                        $("#response").html(res.success); 
                    }
                }
            });
        }
    }, false);
}

function showUploadedItem(source) {
    /*
    var list = $("#image-list");
    var li = $(document.createElement('li'));
    var img = $(document.createElement('img'));
    img.attr('src', source);
    li.append(img);
    list.append(li);
     */
    
}

function form_validation() {

    $('#logos-validation').validate({
        rules: {
            name: {
                minlength: 3,
                required: true
            },
            type: {
                required: true
            },
            category: {
                required: true
            },
            description: {
                required: false
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

    $("#logos-validation").on('submit', function(e) {
        var isvalidate = $("#logos-validation").valid();
        var image = $('#image_src').val();
        if ((isvalidate))
        {
            e.preventDefault();
            submit_form_text();
        }
    });
}