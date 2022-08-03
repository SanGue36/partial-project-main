

<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>



    <center>

    <!-- <div class="bloodgroup">
            <label for="">Select Blood Group :</label>
            <select class="form-control" name="btype" id="Blood Group" style="position: center; background-color:rgb(154, 206, 146);" value="<?php echo $btype; ?>">
                <!-- <option></option> -->
                <!-- <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>
        </div> -->

        <!-- <input type="submit" style="background-color:rgb(252, 216, 222);color:black;height: 50px; width: 150px" style="right: 150px" value="check availability" > --> 

    

      <?php 

      require_once 'php/config.php';

        // $username = "user"; 
        // $password = "pass123"; 
        // $database = "sangue"; 
        // $mysqli = new mysqli("localhost", $username, $password, $database); 
        $query = "SELECT `Donor_id`, `F_Name`, `L_Name`, `DOB`, `gender`, `email`, `address`, `donor_med_repo`, `phone_no`, `place`, `Blood_Group` FROM `donor` WHERE 1;";




        print("\n");
        print("\n");
        echo '<table table class="table table-striped" border="1" cellspacing="4" cellpadding="4"> 
              <tr> 
                  <td> <font face="Arial">first name</font> </td> 
                  <td> <font face="Arial">last name</font> </td> 
                  <td> <font face="Arial">email</font> </td> 
                  <td> <font face="Arial">dob</font> </td> 
                  <td> <font face="Arial">gender</font> </td> 
                  <td> <font face="Arial">b_type</font> </td>
                  <td> <font face="Arial">address</font> </td>
                  <td> <font face="Arial">city</font> </td>
                  <td> <font face="Arial">mobile</font> </td>
              </tr>';

        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $fname = $row["F_Name"];
                $lname = $row["L_Name"];
                $email = $row["email"];
                $dob = $row["DOB"];
                $gender = $row["gender"]; 
                $btype = $row["Blood_Group"];
                $address = $row["address"];
                $city = $row["place"];
                $mobile = $row["phone_no"];
                

                echo '<tr> 
                          <td>'.$fname.'</td> 
                          <td>'.$lname.'</td> 
                          <td>'.$email.'</td> 
                          <td>'.$dob.'</td> 
                          <td>'.$gender.'</td> 
                          <td>'.$btype.'</td> 
                          <td>'.$address.'</td> 
                          <td>'.$city.'</td>
                          <td>'.$mobile.'</td>  
                      </tr>';
            }
            $result->free();
        } 
      ?>
  </center>
</body>
</html>




