<?php

class Book {
    public $title;
    public $author;
    public $year;

    function set_title($title) { //public method
        $this->$title = $title;
    }

    protected function set_author($author) { //protected method that can only be accessed within the class and by classes derived from that class
        $this->author = $author;
    }

    private function set_year($year) { //private method that can only be accessed within the class
        $this->year = $year;
    }

}

    $Book1 = new Book();
    $Book1->set_title("The Great Gatsby"); //this will call the public method set_title
    $Book1->set_author("F. Scott Fitzgerald"); //error: Cannot access protected method Book::set_author()
    $Book1->set_year(1995);  //error: Cannot access private method Book::set_year()


?>