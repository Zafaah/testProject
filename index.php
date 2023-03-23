<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST PROJECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body>
 <?php
 include_once('include/nav.php');
 include_once('include/config.php')
 ?>
  <div class="container p-5" >
    <?php 
   
    $sql=mysqli_query($conn, "select * from students");
    ?>
    <div class="row">
      <div class="col-6">
        <a href="Addnew.php" class="btn btn-primary">AddNew </a>
      </div>
    
    </div>
    <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full_Name</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
    while($row=mysqli_fetch_array($sql)){
      ?>
    <tr>
      <td><?php echo "$row[0]"?></td>
      <td><?php echo "$row[1]"?></td>
      <td><?php echo "$row[2]"?></td>
      <td><?php echo "$row[3]"?></td>
      <td><?php echo "$row[4]"?></td>
      <td>
      <a href="delete.php?id=<?php echo "row[0]"; ?>" Class="btn btn-danger "><i class="bi bi-person-x"></i>delete</i></a> 
      <a href="edit.php?id=<?php echo "row[0]";?>" class="btn btn-success"><i class="bi bi-pencil"></i>Edit</a> 
      </td>
    </tr>
    <?php
    }
   ?>
  </tbody>
</table>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>