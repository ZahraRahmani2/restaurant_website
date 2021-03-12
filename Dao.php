
<?php 
class Dao {
  public $dsn = 'mysql:dbname=heroku_7876bf830b7489b;host=us-cdbr-east-03.cleardb.com';
  public $user = 'b53b15900c6ae4';
  public $password = '4b376ff1';
  public $port = "3306";

private function getConnection () {
    try {
    $connection = new PDO($this->dsn.":".$this->port, $this->user, $this->password);
        echo "It worked";
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $connection;
}
public function insertUser ($username, $lastName, $password, $email, $phoneNumber) {
    $conn = $this->getConnection();
    $saveQuery = "insert into users (username, lastName, password, email, phoneNumber)
     values (:username, :lastName, :password, :email, :phoneNumber)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":lastName", $lastName);
    $q->bindParam(":password", $password);
    $q->bindParam(":email", $email);
    $q->bindParam(":phoneNumber", $phoneNumber);
    $q->execute();
}

public function getfoods () {
    $connection = $this->getConnection();
    try {
      $rows = $connection->query("select * from foods", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }
}