<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "book_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data and insert into the database
$book_name = $_POST['book_name'];
$writer_name = $_POST['writer_name'];
$book_age = $_POST['book_age'];
$publication_date = $_POST['publication_date'];
$num_pages = $_POST['num_pages'];
$book_type = $_POST['book_type'];

$sql = "INSERT INTO books (book_name, writer_name, book_age, publication_date, num_pages, book_type) VALUES ('$book_name', '$writer_name', '$book_age', '$publication_date', '$num_pages', '$book_type')";

if ($conn->query($sql) === TRUE) {
  echo "Book added successfully";
} else {
 