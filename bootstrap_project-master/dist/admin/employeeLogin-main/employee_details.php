<?php

require_once '../php/config.php';


?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    href="add_employee.css">
    <link rel="stylesheet" href="details.css">
    </head>
<body>

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Employees List</h5>
                <br>
                <br>
                <a href="add_emp.php"><button class="btn" type="button">ADD</button></a>
            </div>
            <div class="panel-body">
                
                    <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <th>Employee_ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile     </th>
                                <th>Username</th>
                                <th>Password</th>
                            </thead>
                            <tbody>
                                <?php
                                    $selectQuery = "SELECT `emp_id`, `emp_username`, `emp_password`, `f_name`, `l_name`, `mobile`, `email` FROM `employee_login` WHERE 1;";
                                    $squery = mysqli_query($conn, $selectQuery);
                                    
                                    while (($result = mysqli_fetch_assoc($squery))) {
                                ?>
                                <tr>
                                <td><?php echo $result['emp_id']; ?></td>
                                <td><?php echo $result['f_name']; ?></td>
                                <td><?php echo $result['l_name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['mobile']; ?></td>
                                <td><?php echo $result['emp_username']; ?></td>
                                <td><?php echo $result['emp_password']; ?></td>
                                <!-- <td><a href="edit.php?emp_id=<?php echo $result['emp_id']; ?>">Edit</a></td> -->
                                <!-- <td><a href="emp_delete.php?emp_id=<?php echo $result["emp_id"]; ?>">Delete</a></td>  -->
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>			
                    </div>
                </div>

                
            </div>
        </div>
                 
    </div>
</div>
</body>
</html>



