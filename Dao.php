
<?php 

class Dao {
  public $dsn = 'mysql:dbname=heroku_3755c6c9c8a755b;host=us-cdbr-east-03.cleardb.com';
  public $user = 'b82417261244e5';
  public $password = '06d87278';
  public $port = "3306";

  private function getConnection () {
    try {
      $connection = new PDO($this->dsn.":".$this->port, $this->user, $this->password);
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }
    return $connection;
  }

public function insertUser ($username, $lastName, $password, $email, $phoneNumber) {
    $conn = $this->getConnection();
    $saveQuery = "insert into users (username, lastname, passwrd, email, phoneNumber)
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

  public function addToCart ($id) {
    $conn = $this->getConnection();
    $saveQuery = "insert into shoppingcart (foodID)
     values (:id)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }

  public function getShoppingItems () {
    $connection = $this->getConnection();
    try {
      $rows = $connection->query("select foodName, price from shoppingcart sc join foods on foods.foodID=sc.foodID", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }
}