<?php 
session_start(); 
include "conect.php";

if (isset($_POST['unames']) && isset($_POST['pss'])
    && isset($_POST['name']) && isset($_POST['re_pss'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$unames = validate($_POST['unames']);
	$pss = validate($_POST['pss']);

	$re_pss = validate($_POST['re_pss']);
	$name = validate($_POST['name']);

	$user_data = 'unames='. $unames. '&name='. $name;


	if (empty($unames)) {
		header("Location: insertdata.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pss)){
        header("Location: insertdata.php?error=pss is required&$user_data");
	    exit();
	}
	else if(empty($re_pss)){
        header("Location: insertdata.php?error=Re pss is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: insertdata.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pss !== $re_pss){
        header("Location: insertdata.php?error=The confirmation pss  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the pss
        $pss = md5($pss);

	    $sql = "SELECT * FROM Users WHERE unames='$unames' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: insertdata.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO Users(unames, pss, name) VALUES('$unames', '$pss', '$name')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: insertdata.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: insertdata.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>