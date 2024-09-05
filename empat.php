<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getAuthorInfo() {
        return "Author: {$this->name}, About: {$this->description}";
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

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    // Metode untuk mendapatkan informasi buku
    public function getBookInfo() {
        return "ISBN: {$this->ISBN}\n" .
               "Title: {$this->title}\n" .
               "Description: {$this->description}\n" .
               "Category: {$this->category}\n" .
               "Language: {$this->language}\n" .
               "Number of Pages: {$this->numberOfPage}\n" .
               "Author: {$this->author->getAuthorInfo()}\n" .
               "Publisher: {$this->publisher->getPublisherInfo()}";
    }

    // Getter dan Setter untuk ISBN
    public function getISBN() {
        return $this->ISBN;
    }

    public function setISBN($ISBN) {
        $this->ISBN = $ISBN;
    }

    // Getter dan Setter untuk Title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter dan Setter untuk Description
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    // Getter dan Setter untuk Category
    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    // Getter dan Setter untuk Language
    public function getLanguage() {
        return $this->language;
    }

    public function setLanguage($language) {
        $this->language = $language;
    }

    // Getter dan Setter untuk Number of Pages
    public function getNumberOfPage() {
        return $this->numberOfPage;
    }

    public function setNumberOfPage($numberOfPage) {
        $this->numberOfPage = $numberOfPage;
    }

    // Getter dan Setter untuk Author
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    // Getter dan Setter untuk Publisher
    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }
}

class Publisher{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Getter untuk phone
    public function getPhone() {
        return $this->phone;
    }

    // Setter untuk phone
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    // Metode untuk mendapatkan informasi penerbit
    public function getPublisherInfo() {
        return "Publisher: {$this->name}\n" .
               "Address: {$this->address}\n" .
               "Phone: {$this->getPhone()}";
    }

}

// Contoh penggunaan
$author = new Author("Morgan Housel", "The Psychology of Money.");
$publisher = new Publisher("Harriman House", "Bedford Road", "+44(0)1732 233870");
$book = new Book("9781804090114", "The Psychology of Money", "A collection of short stories exploring the strange ways people think about money.", "self-development", "English - Indonesia", 268, $author, $publisher);

echo $book->getBookInfo();

?>