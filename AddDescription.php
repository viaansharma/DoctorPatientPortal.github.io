<?php
session_start();
if (isset($_SESSION['email']))
{
	
}
else
{
	echo "<script>alert('Login First');window.location.href='doctor_login.php';</script>";
}
?>
<?php
if (isset($_POST['sub'])) {
include('connection.php');
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$treatmentfor=$_POST['treatmentfor'];
$treatment=$_POST['treatment'];
$note=$_POST['note'];

$sql1="INSERT INTO `patient_history`(`name`, `disease`, `treatment`, `dnote`, `date`, `bookingid`) VALUES
('$pname','$treatmentfor','$treatment','$note',curdate(),'$pid');";
//echo $sql1;
$data=mysqli_query($con,$sql1);
echo $data;
if ($data>0) {
  echo "<script>alert('Succcessful Added');</script>";
}
else{
  echo "ERROR";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">
<style>
    ul button{
        margin-left:13px; 

    }
    button a{text-decoration: none;

    }
    .background{
        background: url('images/a6.jpg');
        background-size: 100% 100%;
        min-height: 600px;
    }

    
   #header1
   {
       background:#679874;
       padding:2%;
       min-height:40px;
       font-size:22px;
       color:black;
       font-weight:bold;
       text-align:center; 
     font-family:cursive;
   }
  
   #footer
   {
       background:black;
       color:white;
       font-size:20px;
       
       
   }
   #menu ul li a
   {
       color:#679874;
       font-size:18px;
       font-family:'Times new Roman';
   }
   #menu ul li a:hover
   {
    color:#39227d;
    transform:scale(1.1);
    transition: all 1s;
   }

 #text:hover
   {
    color:#39227d;
    transform:scale(1.2);
    transition: all 0.7s;
   }
   img:hover
   {
    transform:scale(1.4);
    transition: all 0.7s;
   }
      .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }
</style>
</head>
<body>
	<div class="container-fluid" style="min-height: 600px">
<?php 
include('doctor_header.php'); //this is header same for all ?>
<!--background image-->
<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';">Add Description</h1>
<form style="text-align: center;font-family:'monotype corsiva'; font-size:22px;" action="" method="post">
  <div class="container  mt-5">
    <div class="row " >
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
       
          <label>PATIENT'S ID:</label>
          <input class="form-control" name="name" id="pt" type="search" placeholder="Write Patient's Id Here">
          <br>
          
        <input style="font-size:15px;" type="submit" value="Search" id="chh" name="check" class="btn btn-outline-danger form-control"><br><br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</form>
<?php

if (isset($_POST['check'])) 
{
  include('connection.php');
    $name=$_POST['name'];
    $sql="SELECT * FROM `bookappointment` WHERE bookingid='$name';";
  $query=mysqli_query($con,$sql);
  $r=mysqli_fetch_array($query);
?>
<form style="text-align: center;font-family:'monotype corsiva'; font-size:22px;" action="" method="post">
 <div class="row " style="min-height: 550px">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">

          <label>Patient Booking ID:</label>
          <input class="form-control" value="<?php echo $r['bookingid'] ?>" name="pid" type="text" placeholder="Write Patient Booking ID Here">
          <br>
          <label>Patient Name:</label>
          <input class="form-control" value="<?php echo $r['patientname'] ?>" name="pname" type="text" id="searchtxt" placeholder="Write Patient Name Here">
          <br>
         <label>Treatment For:</label> 
        <input style="font-size:15px;" type="text" name="treatmentfor" class="form-control" placeholder="Disease"><br>
        <label>Treatment:</label> 
        <input style="font-size:15px;" type="text" name="treatment" class="form-control" placeholder="precaution"><br>
        <label>*Note*</label> 
        <input style="font-size:15px;" type="text" name="note" class="form-control" placeholder="notes of doctor"><br>
        <input style="font-size:15px;" type="submit" value="submit" name="sub" class="btn btn-danger form-control">
        <br><br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </form>
<?php
    }
?>

</div>
<!--thid id footer-->
<?php include('footer.php');  //this is footer same for all?>
</body>
</html>