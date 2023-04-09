<?php 
session_start(); 
include "connect.php";

if (isset($_POST['unames']) && isset($_POST['pss'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$unames = validate($_POST['unames']);
	$pss = validate($_POST['pss']);

	if (empty($unames)) {
		header('Location: index.php?error=User Name is required');
	    exit();
	}else if(empty($pss)){
        header('Location: index.php?error=Password is required');
	    exit();
	}else{
		$sql = "SELECT * FROM Users WHERE unames='$unames' AND pss='$pss'";

		$result = mysqli_query($con, $sql);

		if ($result->num_rows == 1) {
			$_SESSION['unames'] = $unames;
			header('Location: display.php');
		} else {
			header('Location: index.php?error=Invalid User Name and password');
		}
	
	}

}else{
	header('Location: index.php');
	exit();
}
?>