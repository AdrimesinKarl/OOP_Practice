<?php

    abstract class Animal {  // Abstract class Animal serves as a base class for other animal classes
        abstract function makesound(); // Abstract method makesound() must be implemented by any subclass of Animal

        public function eat() { // Concrete method eat() provides a default implementation that can be used by subclasses
            // This method can be overridden by subclasses if needed
            // It is not abstract, so it has a body and can be called directly
        return "This animal eats food.";
        }
    }
    class Cat extends Animal {  // Cat class extends Animal and provides its own implementation of makesound()
        public function makesound() {
            return "Meow!";
        }
    }
    class Dog extends Animal {
        public function makesound() {
            return "Woof Woof!";
        }
    }

    $cat = new Cat();
    $dog = new Dog();

    echo $cat->makesound(); // Calling the makesound() method of Cat class
    echo "<br>";
    echo $dog->makesound();
    echo "<br>";
    echo $cat->eat();
    echo "<br>";
    echo $dog->eat();
    echo "<br>";

?>