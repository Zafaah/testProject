<?php
session_start();
include_once ('../include/config.php');
if(isset($_POST['username']) && isset($_POST['password'])){
   function Validate ($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }
   $uname=Validate($_POST['username']);
   $pass=validate($_POST['password']);
  
      $sql= mysqli_query($conn,"SELECT *from users where username='$uname'");
      if(mysqli_num_rows($sql)===1){
         $row=mysqli_fetch_array($sql);
         if($row['username']==$uname && $row['password']==$pass){
            echo "logging ";
            $_SESSION['username']= $row['username'];
            $_SESSION['id']= $row['id'];
            header('Location: ../phone/veiw.php?');
            echo "successfully..";

         }else{
            header("Location: logform.php?error=incorrect username and pass");
            exit();
         }

      }
      else{
            header("Location: logform.php?error=incorrect username and $pass");
            exit();
         }
   }  





?>