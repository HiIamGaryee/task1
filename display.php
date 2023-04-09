<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htttp-euiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">

<title>Curd operation</title>
<link rel="stylesheet" href="style2.css">
</head>
<h1>Display</h1>



<body> 
    <table class="table">
  <thead class="thead-dark" style="text-align:left;">
    <tr>
      <th scope="col">Data Id</th>
      <th scope="col">Title</th>
      <th scope="col">Remark</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody style="text-align:left;">

    <?php
        $sql="Select *from `Customer` ";
        $result=mysqli_query($con,$sql);
        if ($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $title=$row['title'];
                    $remark=$row['remark'];
                    echo 

                    '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$title.'</td>
                    <td>'.$remark.'</td>

                    <td>
                    <button class="btn btn-default" onclick="showPopup()"><a href="update.php?updateid='.$id.'" class="dark-text">Edit</a></button>. 
                    <button class="btn btn-default" onclick="myFunction()"><a href="delete.php? deletedid='.$id.'" class="dark-text">Delete></a></button>
                    </td>
                    </tr>';
                }
        } 
    ?>
  </tbody>
</table>

<p id="pub"></p>

<p>
<div class="container">
    <button><a href="create.php" class="text-white">Add Data</a></button>
    <button><a href="logout.php" class="text-white">Log out</a></button>
</p>

<script>
function myFunction() {
  var txt;
  if (confirm("Comform delete")) {
    txt = "Done delete";
  } else {
    event.preventDefault();
  }
  document.getElementById("pub").innerHTML = txt;
}
</script>

<script>
		function showPopup() {
			document.getElementById("popup").style.display = "block";
		}
</script>
</body>
</html>