<?php   
    session_start();
    if (isset($_SESSION['user_id'])) {
        # code...
        header('Location: ./Index.blade.php');
    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/RegisterNow.css">
    <title>PAK IDENTITY</title>
<script  src="./Conditions.js">


</script> 
</head>
<body style="background-image: url(./ONLINE_ID_Images/unnamed.png);height:auto;background-repeat: no-repeat; background-size: cover;">
    <header>
        <div class="logo">
            <img src="./ONLINE_ID_Images/login-logo.png" alt="">
        </div>
        <div class="headerBar">
            <ul>
                <li><a href="./Home.html">HOME</a></li>
                <li><a href="">GUIDELINES</a></li>
                <li><a href="">DOWNLOADS</a></li>
                <li><a href="FAQ%20–%20PAK%20ID.html">FAQ</a></li>
                <li><a href="Contact%20Us%20–%20PAK%20ID.html">Contact Us</a></li>
            </ul>
        </div>
    </header>
    <div class="RegisterFoam">
       <div class="foam">
            <form action="" method="post">
               
               <br><br> <img src=".//ONLINE_ID_Images/RegisterImage.png" alt="">
                <p>
                    Create an account to register yourself 
                    in Pak-Identity System.
                    Or <a href="">Signin with your existing account.</a> 
                </p>
                <label for="FORENAME">FORENAME</label><br>
                <input type="text" id="FORENAME" name="FORENAME" required><br>
                <label for="SURNAME">SURNAME</label><br>
                <input type="text" id="SURNAME" name="SURNAME" required><br>
                <label for="COUNTRY">COUNTRY</label><br>
                <input type="text" id="COUNTRY" name="COUNTRY" required><br>
                <label for="EMAIL">EMAIL</label><br>
                <input type="text" id="EMAIL" name="EMAIL" required ><br>
                <label for="PASSWORD">PASSWORD</label><br>
                <input type="password" id="PASSWORD" name="PASSWORD" required><br>
                <label for="RE-TYPE">RE-TYPE YOUR PASSWORD</label><br>
                <input type="password" id="RE-PASSWORD" name="RE-PASSWORD" onchange="CheckPassword()" required><br>
                    <p style="font-size: smaller;text-align: left;margin-top: 5px;"><span id="checkpassword"></span></p>
                <br><br><hr style="margin-right: 80px;">  <br><br>
                <input type="submit" name="submit" style="width: 200px;margin-left: 25%; border-radius: 10px; background-color: blueviolet; color: white;font-size: large; border: 1px;">
         

<?php

    if (isset($_POST['submit'])) {
        # code...
        include ("./db.config.php");
        $FORENAME = $_POST['FORENAME'];
        $SURNAME = $_POST['SURNAME'];
        $COUNTRY = $_POST['COUNTRY'];
        $Email = $_POST['EMAIL'];
        $Password = $_POST['PASSWORD'];
        

        $db = new Database();
        $qry = "INSERT INTO userregistrations 
                (forename,surname,country,email,password) 
                VALUES ( '" . $FORENAME . "','" . $SURNAME . "',
            '" . $COUNTRY . "','" .$Email . "','" .$Password . "'
                    )";

         if($db->UDI($qry) == true){
            header('Location: ./LogIn.php');
         }else {
             echo 'Users Not Registerd ';
         }
        }
?>

        </form>
   
        <p>Already have an account <a href="./LogIn.php">Log In!!</a> </p>
    <br>
    <br>
    <br>
</div>    
<br>
<br>
<br>
<br><br><br><br><br><br>.
<div class="Password">
    <br><br>
    <h3>Passowrd</h3>
    <p>Password must be at
        
         least 8 characters and must 
         contain an upper case character, 
         a lower case character, a numeric
          character,
         and a special character.</p>
<br><br><br>
        </div>
</div>
</body>
</html>

<?php
        //     function myfunction(){
                        
        //         $Email = $_POST['EMAIL'];
        //     return" ilove PHP by Arman De Guzamna" .$Email;

        //     include ("./db.config.php");
        //     include ("./User.php");
        //     $Email = $_POST['EMAIL'];
        //     $db = new Database();
        //     $qry = "select email from userregistrations where email='".$Email."' ";
          
        //     $users = $db->Search($qry,User::class);
        //     if ($users!=null) {
        //             # code...
        //            $user = $users[0];
        //            echo $user->getDetail();.
        //      return "This Email is Already Used! Please Try Again";
        //     foreach ($users as $user){
        //         echo  $user->getDetail();
        //     }
        // }
        // else{
        //     return "This Email is Not Already Used!";
        //     }
        //     }
        //         }
