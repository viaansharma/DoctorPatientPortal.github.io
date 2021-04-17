<?php
session_start();
if (isset($_SESSION['email']))
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
    $Age=$_POST['age'];
    $Gender=$_POST['gen'];
	$Contact=$_POST['contact'];
    $type=$_POST['type'];
	$Password=$_POST['password'];	
	$Email=$_SESSION['email']; 
	$fname=$_FILES['f1']['name'];
  $ftmp=$_FILES['f1']['tmp_name'];
  $Date=$_POST['DOB'];

	include('connection.php');  //connection from database same for all.
 

 if ($fname=="") 
 {
 	$sql="UPDATE `doctor` SET `name`= '$Username',`gender`='$Gender',`age`= '$Age',`contact`='$Contact',`password`='$Password',`date`='$Date',`specialisation`='$type' WHERE `email`='$Email'";
 }
 else
 {
 $sql="UPDATE `doctor` SET `name`= '$Username',`gender`='$Gender',`age`= '$Age',`contact`='$Contact',`password`='$Password',`date`='$Date',`specialisation`='$type',`profile`='$fname' WHERE `email`='$Email'";
	$ftmp=$_FILES['f1']['tmp_name'];
 move_uploaded_file($ftmp,"photo/$fname");

}
 $res=mysqli_query($con,$sql);
 if ($res>0) {
 echo "<script>alert('Successfully Details Updated');</script>";
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
        background: url('images/.jpg');
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
	<div class="container-fluid ">
		
<?php include('doctor_header.php'); //this is header same for all ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="container-fluid outer background">
    <div class="row inner">
         
      <div class="col-sm-12 p-5" style="text-align: center;">
        <h1 style=" font-size:50px;font-family:'monotype corsiva';">My Details</h1>
      </div>
         <div class="row ml-2">
        <img src="photo/<?php echo $_SESSION['profile']?>" height="150px;" width="150px;"
         style="border-radius: 10%;border:2px solid red;">
            </div>
      <div class="container"style="min-height:600px;">
        <div class="row">
          <div class="col-sm-6">
            NAME:<br>
            <input  class="border border-dark form-control" type="text" name="username" value="<?php echo $_SESSION['name'];?>">
          </div>
          <div class="col-sm-6">
            Date Of Joining:<br>
            <input  name="DOB" class="border border-dark form-control" type="date" value="<?php echo $_SESSION['DOB']?>">
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
              PASSWORD:<br> 
              <input class="border border-dark form-control " type="password" name="password" value="<?php echo $_SESSION['password']?>">
            
          </div>
          
        </div><br>
                 <div class="row">
          

          <div class="col-sm-6">
             UPDATE PROFILE PHOTO:<br>
                     <input  type="file" name="f1" value="upload photo" class="border border-dark btn btn-dark form-control">
          </div>
         <div class="col-sm-6">
             SPECIALISATION:<br>
            <select class="form-control" name="type" required="true">
            <option>Specialisation In</option>
            <option <?php echo ($_SESSION['type']=="Bone") ? "selected" : ""?> value="Bone">Bone</option>
            <option <?php echo ($_SESSION['type']=="Teeth") ? "selected" : ""?> value="Teeth">Teeth</option>
            <option <?php echo ($_SESSION['type']=="Heart") ? "selected" : ""?> value="Heart">Heart</option>
            <option <?php echo ($_SESSION['type']=="Eyes") ? "selected" : ""?> value="Eyes">Eyes</option>
            <option <?php echo ($_SESSION['type']=="Ear") ? "selected" : ""?> value="Ear">Ear</option>
          </select><br>
          </div>

        </div>
             <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6"><br>
                     <input required="true" type="submit" name="updateprofile" value="Update Profile" class="border border-dark btn btn-danger form-control">

        </div>
        <div class="col-sm-3"></div>

        </div>
        
      </div>
    </div>
  </div>
</form>
</div>
<?php include('footer.php'); //this is footer same for all  ?>
</body>
</html>