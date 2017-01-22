
<!-- 
Form to be filled by user who is in need of blood.
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
	<link href="require_blood.css" rel="stylesheet">
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
    
    <script type="text/javascript">
        $(function(){
    $('#clickme').click(function(){
        $('#uploadme').click();
    });
});
    </script>
    <script>
    $(document).ready(function(){
      var date_input=$('input[name="prescription_date"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
        startDate: truncateDate(new Date()),
        endDate: '+1d'
        //lastDa
      };
      date_input.datepicker(options);
       $('#date').datepicker('setStartDate', truncateDate(new Date()));
       //$('#date').data('daterangepicker').setEndDate(new Date());
       //$('#date').datepicker('setEndDate', new Date());
    });
    function truncateDate(date) {
  return new Date(date.getFullYear(), date.getMonth(), date.getDate()-1);
}
</script>
    
    <script  type="text/javascript" >
      function check_name(){
            var patt = new RegExp("^[A-Za-z. ]+$");
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
    <div align="center"class="form">
<form action="" method="post" onsubmit="return pass_match()">
    <p style="color:red" > All fields below are compulsary.</p>
        
<p><label for="current_city">Current City : </label>
  <select id="current_city" required name="current_city" class="form-control">
      <option selected="selected" disabled="disabled" hidden value="">Select City</option>
       <option value="Dhanbad">Dhanbad</option>
      <option value="Lucknow">Lucknow</option>
     <option value="NewDelhi">New Delhi</option>
      </select>
  </p><br>
    <p><label for="req_blood_type">Required Blood Type :  </label>
        
  <select id="req_blood_type" required name="req_blood_type" class="form-control">
      <option selected="selected" disabled="disabled" hidden value="">Select Blood Group</option>
      <option value="A+">A+</option><option value="A-">A-</option>
      <option value="A1+">A1+</option><option value="A1-">A1-</option>
  <option value="A1B+">A1B+</option><option value="A1B-">A1B-</option>
  <option value="A2+">A2+</option><option value="A2-">A2-</option>
  <option value="A2B+">A2B+</option><option value="A2B-">A2B-</option>
    <option value="AB+">AB+</option><option value="AB-">AB-</option>
    <option value="B+">B+</option><option value="B-"> B- </option>
      <option value="INRA">INRA</option><option value="O+">O+</option><option value="O-">O-</option>
    </select></p><br>

<p><label for="name" style="vertical-align:middle">Doctor's Name : </label><input type="text" value="" id="name" required name="name" class="form-control" oninput="check_name()"></p><br>
<p class="bootstrap-iso" ><label for="prescription_date">Select Prescription Date : </label><input  id="prescription_date" name="prescription_date" placeholder="DD/MM/YYYY" type="text" required class="form-control"></p>
<p><label for="prescription" style="vertical-align:middle"><br>Prescription : </label>
<input type="file" id="uploadme" /><input type="button" id="clickme" value="Upload Prescription" class="form-control" />
</p><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn-group">
  <input class="btn btn-primary" type="submit" name="submit" value="Find">
</div>
</form>
    </div>
	</div>
</body>
</html>
<?php 
$name="";$phone="";
$id_val = $_SESSION['varname2'];
require 'dbconnect.php';
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (isset($_POST['submit'])) {

$current_city = $post['current_city'];
$req_blood_type=$post['req_blood_type'];

//echo $current_city;
$q1= "SELECT id from city_id WHERE city='$current_city'";
$res1=(mysql_query($q1));
$row=mysql_fetch_array($res1);
$id=$row['id'];  
//echo $id;
$q2="SELECT id from user_details WHERE city = '$id'";
 
$res2=mysql_query($q2);
// $row2=mysql_fetch_array($res2);
while($row2 = mysql_fetch_array($res2, MYSQL_ASSOC))
{

$id1= $row2['id'];
//echo $id1;
//echo $id1;
  $q3="SELECT  donor_details.last_time ,user_details.blood_group FROM donor_details INNER JOIN user_details ON donor_details.id = user_details.id WHERE donor_details.id='$id1'";
  $res3=mysql_query($q3) or die(mysql_error());
 // echo $res3;
  // while($row3 = mysql_fetch_array($res3, MYSQL_ASSOC))
  // {
  $row3 = mysql_fetch_array($res3);
     // echo $row3['last_time']."-->";
     // echo $row3['blood_group']."   ";
    if($row3['last_time']>=3&&$row3['blood_group']==$req_blood_type)
    {
        $ls=$row3['last_time'];
         $q4="SELECT * from donor_details WHERE last_time = '$ls'";
         $sql=mysql_query($q4) or die(mysql_error());
        $columns_total = mysql_num_fields($sql); $output="";
        $myfile = fopen('C:\Users\lenovo\Anaconda2\test.csv', "w") or die("Unable to open file!");
         while ($row = mysql_fetch_array($sql,MYSQL_ASSOC)) {
          $bloodcc=$row['frequency']*250;
          $output=$row['id'].','.$row['last_time'].','.$row['frequency'].','.$bloodcc.','.$row['first_time']."\n";
        //  echo $output;
           fwrite($myfile, $output);
    }
    
     

     }
     // }  
}


$pyscript = 'C:\Users\lenovo\Anaconda2\ml.py';//Path for python script containing randomforest algorithm using scikit library  
$python = 'C:\Users\lenovo\Anaconda2\python.exe';
$cmd = "$python $pyscript";
exec("$cmd", $output);
 $file = fopen('C:\Users\lenovo\Anaconda2\xaa.csv',"r");//Opening .csv file genereated through ml.py python script  
?><table class="table1">
   <tr>
   <th>Name</th>
   <th>Phone No.</th>
   </tr>
   <?php
while(! feof($file))
  {
  $ar=(fgetcsv($file));
  $id= (int)$ar[0];
    $q="SELECT * FROM user_details WHERE id = '$id'";
    $r=mysql_query($q);
  //  $row=mysql_fetch_array($r);
   // echo $row['name'];
   
   while($row=mysql_fetch_array($r))
   {
	   $name=$row['name'];
	   $phone=$row['phone_no'];
	   ?><tr>
	   <td><?php echo $name?></td>
	   <td><?php echo $phone?></td>
	   </tr><?php
   }
   
  }?>
   </table><?php
  

fclose($file);


}






?>
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