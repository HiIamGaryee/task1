<!DOCTYPE html>
<html>
<div id="popup-box">
  <form action="display.php" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="remark">remark:</label>
    <textarea name="remark" id="remark"></textarea>
    <br>
    <input type="hidden" name="id" id="id">
    <input type="submit" name="submit" value="Update">
  </form>
</div>
</html>


<?php
include 'connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$remarks = $_POST['remarks'];

$sql = "UPDATE Customer SET title='$title', remarks='$remarks' WHERE id=$id";

$result = mysqli_query($conn, $sql);

if (!$result) {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


