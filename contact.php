<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>

<h2>Contact Us</h2>

<form method="POST" action="">
    <input type="text" name="name" placeholder="Your Name" required><br><br>
    <input type="email" name="email" placeholder="Your Email" required><br><br>
    <textarea name="message" placeholder="Your Message" required></textarea><br><br>
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<p>✅ Message sent successfully!</p>";
    } else {
        echo "<p>❌ Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<?php include("includes/footer.php"); ?>
 rr2 