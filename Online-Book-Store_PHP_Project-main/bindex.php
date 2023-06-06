<?php
// Assuming you have already established a database connection
// $dbConnection = mysqli_connect("hostname", "username", "password", "database");

// Assuming you have received the updated book information from a form or other source
$bookId = $_POST['book_id'];
$bookTitle = $_POST['book_title'];
$bookAuthor = $_POST['book_author'];
$bookPrice = $_POST['book_price'];

// Prepare the SQL update query
$updateQuery = "UPDATE books SET title = '$bookTitle', author = '$bookAuthor', price = '$bookPrice' WHERE id = '$bookId'";

// Execute the update query
$result = mysqli_query($dbConnection, $updateQuery);

if ($result) {
    echo "Book updated successfully.";
} else {
    echo "Error updating book: " . mysqli_error($dbConnection);
}

// Close the database connection
mysqli_close($dbConnection);
?>
