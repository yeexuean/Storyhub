<?php
require_once('db.php');

// Add new book to database
function addBook($title, $author, $publication_date, $isbn13, $description, $cover_image) {
    $db = getDBConnection();
    $stmt = $db->prepare("INSERT INTO books (title, author, publication_date, isbn13, description, cover_image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$title, $author, $publication_date, $isbn13, $description, $cover_image]);
}
?>