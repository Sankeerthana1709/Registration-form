$(document).ready(function () {
    $("#registrationForm").submit(function (event) {
        event.preventDefault(); // Stop default submit

        let formData = $(this).serialize(); // Collect form data

        $.ajax({
            url: "https://formspree.io/f/mdkqwwke",
            method: "POST",
            data: formData,
            dataType: "json",
            success: function () {
                $("#result").html("<p style='color: green;'>Form submitted successfully!</p>");
                $("#registrationForm")[0].reset();
            },
            error: function () {
                $("#result").html("<p style='color: red;'>Submission failed. Try again.</p>");
            }
        });
    });
});
