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
                <h1>Employee Time Chart</h5>

                <!-- <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="work_started" name="date" value="<?php echo $date; ?>">
                    <label for="date" class="form-label">date</label>
                    <br><br>
                    <button class="btn" type="button">view</button>
                </div> -->
                


            </div>
            <div class="panel-body">
                
                    <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <th>Employee_ID</th>
                                <th>firstName</th>
                                <th>lastName</th>
                                <th>Work Started</th>
                                <th>Work Ended</th>
                                <th>Total Working Hours</th>
                                <th>Date</th>

                            </thead>
                            <tbody>
                                <?php
                                    $selectQuery =  "SELECT `emp_id`, `first_name`, `last_name`, `work_started`, `work_ended`, `Total_working_Hours`, `date` FROM `employee` ORDER BY date DESC;";
                                    $squery = mysqli_query($conn, $selectQuery);
                                    
                                    while (($result = mysqli_fetch_assoc($squery))) {
                                ?>
                                <tr>
                                <td><?php echo $result['emp_id']; ?></td>
                                <td><?php echo $result['first_name']; ?></td>
                                <td><?php echo $result['last_name']; ?></td>
                                <td><?php echo $result['work_started']; ?></td>
                                <td><?php echo $result['work_ended']; ?></td>
                                <td><?php echo $result['Total_working_Hours']; ?></td>
                                <td><?php echo $result['date']; ?></td>

                                
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