<?php
if (isset($_POST['login'])) {
$server="localhost";
$username="root";
$password="";
$db_name="hospital";
$con=mysqli_connect($server,$username,$password,$db_name);

//echo "succcessful yeh cool hahha...";
    $UserID=$_POST['email'];
	$Password=$_POST['password'];
	
$sql="SELECT * FROM `doctor` WHERE `email`='$UserID' and `password`='$Password'";
//echo $sql;

$data=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($data);
//echo $rowcount;
$row=mysqli_fetch_array($data);
if ($rowcount>0) 
{  
	session_start();
	$_SESSION['name']=$row['name'];  //here we just using $username   because $username is cclled in this page otherwise we have to use  this -> $row['User name ']
	$_SESSION['profile']=$row['profile'];
	$_SESSION['password']=$row['password'];
    $_SESSION['gen']=$row['gender'];
	$_SESSION['type']=$row['specialisation'];
    $_SESSION['DOB']=$row['date'];
	$_SESSION['age']=$row['age'];
	$_SESSION['contact']=$row['contact'];
	$_SESSION['email']=$row['email'];
  



  
  	echo "<script>alert('Succcessful Login');window.location.href='doctor_dashboard.php';</script>";
}
else
{
  echo "<script>alert('failed Login');window.location.href='doctor_login.php';</script>";
}
}
?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">
<style>
	
	      body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}
.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #191919;
    ;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}
.box:hover{
    
    transform:scale(1.1);
    transition: all 1s;
}
.box input[type="email"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="email"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}

</style>
</head>
<body>
<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="" method="post" enctype="multipart/form-data">
                   <i class="fa fa-user-md"style="font-size: 50px;color: white"></i><h1>Doctor Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p>
                     <input type="email" name="email" placeholder="Email ID "> 
                    <input type="password" name="password" placeholder="Password">
                      <input type="submit" name="login" value="Login" >
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/accounts/login/" class="icoTwitter" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.google.com/account/about/" class="icoGoogle" title="Google "><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
</body>
</html>