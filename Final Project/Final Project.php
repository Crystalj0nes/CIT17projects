<?php
// Setup Database Connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_last_name_StudentInformationSystem";
// Create Connection
$conn = new mysqli($servername, $username, $password);
// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create Database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
mysqli_close($conn);
// Setup Tables
$conn = new mysqli($servername, $username, $password, $dbname);
// Users Table
$sql = "CREATE TABLE Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    user_type VARCHAR(10) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// Student Table
$sql = "CREATE TABLE Student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6) UNSIGNED,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    dob DATE NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Users(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Student created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// Course Table
$sql = "CREATE TABLE Course (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_code VARCHAR(10) NOT NULL,
    course_name VARCHAR(100) NOT NULL,
    course_description VARCHAR(255) NOT NULL,
    credit_hours INT(2) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Course created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// Instructor Table
$sql = "CREATE TABLE Instructor (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6) UNSIGNED,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    dob DATE NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Users(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Instructor created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// Enrollment Table
$sql = "CREATE TABLE Enrollment (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id INT(6) UNSIGNED,
    course_id INT(6) UNSIGNED,
    instructor_id INT(6) UNSIGNED,
    grade VARCHAR(2) NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Student(id),
    FOREIGN KEY (course_id) REFERENCES Course(id),
    FOREIGN KEY (instructor_id) REFERENCES Instructor(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Enrollment created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
mysqli_close($conn);
?>