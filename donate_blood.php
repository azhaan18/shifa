<!-- 
Form for providing the blood donor with available hospitals in his/her area on the day he/she is convinient to donate blood on.  
 -->
<?php
ob_start();
session_start();
if(isset($_SESSION['user_details'])!="")
{
  header("Location : home.php");
}

// include 'dbconnect.php';

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Let's find you a donor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css" />
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	<link href="donate_blood.css" rel="stylesheet">
    <style>
    textarea { vertical-align: top; }
    form  { display: table-row-group;      }
	p     { display: table-row;  }
	label { display: table-cell; }
	input { display: table-cell; }
        
        .error{
            border:3px solid red;
        }
        input[type=file] { 
    width: 1px; 
    visibility: hidden;
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
      var date_input=$('input[name="blood_donation_date"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
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
    <div align="center"  class="form">
<form action="" method="post" onsubmit="return pass_match()">
    <p style="color:red" > All fields below are compulsary.</p>
        
<p><label for="current_city">Current City : </label>
  <select id="current_city" required name="current_city" class="form-control">
      <option selected="selected" disabled="disabled" hidden value="">Select City</option>
      <option value="Dhanbad">Dhanbad</option>
      <option value="Lucknow">Lucknow</option>
      <option value="NewDelhi">New Delhi</option>
      </select>
  </p><br><br>
  <!-- Link to page of rules for donating blood -->
    <p class="bootstrap-iso" ><label for="blood_donation_date">Select a Date for donating : </label><input  id="blood_donation_date" name="blood_donation_date" placeholder="DD/MM/YYYY" type="text" required class="form-control"></p><br>
       
  
  </p><br>


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn-group">
  <input class="btn btn-primary" type="submit" name="submit" value="Donate">
</div>
</form>
    </div>
	</div>
</body>
</html>
<?php 
  require 'dbconnect.php';
    $id_val = $_SESSION['varname2'];
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  if (isset($_POST['submit'])) {
    $current_city=$post['current_city'];
    $q1= "SELECT id from city_id WHERE city='$current_city'";
    $res1=(mysql_query($q1));
    $row=mysql_fetch_array($res1);
	$output1="";$output2="";
	$j=0;
    $id=$row['id'];?>
	<table class="table">
	<tr>
	<th>Hospital Name</th>
	<th>Hospital Address</th>
	</tr>
	<?php
    $q2="SELECT * FROM hospital_details WHERE id = '$id'";
    $res2=mysql_query($q2);
    while($row2 = mysql_fetch_array($res2, MYSQL_ASSOC))
    {
		?>
		<tr>
		<td><?php echo $row2['hospital_name']?></td>
		<td><?php echo $row2['hospital_address']?></td>
		</tr><?php
    }
	?></table><?php
	}

  ?>
