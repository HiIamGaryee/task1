<?php
$con=new mysqli('localhost','root','','CURD');
if($con){
    mysqli_select_db($con, "CURD");
    echo "connection successfull";
}else{
    die(mysqli_error($con));
}
?>