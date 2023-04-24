<?php
include("../../src/classes/HomePage.php");
$home_obj = new HomePage();
$player_list = $home_obj->getplayer();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="../../src/js/home.js"></script>
  <link href="../../src/css/styles.css" rel="stylesheet">
  <title>HomePage</title>
</head>

<body>
  <?php include('../../src/views/component.home.header.php'); ?>
  <?php include('../../src/views/component.home.php'); ?>

  <!-- Show the man of the match button if the user is logged in  -->
  <?php if (!isset($_SESSION['uid'])) {
  ?>
    <butoon class="button" id="man_of_the_match">Man Of The Match</button>
    <?php }
    ?>



</body>

</html>