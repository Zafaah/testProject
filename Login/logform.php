<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../style/style.css">

   <title>Login</title>
</head>

<body>
   <section class="vh-100 bg-image"
      style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
         <div class="container h-90">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="card" style="border-radius: 15px;">
                     <div class="card-body p-5">


                        <form method="post" action="login.php">
                           <h2 class="text-uppercase text-center mb-5">Login</h2>
                           <?php 
                           if(isset($_GET['error'])){?>
                           <p class="error" style="color: red;"> <?php echo $_GET['error'] ?> </p>
                           <?php
                           }
                           ?>
                           <div class="form-outline mb-2">
                              <label class="form-label" for="form3Example1cg">userName</label>
                              <input type="text" name="username" id="form3Example1cg" required
                                 class="form-control form-control-lg" />

                           </div>



                           <div class="form-outline mb-2">
                              <label class="form-label" for="form3Example4cg">Password</label>
                              <input type="password" name="password" id="form3Example4cg" required
                                 class="form-control form-control-lg" />

                           </div>

                           <div class="d-flex justify-content-center">
                              <input type="submit" name="submit" class="btn btn-success" value="Login">
                           </div>

                           <p class="text-center text-muted mt-5 mb-0">create new acount? <a
                                 href="../Register/registerForm.html" class="fw-bold text-body"><u>Register</u></a></p>

                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>

</html>