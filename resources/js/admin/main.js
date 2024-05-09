$(document).ready(function () {
    /////////////////////////----------- Admin Authentication ----------------////////////////////////////////
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

    //////////////////---------------- Category Section -----------------------/////////////////////////////

    var table = $("#example").DataTable({
        language: {
            lengthMenu: "_MENU_", // Customize the text as per your preference
            info: "Showing _START_ to _END_ of _TOTAL_ entries", // Optionally, customize other text
        },
        ajax: {
            url: "/admin-panel/categories",
            type: "GET",
        },
        processing: true,
        serverSide: true,
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

    ///////////////////////---------------------Sub Category Section------------------------/////////////

    var sub_categories_table = $("#sub_category_table").DataTable({
        language: {
            lengthMenu: "_MENU_", // Customize the text as per your preference
            info: "Showing _START_ to _END_ of _TOTAL_ entries", // Optionally, customize other text
        },
        ajax: {
            url: "/admin-panel/sub_categories",
            type: "GET",
        },
        processing: true,
        serverSide: true,
        columns: [
            { data: "DT_RowIndex", name: "DT_RowIndex" },
            { data: "title", name: "title" },
            { data: "category_name", name: "category_name" },
            { data: "active_status", name: "active_status" },
            { data: "action", name: "action" },
        ],
    });

    var subCategoryData;
    $("#sub_category_table").on("click", ".edit-btn", function (event) {
        subCategoryData = $(this).data("sub_category");
        console.warn(subCategoryData);
        $("#categoryEdit").modal("show");
        $("#subCategoryTitle").val(subCategoryData.title);
        $("#subCategoryStatus").val(subCategoryData.active_status);
        $("#categoryStatus").val(subCategoryData.category_id);
        // alert("Edit button clicked for category ID: " + categoryId);
    });

    $("#sub_category_table").on("click", ".delete-btn", function (event) {
        subCategoryData = $(this).data("sub_category");
        $("#delateModal").modal("show");
    });

    $("#addSubCategory").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            type: "POST", // Use POST method
            url: "/admin-panel/sub_categories", // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);

                if (response.status) {
                    sub_categories_table.draw();
                    $("#addSubCategory").trigger("reset");
                    $("#basicModal").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    $("#editSubCategory").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        let categoryId = subCategoryData.id;
        $.ajax({
            type: "PUT", // Use POST method
            url: `/admin-panel/sub_categories/${categoryId}`, // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    sub_categories_table.draw();
                    $("#editSubCategory").trigger("reset");
                    $("#categoryEdit").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    $("#deleteSubCategory").submit(function (event) {
        event.preventDefault();
        let categoryId = subCategoryData.id;
        $.ajax({
            type: "DELETE", // Use POST method
            url: `/admin-panel/sub_categories/${categoryId}`, // Specify the URL of your controller

            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    sub_categories_table.draw();
                    $("#deleteSubCategory").trigger("reset");
                    $("#delateModal").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });
    ////////////////////------------ Add Brand -----------/////////////////////////////////

    var brandTable = $("#brand_table").DataTable({
        language: {
            lengthMenu: "_MENU_", // Customize the text as per your preference
            info: "Showing _START_ to _END_ of _TOTAL_ entries", // Optionally, customize other text
        },
        ajax: {
            url: "/admin-panel/brands",
            type: "GET",
        },
        processing: true,
        serverSide: true,
        columns: [
            { data: "DT_RowIndex", name: "DT_RowIndex" },
            { data: "title", name: "title" },
            { data: "active_status", name: "active_status" },
            { data: "action", name: "action" },
        ],
    });

    var brandData;
    $("#brand_table").on("click", ".edit-btn", function (event) {
        brandData = $(this).data("brand");
        $("#categoryEdit").modal("show");
        $("#brandTitle").val(brandData.title);
        $("#brandStatus").val(brandData.active_status);

        // alert("Edit button clicked for category ID: " + categoryId);
    });

    $("#brand_table").on("click", ".delete-btn", function (event) {
        brandData = $(this).data("brand");
        $("#delateModal").modal("show");
    });

    $("#addBrand").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            type: "POST", // Use POST method
            url: "/admin-panel/brands", // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    brandTable.draw();
                    $("#addBrand").trigger("reset");
                    $("#basicModal").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    $("#editBrand").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);
        let categoryId = brandData.id;
        $.ajax({
            type: "PUT", // Use POST method
            url: `/admin-panel/brands/${categoryId}`, // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    brandTable.draw();
                    $("#editBrand").trigger("reset");
                    $("#categoryEdit").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    $("#deleteBrand").submit(function (event) {
        event.preventDefault();
        let categoryId = brandData.id;
        $.ajax({
            type: "DELETE", // Use POST method
            url: `/admin-panel/brands/${categoryId}`, // Specify the URL of your controller
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                console.log("Success:", response);
                if (response.status) {
                    brandTable.draw();
                    $("#deleteBrand").trigger("reset");
                    $("#delateModal").modal("hide");
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error("Error:", error);
            },
        });
    });

    //////////////---------- Usrs Table ------------------/////////////////////////////*css*/`

    $("#user_table").DataTable({
        language: {
            lengthMenu: "_MENU_", // Customize the text as per your preference
            info: "Showing _START_ to _END_ of _TOTAL_ entries", // Optionally, customize other text
        },
    });
});
