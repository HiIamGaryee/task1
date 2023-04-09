<?php
include 'connect.php';

if (isset($_POST['title']) && isset($_POST['remark'])) {
    $title = validate($_POST['title']);
    $remark = validate($_POST['remark']);

    if (empty($title)) {
        header('Location: create.php?error=Title is required');
        exit();
    } else if (empty($remark)) {
        header('Location: create.php?error=Remark is required');
        exit();
    } else {
        $sql = "INSERT INTO Customer(title, remark) VALUES('$title', '$remark')";
        $result = mysqli_query($con, $sql);
        header('Location: display.php');

    }
} else {
    header('Location: create.php');
    exit();
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
?>
