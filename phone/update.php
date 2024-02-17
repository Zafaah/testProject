<?php
include_once "../include/config.php";
if(isset($_POST ['update'])){
   $Name=$_POST['Name'];
   $user_id=$_POST ['user_id'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
   $designation=$_POST['designation'];

   $sql=mysqli_query($conn,"UPDATE phoneta 
   set Name='$Name',address='$address',phone='$phone',designation='$designation' 
   WHeRE `id`='$user_id'");

   if($sql==TRUE){
      
      echo "record update succesfully...";
      header("location: veiw.php");
   }else{
      echo "error" .$sql ."<br>" .$conn->error;
   }

}

if(isset($_GET['id'])){
   $user_id=$_GET['id'];

   $sql="SELECT *FROM `phoneta` WHERE `id`='$user_id' ";

   $result= $conn->query($sql);
   while($row=mysqli_fetch_array($result)){
     $id=$row['id'];
      $Name=$row['Name'];
      $address=$row['address'];
      $phone=$row['phone'];
      $designation=$row['designation'];
     
   }
  
   ?>

<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <title>Cruid_Operations</title>
</head>

<body>
   <?php 
   include_once('../include/nav.php');
   ?>

   <div>
      <div class="container p-5 m-3 " style="width: 20% ;">
         <form action="" method="POST">
            <div class="row">
               <div class=" mb-4">
                  <div class="form-outline">
                     <label class="form-label" for="form3Example1m">Name</label>
                     <input type="text" name="Name" id="form3Example1m" class="form-control form-control-lg"
                        value="<?php echo $Name; ?>" required />
                     <input type="hidden" name="user_id" value="<?php echo $id; ?>" />

                  </div>
               </div>
            </div>
            <div class="col-md-20 mb-4">
               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">address</label>
                  <input type="text" name="address" id="form3Example97" class="form-control form-control-lg"
                     value="<?php echo $address ?>" required />
               </div>


               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">phone</label>
                  <input type="text" name="phone" id="form3Example9" class="form-control form-control-lg"
                     value="<?php echo $phone ?>" required />
               </div>
               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">designation</label>
                  <input type="text" name="designation" id="form3Example9" class="form-control form-control-lg"
                     value="<?php echo $designation ?>" required />
               </div>
               <div class="col-12">
                  <input type="submit" name="update" class="btn btn-success" value="update"></input>
               </div>
            </div>
         </form>



      </div>
   </div>
</body>

</html>
<?php

}else{
   header("location:veiw.php");
}

?>