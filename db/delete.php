<?php 

include("conn.php");


$employee_id = $_REQUEST['delid'];
// sql to delete a record
$sql = "DELETE FROM employee WHERE employee_id = $employee_id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location:display.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>