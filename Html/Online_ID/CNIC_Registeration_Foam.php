<?php
session_start();
if (!isset($_SESSION['user_id'])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


<div class="card" style="width: auto;">

    <div class="card-body">
<h5 class="card-title">Enter Required Information to register Cnic</h5>

    <form action="./InsertionUser.php" method="post">
<div class=" mb-3 mx-5 my-5 align-items-center">
    <div class="mb-3  mx-5 col-lg-6 col-md-12">
        <label for="Identity-Number" class="form-label">Identity-Number</label>
        <input type="text" class="form-control" id="Identity-Number" name="Identity-Number" placeholder="Identity-Number" required>
    </div>
    <div class="mb-3 mx-5 col-lg-6 col-md-12">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" required>
    </div>
    <div class="mb-3  mx-5 col-lg-6 col-md-12">
        <label for="Father Name" class="form-label">Father Name</label>
        <input type="text" class="form-control" id="Father-Name" name="Father-Name" placeholder="Father Name" required>
    </div>
    <div class="mb-3 mx-5 col-lg-6 col-md-12">
        <label for="Passport-Number" class="form-label">Passport-Number</label>
        <input type="text" class="form-control" id="Passport-Number" name="Passport-Number" placeholder="Passport-Number" required>
    </div>
    <div class="mb-3  mx-5 col-lg-6 col-md-12">
        <label for="Issuing State" class="form-label">Issuing State</label>
        <input type="text" class="form-control" id="Issuing-State" name="Issuing-State" placeholder="Issuing State" required>
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
        <input type="text" class="form-control" id="Current-Address" name="Current-Address" placeholder="Current-Address" required>
    </div>
    <div class="mb-3 mx-5 col-lg-6 col-md-12">
        <label for="Permanent-Address" class="form-label">Permanent-Address</label>
        <input type="text" class="form-control" id="Permanent-Address" name="Permanent-Address" placeholder="Permanent-Address" required>
    </div>
    <input type="submit" name="Register" class="btn btn-primary Register-btn mx-5 my-3">
<a href="Index.php">    <div class="btn btn-primary Register-btn mx-5 my-3" >Go Back</div></a>
</div>
    </form>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>