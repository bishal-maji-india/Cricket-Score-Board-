<!-- This class is called by ajax function.
Used to validtate the user first on server side
then register the user. -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'src/classes/HomePage.php';

if (isset($_POST)) {
  
  //Navigate user to login page if the user is not already logged in.
  if (!isset($_SESSION['uid'])) {
    header('Location: http://localhost/src/views/login_page.php');
  }else{
    $home_obj = new HomePage();
    $home_obj->add_player();
  }

}
?>