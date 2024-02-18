<?php

class company{
    private $companyID;
    private $companyname;
    private $email;
    private $address;
    private $description;
    private $password;
    private $profilePic;
    private $coverPic;
    private $employee;
    
    public function __construct($companyID, $companyname, $email, $address, $description, $password, $profilePic, $coverPic, $employee) {
        $this->companyID = $companyID;
        $this->companyname = $companyname;
        $this->email = $email;
        $this->address = $address;
        $this->description = $description;
        $this->password = $password;
        $this->profilePic = $profilePic;
        $this->coverPic = $coverPic;
        $this->employee = $employee;
    }

    public function getCompanyID() {
        return $this->companyID;
    }

    public function getCompanyname() {
        return $this->companyname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getProfilePic() {
        return $this->profilePic;
    }

    public function getCoverPic() {
        return $this->coverPic;
    }

    public function getEmployee() {
        return $this->employee;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setProfilePic($profilePic): void {
        $this->profilePic = $profilePic;
    }

    public function setCoverPic($coverPic): void {
        $this->coverPic = $coverPic;
    }

    public function setEmployee($employee): void {
        $this->employee = $employee;
    }



}