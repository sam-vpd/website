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
                <div class="table-container" style="height: 590px; width: 900px;">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>List of Employees</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="index.php" method="post">
                                <input type="text" name="toFind" size="120"> 
                                <input type="submit" name="submit" value="Search" >
                            </form>
                            <div class="table-responsive">
                                <table class="table table-boardered table-striped">
                                    <thead class="thead-light">
                                        <th>#</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Hire Date</th>
                                        <th>Time stamp</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include("db/conn.php");
                                            $sql = "";
                                            if(isset($_POST['submit']))
                                            { 
                                                $query = $_POST['toFind'];
                                                $sql = "SELECT * FROM employee where employee_id LIKE '%$query%' or first_name LIKE '%$query%'";
                                            }
                                            else
                                            {
                                                $sql = "SELECT * FROM employee";
                                            }
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "
                                                     <tr>
                                                        <th scope =\"row\">". $row['employee_id']."</th>
                                                        <td>". $row['first_name']."</td>
                                                        <td>". $row['last_name']."</td>
                                                        <td>". $row['email']."</td>
                                                        <td>". $row['phone_number']."</td>
                                                        <td>". $row['hire_date']."</td>
                                                        <td>".$row['timestamp']."</td>
                                            
                                                        <td>
                                                        <form action=\"db/delete.php?delid=".$row['employee_id']."\" method =\"post\">
                                                        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete \">
                                                        </form>
                                            
                                                        <form action=\"db/edit.php?editid=".$row['employee_id']."\" method =\"post\">
                                                        <input class=\"btn btn-warning\" type=\"submit\" value=\"Update\">
                                                        </form>
                                                        </td>
                                                    ";
                                            }
                                            } 
                                            else {
                                                echo "0 results";
                                            }
                                            $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
