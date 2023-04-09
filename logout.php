<?php 
session_start();

session_unset();
session_destroy();
?>

<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="index.php" method="post">

        <h2>You had already log out </h2>

        <button  type="submit">Log In Again</button>

     </form>

</body>

</html>