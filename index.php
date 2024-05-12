<?php
  require('MODEL/database.php');

  $query = 'SELECT * FROM `todoitems`';
  
  $statement = $db->prepare($query);
  $statement->execute();
  $listItems = $statement->fetchAll();
  $statement->closeCursor(); 

  include('./VIEW/header.php');
  include('./VIEW/main.php');
  include('./VIEW/footer.php');
?>