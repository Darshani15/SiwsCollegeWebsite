<?php
$conn = mysqli_connect("localhost", "root", "", "siws_college");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
db.php