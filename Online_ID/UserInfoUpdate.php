<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./LogIn.php');
}

$id = $_GET['id'];
$conn = new mysqli("localhost","root","","nadradatabasesystem");
if($conn->connect_error){
    die("DB Connect Error:".$conn->connect_error);
}
$qry = "SELECT * FROM userregistrations WHERE id = '".$id."'";
$result = $conn->query($qry);
if($result->num_rows > 0){
    if($row = $result->fetch_assoc()){

        $ID=$row['id'];
        $ForeName = $row['forename'];
        $SurName = $row['surname'];
        $Country = $row['country'];
        $Email = $row['email'];


        ?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

            <title>Document</title>
        </head>
        <body>


        <div class="card" style="width: auto;">

            <div class="card-body">
                <h5 class="card-title">Enter Required Information to register Cnic</h5>

                <form action="" method="post">
                    <div class=" mb-3 mx-5 my-5 align-items-center">
                        <div class="mb-3  mx-5 col-lg-6 col-md-12">
                            <label for="ForeName" class="form-label">ForeName</label>
                            <input type="text" class="form-control" id="ForeName"value="<?php echo $ForeName ?>" name="ForeName" placeholder="ForeName" required>
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

                        <input type="submit" name="Update" value="Update" class="btn btn-primary Register-btn mx-5 my-3" formaction="UpdateionUser.php?id='.$id.'" >
                        <a href="Index.php">    <div class="btn btn-primary Register-btn mx-5 my-3" >Go Back</div></a>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

        </body>
        </html>

        <?php

    }
} else {
    echo "Error while executing query:".$qry." Error:".$conn->error;
}
$conn->close();
?>



