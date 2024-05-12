<?php
  require('database.php');

  if (isset($_POST['title'], $_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = 'INSERT INTO `todoitems`(`Title`, `Description`) VALUES (:title, :desc)';
    $statement = $db->prepare($query);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":desc", $description);

    if($statement->execute()){
      echo "Successfully Posted";
      header('Location: ../index.php');
    }
    else
      echo "Post Unsuccessfully";
  }
?>