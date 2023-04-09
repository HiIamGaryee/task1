<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

     <form action="insertdata.php" method="post">

        <h2>Register</h2>
        <?php if (isset ($_GET['error'])){?>
            <p class="error">
                <?php echo $_GET['error'];?></p>

        <?php }?>  



        <label>name</label>
        <input type="text" name="name" placeholder="name" id="name" ><br> 

        <label>User Name</label>
        <input type="text" name="unames" placeholder="User Name" id="unames"><br>

        <label>Password</label>
        <input type="password" name="pss" placeholder="Password" id=="pss"><br> 

        <label>Retype Password</label>
        <input type="password" name="repss" placeholder="Retype Password" id=="repss"><br> 


        <button type="submit">Create</button>

     </form>

</body>

</html>
