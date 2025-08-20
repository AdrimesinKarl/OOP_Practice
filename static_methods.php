<?php
    class Domain {
        public static function getDomainName() {
            return "w3school.com";
        }
}
    class domainw3 extends Domain {
        public $websiteName;
        public function __construct() {
        $this->websiteName = parent::getDomainName();
        }
}

    $domainw3 = new domainw3();
    echo $domainw3->websiteName;
?>
