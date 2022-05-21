$("#productType").change(function () {
    if ($(this).val() === "furniture") {
        $('#parameters').html(`
            <div class="row mb-3">
                <label for="height" class="col-2 col-form-label required">Height (CM)</label>
                <div class="col-2">
                    <input type="number" name="height" class="form-control" id="height" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="width" class="col-2 col-form-label required">Width (CM)</label>
                <div class="col-2">
                    <input type="number" name="width" class="form-control" id="width" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="length" class="col-2 col-form-label required">Length (CM)</label>
                <div class="col-2">
                    <input type="number" name="length" class="form-control" id="length" required>
                </div>
            </div>
            <div class="pt-5">
                <strong>Please, provide height, weight, length in CM.</strong>
            </div>
        `);
    }

    if ($(this).val() === "book") {
        $('#parameters').html(`
            <label for="weight" class="col-2 col-form-label required">Weight (KG)</label>
            <div class="col-2">
                <input type="number" name="weight" class="form-control" id="weight" required>
            </div>
            <div class="pt-5">
                <strong>Please, provide weight in Kg.</strong>
            </div>
        `);
    }

    if ($(this).val() === "dvd") {
        $('#parameters').html(`
              <label for="size" class="col-2 col-form-label required">Size (MB)</label>
              <div class="col-2">
                   <input type="number" name="size" class="form-control" id="size" required>
              </div>
              <div class="pt-5">
                   <strong>Please, provide disc space in MB</strong>
              </div>
        `);
    }
});
$("#productType").trigger("change");

$('form').submit(function(e) {
    e.preventDefault();

    let inputs = {};
    $(this).find(':input').each(function() {
        inputs[$(this).attr("name")] = $(this).val();
    });

    $.post(inputs, function(data, status) {
        $('#message').show().removeClass('alert-success alert-danger').addClass(`alert-${data.status}`).html(data.message);
    });
});
