<?php
  require('database.php');

  if (isset($_POST['itemID'])){
    $ID = $_POST['itemID'];
    $query = 'DELETE FROM `todoitems` WHERE ItemNum = :itemID';
    $statement = $db->prepare($query);
    $statement->bindValue(":itemID", $ID);

    if($statement->execute()){
      echo "Successfully Deleted";
      header('Location: ../index.php');
    }
    else
      echo "Delete Unsuccessfully";
  }
  
?>