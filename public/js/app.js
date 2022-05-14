$("#productType").change(function() {
    if ($(this).val() == "furniture") {
        $('#furnitureParams').show();
        $('#height').attr('required', '');
        $('#height').attr('data-error', 'This field is required.');
        $('#width').attr('required', '');
        $('#width').attr('data-error', 'This field is required.');
        $('#length').attr('required', '');
        $('#length').attr('data-error', 'This field is required.');
    } else {
        $('#furnitureParams').hide();
        $('#height').removeAttr('required');
        $('#height').removeAttr('data-error');
        $('#width').removeAttr('required');
        $('#width').removeAttr('data-error');
        $('#length').removeAttr('required');
        $('#length').removeAttr('data-error');
    }

    if ($(this).val() == "book") {
        $('#bookParams').show();
        $('#weight').attr('required', '');
        $('#weight').attr('data-error', 'This field is required.');
    } else {
        $('#bookParams').hide();
        $('#weight').removeAttr('required');
        $('#weight').removeAttr('data-error');
    }

    if ($(this).val() == "dvd") {
        $('#dvdParams').show();
        $('#size').attr('required', '');
        $('#size').attr('data-error', 'This field is required.');
    } else {
        $('#dvdParams').hide();
        $('#size').removeAttr('required');
        $('#size').removeAttr('data-error');
    }
});
$("#productType").trigger("change");
