<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebProgramming";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if ($conn) {
    echo"it is connected";
    }
    $sql = "INSERT INTO student (name, email, gender, date_of_birth)
VALUES ('Ara','ara@gmail.com','male','2023-04-09')";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo mysqli_error($conn);
}
?>