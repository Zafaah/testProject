<?php
include_once ('../include/config.php');

if(isset($_POST['saveSubmit'])){
   $Name=$_POST['Name'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
   $designation=$_POST['designation'];

   $sql=mysqli_query($conn,"INSERT INTO phoneta value(null,'$Name','$address','$phone','$designation')");

   if($sql==true){
      echo "new record is created successfull...";
      header("location: veiw.php");
   }
   else{
      echo "error occur" .$sql ,"<br>" .$conn->error;
   }
   $conn->close();

}





?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>
   <?php 
   include_once('../include/nav.php');
   ?>
   <div>
      <div class="container p-5 m-3 " style="width: 20% ;">
         <h2>Add user Form</h2>
         <form action="" method="POST">

            <div class="row">
               <div class=" mb-4">
                  <div class="form-outline">
                     <label class="form-label" for="form3Example1m">Name</label>
                     <input type="text" name="Name" id="form3Example1m" class="form-control form-control-lg" required />

                  </div>
               </div>

            </div>
            <div class="col-md-20 mb-4">
               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Address</label>
                  <input type="address" name="address" id="form3Example97" class="form-control form-control-lg"
                     required />

               </div>



               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">phone</label>
                  <input type="text" name="phone" id="form3Example9" class="form-control form-control-lg" />

               </div>
               <div class="row">
                  <div class=" mb-4">
                     <div class="form-outline">
                        <label class="form-label" for="form3Example1m">designation</label>
                        <input type="text" name="designation" id="form3Example1m" class="form-control form-control-lg"
                           required />

                     </div>
                  </div>

               </div>
               <div class="col-12">
                  <input type="submit" name="saveSubmit" class="btn btn-success" value="save data"></input>
               </div>
            </div>
         </form>
      </div>

   </div>
</body>

</html>