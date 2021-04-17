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
   <?php
   
     if( isset($_POST['check']))
     { $id=$_POST['id'];
       include('connection.php');
       $sql="DELETE FROM `bookappointment` WHERE bookingid=$id";
       $res=mysqli_query($con,$sql);   
       if($res)
       {
        echo "<script>alert('data deleted Succcessful');window.location.href='CancelBooking.php';</script>";
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
		background: url('images/b4.jpg');
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
	<div class="container-fluid background">

<?php include('header.php'); //this is header same for all ?>

<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';">CancelBooking</h1>
<form style="text-align: center;font-family:'monotype corsiva';font-size:22px;"  action="" method="post">
	<div class="container mt-5">
		<div class="row" >
			<div class="col-sm-4"></div>
			<div style="text-align: center;font-family:'monotype corsiva';" class="col-sm-4">
		      
					<label>Booking Id:</label>
					<input class="form-control" type="text" name="id"  readonly value=" <?php echo $_SESSION['bookingid']; ?>" ><br><br>
				<input style="font-size:20px;" type="submit" value="Search Id" name="check" class="btn btn-outline-primary">
			</div>
			<div class="col-sm-4"></div>

		</div>
	</div>
</form>
</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>