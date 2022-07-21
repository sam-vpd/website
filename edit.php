<?php 

    require_once "db/conn.php";
    
    if(isset($_POST['update'])){

        $eid=$_GET['editid'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $phone_number=$_POST['phone_number'];
        $hire_date=$_POST['hire_date'];

        $sql = mysqli_query($conn, "UPDATE employee  SET first_name='$first_name', last_name='$last_name', email='$email', phone_number='$phone_number', hire_date='$hire_date' WHERE employee_id='$eid'");
        
        if($sql){
            echo "<script>alert('You have successfully updated the record!!');</script>";
            echo "<script>document.location='display_employ.php';</script>";
        }    
        else {
            echo "<script>alert('Something went wrong!');</script>";
        }
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js">
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
            <form method="POST">
                <?php
                    $eid=$_GET['editid'];
                    $sql=mysqli_query($conn, "SELECT * from employee where employee_id='$eid' ");
                    while($row=mysqli_fetch_array($sql)){
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>First name:</label>
                        <input type="text" value ="<?php echo $row['first_name'];?>" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control"
                            placeholder="Enter first name " name="first_name" autocomplete="off" required>
                    </div>
                    <div class="col-md-6">
                        <label>Last name:</label>
                        <input type="text" value ="<?php echo $row['last_name'];?>" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control"
                            placeholder="Enter last name " name="last_name" autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Email:</label>
                        <input type="email" value ="<?php echo $row['email'];?>" class="form-control" placeholder="Enter email " name="email"
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Phone number:</label>
                        <input type="text" value ="<?php echo $row['phone_number'];?>" class="form-control" placeholder="Enter phone number " name="phone_number"
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Hire Date:</label>
                        <input type="date" value ="<?php echo $row['hire_date'];?>" class="form-control" placeholder="Enter hire date " name="hire_date"
                            autocomplete="off" required>
                    </div>
                </div>
                <?php } ?>
                <div class="row" style = "margin-top:1%">
                    <div class="col-md-6">
                        <button type="text" name="update" class="btn btn-primary">Update</button>
                        <a href="#" class="btn btn-success">View Record</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
