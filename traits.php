<?php
    trait message1 { // Defining a trait named message1
        public function msg1() {
        echo "Bat kasi nag comsci ako!";
    }
}
    class Welcome {
        use message1; //  Using the trait message1 in the Welcome class
    }

    $obj = new Welcome();
    $obj ->msg1();  //callling the method from the trait

?>