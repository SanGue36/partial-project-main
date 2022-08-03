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
                <h1>Available Blood </h5>
            </div>
            <div class="panel-body">
                
                    <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <th>Donor Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Blood Id</th>
                                <th> Blood_Group </th>

                            </thead>
                            <tbody>
                                <?php
                                    $selectQuery = "SELECT donor.Donor_id , donor.F_Name , donor.L_Name , blood.Blood_id ,donor.Blood_Group
                                                    FROM donor
                                                    join blood ON blood.Donor_id=donor.Donor_id;";
                                    $squery = mysqli_query($conn, $selectQuery);
                                    
                                    while (($result = mysqli_fetch_assoc($squery))) {
                                ?>
                                <tr>
                                <td><?php echo $result['Donor_id']; ?></td>
                                <td><?php echo $result['F_Name']; ?></td>
                                <td><?php echo $result['L_Name']; ?></td>
                                <td><?php echo $result['Blood_id']; ?></td>
                                <td><?php echo $result['Blood_Group']; ?></td>

                                
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