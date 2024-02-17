<?php
include_once ('../include/config.php');

if(!isset($_POST['username'],$_POST['email'],$_POST['password'])){
   exit('Empty field(s)');
}
if(empty($_POST['username'])&&empty($_POST['email'])&& empty($_POST['password'])){
   exit("value is empty pls enter");
}
if($stmt=$conn->prepare("SELECT id, password from users where username=?")){
   $stmt->bind_param("s",$_POST['username']);
   $stmt->execute();
   $stmt->store_result();

   if($stmt->num_rows>0){
      
      echo "username is already exist, pls try";
   }else{
      if($stmt=$conn->prepare('INSERT INTO users(username,email,password) 
      Value(?,?,?)')){
         $stmt->bind_param('sss',$_POST['username'],$_POST['email'], $_POST['password']);
         $stmt->execute();
        
         echo "successfully register";
         header("location: ../Login/logform.php");
      }else{
      echo "error ocurred";
   }
   $stmt->close();
}
}else{
   echo "error ocurred";
}
$conn->close()

   

?>