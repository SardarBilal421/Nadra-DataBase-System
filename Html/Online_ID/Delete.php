<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./LogIn.php');
}


$ID = $_GET['id'];
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "nadradatabasesystem";

$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die("DB Error : " . $conn->connect_error);
}

$qry = "Delete from cnic_info where id = '".$ID."'";

if($conn->query($qry)){
    echo " <br> Deleted Successfully \n";
    echo "<a href='./Index.php'>Home</a>";


}else{
    echo "Error".$qry."\n ".$conn->error;
}
