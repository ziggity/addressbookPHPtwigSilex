<?php
  class Contact {
    private $name;
    private $phone;
    private $address;
    private $email;
    private $image;

    function __construct ($name, $phone, $address, $email, $image){
      $this->name = $name;
      $this->phone =$phone;
      $this->address =$address;
      $this->email = $email;
      $this->image =$image;
    }
    function setName ($new_name) {
      $this->name = $new_name;
    }
    function getName(){
      return $this->name;
    }
    function setEmail ($new_email) {
      $this->email = $new_email;
    }
    function getEmail(){
      return $this->email;
    }
    function setPhone ($new_phone) {
      $this->phone = $new_phone;
   }
    function getPhone(){
      return $this->phone;
   }
    function setAddress($new_address) {
      $this->address = $new_address;
  }
    function getAddress(){
      return $this->address;
  }
  function setImage($new_image) {
    $this->image = $new_image;
}
  function getImage(){
    return $this->image;
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
