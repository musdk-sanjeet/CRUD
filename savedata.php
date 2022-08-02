<?php 

 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['class'];
 $stu_phone=$_POST['sphone'];

$host="localhost";
$user="root";
$password="";
$db_name="CRUD";

$conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection Failed.");

$sql="insert into student (sname,saddress,sclass,sphone)  values ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result=mysqli_query($conn,$sql)or die("Query Unsuccessful");

// Go back to the index page after submiting the data
header("Location: http://localhost/crud_html/index.php");

mysql_close($conn);


?>
