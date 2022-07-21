<?php
    include 'db/connect.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $phone_number=$_POST['phone_number'];
        $hire_date=$_POST['hire_date'];

        $sql="INSERT INTO employee (email, first_name, last_name, phone_number, hire_date) values ('$email','$first_name','$last_name','$phone_number', '$hire_date')";
        $result=mysqli_query($con,$sql);
        if($result){
            header("Location: display_employ.php");
        }
        die(mysqli_error($con));
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growth System</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>
    <div class="row">
        <div class="col-2">
          <header>
            <?php include 'sidebar.php' ?>
          </header>
        </div>
        <div class="col-6">
            <div class="main-content" style="margin-top: 100px; margin-left: 120px;">
                <form method="post">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>First name:</label>
                        <input type="text" class="form-control" placeholder="Enter first name " name="first_name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Last name:</label>
                        <input type="text" class="form-control" placeholder="Enter last name " name="last_name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Phone number:</label>
                        <input type="number" class="form-control" placeholder="Enter phone number " name="phone_number" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Hired date: </label>
                        <input type="date" class="form-control" placeholder="Enter birthdate " name="hire_date" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                    <button class ="btn btn-danger"><a href="display_employ.php" class = "text-light">Cancel</a></button>
                </form>
            </div>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>









<div class="container my-10">
    
</div>

