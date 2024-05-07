$(document).ready(function () {
    $("#adminLogin").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            type: "POST", // Use POST method
            url: "/admin-panel/login", // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    window.location = response.redirect;
                } else {
                    $("#errors-list").append(
                        "<div class='alert alert-danger'>" +
                            response.error +
                            "</div>"
                    );
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    var table = $("#example").DataTable({
        language: {
            lengthMenu: "_MENU_", // Customize the text as per your preference
            info: "Showing _START_ to _END_ of _TOTAL_ entries", // Optionally, customize other text
        },
        ajax: "/admin-panel/categories",
        processing: true,
        serverSide: true,
        // data: function (d) {
        //     console.warn(d);
        //     // d.search = $('input[type="search"]').val();
        // },
        columns: [
            { data: "id", name: "id " },
            { data: "title", name: "title" },
            { data: "active_status", name: "status" },
            { data: "action", name: "action" },
        ],
    });

    $("#example").on("click", ".edit-btn", function (event) {
        var categoryData = $(this).data("category");

        console.warn(categoryData);
        $("#categoryEdit").modal("show");
        $("#categoryId").val(categoryData.id);
        $("#categoryTitle").val(categoryData.title);
        $("#categoryActiveStatus").val(categoryData.active_status);

        // alert("Edit button clicked for category ID: " + categoryId);
    });

    $("#example").on("click", ".delete-btn", function (event) {
        var categoryId = $(this).data("id");
        alert("Delete button clicked for category ID: " + categoryId);
    });

    $("#addCategory").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            type: "POST", // Use POST method
            url: "/admin-panel/categories", // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);

                if (response.status) {
                    table.draw();
                    $("#addCategory").trigger("reset");
                    $("#basicModal").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    // $("#example").DataTable({
    //     language: {
    //         lengthMenu: "_MENU_", // Customize the text as per your preference
    //         info: "Showing _START_ to _END_ of _TOTAL_ entries", // Optionally, customize other text
    //     },
    // });
});

// <script>
//     $(document).ready(function() {
//         $.noConflict();
//         var token = ''
//         var modal = $('.modal')
//         var form = $('.form')
//         var btnAdd = $('.add'),
//             btnSave = $('.btn-save'),
//             btnUpdate = $('.btn-update');

//         btnSave.click(function(e){
//             e.preventDefault();
//             var data = form.serialize()
//             console.log(data)
//             $.ajax({
//                 type: "POST",
//                 url: "",
//                 data: data+'&_token='+token,
//                 success: function (data) {
//                     if (data.success) {
//                         table.draw();
//                         form.trigger("reset");
//                         modal.modal('hide');
//                     }
//                     else {
//                         alert('Delete Fail');
//                     }
//                 }
//              }); //end ajax
//         })
