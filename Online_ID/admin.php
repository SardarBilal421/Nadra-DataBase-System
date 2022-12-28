<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./LogIn.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Main Page</title>
    <style>
        .imagees{
            margin-left: 100px;
            margin-top: 100px;
            height: 400px;
            background-repeat: no-repeat;
            width: 1150px;
            background-image: url("./ONLINE_ID_Images/USERRSS.png");
        }
    </style>
</head>
<body>

<div class="div">
    <?php
    include('LogInHeader.php')
    ?>
</div>

<br><br>




<div class="p-3 mb-2 mx-5">
    <table class="table">
        <h2 class="text-center">Total Account Registered</h2>
        <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">ForeName</th>
            <th scope="col">SurName</th>
            <th scope="col">Country</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>


        <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "nadradatabasesystem";

        $conn = new mysqli($serverName,$userName,$password,$dbName);
        if($conn->connect_error){
            die("DB Error : " . $conn->connect_error);
        }

        include ("./db.config.php");
        include ("./User.php");
        $db = new Database();
        $qry = "select * from userregistrations";
        $users =$conn->query($qry);
        // $users = $db->Search($qry,User::class);

        if($users -> num_rows >0) {
            while ($row = $users->fetch_assoc()) {
                echo '<tr>';

                echo '<td>' . $row['user_id'] . '</td>';
                echo '<td>' . $row['forename'] . '</td>';
                echo '<td>' . $row['surname'] . '</td>';
                echo '<td>' . $row['country'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';

                $ID= $row['user_id'] ;
                $Forename= $row['forename'] ;
                $SurName =$row['surname'] ;
                $Country=$row['country'] ;
                $Email=$row['email'] ;

                echo '<td><a href="" class="btn mx-1" data-toggle="modal" data-target="#myModal">        
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    </a></td>';
                echo '<td><a href="DeleteOneMore.php?user_id='.$row['user_id'].'" class="btn mx-1" >        
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg>
                    </a></td>';

            }

        }else{
            echo "Record not found";
        }
        ?>
        </tbody>
    </table>
</div>

<div>
    <div class="p-3 mb-2 mx-5">

        <table class="table">
            <h2 class="text-center">All CNIC's Information Registerd</h2>
            <thead>
            <tr>
                <th scope="col">#Identity_Number</th>
                <th scope="col">Name</th>
                <th scope="col">Father_Name</th>
                <th scope="col">Passport</th>
                <th scope="col">Issuing_State</th>
                <th scope="col">Gender</th>
                <th scope="col">Current_Address</th>
                <th scope="col">Permanent_Address</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>


            <?php
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $dbName = "nadradatabasesystem";

            $conn = new mysqli($serverName,$userName,$password,$dbName);
            if($conn->connect_error){
                die("DB Error : " . $conn->connect_error);
            }

            $db = new Database();
            $qry = "select * from cnic_info ";
            $users =$conn->query($qry);
            // $users = $db->Search($qry,User::class);

            if($users -> num_rows >0) {
                while ($row = $users->fetch_assoc()) {
                    echo '<tr>';

                    echo '<td>' . $row['id_number'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['father_name'] . '</td>';
                    echo '<td>' . $row['passport_number'] . '</td>';
                    echo '<td>' . $row['state'] . '</td>';
                    echo '<td>' . $row['gender'] . '</td>';
                    echo '<td>' . $row['c_address'] . '</td>';
                    echo '<td>' . $row['p_address'] . '</td>';

                    echo '<td><a href="adminupdate.php?user_id='.$row['id'].'" class="btn mx-1" >     
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></a></td>';
                    echo '<td><a href="adminDelete.php?user_id='.$row['id'].'" class="btn mx-1" >        
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg>
                    </a></td>';
                }

            }else{
                echo "Record not found";
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="card" style="width: auto;">

                    <div class="card-body">
                        <h5 class="card-title">Enter Required Information to register Cnic</h5>

                        <form action="" method="post">
                            <div class=" mb-3 mx-5 my-5 align-items-center">
                                <div class="mb-3  mx-5 col-lg-6 col-md-12">
                                <input type="hidden" class="form-control" id="id"value="<?php echo $ID ?>" name="id" placeholder="id" required>

                                    <label for="ForeName" class="form-label">ForeName</label>
                                    <input type="text" class="form-control" id="ForeName"value="<?php echo $Forename ?>" name="ForeName" placeholder="ForeName" required>
                                </div>
                                <div class="mb-3 mx-5 col-lg-6 col-md-12">
                                    <label for="Name" class="form-label">SurName</label>
                                    <input type="text" class="form-control" id="SurName" name="SurName"value="<?php echo $SurName ?>" placeholder="SurName" required>
                                </div>
                                <div class="mb-3  mx-5 col-lg-6 col-md-12">
                                    <label for="Country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="Country"value="<?php echo $Country ?>" name="Country" placeholder="Country" required>
                                </div>
                                <div class="mb-3 mx-5 col-lg-6 col-md-12">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="Email"value="<?php echo $Email ?>" name="Email" placeholder="Email" required>
                                </div>

                                <input type="submit" name="Update" value="Update" class="btn btn-primary Register-btn mx-5 my-3" formaction="userAdminInfoUpdated.php?id='.$ID.'" >
                                <a href="Index.php">    <div class="btn btn-primary Register-btn mx-5 my-3" >Go Back</div></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

</div>


<div class="imagees">

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>