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
		background: url('images/b3.jpg');
		background-size: 100% 100%;
		min-height: 600px;
	}
.inner{
		min-height: 600px;
		background:rgba(0,0,0,0.2);
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
<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';color: white">SearchOrgan</h1>
<form style="text-align: center;font-family:'monotype corsiva'; font-size:22px;" action="" method="post">
	<div class="container  mt-5">
		<div class="row " >
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
		   
					<label>Search By:</label>
					<input class="form-control" name="name" type="text" id="searchtxt" placeholder="organ name">
					<br><br><br><br>
					
					
				<input style="font-size:15px;" type="submit" value="Searching Organ" name="check" class="btn btn-outline-danger form-control"><br><br>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</form>
<?php
include('connection.php');
if (isset($_POST['check'])) {
	$name=$_POST['name'];
	$sql="SELECT * FROM `donar_registration` WHERE organ='$name';";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($query)) {

?>
<div class="container-fluid">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">donarid</th>
      <th scope="col">name</th>
      <th scope="col">dob</th>
      <th scope="col">gender</th>
      <th scope="col">age</th>
      <th scope="col">contact</th>
      <th scope="col">bloodgroup</th>
      <th scope="col">organ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['donarid']; ?></td>
      <td><?php echo $_SESSION['Username']; ?></td>
      <td><?php echo $_SESSION['dob']; ?></td>
      <td><?php echo $_SESSION['gen']; ?></td>
      <td><?php echo $_SESSION['age']; ?></td>
      <td><?php echo $_SESSION['contact']; ?></td>
      <td><?php echo $_SESSION['bloodgroup']; ?></td>
      <td><?php echo $row['organ']; ?></td>
     
    </tr>
  </tbody>
</table>
<br><br>
<?php }} ?>
</div>
</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>