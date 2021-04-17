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
</style>
</head>
<body>
  <div class="container-fluid " style="min-height: 600px">
<?php include('admin_header.php'); //this is header same for all ?>
<!--background image-->
<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';">View Customer</h1>
<form style="text-align: center;font-family:'monotype corsiva'; font-size:22px;" action="" method="post">
  <div class="container  mt-5">
    <div class="row " >
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
       
          <label>PATIENT'S ID:</label>
          <input class="form-control" name="name" type="text" id="searchtxt" placeholder="Write Patient's Id Here">
          <br><br>
          
        <input style="font-size:15px;" type="submit" value="Search" name="check" class="btn btn-outline-danger form-control"><br><br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</form>

<h1 style="text-align: center;font-size:30px;font-family:'monotype corsiva';">PATIENT'S DETAILS</h1>

<table class="table mt-5">
  <thead class="table-dark">
    <tr>
      <td>Booking Id</td>
        <td>Patient Name</td>
      <td>Address</td>
      <td>Mobile NO.</td>
      <td>Email</td>
        <td>Sex</td>
        <td>Age</td>
    </tr>
  </thead>
  <tbody class="table-dark">
       <!--documentation coding and connection-->
<?php
include('connection.php');

$sql="select `bookappointment`.*,`patient registration`.* from `bookappointment`,`patient registration` where bookappointment.patientname=`patient registration`.`User Name` order by bookappointment.bookingid asc";
//echo $sql;
$data=mysqli_query($con,$sql);
// echo $row;
$i=1;
   while ($r=mysqli_fetch_array($data)) 
   {?>
    <tr>
    
    <td><?php echo $r['bookingid'] ?></td>
    <td><?php echo $r['patientname'] ?></td>
    <td><?php echo $r['Address'] ?></td>
    <td><?php echo $r['Contact'] ?></td>
    <td><?php echo $r['Email'] ?></td>
    <td><?php echo $r['Gender'] ?></td>
    <td><?php echo $r['Age'] ?></td>
    
  </tr>
  <?php
  $i++;
   }
   ?>
  </tbody>
</table><br><br>
<!--this is second table for patient's precautions.-->
<h1 style="text-align: center;font-size:30px;font-family:'monotype corsiva';">PATIENT'S HISTORY</h1>

<table class="table mt-5">
  <thead class="table-dark">
    <tr>
      <td>Booking Id</td>
      <td>Patient Name</td>
      <td>Disease</td>
      <td>Treatment</td>
      <td>Doctor's Note</td>
      <td>Date</td>
    </tr>
  </thead>
  <tbody class="table-dark">
       <!--documentation coding and connection-->
<?php
if (isset($_POST['check']))
{
  $name=$_POST['name'];
include('connection.php');

$sql="SELECT * FROM `patient_history` WHERE bookingid=$name;";
//echo $sql;
$data=mysqli_query($con,$sql);
// echo $row;
$i=1;
   while ($r=mysqli_fetch_array($data)) 
   {?>
    <tr>
    
    <td><?php  echo $r['bookingid'] ?></td> 
    <td><?php echo $r['name'] ?></td>
    <td><?php echo $r['disease'] ?></td>
    <td><?php echo $r['treatment'] ?></td>
    <td><?php echo $r['dnote'] ?></td>
    <td><?php echo $r['date'] ?></td>    
  </tr>
  <?php
  $i++;
   }}
   ?>
  </tbody>
</table>
</div>
<!--thid id footer-->
<?php include('footer.php');  //this is footer same for all?>
</body>
</html>