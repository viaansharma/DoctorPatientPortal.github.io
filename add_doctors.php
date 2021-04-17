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
    $type=$_POST['type'];
  $Contact=$_POST['contact'];
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
$sql="INSERT INTO `hospital`.`doctor`(`doctorId`, `email`, `password`, `date`, `name`, `gender`, `contact`, `profile`, `age`,`specialisation`) VALUES ('', '$Email', '$Password', ' $DOB', ' $Username',' $Gender','$Contact','$ftype','$Age','$type');";
//echo $sql;

if ($con->query($sql)==true) {
  echo "<script>alert(' Doctor Added Succcessful');</script>";
}
else{
  echo "ERROR: $sql <br> $con->error";
}
$con->close();
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
	<div class="container-fluid bg-info">
<?php include('admin_header.php'); //this is header same for all ?>
<form method="post" enctype="multipart/form-data">
  <div class="container-fluid outer">
    <div class="row inner">
      <div class="col-sm-12 p-5" style="text-align: center;">
        <h1 style=" font-size:50px;
       font-family:'monotype corsiva';">ADD DOCTORS</h1>
      </div>
      <div class="container"style="min-height:600px;">
        <div class="row">
          <div class="col-sm-6">
            NAME:<br>
            <input required="true" class="border border-dark form-control" type="text" name="username" placeholder="enter your name">
          </div>
          <div class="col-sm-6">
            Date:<br>
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
              PASSWORD:<br> 
              <input required="true" class="border border-dark form-control " type="password" name="password" placeholder="enter your password">
            
          </div>
          
        </div><br>
                 <div class="row">
         

          <div class="col-sm-6">
             CHOOSE PHOTO:<br>
                     <input required="true" type="file" name="f1" value="upload photo" class="border border-dark btn btn-dark form-control">
          </div>
          <div class="col-sm-6">
             SPECIALISATION:<br>
            <select class="form-control" name="type" required="true" >
            <option>Specialisation In</option>
            <option>Bone</option>
            <option>Teeth</option>
            <option>Heart</option>
            <option>Eyes</option>
            <option>Ear</option>
          </select><br>
          </div>
         </div>
          <div class="row">
          <div class="col-sm-3"></div>
         <div class="col-sm-6"><br>
                     <input required="true" type="submit" name="submit" value="Add Doctor" class="border border-dark btn btn-danger form-control">
          </div>
          <div class="col-sm-3"></div>
        </div><br><br>
      </div>
    </div>
  </div>
</form>
</div>

<?php include('footer.php');  //this is footer same for all?>
</body>
</html>