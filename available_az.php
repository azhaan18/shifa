<?php
session_start();
ob_start();
?>
<!-- 
For asking user details about whether he is presently suffering from any diseases(if any) .Also three options i.e. last time when someone donated blood,how many times has he donated blood and when was first time he/she donated blood are created dynamically only if user has opted the option of his/her availability over donating blood.
 -->
<!DOCTYPE html>
<html><head>
    	<title>More about you</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css" />
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="available_az.css">
	 <style>
    textarea { vertical-align: top; }
    form  { display: table-row-group;      }
	p     { display: table-row;  }
	label { display: table-cell; }
	input { display: table-cell; }
        .error{
        	color: red;
        }
    </style> 
    <script>
        
    </script>
	
</head>
<body>

<?php
    
$avail_val =  $_SESSION['varname1'];
$id_val = $_SESSION['varname2'];
?>
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
        <a href="#">Home</a>
        <a href="#about_section">About Us</a>
        <a href="#services_section">Services</a>
        <a href="#activity">Recent Activities</a>
        <a href="#info">The Inside Story</a>
        <a href="#contactus_section" class="no-border">Contact Us</a>
       ></div>
      <div class="emergency">
        <img src="https://s23.postimg.org/mhrf1264b/user_telephone.png">
          <p>Emergency Contact No:  1234567890</p>
        </div>
      
      <br>
	<div align="center" class="form">
	<form action="" method="post">
    <p style="color:red" > * required fields</p>
     <p id="available" ></p> 
     <script type="text/javascript">
         
		var avail =  <?php echo json_encode($avail_val); ?>;
      // var avail="Possible";
        
        if(avail=="Available"){ 
            create();
        } 
		function create() {
		    'use strict';

		    var i, target = document.getElementById('available');
		    target.innerHTML = '';

		    // for(i = 0; i < param; i += 1) {
		        target.innerHTML += '<p class="form-control"><label for="last_time">Last time you donated(in months) <span class="error">*</span>&nbsp;:&nbsp; </label><input type="number" placeholder="eg:2" id="last_time" required name="last_time"  min="0"></p><br><br>';
		        target.innerHTML += '<p class="form-control"><label for="frequency">How many times have you donated <span class="error">*</span>&nbsp;:&nbsp; </label><input type="number" placeholder="eg:7" id="frequency" required name="frequency"  min="0"></p><br><br>';
		        target.innerHTML += '<p class="form-control"><label for="first_time">First time you donated(in months) <span class="error">*</span>&nbsp;:&nbsp; </label><input type="number" placeholder="eg:16" id="first_time" required name="first_time"  min="0"></p><br><br>';
		   // }
		}
	</script>
	<!-- <p><label for="name">Full Name : </label><input type="text" value="" id="name" required name="name" class="form-control" oninput="check_name()"></p><br> -->
	<p class="form-control"><label for="disease">Present Diseases(if any) : </label><textarea placeholder="eg......You don't need example for diseases nowadays. Do you ?" id="disease" name="disease" class="form-control" rows="5" cols="20"> </textarea></p><br><br><br><br><br><br>
	<div class="btn-group">
 	<input class="btn btn-primary" type="submit" name="submit" value="Save" >
  
	</div>
    
        
	</form>
    </div>
	</div>
</body>
</html>
<?php 
	require 'dbconnect.php';
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	if (isset($_POST['submit'])) {

		
		$last_time=$post['last_time'];
		$frequency=$post['frequency'];
		$first_time=$post['first_time'];
		$disease=$post['disease'];
		// echo $id_val;
		// echo $last_time;
		// echo $first_time;
		// echo $disease;
		if($last_time&&$frequency&&$first_time)
		{
			$query="INSERT INTO donor_details (id,last_time,frequency,first_time) VALUES ('$id_val','$last_time','$frequency','$first_time')";
			$res=mysql_query($query);
		}
		else{
		$dis_query="INSERT INTO disease (id,disease) VALUES('$id_val','$disease')";
		$res1=mysql_query($dis_query);}
		header("Location:http://localhost/blood/index.php"); 
		// if($res&&$res1)
		// {
		// 	echo"Successfully";
		// }
		// else
		// {
		// 	echo "Unsuccessful";
		// }
	}




?>

