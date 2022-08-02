<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php 

    $host="localhost";
    $user="root";
    $password="";
    $db_name="CRUD";


        // 1st Step Connection Create
    $conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection failed.");


        // Run SQL Query
    $sql="SELECT * FROM student JOIN studentclass WHERE student.sclass=studentclass.cid";
    
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");

    if(mysqli_num_rows($result)>0)
    {



    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while ($row=mysqli_fetch_assoc($result))
                {
                    
            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'>Delete</a>
                </td>
            </tr>

        <?php } ?>
               
        </tbody>
    </table>

<?php }else{
    echo "<h3>No Records Founds</h3>";
}

// 3rd Steps Close the connection 

mysqli_close($conn);

 ?>
</div>
</div>
</body>
</html>
