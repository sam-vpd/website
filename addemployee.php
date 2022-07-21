<?php
    include 'db/connect.php';
    if(isset($_POST['submit'])){
        $birth_date=$_POST['birth_date'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $gender=$_POST['gender'];
        $hire_date=$_POST['hire_date'];

        $sql="INSERT INTO employees (birth_date, first_name, last_name, gender, hire_date) values ('$birth_date','$first_name','$last_name','$gender', '$hire_date')";
        $result=mysqli_query($con,$sql);
        if($result){
            header("Location: display.php");
        }
        die(mysqli_error($con));
    }
?>

<div class="container my-10">
    <form method="post">
        <div class="form-group">
            <label>Birth date:</label>
            <input type="date" class="form-control" placeholder="Enter birthdate " name="birth_date" autocomplete="off" required>
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
            <label>Gender:</label>
            <input type="text" class="form-control" placeholder="Enter gender " name="gender" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Hired date: </label>
            <input type="date" class="form-control" placeholder="Enter birthdate " name="hire_date" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        <button class ="btn btn-danger"><a href="display.php" class = "text-light">Cancel</a></button>
    </form>
</div>

