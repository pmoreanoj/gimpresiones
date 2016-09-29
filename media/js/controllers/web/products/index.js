var option = '';

$(document).ready(function() {

    startProcedure();
    upload_image();

});


function startProcedure() {

    $('.lowbar-icons').live('click', function() {
        onLogoClick($(this));
    });

    $('.nav-lowbar-icons').live('click', function() {
        onNavClick($(this));
    });
    $('.img-right-col').live('click', function() {
        onClothingClick($(this));
    });

    $('.color_item').live('click', function() {
        onColorClick($(this));
    });

    $('.img-icon-designer').live('click', function() {
        onClothingTypeClick($(this));
    });


    $('.logos-category').live('click', function(event) {
        event.preventDefault();
        onLogoCategoryClick($(this));
    });

    $('.image-button').live('click', function() {
        onImageButtonClick($(this));
    });

    $('#size_select').live('change', function() {
        onSizeSelectChange($(this));
    });

    $("#quantity").spinner({min: 1});
    $("#quantity").spinner("value", 1);
    $('.main-logo').elevateZoom({
        easing: true,
        zoomWindowWidth: 280,
        zoomWindowHeight: 250,
        zoomWindowPosition: 4});

    $("#menu").menu();
    option = $('.img-icon-designer').attr('option');

    loadProcedure();

}

function loadProcedure() {
    getLogos();
    getClothing();
    getSizes();
    getColors();

}

function onLogoClick(object) {
    var src = object.attr('src');
    var unique = object.attr('unique');
    var type = object.attr('type');
    $('#custom').val('NO');
    $('.main-logo').attr('src', src);
    $('.main-logo').attr('unique', unique);
    $('.main-logo').attr('type', type);
    $('.main-logo').elevateZoom({
        easing: true,
        zoomWindowWidth: 200,
        zoomWindowHeight: 200,
        zoomWindowPosition: 4});
    updatePrice();
}

function onClothingClick(object) {
    var src = object.attr('src');
    var unique = object.attr('unique');
    var price = object.attr('price');
    var price_transfer = object.attr('price_transfer');
    var price_termic = object.attr('price_termic');
    var price_custom = object.attr('price_custom');
    $('.designer-canvas').attr('src', src);
    $('.designer-canvas').attr('price', price);
    $('.designer-canvas').attr('unique', unique);
    $('.designer-canvas').attr('price_transfer', price_transfer);
    $('.designer-canvas').attr('price_termic', price_termic);
    $('.designer-canvas').attr('price_custom', price_custom);
    updatePrice();
}

function onClothingTypeClick(object) {
    $('#size_select').val('');
    var op = object.attr('option');
    option = op;
    getClothing();
    getSizes();
    getColors();
}

function onNavClick(object) {
    var page = $('#logos_page');
    var op = object.attr('nav');
    if (op == 'left') {
        if (page.val() > 1) {
            page.val(page.val() - 1);
            getLogos();
        }
    }
    else if (op == 'right') {
        page.val(parseInt(page.val()) + 1);
        getLogos();
    }

}

function onColorClick(object) {
    var op = object.attr('unique');
   getColorClothing(op);
}

function  onSizeSelectChange(object) {
    var size = object.val();
    getClothing();
    getColors();
}



function onLogoCategoryClick(object) {
    $('#logos_page').val(1);
    var category = $('#logos_category');
    var op = object.attr('value');
    category.val(op);
    getLogos();
}
function upload_image() {
    //alert('IMAGE');
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
                url: document_root + 'products/aget_image',
                type: "POST",
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(res) {
                    //$("#response").html(res);
                    if (res.success == 'OK') {
                        $('.main-logo').attr('src', document_root + res.image);
                        $('.main-logo').attr('style','max-height:200px');
                        $('#custom').val('YES');
                        updatePrice();
                    }
                    else {
                        $("#response").html(res.success);
                    }
                }
            });
        }
    }, false);
}

function getLogos() {
    var category = $('#logos_category');
    var page = $('#logos_page');

    var postData = {
        "category": category.val(),
        "page": page.val()
    };


    //var postData = '';

    var logoBar = $('.lowbar-img-div');

    var request = $.ajax({
        url: document_root + 'products/agetlogos',
        data: postData,
        type: "post",
        dataType: 'json',
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        //alert(response);

        page.val(response.page);
        category.val(response.category);
        if (response.render == 'YES') {

            logoBar.html(response.html);
        }
        //console.log("");
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
function getClothing() {

    var genre = $('#genre').val();
    var size = $('#size_select').val();
    var postData = {genre: genre, size: size, option: option};

    var clothingBar = $('.right-col');

    var request = $.ajax({
        url: document_root + 'products/agetclothing',
        data: postData,
        type: "post",
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        //alert(response);
        clothingBar.html(response);
        // log a message to the console
        //console.log("");
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

function getColorClothing(incomingColor) {

    var genre = $('#genre').val();
    var color = incomingColor;
    var postData = {color:color,genre:genre, option: option};

    var clothingBar = $('.right-col');

    var request = $.ajax({
        url: document_root + 'products/agetclothing',
        data: postData,
        type: "post",
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        //alert(response);
        clothingBar.html(response);
        // log a message to the console
        //console.log("");
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

function getSizes() {
    var genre = $('#genre').val();

    var postData = {genre: genre, option: option};

    var clothingBar = $('#size');

    var request = $.ajax({
        url: document_root + 'products/agetsizes',
        data: postData,
        type: "post",
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        //alert(response);
        clothingBar.html(response);
        // log a message to the console
        //console.log("");
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


function getColors() {
    /*
     var postData = {
     "proj_name": proj_name,
     "date": date,
     "req_comp_date": req_comp_date,
     "status": status,
     "secondUserID": secondUserID,
     };
     */
    var size = $('#size_select').val();
    var genre = $('#genre').val();
    var postData = {size: size, genre: genre, 'option': option};

    var clothingBar = $('#colors_content');

    var request = $.ajax({
        url: document_root + 'products/agetcolors',
        data: postData,
        type: "post",
    });

    // callback handler that will be called on success
    request.done(function(response, textStatus, jqXHR) {
        //alert(response);
        clothingBar.html(response);
        // log a message to the console
        //console.log("");
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

function updatePrice() {

    var price_display = $('#price_total');
    var custom = $('#custom').val();
    var canvas = $('.designer-canvas');
    var unique = canvas.attr('unique');
    var price = canvas.attr('price');
    var price_transfer = canvas.attr('price_transfer');
    var price_termic = canvas.attr('price_termic');
    var price_custom = canvas.attr('price_custom');
    var logo = $('.main-logo');
    var logo_type = logo.attr('type');


    if ((custom == "YES") && (unique!=0)) {
        //alert('CUSTOM');
        price_display.html('$' + price_custom);
    }
    else if(unique!=0) {
        //alert('ELSE');
        if (logo_type == 'TERMIC') {
            //alert('TERMIC');
            price_display.html('$' + price_termic);
        }
        else if (logo_type == 'TRANSFER') {
            //alert('TRANSFER');
            price_display.html('$' + price_transfer);
        }
        else if ((logo.attr('unique')) == 0) {
            //alert('ONLY SHIRT');
            price_display.html('$' + price);
        }
    }

}