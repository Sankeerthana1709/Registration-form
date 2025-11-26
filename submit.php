<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $address = htmlspecialchars($_POST['address']);
    $username = htmlspecialchars($_POST['username']);
    $interests = htmlspecialchars($_POST['interests']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    // Passwords are not displayed for security reasons
    echo "<h3>Registration Successful!</h3>";
    echo "<div><strong>Name:</strong> $name</div>";
    echo "<div><strong>Gender:</strong> $gender</div>";
    echo "<div><strong>Nationality:</strong> $nationality</div>";
    echo "<div><strong>Residential Address:</strong> $address</div>";
    echo "<div><strong>Username:</strong> $username</div>";
    echo "<div><strong>Interests:</strong> $interests</div>";
    echo "<div><strong>Email:</strong> $email</div>";
    echo "<div><strong>Phone:</strong> $phone</div>";
    echo "<div><strong>Date of Birth:</strong> $dob</div>";
} else {
    echo "<span style='color:red;'>Invalid request.</span>";
}
?>
