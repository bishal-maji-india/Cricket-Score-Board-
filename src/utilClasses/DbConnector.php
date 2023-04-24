<?php
include('/var/www/html/exam_module_2/cricket_score_board/src/utilClasses/EnvLoader.php');
class DBConnector extends EnvLoader
{

  /**
   * This function returns the instance of POD connection variable.
   * In case of any error it throws the error to the calling function.
   */
  protected function connectDatabase()
  {
    $this->loadEnv();
    try {
      $connection = new PDO("mysql:host=$this->server_name;dbname=$this->database_name", $this->username, $this->password);
      // setting the PDO error mode to exception
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if ($connection) {
        return $connection;
      }
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}
