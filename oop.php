<?php

    class Book{
        
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

    // Create a new Book object and set its properties
    $title = new Book();
    $author = new Book();
    $year = new Book();
    $title->set_title("The Great Gatsby");
    $author->set_author("F. Scott Fitzgerald");
    $year->set_year(1995);

    echo $title->get_title() . "<br>";
    echo $author->get_author() . "<br>";
    echo $year->get_year() . "<br>";




?>