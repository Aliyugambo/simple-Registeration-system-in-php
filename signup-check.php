<?php
session_start(); 
include "dbconnect.php";

if (isset($_POST['uname']) && isset($_POST['pass'])&&isset($_POST['name']) && isset($_POST['com_pass'])) {

  function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  
 
  $username = validate($_POST['uname']);
  $Passwords = validate($_POST['pass']);
  $names = validate($_POST['name']);
  $coms_pass= validate($_POST['com_pass']);



  $user_data = 'uname'.$username.'&name'.$names;

  
   if (empty($username)) {
    header("Location: register.php?error=User Name is required& $user_data");
      exit();
  }else if(empty($Passwords)){
        header("Location: register.php?error=Password is required& $user_data ");
      exit();
  }else if(empty($names)){
        header("Location: register.php?error=Name is required&  $user_data ");
      exit();
  }else if(empty($coms_pass)){
        header("Location: register.php?error=Comfirmed_Password is required&  $user_data ");
      exit();
  }else if($Passwords !== $coms_pass){
        header("Location: register.php?error=The Comfirmed_Password does not match  the Password&$user_data");
      exit();
  }

  else{


           // making password to md5 security
             $Passwords = md5($Passwords);

               // Retraiving information for database
    $sql = "SELECT * FROM users WHERE UserName = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0){

      header("Location: register.php?error=This UserName has already been registered please select another thank you");
      exit();

    }else{
                // Inserting information to database
        $query ="INSERT INTO users(UserName,Password,name)VALUES('$username','$Passwords','$names')";
        $result2 = mysqli_query($conn, $query);

        if ($result2) {
          header("Location: register.php?success=Your account has been created successfully");
          exit();
        }else{

      header("Location: register.php?error=Unkown error occured&$user_data");
      exit();

        }
    }
   }

 }
 else{
  header("Location: register.php?error=Unkown error occure");
  exit();
}

?>