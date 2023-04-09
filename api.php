<?php
include "connect.php";

// Retrieve the data from the JSON API
$url = 'https://my-json-server.typicode.com/HiIamGaryee/CURDAPI/posts/1';
$json = file_get_contents($url);
$data = json_decode($json, true);

$response = array();

if($con){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        // handle GET request
        if(isset($_GET['id'])){
            // fetch a single customer by id
            $id = $_GET['id'];
            $sql= "SELECT * FROM Customer WHERE id = $id";
        }else{
            // fetch all customers
            $sql= "SELECT * FROM Customer";
        }
        $result = mysqli_query($con,$sql);
        if($result){
            header("Content-Type: application/json");
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                $response[$i]['remark'] = $data['body']; 
                $response[$i]['created'] = $data['created_at']; 
                $response[$i]['id'] = $row['id'];
                $response[$i]['title'] = $row['title'];
                $i++;
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
}
else{
    echo "Database connection fail";
}
?>