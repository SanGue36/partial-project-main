

<?php
// Include config file
require_once 'php/config.php';

// Define variables and initialize with empty values
$fname = $lname = $mobile = $place = $dob = $gender = $btype = $email = $address= $clinic_address=$clinic_name="";
//$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $place = $_POST['place'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $btype = $_POST['btype'];
        $clinic_address= $_POST['clinic_address'];
        $clinic_name = $_POST['clinic_name'];



        if (isset($_FILES['pdf_file']['name']))
        {
            $file_name = $_FILES['pdf_file']['name'];
            $file_tmp = $_FILES['pdf_file']['tmp_name'];
    
            move_uploaded_file($file_tmp,"recipient_pdf/".$file_name);
            
        }

        
        $sql = "INSERT INTO `recipient`(`F_Name`, `L_Name`, `DOB`, `gender`, `email`, `address`, `recipient_med_repo`, `phone_no`, `place`, `Blood_Group`, `clinic_name`, `clinic_address`) VALUES ('$fname','$lname','$dob','$gender','$email','$address','$file_name','$mobile','$place','$btype','$clinic_name','$clinic_address');";
        $result = mysqli_query($conn, $sql);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Recipient Login Form</title>
    <link rel="stylesheet" href="css/request.css" >
</head>
<body>
    <div class="full">
    <div class ="heading">
        <h1>Recipient Login Form</h1>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <div class ="form-group">
        <div class="Navbar">
            <a class="ac" href="#Home">Home</a>
    </div>
            <div class ="first">
                <label for="First Name" >First Name</label>
                <input type="text" style="height: 20px; width: 200px;" id="First Name" name="fname" required value="<?php echo $fname; ?>" >
                
            </div>
            <div class="last">
                <label for="Last Name" >Last Name</label>
                <input type="text"style="height: 22px; width: 200px;" id="Last Name" name="lname" required value="<?php echo $lname; ?>">
            </div>
            
        <div class ="phone">
            <br>
            <br>
            <label for="Phone Number">Phone Number</label>
            <input type="text" style="height: 20px; width: 180px;" id="Phone Number" name="mobile" required value="<?php echo $mobile; ?>">
        </div>
        <br>
        

        <div class="address">
            <label for="address">Address</label>
            <input type="text" style="height: 20px; width: 250px;"  id="address" name="address" required value="<?php echo $address; ?>">
        </div>
        <br>

        <div class="email">
            <label for="email">Email</label>
            <input type="email" style="height: 20px; width: 250px;" id="email" name="email" required value="<?php echo $email; ?>">
        </div>


        
        <div class="place">
            <br>
            <br>
            <label for="Place">Place</label>
            <input type="text" style="height: 20px; width: 250px;" id="Place" name="place" required value="<?php echo $place; ?>">
        </div>
        <div class="dob">
            <br>
            <br>
            <label for="dob">Date Of Birth</label>
            <input type="date" id="Date Of Birth" name="dob" required value="<?php echo $dob; ?>">
        </div>
        <br>

        <div class="gender">  
        <label for="gender">Gender</label>
            <select class="form-control" id="gender"required  name="gender" value="<?php echo $gender; ?>">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
               </select>
           </div>
        <br>
        <div class="bloodgroup">
            <label for="bloodgroup">Blood Group</label>
            <select class="form-control" id="btype" required  name="btype" value="<?php echo $btype; ?>">
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
          <br>
        <div class="file">
          <label for="myfile">Upload medical report:</label>
          <input type="file" id="myfile" name="pdf_file"  multiple accept=".pdf,.doc">
        </div>
        <br>
        <div class="address">
            <label for="address"> Clinic Address</label>
            <input type="text" style="height: 20px; width: 250px;"  id="address" name="clinic_address" required value="<?php echo $clinic_address; ?>">
        </div>
        <div class="last">
            <label for="Clinic Name" >Clinic Name</label>
            <input type="text"style="height: 22px; width: 200px;" id="Last Name" name="clinic_name" required value="<?php echo $clinic_name; ?>">
        </div>
        <br>
        <br>
        <input type="submit" style="background-color:rgb(252, 216, 222);color:black;height: 50px; width: 150px" style="right: 150px" value="submit" >
   
    </div>
    </form>
</div>
</body>
</html>