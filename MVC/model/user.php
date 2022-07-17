<?php
class User
{
    public $name;
    public $city;
    public $country;
    public function __construct($name = null,$city = null,$country = null)
    {
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
    }
    public function getAllUser()
    {
        return array(
        "Chung" => new User("Chung","TB","VN"),
        "XC" => new User("XC","HN","JP")
        );
    }
    public function getUser($name)
    {
        $users = $this->getAllUser();
        return $users[$name];
    }
} ?>