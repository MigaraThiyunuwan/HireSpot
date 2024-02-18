<?php

class JobSeeker
{

    private $userID;
    private $username;
    private $firstname;
    private $lastname;
    private $email;
    private $phoneNo;
    private $gender;
    private $address;
    private $education;
    private $description;
    private $about;
    private $password;
    private $profilePic;

    public function __construct($userID, $username, $firstname, $lastname, $email, $phoneNo, $address, $education, $description, $gender, $password)
    {
        $this->userID = $userID;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phoneNo = $phoneNo;
        $this->address = $address;
        $this->education = $education;
        $this->description = $description;
        $this->gender = $gender;
        $this->password = $password;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEducation()
    {
        return $this->education;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAbout()
    {
        return $this->about;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getProfilePic()
    {
        return $this->profilePic;
    }
    public function getGender()
    {
        return $this->gender;
    }

    public function setProfilePic($filepath)
    {
        $this->profilePic = $filepath;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

}