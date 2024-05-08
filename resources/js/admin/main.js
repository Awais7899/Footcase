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
            { data: "DT_RowIndex", name: "DT_RowIndex" },
            { data: "title", name: "title" },
            { data: "active_status", name: "active_status" },
            { data: "action", name: "action" },
        ],
    });

    var categoryData;
    $("#example").on("click", ".edit-btn", function (event) {
        categoryData = $(this).data("category");
        $("#categoryEdit").modal("show");
        $("#categoryTitle").val(categoryData.title);
        $("#categoryActiveStatus").val(categoryData.active_status);

        // alert("Edit button clicked for category ID: " + categoryId);
    });

    $("#example").on("click", ".delete-btn", function (event) {
        categoryData = $(this).data("category");
        $("#delateModal").modal("show");
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

    $("#editCategory").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        let categoryId = categoryData.id;
        $.ajax({
            type: "PUT", // Use POST method
            url: `/admin-panel/categories/${categoryId}`, // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    table.draw();
                    $("#editCategory").trigger("reset");
                    $("#categoryEdit").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });


    $("#deleteCategory").submit(function (event) {
        event.preventDefault();
        let categoryId = categoryData.id;
        $.ajax({
            type: "DELETE", // Use POST method
            url: `/admin-panel/categories/${categoryId}`, // Specify the URL of your controller

            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    table.draw();
                    $("#deleteCategory").trigger("reset");
                    $("#delateModal").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });
});
