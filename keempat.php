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
        return ["Title" => $this->title, "Author" => $this->author];
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

$author = new Author("John Doe", "Famous author");
$book = new Book(123456789, "Sample Book", "A great book", "Fiction", "English", 200, $author, "ABC Publishers");
$publisher = new Publisher("ABC Publishers", "123 Main St");
$publisher->setPhone("123-456-7890");

echo "Book Title: {$book->title}\n";
echo "Author: {$book->author->name}\n";
echo "Publisher: {$book->publisher}\n";
echo "Phone: {$publisher->getPhone()}\n";

?>
