<?php 
include "connect.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Create Page</title>
  </head>
  <body>
    <form action="create2.php" method="post">
        <h2>Create Page</h2>
        <label for="title">Title</label>
        <input type="text" class="form-control" placeholder="Enter title" name="title">
        <label for="remark">Remark</label>
        <input type="text" class="form-control" placeholder="Enter remark" name="remark">
        <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
