<?php 
     include("connect.php");
  if(isset($_POST['update'])){
      $Firstname=$_POST['Firstname'];    
      $Lastname=$_POST['Lastname']; 
      $Email=$_POST['Email']; 
      $DOB=$_POST['DOB'];   
      $Rollno=$_POST['Rollno']; 
      $UG_percentage=$_POST['UG_percentage'];    
     $XII_percentage=$_POST['12th_percentage']; 
     $X_percentage=$_POST['10th_percentage'];       
     $Pyear=$_POST['Pyear'];
     $Branch=$_POST['Branch'];    
     $College=$_POST['College'];
     $Course=$_POST['Course'];    
     $Backlog=$_POST['Backlog']; 
     $Mobile=$_POST['Mobile']; 
     $Gender=$_POST['Gender']; 
     $Address=$_POST['Address'];  
     $Password=$_POST['Password'];  
     $date=date("y/m/d");
    $insert=mysql_query("UPDATE studenttbl SET   s_roll='$Rollno',fname='$Firstname',lname='$Lastname',10th='$X_percentage',12th='$XII_percentage',ug='$UG_percentage',pyear='$Pyear',branch='$Branch',college='$College',course='$Course',backlog='$Backlog',mobile_1='$Mobile',gender='$Gender',address1='$Address',dob='$DOB',rdate='$date',password='$Password',email='$Email' where s_roll='$Rollno'"); 
    
  if($insert)
     {
    $msg = "Feedback Successfully Submitted";
   
      }
      else
      {
      echo mysql_error();
       }
     }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Placement Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/linearicons.css">
        <!--=================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--text animation file-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <style>

        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
        </style>
    </head>
    <body>
        <?php include('include/headerl.php'); ?>
        <!-- #header -->
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">   
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                profile Here...             
                            </h1>   
                            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="register_form.html"> Profile</a></p>
                        </div>  
                    </div>
                </div>
        </section>
        <?php 
  include("connect.php");
 
  $sid=$_SESSION["s_roll"];
  $getselect=mysql_query("SELECT * from studenttbl  WHERE s_roll='$sid'");
 
  while($user = mysql_fetch_array($getselect))
  {
    $sid=$user['s_roll'];
    $fname=$user['fname'];
    $lname=$user['lname'];
    $gender=$user['gender'];
    $x=$user['10th'];
    $xii=$user['12th'];
    $ug=$user['ug'];
    $pyear=$user['pyear'];
    $branch=$user['branch']; 
    $course=$user['course'];
    $college=$user['college'];
    $backlog=$user['backlog'];
    $email=$user['email']; 
    $mobile_1=$user['mobile_1'];
    $address1=$user['address1']; 
    $dob=$user['dob'];
    $password=$user['password'];
    $ldate=$user['rdate'];
     $udate = new DateTime($ldate);
?>
        <!-- End banner Area -->    
                        <span class="login100-form-title p-b-50">
                            <h1 class="animated slideInLeft delay-.7s font">Student Profile</h1> 
                            
                        </span>
                    <span class="login50-form">
                        <?php
                        if (isset($msg)){ ?><div class="alert alert-success">
                            <marquee  direction="left">
                            Information Successfully Updated.
                            </marquee>
                      </div> <?php }
                        ?>
                         </span>

    <div class="container" style="border:solid;">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                <?php $avatar=$user['file']; ?> 
                                
                                    <img src="../admin/uploaded/<?php echo  $avatar; ?>" id="imgProfile" style="width: 150px;  class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><?php echo $fname; ?> <?php echo $lname; ?></h2>
                                  <br>
                                    <h6 class="d-block">Update Info. <a style="color: lightblue;" href="editprofile.php">click here</a></h6>
                                    <h6 class="d-block">Update Picture. <a style="color: lightblue;" href="editpic.php">click here</a></h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post">
                    
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Academy Info</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Enroll. No.</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="email" value="<?php echo $sid; ?>"  name="Rollno" onclick="alert('Not Changeble')" readonly>
                                               
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Change Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                             <input type="Password"  id="pass" value="<?php echo $password;?>" name="Password" style="width:100px" >
                                              <i class="fa fa-eye fa-2x" aria-hidden="true"
 onclick="document.getElementById('pass').type='text'"></i>
<i class="fa fa-eye-slash fa-2x" aria-hidden="true"
 onclick="document.getElementById('pass').type='password'"></i>  
                                               
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">First Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="text" value="<?php echo $fname; ?>" name="Firstname" onclick="alert('Not Changeble')" readonly>
                                              
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Last Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="text" value="<?php echo $lname; ?>" name="Lastname" onclick="alert('Not Changeble')" readonly>
                                              
                                            </div>
                                        </div>
                                        <hr />
                                          <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                            <select  name="Gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male"<?php if($gender == 'Male') { ?> selected="selected"<?php } ?>>Male</option>
                                    <option value="Female"<?php if($gender == 'Female') { ?> selected="selected"<?php } ?>>Female</option>
                                    <option value="Others"<?php if($gender == 'Others') { ?> selected="selected"<?php } ?>>Others</option>
                            </select>
                       
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">DOB (mm/dd/yyyy)</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input name="DOB" type="date"  onblur="if(!this.value)this.type='date'" value="<?php echo $dob; ?>">
                                               
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">College</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                 <select name="College">
                                    <option value="">Select College</option>
                                  <option value="SDBCT"<?php if($college == 'SDBCT') { ?> selected="selected"<?php } ?>>SDBCT</option>
                                  <option value="SDBCE"<?php if($college == 'SDBCE') { ?> selected="selected"<?php } ?>>SDBCE</option>
                                </select>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Course</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               
                            <select  name="Course">
                                    <option value="">Select Course</option>
                                     <option value="BE"<?php if($course == 'BE') { ?> selected="selected"<?php } ?>>B.E.</option>
                            </select>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Branch</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                            <select  name="Branch">
                                <option value="">Select Branch</option>
                                  <option value="CS"<?php if($branch == 'CS') { ?> selected="selected"<?php } ?>>CS</option>
                                  <option value="IT"<?php if($branch == 'IT') { ?> selected="selected"<?php } ?>>IT</option>
                                  <option value="ME"<?php if($branch == 'ME') { ?> selected="selected"<?php } ?>>ME</option>
                                  <option value="CIVIL"<?php if($branch == 'CIVIL') { ?> selected="selected"<?php } ?>>CIVIL</option>
                                  <option value="EC"<?php if($branch == 'EC') { ?> selected="selected"<?php } ?>>EC</option>
                            </select>
                                            </div>
                                        </div>
                                        <hr />
                                            <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Passing year</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input   type="number" min="2000" max="2030" step="1" value="2016" value="<?php echo $pyear; ?>" name="Pyear">
                                                
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Current Backlog</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="number" value="<?php echo $backlog; ?>" name="Backlog">
                                            </div>
                                        </div>
                                        <hr />
                                          <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="email" value="<?php echo $email; ?>" name="Email">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Mobile</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <input type="tel" minlength="10" maxlength="10" value="<?php echo $mobile_1; ?>" name="Mobile" title="10 digit mobile number" required>
                                            </div>
                                        </div>
                                        <hr />
                                          <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <input  type="text" name="Address" value="<?php echo $address1; ?>" required>
                                            </div>
                                        </div>
                                        <hr />
                                       
                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                       <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">10th percentage</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  min="0" max="100" type="number" value="<?php echo $x; ?>" name="10th_percentage">
                                               
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">12th percentage</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  min="0" max="100" type="number" value="<?php echo $xii; ?>" name="12th_percentage">
                                               
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">ug percentage</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  min="0" max="100" type="number" value="<?php echo $ug; ?>" name="UG_percentage">
                                               
                                            </div>
                                        </div>
                                        <hr />
                                      
                                    </div>
                                    <div class="col-md-12 form-group">
                                          <button type="submit" class="btn btn-primary" name="update">Update</button>
                                          
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div> <br>                       
                        
                     <?php } ?>
                    
                
        <div id="dropDownSelect1"></div>

        <!--=================================================-->
        <script>$(document).ready(function () {
            $imgSrc = $('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicture').hasClass('changing')) {
                    $('#profilePicture').click();
                }
                else {
                    // change
                }
            });
            $('#profilePicture').on('change', function () {
                readURL(this);
                $('#btnChangePicture').addClass('changing');
                $('#btnChangePicture').attr('value', 'Confirm');
                $('#btnDiscard').removeClass('d-none');
                // $('#imgProfile').attr('src', '');
            });
            $('#btnDiscard').on('click', function () {
                // if ($('#btnDiscard').hasClass('d-none')) {
                $('#btnChangePicture').removeClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnDiscard').addClass('d-none');
                $('#imgProfile').attr('src', $imgSrc);
                $('#profilePicture').val('');
                // }
            });
        });</script>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <script src="js/main.js"></script>
        <!-- toggle script-->
        <script src="js/superfish.min.js"></script> 
        <script src="js/jquery.magnific-popup.min.js"></script> 
        <script src="js/owl.carousel.min.js"></script>  
    </body>
</html>