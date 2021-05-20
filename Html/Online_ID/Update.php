<?php
$id = $_GET['id'];
$conn = new mysqli("localhost","root","","nadradatabasesystem");
if($conn->connect_error){
    die("DB Connect Error:".$conn->connect_error);
}
$qry = "SELECT * FROM cnic_info WHERE id = '".$id."'";
$result = $conn->query($qry);
if($result->num_rows > 0){
    if($row = $result->fetch_assoc()){

        $ID=$row['id'];
        $Identity_Number = $row['id_number'];
        $Name = $row['name'];
        $Father_Name = $row['father_name'];
        $Passport = $row['passport_number'];
        $Issuing_State = $row['state'];
        $Gender = $row['gender'];
        $Current_Address = $row['c_address'];
        $Permanent_Address = $row['p_address'];


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
                    <input type="hidden" class="form-control" id="Number"value="<?php echo $ID ?>" name="id"  required>
                    <label for="Identity-Number" class="form-label">Identity-Number</label>
                    <input type="text" class="form-control" id="Identity-Number"value="<?php echo $Identity_Number ?>" name="Identity-Number" placeholder="Identity-Number" required>
                </div>
                <div class="mb-3 mx-5 col-lg-6 col-md-12">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" name="Name"value="<?php echo $Name ?>" placeholder="Name" required>
                </div>
                <div class="mb-3  mx-5 col-lg-6 col-md-12">
                    <label for="Father Name" class="form-label">Father Name</label>
                    <input type="text" class="form-control" id="Father-Name"value="<?php echo $Father_Name ?>" name="Father-Name" placeholder="Father Name" required>
                </div>
                <div class="mb-3 mx-5 col-lg-6 col-md-12">
                    <label for="Passport-Number" class="form-label">Passport-Number</label>
                    <input type="text" class="form-control" id="Passport-Number"value="<?php echo $Passport ?>" name="Passport-Number" placeholder="Passport-Number" required>
                </div>
                <div class="mb-3  mx-5 col-lg-6 col-md-12">
                    <label for="Issuing State" class="form-label">Issuing State</label>
                    <input type="text" class="form-control" id="Issuing-State"value="<?php echo $Issuing_State ?>" name="Issuing-State" placeholder="Issuing State" required>
                </div>
                <div class="mb-3 mx-5 col-lg-6 col-md-12">
                    <label for="Gender" class="form-label">Gender</label>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Gender"  name="Gender" value="Male" checked>
                        <label class="form-check-label" for="Gender">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Gender"  name="Gender" value="Female" required>
                        <label class="form-check-label" for="Gender">
                            Female
                        </label>
                    </div>

                </div>




                <div class="mb-3  mx-5 col-lg-6 col-md-12">
                    <label for="Current-Address" class="form-label">Current-Address</label>
                    <input type="text" class="form-control" id="Current-Address" value="<?php echo $Current_Address ?>" name="Current-Address" placeholder="Current-Address" required>
                </div>
                <div class="mb-3 mx-5 col-lg-6 col-md-12">
                    <label for="Permanent-Address" class="form-label">Permanent-Address</label>
                    <input type="text" class="form-control" id="Permanent-Address" value="<?php echo $Permanent_Address ?>" name="Permanent-Address" placeholder="Permanent-Address" required>
                </div>
                <input type="submit" name="Update" value="Update" class="btn btn-primary Register-btn mx-5 my-3" formaction="UpdateionUser.php?id='.$row['id'].'" >
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