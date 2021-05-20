<?php   
    session_start();
    if (isset($_SESSION['user_id'])) {
        # code...
        header('Location: ./Index.php');
    }



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAK IDENTITY LOGED IN </title>
    <link rel="stylesheet" href="./Style/RegisterNow.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./ONLINE_ID_Images/login-logo.png" alt="">
        </div>
        <div class="headerBar">
            <ul>
                <li><a href="Home.html">HOME</a></li>
                <li><a href="">GUIDELINES</a></li>
                <li><a href="">DOWNLOADS</a></li>
                <li><a href="FAQ%20–%20PAK%20ID.html">FAQ</a></li>
                <li><a href="Contact%20Us%20–%20PAK%20ID.html">Contact Us</a></li>
            </ul>
        </div>
    </header>

    <div class="foamLogin" style="width:40%;margin-left: 27%;">

        <br><br><br>
        <h3>Login to your PAK-IDENTITY account</h3><br>
        <hr style="margin-right: 100px;">
        <br><br><br>
        <form action="" style="text-align: left;" method="post">
            <label for="">EMAIL</label>
            <input type="text" id="EMAIL" name="EMAIL" required>
        
            <label for="">PASSWORD</label>
            <input type="password" id="PASSWORD" name="PASSWORD" required>
            <br>
            <br>
                
            <img src="./ONLINE_ID_Images/CODE.png" alt=""><br>
            <label for="">Code</label><br>
            <input type="text" id=" " name="" style="margin-bottom: 5px; width: 300px;">
            <br> <br> <p>Havent Register Yet? <a href="./RegiserNow.php">Register Now!!</a> </p>  
            <br> <br>  
            <hr style="margin-right: 100px;">
                <br><br>
            <input type="submit" name="submit" style="width: 200px; background-color: rgb(31, 59, 185);  font-size: large; color: white;">
            <br><br>
        </form>
    </div>
    <br><br><br>

</body>
</html>


<?php
    if (isset($_POST['submit'])) {
        include ("./db.config.php");
        include ("./User.php");
        $Email =$_POST['EMAIL'];
        $Password =$_POST['PASSWORD'];

        $qry = "select * from userregistrations where email='".$Email."' and password = '".$Password."' ";
        $db = new Database();
        $users = $db->Search($qry,User::class);
        $user = $users[0];
        if ($user!=null) {
            // # code...
             $_SESSION["user_id"] =$user->getId();
            // $_SESSION["AccountType"] = $user->getAcountType();
            header("Location:. /Index.php");
        }else{
            echo "log in missmatch Try Again";
        }
    }


?>