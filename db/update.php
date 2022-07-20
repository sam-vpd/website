<?php
  
  include('conn.php');
  $employee_id = $_REQUEST['eid'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $phone_number=$_POST['phone_number'];
  $hire_date=$_POST['hire_date'];
  
  $sql = "UPDATE employee  SET first_name='$first_name', last_name='$last_name', email='$email', phone_number='$phone_number', hire_date='$hire_date' WHERE employee_id='$employee_id'";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("location:display.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  
 ?>