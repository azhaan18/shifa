<!-- 
Signup form for user with both client side(using javascript/jquery) and server side(using php) validation applied .
 -->
<?php 
ob_start();
session_start();
if(isset($_SESSION['user_details'])!="")
{
  header("Location : home.php");
}
$name=$blood_group=$gender=$dob=$phone_no=$email="";
// include 'dbconnect.php';

 ?>
 <?php 
 require 'dbconnect.php';
$error=false;

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if($post['submit']){
  $name = $post['name'];
  $blood_group = $post['blood_group'];
  $gender=$post['gender'];
  $dob=$post['dob'];
  $date=strtr($dob,'/','-');
  $dob= date('Y/m/d',strtotime($date));
 // echo $dob;
  $phone_no=$post['phone_no'];
  $email=$post['email'];
  $state=$post['state'];
  $city=$post['city'];
  $permanent_address=$post['permanent_address'];
  $pass=$post['password'];
  $availability=$post['availability'];
  //echo $availability;
  $avail;
  if($availability=='Available')
  {
    $avail=1;
  }
  else {
    $avail=0;
  }
  if(empty($name))
  {
      $error=true;
      $nameErr="Please enter your name";
  }
  else if ((!preg_match("/^[a-zA-Z ]*$/",$name))) {
    $nameErr = "Only letters and white space allowed";
  }
  if (empty($post["email"]) && (!filter_var($email, FILTER_VALIDATE_EMAIL))){
    $emailErr = " Invalid email format";
  }
  else
  {
   $query="SELECT email FROM user_details where email='$email'";
   $result= mysql_query($query);
   // echo "jkjk";
   
   $count=mysql_num_rows($result);
  // echo $count;
   if($count!=0)
   {
     $error=true;
     $emailErr="Provided Email is already in use";
     // echo $emailErr;
    ?>
    <script type="text/javascript">alert('<?php echo $emailErr; ?>')</script>
    <?php 
   }
   }
  if (!empty($post["phone_no"]) && (!preg_match("/^[0-9]*$/",$phone_no)) && !(strlen($post["phone_no"])==10)){
    $phoneErr = " *Invalid phone number";
  }

  if(empty($pass))
  {
    $error=true;
    $passError="Please enter password";
  }
  else if(strlen($pass)<6)
  {
    $error=true;
    $passError="Password must have at least 6 characters";
     ?>
    <script type="text/javascript">alert('<?php echo $passError; ?>')</script>
    <?php 
  }
$password=$pass;
 // $password = hash('sha256',$pass);
   if(!$error)
 {
 // echo $avail;
  $query= "INSERT INTO user_details (name, blood_group, gender, dob, phone_no, email, state, city, permanent_address, password, availability) VALUES('$name', '$blood_group', '$gender', '$dob', '$phone_no', '$email', '$state', '$city', '$permanent_address', '$password', '$avail')";

  $res = mysql_query($query);
  if ($res) {
        $errTyp = "success";
        $errMSG = "Successfully registered, you may login now";
        $_SESSION['varname1'] = $post['availability'];
        $row =mysql_fetch_array(mysql_query("SELECT id FROM user_details WHERE email = '$email'"));
        $_SESSION['varname2']= $row['id'];

        unset($name);
        unset($blood_group);
        unset($gender);
        unset($dob);
        unset($phone_no);
        unset($state);
        unset($city);
        unset($permanent_address);
        unset($pass);
        unset($availability);
         header("Location:available_az.php");

      } else {
        $errTyp = "danger";
        $errMSG = "Something went wrong, try again later..."; 
       // echo $errMSG;
      }
      } 
  // $database->bind(':name', $name);
  // $database->bind(':blood_group', $blood_group);
  // $database->bind(':gender', $gender);
  // $database->bind(':dob', $dob);
  // $database->bind(':phone_no', $phone_no);
  // $database->bind(':email', $email);
  // $database->bind(':state', $state);
  // $database->bind(':city', $city);
  // $database->bind(':permanent_address', $permanent_address);
  // $database->bind(':password', $password);
  // $database->bind(':availability', $availability);
  // $database->execute();
  // if($database->lastInsertId()){
  //   echo '<p>Post Added!</p>';
  // }
}
 // }

// $database->query('SELECT * FROM user_details');
// $rows = $database->resultset();


?>

<!-- <h1>Output</h1>
<div>
<?php

 //foreach($rows as $row) : ?>
  <div>
    <?php //echo "Id: ".$row['id']; ?><br><br>
    <?php //echo "Name: ".$row['name']; ?><br><br>
    <?php //echo "Blood_group: ".$row['blood_group']; ?><br><br>
    <?php //echo "Gender: ".$row['gender']; ?><br><br>
    <?php //echo "Date of Birth: ".$row['dob']; ?><br><br>
    <?php //echo "Phone Number: ".$row['phone_no']; ?><br><br>
    <?php //echo "Email: ".$row['email']; ?><br><br>
    <?php //echo "State: ".$row['state']; ?><br><br>
    <?php //echo "City: ".$row['city']; ?><br><br>
    <?php //echo "Permanent Address: ".$row['permanent_address']; ?><br><br>
    <?php //echo "Password: ".$row['password']; ?><br><br>
    <?php //echo "Availability: ".$row['availability']; ?><br><br>
  </div>
//<?php //endforeach; ?>
</div> -->
<!-- Email Check -->
<!DOCTYPE html>
<html>
<head>
<title>Register ...One Account for everything</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css" />
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	<link href="az.css" rel="stylesheet">
    <style>
    textarea { vertical-align: top; }
    form  { display: table-row-group;      }
	p     { display: table-row;  }
	label { display: table-cell; }
	input { display: table-cell; }
        
        .error{
            border:3px solid red;
        }
        select{
            width: 170px;
   padding: 5px;
   font-size: 15px;
   line-height: 1;
            overflow: auto;
   border: 1;
   border-radius: 1;
   height: 28px;
            
    overflow:scroll;
   font-family:sans-serif;
   color:black;
            align-items: center;
        }
    </style>
    <script>
    $(document).ready(function(){
      var date_input=$('input[name="dob"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
    <script type="text/javascript">
        function check_name(){
            var patt = new RegExp("^[A-Za-z ]+$");
            var y = document.getElementById("name");
            if(!(patt.test(y.value))){
                y.style.border="2px solid red";
				console.log("working");
            }
			else{
                y.style.border="1px solid black";
				console.log("wrong");
			}
        }
        function check_email(){
            var patt = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            //var patt = new RegExp("^[A-Za-z ]+$");
            var y = document.getElementById("email");
            if(!(patt.test(y.value))){
                y.style.border="2px solid red";
				console.log("working");
            }
			else{
                y.style.border="1px solid black";
				console.log("wrong");
			}
        }
        function pass_match() {
            var pass1 = document.getElementById("password").value;
            var pass2 = document.getElementById("c_password").value;
            var ok = true;
            if (pass1 != pass2) {
                alert("Passwords don't match.Please try again!");
                document.getElementById("password").style.borderColor = "#E34234";
                document.getElementById("c_password").style.borderColor = "#E34234";
                ok = false;
            }
            return ok;
        }
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
      <div class="emergency">
        <img src="https://s23.postimg.org/mhrf1264b/user_telephone.png">
          <p>Emergency Contact No:  1234567890</p>
        </div>
      
      <br>
    <div align="center" class="form">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="return pass_match()">
    <p style="color: red;" > All fields are compulsary.</p>
        
<p id="name" ><label for="name">Full Name : </label><input type="text" value="<?php echo $name;?>" id="name1" required name="name" class="form-control" oninput="check_name()"></p><br>
<p><label for="blood_groups">Blood Group : </label>
  <select id="blood_groups" required name="blood_group" class="form-control"  value="<?php echo $blood_group;?>">
      <option selected="selected" disabled="disabled" hidden value="">Select Blood Group</option>
      <option value="A+">A+</option><option value="A-">A-</option>
      <option value="A1+">A1+</option><option value="A1-">A1-</option>
	<option value="A1B+">A1B+</option><option value="A1B-">A1B-</option>
	<option value="A2+">A2+</option><option value="A2-">A2-</option>
	<option value="A2B+">A2B+</option><option value="A2B-">A2B-</option>
    <option value="AB+">AB+</option><option value="AB-">AB-</option>
    <option value="B+">B+</option><option value="B-"> B- </option>
      <option value="INRA">INRA</option><option value="O+">O+</option><option value="O-">O-</option></select>
  </p><br>
    <p><label for="gender">Gender :  </label>
        
  <select id="gender" required name="gender" class="form-control" value="<?php echo $gender;?>">
      <option selected="selected" disabled="disabled" hidden value="">Select Gender</option>
      <option value="Male">Male</option><option value="Female">Female</option>
      <option value="Others">Others</option>
    </select></p><br>

    <p class="bootstrap-iso" ><label for="gender">Date Of Birth  : </label><input  id="date oninput="check_email()"" name="dob" placeholder="DD/MM/YYYY" type="text"/ required class="form-control" value="<?php echo $dob;?>"></p><br>
        
    <p><label for="mobile">Mobile No. :  </label><input type="text" name="phone_no" class="form-control" maxlength="10" id="mobile"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[789][0-9]{9}" required value="<?php echo $phone_no;?>"></p><br>
    <p><label for="email">Email : </label><input type="email" name="email" placeholder="eg:algoholics@bloodline.com" id="email" required class="form-control" oninput="check_email()" value="<?php echo $email;?>"></p><br>
     
        <p><label for="country">Select Country :  </label> <select name="country" class="form-control countries" id="countryId" required="required" >
      <option selected="selected" disabled="disabled" hidden value="">Select Country</option>
      </select></p><br>
         <p><label for="state">Select State :  </label> <select name="state" class="form-control states" id="stateId" required="required" >
    <option selected="selected" disabled="disabled" hidden value="">Select State</option>
    </select></p><br>
        <p><label for="city">Select City :  </label> <select name="city" class="form-control cities" id="cityId" required="required" >
        <option selected="selected" disabled="disabled" hidden value="">Select City</option>
        </select></p><br>
    <p><label for="address" style="vertical-align:middle"> Permanent Address : </label><textarea name="permanent_address" id="address"rows="4"cols="22"required class="form-control" ></textarea></p><br>
    <p><label for="password">Password : </label><input type="password" name="password" id=password required class="form-control"></p><br>
    <p><label for="c_password">Confirm Password : </label><input type="password" name="c_password" id="c_password" required class="form-control"></p><br>
    <p><label for="available">Your Availibility to donate blood :   </label>
  <select id="available" name="availability" class="form-control" required="required">
      <option selected="selected" disabled="disabled" hidden value="">Select One</option>
      <option value="Available">Available</option><option value="Not available">Not available</option></select></p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" name="agree" value="Agree" id="" required><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I agree to <a href="/terms.html">Terms & Conditions</strong></a> <br><br><!--
Another html page for terms and conditions
-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn-group">
  <input class="btn btn-primary" type="submit" name="submit">
  <input type="reset" class="btn btn-default" name="reset">
</div>
    
        
</form>
    </div>
	</div>
    <script src="js/location.js"></script>   
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

