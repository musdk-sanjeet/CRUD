<?php include 'header.php'; ?>

<?php 
if(isset($_POST['deletebtn']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db_name="CRUD";


        // 1st Step Connection Create
    $conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection failed.");
    
$stu_id=$_POST['sid'];


$sql="DELETE from student where sid={$stu_id}";

$result=mysqli_query($conn,$sql) or die("Querry unsuccessful.");


header("Location: http://localhost/crud_html/index.php");


mysqli_close($conn);



}


?>




<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>

            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>


</div>
</div>
</body>
</html>
