<?php
require_once ("hotro.php");
class thanhvien {
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->idmember = idcontinue();
    }

    public function __destruct() {
        $this-> fullname = null;
        $this->idmember = null;
        $this->email = null;
        $this->status = null;
    }

    public function getFullname() { return $this->fullname; }

 
    public function getEmail() {
        return $this->email;
    }

    public function getId() {
        return $this->idmember;
    }
}
?>