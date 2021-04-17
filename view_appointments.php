<?php
session_start();
if (isset($_SESSION['email']))
{
	
}
else
{
	echo "<script>alert('Login First');window.location.href='admin_login.php';</script>";
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
    background: url('images/team-image1.jpg');
    background-size: 100% 100%;
    min-height: 1000px;
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
  <div class="container-fluid background">
   <?php include('admin_header.php'); //this is header same for all ?>
<!--background image-->
<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';">View All Appointments</h1>
<table class="table mt-5">
  <thead class="table-dark">
    <tr>
      
      <td>Booking Id</td>
      <td>Patient Name</td>
      <td>Type</td>
      <td>Doctor Name</td>
      <td>Date</td>
      <td>Timing</td>
      

    </tr>
  </thead>
  <tbody class="table-dark">
    <!--documentation coding and connection-->
<?php
include('connection.php');

$sql="select bookappointment.*,doctor.* from bookappointment,doctor where bookappointment.categorie=doctor.specialisation order by bookappointment.bookingid asc";
//echo $sql;
$data=mysqli_query($con,$sql);
// echo $row;
$i=1;
   while ($r=mysqli_fetch_array($data)) 
   {?>
    <tr>
    
    
    <td><?php echo $r['bookingid'] ?></td>
   <td><?php echo $r['patientname'] ?></td>
    <td><?php echo $r['categorie'] ?></td>
    <td><?php echo $r['name'] ?></td>
    <td><?php echo $r['date'] ?></td>
    <td><?php echo $r['time'] ?></td>
   
    
  </tr>
  <?php
  $i++;
   }
   ?>
  
  </tbody>
</table>
</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>