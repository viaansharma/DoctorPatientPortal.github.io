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
        background: url('images/a5.jpg');
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
	<div class="container-fluid background">
<?php include('header.php'); //this is header same for all ?>
<!--background image-->
<h1 style="text-align: center;font-size:50px;font-family:'monotype corsiva';color: white">Dashboard</h1>
</div>

<!--thid id footer-->
<?php include('footer.php');  //this is footer same for all?>
</body>
</html>