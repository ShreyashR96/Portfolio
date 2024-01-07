<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "shreyashrakhunde96op@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>

<!-- life.php -->
<?php
// Check if the password is set and correct
$correctPassword = "123456789";

if (isset($_POST['password']) && $_POST['password'] === $correctPassword) {
    // Display the content of the secured section
    echo "<h1>My Life Section</h1>";
    echo "<p>This content is super secret!</p>";
} else {
    // Display the password form
    echo "<h1>Enter Password</h1>";
    echo "<form method='post' action='life.php'>";
    echo "<label for='password'>Password:</label>";
    echo "<input type='password' name='password' required>";
    echo "<button type='submit'>Submit</button>";
    echo "</form>";
}
?>

