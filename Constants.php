<?php

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;  // accessing the constant inside the class using self keyword followed by scope resolution operator (::) and constant name
    }
    
}
    $goodbye = new Goodbye();
    $goodbye->byebye(); // calling the method byebye() which will print the constant LEAVING_MESSAGE

?>
