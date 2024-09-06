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
?>