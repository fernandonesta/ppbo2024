<?php
namespace Guest\Model\Pustaka;
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