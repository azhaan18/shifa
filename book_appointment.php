<!-- 
Form to schedule an appointment with doctor.
It will provide you with the concerned doctor available in respected city on that particular date.
 -->
<?php
ob_start();
session_start();
$doctor_name="";
$fees="";
$address="";
if(isset($_SESSION['user_details'])!="")
{
  header("Location : home.php");
}
// $id_val = $_SESSION['varname2'];
require 'dbconnect.php';
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (isset($_POST['submit'])) 
{
$city=$post['city'];
$specialization=$post['specialization'];
$q1= "SELECT id FROM  city_id WHERE city='$city'";
$res1=(mysql_query($q1));
$row=mysql_fetch_array($res1);
$id=$row['id'];  
//echo $id;
$q2="SELECT * FROM doctor_details WHERE city='$id' AND specialization = '$specialization'";
$res2=(mysql_query($q2));
$row2=mysql_fetch_array($res2);
$doctor_name = $row2['name'];
$address =  $row2['address'];
$fees=$row2['fees'];
// echo $doctor_name;
// echo $address;
// echo $fees;


}







// include 'dbconnect.php';

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Let's Book appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css" />
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="require_blood.css">
    <style>
    textarea { vertical-align: top; }
    form  { display: table-row-group;      }
	p     { display: table-row; 
    width:50px;
   }
	
        
        .error{
            border:3px solid red;
        }
        input[type=file] { 
    width: 1px; 
    visibility: hidden;
}
        
        
    </style>
    <script>
    $(document).ready(function(){
      $("#welcomeDiv").hide();
      var date_input=$('input[name="appointment"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
         daysOfWeekDisabled: [0,6],
        todayHighlight: true,
        autoclose: true,
        startDate: truncateDate(new Date())
      };
      date_input.datepicker(options);
      $('#date').datepicker('setStartDate', truncateDate(new Date()));
    });
    function truncateDate(date) {
  return new Date(date.getFullYear(), date.getMonth(), date.getDate()+1);
}
</script>
<script type="text/javascript">
      $("#welcomeDiv").hide();

    </script>
</head>
<body>
  <div class="main-page">
  <div class="header">
      <div class="site-logo float-left">
      <img src="https://s24.postimg.org/3nykwrpp1/blood_icon.png" alt="site-logo">
      </div>
      <div class="site-name float-left">
        <h1>
        <img src="https://s27.postimg.org/ci81wzgmb/shifa.png">
        </h1>
      </div>
    <div class="title">
        <a href="http://localhost/blood/home.php">Home</a>
        <a href="http://localhost/blood/home.php">About Us</a>
        <a href="http://localhost/blood/home.php">Services</a>
        <a href="http://localhost/blood/home.php">Recent Activities</a>
        <a href="http://localhost/blood/home.php">The Inside Story</a>
        <a href="http://localhost/blood/home.php" class="no-border">Contact Us</a>
      </div>
      
      
      <br>
    <div  align="center" class="form">
    <form method="post" action="">
    <p style="color:#36a016" > <b><h2>Let's find you the best help to get you cured....</h2></b></p><br>
 <p  >
 <select id="select"  class="form-control" name="city" required="required">
          <option selected disabled hidden id="city" value="">Select City</option>
    <option value="dhanbad">Dhanbad</option>
     <option value="lucknow">Lucknow</option>
     <option value="NewDelhi">New Delhi</option>
          
        </select></p><br><p ><select id="select"   class="form-control" name="specialization" required>
            <option selected disabled hidden value="">Doctors with their specialization</option>
            <option value="dentist">Dentist</option>
            <option value="orthopedic">Orthopadic</option>
            <option value="gynecologist">Gynecologist</option>
            <option value="ent">Ear-Nose-Throat(Ent)Specialist</option>
          </select>
          </p><br>
          <p class="bootstrap-iso" ><input  id="appointment"  name="appointment" placeholder="Appointment Date" type="text" required class="form-control" required></p><br>
          
        <p  >
 <select id="select"  class="form-control" required>
          <option selected disabled hidden id="city" value="">Slot</option>
    <option value="first-half">9 am - 12 pm</option>
     <option value="lucknow">6 pm - 9 pm</option>
        </select></p><br>
        
    
      <p>
        
      </p>
  <!-- Link to page of rules for donating blood -->
    <!-- <p class="bootstrap-iso" ></p><br> -->
      
  
  <br>
<?php
if (isset($_POST['submit'])) {
  echo "<b>Doctor's Name : ".$doctor_name."</b><br>";
echo "<b>Address : ".$address."</b><br>";
echo "<b>Fee : ".$fees."</b><br>";
?><h5>Your Drop:500<br>Net Fees:400</h5>
<script type="text/javascript">alert("Your appointment has been scheduled...")</script>
<?php

}
    




?>
    
    <div class="btn-group">
  <input class="btn btn-primary" id="submit" type="submit" name="submit" value="Book" >
 
</div>

  </form>

<!--div class="btn-group"> Activate this when values start coming through database one by one on click of next 
  <input class="btn btn-primary" type="button" name="correct" id="correct" value="This is Perfect!">
  <input  class="btn btn-default" type="button" name="next" id="next" value="Next Location">
</div-->
</form>
    </div>
    </div>
</body>
</html>
    <!--
copyright
bootstrap
logo
name
 
a page for terms and conditions
link logo to home

remaining on page - js validation
-->


<!-- Email Check -->

<!--
Need id of logged in user as session variable
-->