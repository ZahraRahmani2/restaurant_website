<?php

class Dao {
  public $dsn = 'mysql:dbname=zrahmani;host=127.0.0.1';
  public $user = 'zrahmani';
  public $password = 'My_personal_db5548';
  //public $port = "3308";

  private function getConnection () {
    try {
      $connection = new PDO($this->dsn, $this->user, $this->password);
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