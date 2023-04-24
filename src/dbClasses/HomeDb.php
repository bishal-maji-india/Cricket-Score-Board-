<?php
include("/var/www/html/exam_module_2/cricket_score_board/src/utilClasses/DbConnector.php");

/**
 * Manage all the user related database operation.
 */
class HomeDb extends DBConnector
{
  /**
   * Instance of pod object from DBConnector class.
   * @var $connection
   */
  protected $connection;

  /**
   * Initilize the pod connection 
   */
  public function __construct()
  {
    $this->connection = $this->connectDatabase();
  }

  /**
   * Fetch list of players form db.
   * 
   * @return array $row;
   * List of player available in db.
   */
  protected function fetchPlayer()
  {
    $sql_query = "SELECT * FROM player_table";
    $result = $this->connection->query($sql_query);
    $row = $result->fetchAll();
    return $row;
  }

  /**
   * Add new player in db.
   * 
   * 
   * @return boolean 
   * Returns ture is addition is done successfully or false.
   */
  protected function isAdditionDone()
  {
    
    $sql = "INSERT INTO player_table(player_name, player_score,ball_faced,upload_by) VALUES (?, ?, ?, ?)";
    $param_name = $_POST['player_name'];
    $param_score= $_POST['player_score'];
    $param_ball_faced = $_POST['ball_faced'];
    session_start();
    $param_upload_by =$_SESSION['uid'];
    $statement = $this->connection->prepare($sql);

    // If adition succeeded return ture or false.
    if ($statement->execute([$param_name, $param_score,$param_ball_faced,$param_upload_by])) {
      return  true;
    } else {
      return false;
    }
  }


}
