<?php

class Book {
    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year) {
    $this->title = $title;
    $this->author = $author;
    $this->year = $year;
}
    public function intro() {
        echo "The book '{$this->title}' by {$this->author} was published in {$this->year}.<br>";
    }

}
    class Ebook extends Book {
        public $genre; // New property for Ebook class // overriding the parent class Book
        public function __construct ($title, $author, $year, $genre) {  //overriding the constructor
            $this->title = $title;  //
            $this->author = $author;
            $this->$year = $year;
            $this->genre = $genre;

        }
        public function intro() {  // overriding the intro method from the parent class Book
            echo "The Ebook" . " '{$this->title}' by {$this->author} was published in {$this->year} and belongs to the {$this->genre} genre.<br>";
        }

    }

    // Create a new Book object
    $Book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1995);
    $Book1->intro();




?>