<main>
  <h2>To Do List Items</h2>
  <section>
    <?php foreach ($listItems as $listItem) {?>
      <section class="">
        <p>Title: <?=$listItem['Title']?></p>
        <p>Description: <?=$listItem['Description']?></p>
        <form method="post" action="./MODEL/deleteItem.php">
          <input type="hidden" name="itemID" value=<?=$listItem['ItemNum']?>>
          <input type="submit" value="Delete">
        </form>
      </section>
    <?php } ?>
  </section>
  <section>
    <form method="post" action="./MODEL/addItem.php">
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" required>

      <label for="description">Description:</label>
      <input type="text" name="description" id="description" required>
      <input type="submit" value="Add">
    </form>
  </section>
  <br><br><br><br>
</main>