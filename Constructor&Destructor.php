<?php

class Book {
    public $title;
    public $author;
    public $year;


    function __construct($title, $author, $year) { //constructor this is a special method that is called when an object is created
        $this->title = $title; // $this refers to the current object
        $this->author = $author; // Assigning the values to the object's properties or Initializing the properties
        $this->year = $year;
    }

    function __destruct() { //destructor this is a special method that is called when an object is destroyed or the script ends
                            // This method is called when the object is destroyed
                            // It can be used to perform cleanup tasks, such as closing database connections or releasing resources
        echo "The book ' {$this->title} ' by {$this->author} was published in {$this->year} . <br>";
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