<?php

// Database class for CRUD operations
class Database {

  private $connection;

  // Constructor to establish database connection
  function __construct(){
    $this->connect_db();
  }

  // Connect to the database
  public function connect_db(){
    $this->connection = mysqli_connect('172.31.22.43', 'Malkit200543614', 'StBWEnstVE', 'Malkit200543614');
    if(mysqli_connect_error()){
      die("Database Not Connected! Please Try Again!" . mysqli_connect_error());
    }
  }

  // Create a new record in the database
  public function create($fullName, $addr, $contactNum, $size, $crust, $cheese, $pizzaToppings, $pizzaDips){
    $sql = "INSERT INTO customerinfo (fullName, addr, contactNum, size, crust, cheese, pizzaToppings, pizzaDips) 
    VALUES('$fullName', '$addr', '$contactNum', '$size', '$crust', '$cheese', '$pizzaToppings', '$pizzaDips')";
    $res = mysqli_query($this->connection, $sql);
    if($res){
      return true;
    } else {
      return false;
    }
  }

  // Read records from the database
  public function read($id=null){
    $sql = "SELECT * FROM customerinfo";
    if($id){
      $sql .= " WHERE id=$id";
    }
    $res = mysqli_query($this->connection, $sql);
    return $res;
  }

  // Sanitize user input to prevent SQL injection
  public function sanitize($var){
    $return = mysqli_real_escape_string($this->connection, $var);
    return $return;
  }
}

// Create an instance of the Database class
$database = new Database();
?>
