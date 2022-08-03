<?php

require_once 'php/config.php';


?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    href="add_employee.css">
    <link rel="stylesheet" href="style.css">
    </head>
<body>

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Receivers Details</h1>
            </div>
            <div class="panel-body">
                
                    <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <th>Donor ID</th>
                                
                                <th>First Name</th>
                                
                                <th>Last Name</th>
                                
                                <th>Date of Birth</th>
                                
                                <th>Gender</th>
                                
                                <th>Email</th>
                                
                                <th>Address</th>
                                <!-- <th>Medical Report</th> -->
                                
                                <th>Mobile</th>
                                
                                <th>Place</th>
                                
                                <th>Blood_Group</th>
                                
                                <th>Clinic Name</th>
                                
                                <th>Clinic Address</th>
                                
                            </thead>
                            <tbody>
                                <?php
                                    $selectQuery = "SELECT `Recipient_id`, `F_Name`, `L_Name`, `DOB`, `gender`, `email`, `address`, `recipient_med_repo`, `phone_no`, `place`, `Blood_Group`, `clinic_name`, `clinic_address` FROM `recipient` WHERE 1";
                                    $squery = mysqli_query($conn, $selectQuery);
                                    
                                    while (($result = mysqli_fetch_assoc($squery))) {
                                ?>
                                <tr>
                                <td><?php echo $result['Recipient_id']; ?></td>
                                
                                <td><?php echo $result['F_Name']; ?></td>
                                
                                <td><?php echo $result['L_Name']; ?></td>
                                
                                <td><?php echo $result['DOB']; ?></td>
                                
                                <td><?php echo $result['gender']; ?></td>
                               
                                <td><?php echo $result['email']; ?></td>
                                
                                <td><?php echo $result['address']; ?></td>
                                
                                <!-- <td><?php echo $result['Recipient_med_repo']; ?></td> -->
                                <td><?php echo $result['phone_no']; ?></td>
                                
                                <td><?php echo $result['place']; ?></td>
                                
                               
                                <td><?php echo $result['Blood_Group']; ?></td>
                                
                                <td><?php echo $result['clinic_name']; ?></td>
                                
                                <td><?php echo $result['clinic_address']; ?></td>
                                
                                <!-- <td><a href="">Edit</a></td>
                                
                                <td><a href="">Delete</a></td>  -->
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