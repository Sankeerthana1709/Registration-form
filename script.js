$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#result').html(response).fadeIn();
            },
            error: function() {
                $('#result').html('<span style="color:red;">Submission failed. Please try again.</span>').fadeIn();
            }
        });
    });
});
