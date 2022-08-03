<?php
// Include config file
require_once 'php/config.php';

// Define variables and initialize with empty values
$fname = $lname = $mobile = $place = $dob = $gender = $btype = $email = $address ="";
//$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD']=="POST")
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $place = $_POST['place'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $btype = $_POST['btype'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        

        
        if (isset($_FILES['pdf_file']['name']))
        {
          $file_name = $_FILES['pdf_file']['name'];
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
 
          move_uploaded_file($file_tmp,"donor_pdf/".$file_name);
 
          
          
        }
        
        
        $sql = "INSERT INTO `donor`( `F_Name`, `L_Name`, `DOB`, `gender`, `email`, `address`, `donor_med_repo`, `phone_no`, `place`, `Blood_Group`) VALUES ('$fname','$lname','$dob','$gender','$email','$address','$file_name','$mobile','$place','$btype');";
        $result = mysqli_query($conn, $sql);

        //$stmt="UPDATE `blood` SET `Donor_id`='[value-3]',`Recipient_id`='[value-4]' WHERE 1";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Donar Login Form</title>
    <link rel="stylesheet" href="donor.css">
</head>
<body>
    <div class="full">
    <div class ="heading"><br>
        
        <br>
        <br>
        <h1><strong>Donor Login Form</strong> </h1>
    </div>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" enctype="multipart/form-data">
    <div class ="form-group">
            <div class ="first">
                <label > First Name :</label>
                <input type="text"  name="fname" style="height: 20px; width: 200px"  value="<?php echo $fname; ?>">
                
            </div>
            <br>
            <div class="last">
                <label >Last Name :</label>
            <input  type="text" name="lname" style="height: 22px; width: 200px;" value="<?php echo $lname; ?>">
            </div>
            <br>
            <br>
        <div class ="phone">
            
            <label >Phone Number :</label>
            <input type="text" name="mobile" style="height: 20px; width: 180px" value="<?php echo $mobile; ?>">
        </div>
        <br>
        <div class="place">
            <br>
            <br>
            <label>Place :</label>
            <input type="text" name="place" style="height: 20px; width: 250px" value="<?php echo $place; ?>">
        </div>
        <br>
        <br>
        
        <div class="dob">
           <label >Date Of Birth :</label>
            <input type="date" name="dob" value="<?php echo $dob; ?>">
        </div>

        <div class="address">
            <label for="address">Address</label>
            <input type="text"style="height: 20px; width: 250px" id="Address" name="address" required value="<?php echo $address; ?>">
        </div>
<br>

        <div class="e-mail">
            <label for="e-mail">Email</label>
            <input type="text" style="height: 20px; width: 250px" id="Email" name="email" required value="<?php echo $email; ?>">
        </div>
        <br>
         
        <br>
        <br>
        <div class="gender">
            <label for="Gender">Gender</label>
            <select class="form-control" id="Gender" required name="gender" value="<?php echo $gender; ?>">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
        </div>
        <br>
        <br>
        <div class="bloodgroup">
            <label for="">Blood Group :</label>
            <select class="form-control" name="btype" id="Blood Group"  value="<?php echo $btype; ?>">
                <option></option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>
        </div>
        
        <div class="file">
            <label for="myfile">Select files:</label>
            <input type="file" id="myfile" name="pdf_file" multiple accept=".pdf">
        </div>

        <input type="submit" style="height: 50px; width: 150px;background-color:rgb(25, 11, 11); border-color:rgb(11, 11, 11); color:white" value="Submit">
        <!-- <input type="reset" class="btn btn-secondary ml-2" value="Reset"> -->
    </div>
    </form>
</div>

  
  
</body>

    
</html>