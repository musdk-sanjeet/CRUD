<?php include 'header.php'; ?>

<div id="main-content">

    <h2>Update Record</h2>
    <?php 
    $host="localhost";
    $user="root";
    $password="";
    $db_name="CRUD";

    
        // 1st Step Connection Create
    $conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection failed.");


      //Get the URL through GET that is super global variable   
    $stu_id=$_GET['id'];

    // Run SQL Query
    $sql="SELECT * from student where sid={$stu_id}";
    
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");

      if(mysqli_num_rows($result)>0)
      {

        while ($row=mysqli_fetch_assoc($result))
        {

    ?>



    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']?>"/>
      </div>

      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']?>"/>
      </div>

      <div class="form-group">
          <label>Class</label>
          
          <?php 

          $sql1="select * from studentclass";

          $result1=mysqli_query($conn,$sql1) or die("query unsuccessful.");

          if(mysqli_num_rows($result1)>0)
          {

          echo '<select name="sclass">';

            while ($row1=mysqli_fetch_assoc($result1))
            {
              if($row['sclass']==$row1['cid']){
                $select="Selected";
              }else
              {
                $select="";
              }
              echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";

                }          
              echo'</select>';
            }
            ?>
          </div>

      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']?>"/>
      </div>

      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
      }
    }
    ?>

</div>
</div>
</body>
</html>
