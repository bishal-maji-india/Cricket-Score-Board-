<?php

include("/var/www/html/raw_php_music_player/src/dbClasses/UserDb.php");

class Register extends UserDb
{
 

  /**
   * Initilize the data and also call the consturctor of
   * parent class.
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Register the user and send success or fail response to ajax function.
   * Returns json encoded response array.
   */
  public function registerUser()
  {
    if (!$this->getUserByEmail($_POST['email'])) {
      if ($this->insertUser()) {
        return json_encode(["status" => "success", "message" => "User Registred"]);
      } else {
        return json_encode(["status" => "fail", "message" => "User not Registred"]);
      }
    } else {
      return json_encode(["status" => "fail", "message" => "User Already exist"]);
    }
  }
}
