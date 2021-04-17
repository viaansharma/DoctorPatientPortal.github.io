<?php
session_start();
if (isset($_SESSION['Username']))
{
	
}
else
{
	echo "<script>alert('Login First');window.location.href='login.php';</script>";
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
		background: url('images/a1.jpg');
		background-size: 100% 100%;
		min-height: 600px;
	}
.inner{
		min-height: 600px;
		background:rgba(75,217,156,0.2);
		padding: 
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
    
<?php include('header.php'); //this is header same for all ?>

<!--background image-->
<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';">BookAppointment</h1>
<!--php coding of appointment booking is start from here-->
<?php
if (isset($_POST['booking']))
{
$id=$_POST['id'];
$type=$_POST['type'];
$date=$_POST['date'];
$time=$_POST['time'];
$ptname=$_POST['ptname'];
	include('connection.php');  //connection from database same for all.
    
	$sql="INSERT INTO `bookappointment`(`bookingid`, `categorie`, `date`, `time`,`patientname`) VALUES 
	('$id','$type','$date','$time','$ptname');";
	//echo "$sql";
	$data=mysqli_query($con,$sql);
	if ($data) 
	{
		echo "<script>alert('Appointment Book Successful');</script>";

	}
   else 
	{
		echo "<script>alert('Appointment Book failed');</script>";

	}
$_SESSION['bookingid']=$id;
$_SESSION['categories']=$type;
$_SESSION['date']=$date;
$_SESSION['time']=$time;
}
?>
<!--this is appointment booking form-->
<form  action="" method="post" style="text-align: center;font-family:'monotype corsiva';font-size:18px;" >
	<div class="container background mt-5">
		<div class="row inner" >
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
<u style="text-align: center;font-size:30px;font-family:'monotype corsiva';"> New Booking</u><br><br>
		      
					<label>Appointment Id:</label>
					<input class="form-control" name="id" readonly value="<?php echo(rand(1,1000))?>"><br>
					<label>Patient Name:</label>
					<input class="form-control" type="text" name="ptname" required="true" value="<?php
					echo $_SESSION['Username'] ?>"><br>
					<label>Categoires:</label>
					<select class="form-control" name="type" required="true">
						<option>type</option>
						<option>Bone</option>
						<option>Teeth</option>
						<option>Heart</option>
						<option>Eyes</option>
						<option>Ear</option>
					</select><br>
					<label>Date:</label>
					<input class="form-control" type="date" name="date" required="true"><br>
					<label>Time:</label>
						<select class="form-control"name="time" required="true">
						<?php 
                         $i=1.0;
                       while ($i<=24) 
                         { if ($i<=12) 
                         	{?>
                         	<option><?php echo $i; echo " "; echo "AM"; ?></option>
                           <?php
                            }
                            else
                            {?>
                             <option><?php echo $i;echo " "; echo "PM"; ?></option>
                           <?php 
                            }
                       $i++;  	
                         }

						?>
					</select><br>
				
					
				<input style="font-size:15px;" disabled type="submit" id="check" onclick="identify()" name="check" class="btn btn-danger"><br><br>
				<?php 
                          if (isset($_POST['check'])) 
                          { 
                          
                            echo "viaan";
                          }
					?>
				<input style="font-size:20px;" type="submit" value="Book Appointment" name="booking" class="btn btn-outline-primary"><br><br>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</form>
</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>