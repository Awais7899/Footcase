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
});
