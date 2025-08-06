<?php

class Book { 
    public $title;
    public $author;
    public $year;


    function __construct($title, $author, $year) { //constructor this is a special method that is called when an object is created
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

        
        function get_title() {
            return $this->title;
        }
        
        function get_author() {
            return $this->author;
        }

        function get_year() {
            return $this->year;
        }

    }

        // Create new Book objects using the constructor
    $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1995);
    $book2 = new Book("1984", "George Orwell", 1949);
    $book3 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
    echo "<br>" . $book1->get_title();
    echo "<br>" . $book2->get_author();
    echo "<br>" . $book3->get_year();



?>