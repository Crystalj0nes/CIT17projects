<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "studentinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Process form data if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["id"];
 $username = $_POST["username"];
 $email = $_POST["email"];

 // Prepare SQL statement
 $sql = "INSERT INTO users (id, username, email) VALUES (?, ?, ?)";

 // Execute SQL statement
 if($stmt = $conn->prepare($sql)){
    $stmt->bind_param("iss", $id, $username, $email);
    $stmt->execute();
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }

 // Close connection
 $stmt->close();
 $conn->close();
}
?>