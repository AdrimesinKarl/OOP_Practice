<?php

    class Book{ // this is a template for objects, and an instance of a class

        // Properties
        public $title;
        public $author;
        public $year;

        //methods
        function set_title($title){
            $this->title = $title;
        }

        function get_title() {
            return $this->title;
            
        }

        function set_author($author){
            $this->author = $author;
        }
    
        function get_author() {
            return $this ->author;
        }

        function set_year($year){
            $this->year = $year;
        }

        function get_year() {
            return $this->year;
        }


    }

    // Create a new Book object and set its properties...Class is nothing without an object
    $Book1 = new Book();

    $Book1->set_title("The Great Gatsby");
    $Book1->set_author("F. Scott Fitzgerald");
    $Book1->set_year(1995);

    echo $Book1->get_title() . "<br>";
    echo $Book1->get_author() . "<br>";
    echo $Book1->get_year() . "<br>";




?>