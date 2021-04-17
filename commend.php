<?php
$comment=$_POST['f'];
$email=$_POST['email'];
//echo "viaan sjarma ";
//echo $comment."  ".$email;
$con=mysqli_connect("localhost","root","","hospital");
$sql="INSERT INTO `feedback`(`uid`, `comment`, `comment_date`) VALUES ('$email','$comment',curdate());";
//echo $sql;
mysqli_query($con,$sql);
echo "Thanks for your feedback Sir";
?>