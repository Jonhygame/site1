$(document).ready(function () {
    $("#example").DataTable({
        ajax: "/contacttable/contact",
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
});

$(document).ready(function () {
    $("#tabladeusuarios").DataTable({
        ajax: "/userstable/apitables",
        columns: [
            { data: "id" },
            { data: "fullname" },
            { data: "email" },
            { data: "phone" },
            { data: "username" },
            { data: "password" },
            { data: "terms" },
        ],
    });
});

$(document).ready(function () {
    $("#tabladeproductos").DataTable({
        ajax: "/productstable/apitables",
        columns: [
            { data: "id" },
            { data: "name" },
            { data: "price" },
            { data: "color" },
            { data: "size" },
            { data: "quantity" },
            { data: "image" },
            { data: "category" },
        ],
    });
});
