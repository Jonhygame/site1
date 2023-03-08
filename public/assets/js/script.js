var formData = {
    fullname: $("#fullname").val(),
    email: $("#email").val(),
    message: $("#message").val(),
};
$.ajax({
    url: "/contact",
    type: "post",
    data: formData,
    headers: { "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content") },
    dataType: "json",
    success: function (response) {
        showAlert(response.message, "success", 5000);
        $("#contactForm").trigger("reset");
    },
    error: function (error) {
        console.log(error);
        $.each(error.responseJSON, function (key, value) {
            //alert( key + ": " + value );
            showAlert(value, "danger", 5000);
        });
    },
});
$("#tblContact").DataTable({
    ajax: "/dt/contacts",
    columns: [
        { data: "id" },
        { data: "fullname" },
        { data: "email" },
        { data: "message" },
    ],
    columnDefs: [
        {
            targets: 3,
            render: function (data, type, row) {
                return data.substr(0, 10) + "...";
            },
        },
    ],
});
