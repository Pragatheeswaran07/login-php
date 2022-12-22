<style>
h1{
text-align:center;
background-color:green;
font-weight:bold;

}


</style>


<?php
$con=mysqli_connect("localhost","root","","naveen") or die("connection failed");

$uname=$_POST['uname'];
$upass=$_POST['upass'];
$sql="select * from login where name='$uname' and password='$upass'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row>0){
    
    $hide="Valid user";
    echo "<h1>Valid user</h1>";

}
else{
    
    $hide="invalid user";
    echo "<h1>invalid</h1>";

}


?>

