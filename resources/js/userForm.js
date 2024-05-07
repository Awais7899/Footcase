$(document).ready(function () {
    $("#registerationForm").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get form data
        var formData = $(this).serialize();

        // Process form data here (e.g., send it to a server using AJAX)
        // For demonstration purposes, we'll just log the form data
        console.log(formData);
        // You can add AJAX code here to submit the form data to the server
        $.ajax({
            type: "POST", // Use POST method
            url: "/submit", // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                // Handle the successful response from the server
                console.log("Success:", response);

                if (response.status) {
                    window.location = response.redirect;
                } else {
                    $.each(response.errors, function (key, val) {
                        $("#errors-list").append(
                            "<div class='alert alert-danger'>" + val + "</div>"
                        );
                    });
                }
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.log("Error:", error);
            },
        });
    });

    $("#loginForm").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get form data
        var formData = $(this).serialize();

        // Process form data here (e.g., send it to a server using AJAX)
        // For demonstration purposes, we'll just log the form data
        console.log(formData);
        // You can add AJAX code here to submit the form data to the server
        $.ajax({
            type: "POST", // Use POST method
            url: "/login", // Specify the URL of your controller
            data: formData, // Pass the form data
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token in headers
            },
            success: function (response) {
                // Handle the successful response from the server
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
                console.log("Error:", error);
            },
        });
    });
});
