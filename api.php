<?php
require "db.php";
$pdo = db_connect();

// Handle form submissions
if($_SERVER["REQUEST_METHOD"]== "POST")

{
      $sql = 'INSERT INTO bands (name, description, player) VALUES (:name, :description, :player)';

      $statement = $pdo->prepare($sql);

      $statement->bindValue(':name', $_POST['name']);
      $statement->bindValue(':description', $_POST['description']);
      $statement->bindValue(':player', $_POST['player']);
      $statement->execute();

      $pdo = null;
}

if($_SERVER["REQUEST_METHOD"]=="GET") {
  $bands=[];
  if(isset($_GET['bands']))
  {
  //TODO get list of bands from database
    
    $sql = "SELECT * FROM bands";
    $result = $pdo->query($sql);
    
    while($row = $result->fetch()){
      //$jsonBands = json_encode($row);
      echo "<li><a class='band' href='api.php?id=". $row['ID']."' >". $row['name']."</a></li>";
    }
    
  }
    

  if(isset($_GET['id']))
  {
    //TODO get band with a particular id from the database

    $sql = "SELECT * FROM bands ";
    $result = $pdo->query($sql);
    
    $row = $result->fetch();
   
    $jsonBands = json_encode($row);
      echo $jsonBands;
  }
}
