<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./LogIn.php');
}


$ID=$_POST['id'];
$Forename= $_POST['ForeName'] ;
$SurName =$_POST['SurName'] ;
$Country=$_POST['Country'] ;
$Email=$_POST['Email'] ;

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "nadradatabasesystem";

$conn = new mysqli($serverName,$userName,$password,$dbName);

if ($conn->connect_error) {
    die("DB Connect Error:" . $conn->connect_error);
}
$qry = "UPDATE userregistrations SET forename ='" . $Forename . "',surname ='" . $SurName . "', country ='" . $Country . "', email ='" . $Email . "' WHERE user_id='" . $ID . "'";
if ($conn->query($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $conn->error;
}
$conn->close();
echo "<br>";
echo "<a href='./admin.php'>Home</a>";
