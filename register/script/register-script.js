$("#registration-form").submit(function (e) { 
    save_registration();
    e.preventDefault();
});

function save_registration(){
    var inputdata = $("#registration-form").serializeArray();

    $.post(BASE_URL+"register/action/save-register.php", {
        inputdata: inputdata
    },
    function (data) {
        generate_barcode(data);
        // $("#barcode-modal").modal("show");
    });
}

function generate_barcode(barcodename){


    $.post(BASE_URL+"register/components/generate-barcode.php", {
        barcodename: barcodename
    },
    function (data) {
        $("#regisration-card-body-container").html(data);
    });
}