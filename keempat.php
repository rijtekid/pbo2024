<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author("John Doe Slamet", "Famous indonesian author");
$book = new Book("978-7-997610-0", "Mencari jati diri", "Buku ini bagus", "Fiction", "English", 200, $author, "Kompas Gramedia");
$publisher = new Publisher("ABC Publishers", "123 Main St");
$publisher->setPhone(1324657980);

// Display all relevant information
echo "Book Title: {$book->title}\n";
echo "Author: {$book->author->name}\n"; // Access the 'name' property of the author
echo "Publisher: {$book->publisher}\n";
echo "Phone: +{$publisher->getPhone()}\n";
echo "ISBN: {$book->ISBN}\n";
echo "Description: {$book->description}\n";
echo "Category: {$book->category}\n";
echo "Language: {$book->language}\n";
echo "Number of Pages: {$book->numberOfPage}\n";
?>
