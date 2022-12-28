<?php

session_start();
if (isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./Index.php');
}


include('./db.config.php');
$Identity_Number = $_POST['Identity-Number'];
$Name = $_POST['Name'];
$User_ID = $_POST['user_id'];
$Father_Name = $_POST['Father-Name'];
$Passport = $_POST['Passport-Number'];
$Issuing_State = $_POST['Issuing-State'];
$Gender = $_POST['Gender'];
$Current_Address = $_POST['Current-Address'];
$Permanent_Address = $_POST['Permanent-Address'];


$db = new  Database();
$qry = "INSERT INTO cnic_info 
                (name,father_name,passport_number,state,gender,c_address,p_address,id_number,user_id) 
                VALUES ( '" . $Name . "','" . $Father_Name . "',
            '" . $Passport . "','" .$Issuing_State . "','" .$Gender . "','" .$Current_Address . "','" .$Permanent_Address . "','" .$Identity_Number . "','" .$_SESSION['user_id']. "'
        )";

if($db->UDI($qry) == true){
    echo '<br> Inserted<br>';
    header('Location: ./Index.php');
}else {
    echo 'Record Not Inserted';
}

