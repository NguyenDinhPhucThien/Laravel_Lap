<?php
    require_once("character.php");
    class Staff extends character {
        private $staffcode;
        private $part;

        public function __construct($fullname_staff,$countrycode, $part) {
            parent::__construct($fullname_staff,$countrycode);
            $this->part = $part;
            $this->staffcode = $this->staffcode_continue();
    }
        public function getStaffCode() {
                return $this->staffcode;
        }
        public function getPart() {
            return $this->part;
        }
        final private function  staffcode_continue() {
            static $makecode = 1;
            return $makecode ++;
        }
    }
?>