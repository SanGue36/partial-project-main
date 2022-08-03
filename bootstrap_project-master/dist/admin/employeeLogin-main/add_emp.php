<?php

require_once '../php/config.php';

$empid=$username=$password=$fname=$lname=$mobile=$email="";
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
    $empid = $_POST['emp_id'];
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];   
    $mobile = $_POST['mobile'];  
    $email = $_POST['email'];

    $sql= "INSERT INTO `employee_login`(`emp_id`, `emp_username`, `emp_password`, `f_name`, `l_name`, `mobile`, `email`) VALUES ('$empid','$username','$password','$fname','$lname','$mobile','$email');";
    $result = mysqli_query($conn, $sql);
}

?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Profile</title>
    <link rel="stylesheet" href="./time_sheet.css">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Profile.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="emp_time_chart.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    <script type="application/ld+json">{
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "inventory management"
  }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Profile">
    <meta property="og:type" content="website">
  </head>
  
  <body data-home-page="Profile.html" data-home-page-title="Profile" class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-white u-header" id="sec-67a4">
      
    </header>
    <section class="u-border-12 u-border-grey-10 u-clearfix u-white u-section-1" id="sec-0cb2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-circle u-image-1" src="images/4.svg" alt="" data-image-width="400" data-image-height="265">
        
        <a href="https://nicepage.com/html-templates" class="u-border-1 u-border-grey-50 u-btn u-btn-round u-button-style u-hover-grey-50 u-none u-radius-18 u-text-body-color u-text-hover-white u-btn-1">
          <span style="font-size: 1rem;">
            
          </span>
          <br>
        </a>
        
        <div class="u-list u-list-1"></div>
  
  
  
  
        <section class="vh-100 gradient-custom">
          <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
              <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                  <div class="card-body p-4 p-md-5">
                    <h1 class="mb-4 pb-2 pb-md-0 mb-md-5">sangUe</h1>
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Employee Registration</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    
                    
                        <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" name="emp_id" value="<?php echo $empid; ?>" >
                            <label class="form-label" for="firstName">Employee ID</label>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-4">
  
                          <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" name="username" value="<?php echo $username; ?>" >
                            <label class="form-label" for="firstName">Employee username</label>
                          </div>
  
                        </div>
                        <div class="col-md-6 mb-4">
  
                          <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" name="password" value="<?php echo $password; ?>">
                            <label class="form-label" for="lastName">Employee password</label>
                          </div>
  
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6 mb-4">
  
                          <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" name="fname" value="<?php echo $fname; ?>" >
                            <label class="form-label" for="firstName">First Name</label>
                          </div>
  
                        </div>
                        <div class="col-md-6 mb-4">
  
                          <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" name="lname" value="<?php echo $lname; ?>">
                            <label class="form-label" for="lastName">Last Name</label>
                          </div>
  
                        </div>
                      </div>
  
                      <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
  
                          <div class="form-outline datepicker w-100">
                            <input type="text" class="form-control form-control-lg" id="work_started" name="mobile" value="<?php echo $mobile; ?>">
                            <label for="dob" class="form-label">mobile</label>
                          </div>
  
                        </div>

                        <div class="col-md-6 mb-4 d-flex align-items-center">
  
                          <div class="form-outline datepicker w-100">
                            <input type="email" class="form-control form-control-lg" id="work_started" name="email" value="<?php echo $email; ?>">
                            <label for="date" class="form-label">email</label>
                          </div>
  
                        </div>
  
                      </div>
  
                      <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                      </div>
  
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
  
  
  
  
        <br>
        
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


  <!-- Code injected by live-server -->
  <script type="text/javascript">
      // <![CDATA[  <-- For SVG support
      if ('WebSocket' in window) {
          (function () {
              function refreshCSS() {
                  var sheets = [].slice.call(document.getElementsByTagName("link"));
                  var head = document.getElementsByTagName("head")[0];
                  for (var i = 0; i < sheets.length; ++i) {
                      var elem = sheets[i];
                      var parent = elem.parentElement || head;
                      parent.removeChild(elem);
                      var rel = elem.rel;
                      if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                          var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                          elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                      }
                      parent.appendChild(elem);
                  }
              }
              var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
              var address = protocol + window.location.host + window.location.pathname + '/ws';
              var socket = new WebSocket(address);
              socket.onmessage = function (msg) {
                  if (msg.data == 'reload') window.location.reload();
                  else if (msg.data == 'refreshcss') refreshCSS();
              };
              if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                  console.log('Live reload enabled.');
                  sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
              }
          })();
      }
      else {
          console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
      }
      // ]]>
  </script>
  
  </body></html>