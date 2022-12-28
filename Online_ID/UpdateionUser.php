<?php

$ID=$_POST['id'];
$Identity_Number = $_POST['Identity-Number'];
$Name = $_POST['Name'];
$Father_Name = $_POST['Father-Name'];
$Passport = $_POST['Passport-Number'];
$Issuing_State = $_POST['Issuing-State'];
$Gender = $_POST['Gender'];
$Current_Address = $_POST['Current-Address'];
$Permanent_Address = $_POST['Permanent-Address'];


$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "nadradatabasesystem";

$conn = new mysqli($serverName,$userName,$password,$dbName);

if ($conn->connect_error) {
    die("DB Connect Error:" . $conn->connect_error);
}
$qry = "UPDATE cnic_info SET name ='" . $Name . "',father_name ='" . $Father_Name . "',passport_number ='" . $Passport . "', state ='" . $Issuing_State . "', gender ='" . $Gender . "', c_address ='" . $Current_Address . "', p_address ='" . $Permanent_Address . "', id_number ='" . $Identity_Number . "' WHERE id='" . $ID . "'";
if ($conn->query($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $conn->error;
}
$conn->close();
echo "<br>";
echo "<a href='./Index.php'>Home</a>";
