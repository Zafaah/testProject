<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add New</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
      <?php
      include_once('include/nav.php');
      include_once('include/config.php')
      ?>
      <div class="container p-5" >
      <form action="" method="post">
      <div class="row">
            <div class="col-6">
            <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Full_Name</label>
                  <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="Hafsa A/kadir Mohamed">
            </div>
            <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Address</label>
                  <input type="text" class="form-control" name='adress' id="exampleFormControlInput1" placeholder="Bondhere">
            </div>
            </div>
            <div class="col-6">
            <div class="mb-4">Gender
                  <select class="form-select" name="gender" aria-label="Default select example">
                        <option selected> select Gender</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                  </select>
            </div>
            <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
                  <input class="form-control" name="phone" id="exampleFormControlTextarea1"placeholder="7654865824" ></input>
            </div>
      </div>
      <div class="col-12">
            <input type="submit" name="saveData" class="btn btn-success" value="save data"></input>
      </div>
      </div>
      </form>
      </div>
      <?php
      
      if(isset($_POST['saveData'])){
      //supper Global Variables
      $fname=$_POST['fname'];
      $adress=$_POST['adress'];
      $gender=$_POST['gender'];
      $phone=$_POST['phone'];
      $sql=mysqli_query($conn,"insert into students values(null,'$fname','$adress','$gender','$phone')");
      header('location: index.php')
}

      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>