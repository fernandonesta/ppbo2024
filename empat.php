<?php

require_once 'Author.php';
require_once 'Publisher.php';
require_once 'Book.php';

// Contoh penggunaan
$author = new Author("Morgan Housel", "The Psychology of Money.");
$publisher = new Publisher("Harriman House", "Bedford Road", "+44(0)1732 233870");
$book = new Book("9781804090114", "The Psychology of Money", "A collection of short stories exploring the strange ways people think about money.", "self-development", "English - Indonesia", 268, $author, $publisher);

echo $book->getBookInfo();

?>