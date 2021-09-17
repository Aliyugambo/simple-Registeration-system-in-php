<?php
session_start(); 
include "dbconnect.php";

if (isset($_POST['uname']) && isset($_POST['pass'])) {

  function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  
 
  $username = validate($_POST['uname']);
  $Passwords = validate($_POST['pass']);
  
   if (empty($username)) {
    header("Location: index.php?error=User Name is required");
      exit();
    }else if(empty($Passwords)){
        header("Location: index.php?error=Password is required");
      exit();
  }else{

         // making password to md5 security
             $Passwords = md5($Passwords);

           // selecting information from database
    $sql = "SELECT * FROM users WHERE UserName = '$username' AND Password = '$Passwords'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==1) {

      $row = mysqli_fetch_assoc($result);
      if ($row['UserName'] === $username  && $row['Password'] === $Passwords) {
              $_SESSION['UserName'] = $row['UserName'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];
              header("Location: home.php");
            exit();
        }else{
        header("Location: index.php?error=Incorect User name or password");
            exit();
         }
      }else{
      header("Location: index.php?error=Incorect User name or password");
          exit();
    
    }

   }

 }else{
  header("Location: index.php?error=Unkown error occure");
  exit();
}

?>