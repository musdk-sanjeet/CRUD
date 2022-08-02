<?php 

$stu_id=$_GET['id'];


$host="localhost";
    $user="root";
    $password="";
    $db_name="CRUD";


        // 1st Step Connection Create
    $conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection failed.");
    
$sql="DELETE from student where sid={$stu_id}";

$result=mysqli_query($conn,$sql) or die("Querry unsuccessful.");


header("Location: http://localhost/crud_html/index.php");


mysqli_close($conn);


?>
