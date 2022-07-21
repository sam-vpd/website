<div class="table-container">
    <div class="row">
        <div class="col-md-12 form-group">
            <h3>List of Employees</h3>
            <a href="display.php">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php" method="post">
                <input type="text" name="toFind" size="120"> 
                <input type="submit" name="submit" value="Search" >
                <a href="insert.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Add New Record</a>
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
                            include("conn.php");
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
                                        <form action=\"delete.php?delid=".$row['employee_id']."\" method =\"post\">
                                        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete \">
                                        </form>
                            
                                        <form action=\"edit.php?editid=".$row['employee_id']."\" method =\"post\">
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