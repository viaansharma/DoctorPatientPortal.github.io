<?php
if (isset($_POST['submit'])) {
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

//echo "succcessful yeh cool hahha...";
    $Username=$_POST['username'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['address'];
    $Email=$_POST['email'];
    $Gender=$_POST['gen'];
    $Age=$_POST['age'];
	$Contact=$_POST['contact'];
	$BloodGroup=$_POST['blood'];
	$Password=$_POST['password'];
	$fname=$_FILES['f1']['name'];
	$ftype=$_FILES['f1']['type'];
	$ftmp=$_FILES['f1']['tmp_name'];
	$fsize=$_FILES['f1']['size'];
if ($fsize>50000 || $ftype=="application/pdf") 
	{
		//echo "this type of file is not allowed here.<br>";
	}
    else
    {
move_uploaded_file($ftmp,"photo/$fname");
echo "<img src='photo/$fname'height='100px' width='100px'/><br><br>";

    }
$sql="INSERT INTO `hospital`.`patient registration` (`User name`, `DOB`, `Address`,`Email`, `Gender`,`Age`,`Contact`,`BloodGroup`,`Password`,`Profile`) VALUES ('$Username', '$DOB', '$Address', ' $Email', '  $Gender',' $Age','$Contact','$BloodGroup','$Password','$fname');";
//echo $sql;

if ($con->query($sql)==true) {
	echo "<script>alert('Succcessful Registered');</script>";
}
else{
	echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">
<style>
	.outer{
		background:red;
		min-height: 600px;
		background:url('images/unnamed.jpg');
		background-size:100% 100%;
	}
	.inner{
		min-height: 600px;
		background:rgba(75,217,156,0.2);
		padding: 
	}
</style>
</head>
<body><form method="post" enctype="multipart/form-data">
	<div class="container-fluid outer">
		<div class="row inner">
			<div class="col-sm-12 p-5" style="text-align: center;">
				<h1 style=" font-size:50px;
       font-family:'monotype corsiva';">PATIENT REGISTRATION-FORM</h1>
			</div>
			<div class="container"style="min-height:600px;">
				<div class="row">
					<div class="col-sm-6">
						NAME:<br>
						<input required="true" class="border border-dark form-control" type="text" name="username" placeholder="enter your name">
					</div>
					<div class="col-sm-6">
						Date Of Birth:<br>
						<input required="true" name="DOB" class="border border-dark form-control" type="date">
					</div>

				</div><br>
				<div class="row">
					<div class="col-sm-6">
						ADDRESS:<br>
						<input required="true" name="address" class="border border-dark form-control" type="text" placeholder="enter your address">
					</div>
					<div class="col-sm-6">
						EMAIL-ID:<br>
						<input required="true" name="email" class="border border-dark form-control" type="email" placeholder="enter your email">
					</div>
					
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						
						GENDER:
					  <div class="row">
						<div class="col-sm-6"><input name="gen" class="border border-dark form-control" type="radio" value="MALE">MALE</div>
						<div class="col-sm-6"><input name="gen" class="border border-dark form-control" type="radio" value="FEMALE">FEMALE</div>
					   </div>
                     </div>
					<div class="col-sm-6">
					  AGE:<br>
						<input required="true" name="age" class="border border-dark form-control" type="text" placeholder="enter your age">
					</div>
					
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						CONTACT NO.:<br>
						<input required="true" name="contact" class="border border-dark form-control" type="text" placeholder="enter your contact number">
					</div>
					<div class="col-sm-6">
						BLOOD GROUP:<br>
						<input required="true" name="blood" class="border border-dark form-control" type="text" placeholder="enter your blood group">
					</div>
					
				</div><br>
                 <div class="row">
					<div class="col-sm-6">
					    PASSWORD:<br>	
			        <input required="true" class="border border-dark form-control " type="password" name="password" placeholder="enter your password">
						
					</div>

					<div class="col-sm-6">
						 CHOOSE PHOTO:<br>
                     <input required="true" type="file" name="f1" value="upload photo" class="border border-dark btn btn-dark form-control">
					</div>

				</div><br><br>
				
				<div class="row">

					<div class="col-sm-9">
                     <input required="true" type="submit" name="submit" value="Register" class="border border-dark btn btn-danger form-control">
					</div>
					<div class="col-sm-3">
                    <a style="text-decoration: none;" href="login.php"><input name="back to login" type="button" value="Already Register Back To Login" class="border border-dark btn btn-info form-control"></a>
						
					</div>

				</div>
				
			</div>
		</div>
	</div>
</form>
</body>
</html>