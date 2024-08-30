<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type): array
    {
        return ["Name" => $this->name, "Description" => $this->description];
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array
    {
        return [
            "ISBN" => $this->ISBN,
            "Title" => $this->title,
            "Description" => $this->description,
            "Category" => $this->category,
            "Language" => $this->language,
            "Number of Pages" => $this->numberOfPage,
            "Author" => $this->author->name,
            "Publisher" => $this->publisher
        ];
    }

    public function detail($ISBN): array
    {
        return ["Title" => $this->title, "Description" => $this->description];
    }
}

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }
}

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
