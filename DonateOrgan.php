<?php
session_start();
if (isset($_SESSION['Username']))
{
	
}
else
{
	echo "<script>alert('Login First Baby');window.location.href='login.php';</script>";
}
?>
<?php
	
   if(isset($_POST['reg'])) 
   { 

    $Username=$_POST['username'];
    $DOB=$_POST['DOB'];
    $Age=$_POST['age'];
    $Gender=$_POST['gen'];
	$Contact=$_POST['contact'];
	$BloodGroup=$_POST['blood'];
	$Organ=$_POST['organ'];
	

	include('connection.php'); //connection from database same for all.
	/*if ($con) {
	  	echo "yes";
	  } 
	  else
	  {
	  	echo "no";
	  }*/
   $sql="INSERT INTO `donar_registration`(`donarid`, `name`, `dob`, `gender`, `age`, `contact`, `bloodgroup`, `organ`) VALUES ('','$Username','$DOB','$Gender','$Age','$Contact','$BloodGroup','$Organ') ";
 // echo "$sql";
 $res=mysqli_query($con,$sql);
 if ($res) 
 {
 	echo "<script>alert('Congratulation, Organ donate registration Successful');</script>";
 }
 else
 {
 	echo "<script>alert('Organ donate registration failed');</script>";

 }
 $_SESSION['Username']=$Username;  //here we just using $username   because $username is cclled in this page otherwise we have to use  this -> $row['User name ']
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
		background: url('images/b4.jpg');
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
<form action="" method="post" enctype="multipart/form-data">
	<div class="container-fluid outer background">
		<div class="row inner">
         
			<div class="col-sm-12 p-5" style="text-align: center;">
				<h1 style=" font-size:50px;font-family:'monotype corsiva';">Donar Register</h1>
			</div>
			   <div class="row ml-2">
  			<img src="photo/<?php echo $_SESSION['profile']?>" height="150px;" width="150px;"
  			 style="border-radius: 10%;border:2px solid red;">
            </div>
			<div class="container"style="min-height:600px;">
				<div class="row">
					<div class="col-sm-6">
						NAME:<br>
						<input name="username" class="border border-dark form-control" type="text"  value="<?php echo $_SESSION['Username']?>">
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
						<label>Select Organ:</label>
						<select name="organ" class="form-control">
						<option>Select Organ Here</option>
						<option>blood</option>
						<option>kidney</option>
						<option>Heart</option>
						<option>Eyes</option>
						<option>hear</option>
						</select>
					</div>
              	
					<div class="col-sm-6">
						<label>.</label>
                     <input required="true" type="submit" name="reg" value="Register" class="border border-dark btn btn-danger form-control">
					</div>

				</div><br><br>
			
				
			</div>
		</div>
	</div>
</form>
</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>