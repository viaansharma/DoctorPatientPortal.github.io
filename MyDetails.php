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
	
   if (isset($_POST['updateprofile'])) 
   { 

    $Username=$_POST['username'];
    $DOB=$_POST['DOB'];
    $Age=$_POST['age'];
    $Gender=$_POST['gen'];
	$Contact=$_POST['contact'];
	$BloodGroup=$_POST['blood'];
	$Password=$_POST['password'];	
	$Email=$_SESSION['email']; 
	$fname=$_FILES['f1']['name'];

	//include('connection.php');  //connection from database same for all.
    $con=mysqli_connect("localhost","root","","hospital");

 if ($fname=="") 
 {
 	$sql="UPDATE `patient registration` SET `User name`= '$Username',`DOB`='$DOB',`Gender`='$Gender',`Age`= '$Age',`Contact`='$Contact',`BloodGroup`='$BloodGroup',`Password`='$Password' WHERE `Email`='$Email'";
 }
 else
 {
 	$sql="UPDATE `patient registration` SET `User name`= '$Username',`DOB`='$DOB',`Gender`= '$Gender',`Age`= '$Age',`Contact`='$Contact',`BloodGroup`='$BloodGroup',`Password`='$Password',`Profile`='$fname' WHERE `Email`='$Email'";
	$ftmp=$_FILES['f1']['tmp_name'];
 move_uploaded_file($ftmp,"photo/$fname");

}
 $res=mysqli_query($con,$sql);
 $_SESSION['Username']=$Username;  //here we just using $username   because $username is cclled in this page otherwise we have to use  this -> $row['User name ']
	$_SESSION['profile']=$fname;
	$_SESSION['password']=$Password;
	$_SESSION['gen']=$Gender;
	$_SESSION['age']=$Age;
	$_SESSION['contact']=$Contact;
	$_SESSION['bloodgroup']=$BloodGroup;
	$_SESSION['dob']=$DOB;
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
		background: url('images/b1.jpg');
		background-size: 100% 100%;
		min-height: 600px;
	}
.inner{
		min-height: 600px;
		background:rgba(60,203,244,0.2);
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

<!--this is a my profile details-->
<form action="" method="post" enctype="multipart/form-data">
	<div class="container-fluid outer background">
		<div class="row inner">
         
			<div class="col-sm-12 p-5" style="text-align: center;">
				<h1 style=" font-size:50px;font-family:'monotype corsiva';">MY PROFILE</h1>
			</div>
			   <div class="row ml-2">
  			<img src="photo/<?php echo $_SESSION['profile']?>" height="150px;" width="150px;"
  			 style="border-radius: 10%;border:2px solid red;">
            </div>
			<div class="container"style="min-height:600px;">
				<div class="row">
					<div class="col-sm-6">
						NAME:<br>
						<input  class="border border-dark form-control" type="text" name="username" value="<?php echo $_SESSION['Username']?>">
					</div>
					<div class="col-sm-6">
						Date Of Birth:<br>
						<input  name="DOB" class="border border-dark form-control" type="date" value="<?php echo $_SESSION['dob']?>">
					</div>

				</div><br>
				<div class="row">
					<div class="col-sm-6">
						
						GENDER:
					  <div class="row">
						<div class="col-sm-6"><input name="gen" <?php if($_SESSION['gen']=='MALE'){echo "checked";} ?> class="border border-dark form-control" type="radio" value="MALE">Male</div>
						<div class="col-sm-6"><input name="gen" <?php if($_SESSION['gen']=='FEMALE'){echo "checked";} ?> class="border border-dark form-control" type="radio" value="FEMALE">Female</div>
					   </div>
                     </div>
					<div class="col-sm-6">
					  AGE:<br>
						<input  name="age" class="border border-dark form-control" type="text" value="<?php echo $_SESSION['age']?>">
					</div>
					
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						CONTACT NO.:<br>
						<input name="contact" class="border border-dark form-control" type="text" value="<?php echo $_SESSION['contact']?>">
					</div>
					<div class="col-sm-6">
						BLOOD GROUP:<br>
						<input  name="blood" class="border border-dark form-control" type="text" value="<?php echo $_SESSION['bloodgroup']?>">
					</div>
					
				</div><br>
                 <div class="row">
					<div class="col-sm-6">
					    PASSWORD:<br>	
			        <input class="border border-dark form-control " type="password" name="password" value="<?php echo $_SESSION['password']?>">
						
					</div>

					<div class="col-sm-6">
						 UPDATE PROFILE PHOTO:<br>
                     <input  type="file" name="f1" value="upload photo" class="border border-dark btn btn-dark form-control">
					</div>

				</div><br><br>
				
				<div class="row">
                    <div class="col-sm-3"></div>
					<div class="col-sm-6">
                     <input required="true" type="submit" name="updateprofile" value="Update Profile" class="border border-dark btn btn-danger form-control">
					</div>
					 <div class="col-sm-3"></div>	
					</div>

				</div>
				
			</div>
		</div>
	</div>
</form>
<div class="container background">
	<div class="row">
		<div class="col-sm-12">
			<h2 style=" font-size:50px;font-family:'monotype corsiva';text-align: center;">TREATMENT HISTORY</h2>
		</div>
	</div>
	<div class="row inner">
		<div class="col-sm-12">
			patient history
		</div>
	</div>
</div>

</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>