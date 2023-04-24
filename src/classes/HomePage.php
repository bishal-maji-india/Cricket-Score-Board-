<?php

include("/var/www/html/exam_module_2/cricket_score_board/src/dbClasses/HomeDb.php");

class HomePage extends HomeDb
{
  /**
   * Called constructor of parent class.
   */
  public function __construct()
  {
    parent::__construct();
  }



  /**
   * This function is used to add player list to server 
   * or move to login.
   * 
   */
  public function add_player()
  {
    if ($this->isAdditionDone()) {
      header('Location: http://localhost/src/views/home_page.php');
    } else {
      header('Location: http://localhost/src/views/login_page.php');
    }
  }

  
  /**
   * This function returns a list of player availbale in db.
   * @return array
   */
  public function getplayer()
  {
    return  $this->fetchPlayer();
  }
  
}
