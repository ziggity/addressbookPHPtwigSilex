<?php
  class Contact {
    private $name;
    private $phone;
    private $address;
    private $email;
    private $image;
    private $city;
    private $street;
    private $state;
    private $zip;

    function __construct ($name, $phone, $address, $email, $image, $city, $street, $state, $zip){
      $this->name = $name;
      $this->phone = $phone;
      $this->address = $address;
      $this->email = $email;
      $this->image = $image;
      $this->city = $city;
      $this->street = $street;
      $this->state = $state;
      $this->zip = $zip;
    }
    function setName ($new_name) {
        $this->name = $new_name;
    }
    function getName(){
        return $this->name;
    }
    function setPhone ($new_phone) {
        $this->phone = $new_phone;
    }
    function getPhone(){
        return $this->phone;
    }
    function setAddress($new_address){
        $this->address = $new_address;
    }
    function getAddress(){
        return $this->address;
    }
    function setEmail ($new_email) {
        $this->email = $new_email;
    }
    function getEmail(){
        return $this->email;
    }
    function setImage($new_image){
        $this->image = $new_image;
    }
    function getImage(){
        return $this->image;
    }
    function setCity($new_city){
        $this->city = $new_city;
    }
    function getCity(){
        return $this->city;
    }
    function setStreet($new_street){
        $this->street = $new_street;
    }
    function getStreet(){
        return $this->street;
    }
    function setState($new_state){
        $this->state = $new_state;
    }
    function getState(){
        return $this->state;
    }
    function setZip($new_zip){
        $this->zip = $new_zip;
    }
    function getZip(){
        return $this->zip;
    }
    function save()
  {
    array_push($_SESSION['list_of_contacts'], $this);
  }
    static function getAll()
  {
    return $_SESSION['list_of_contacts'];
  }
    static function deleteAll(){
      $_SESSION['list_of_contacts'] = array();
    }
  }
?>
