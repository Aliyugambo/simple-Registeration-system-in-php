<!DOCTYPE html>

<html >
<head>
<TITLE>Registeration System</TITLE>
<head>
<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
  <center>
     <form action="signup-check.php" method="POST" >
      <div class="frmDronpDown">
         <h2>Sign_Up</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>
       
           <div class="row">
           <label>Name</label>
      <?php if (isset($_GET['name'])) { ?>
         <input type="text" name="name" value="<?php echo $_GET['name']; ?>" />
      <?php }else{ ?>
        <input type="text" name="name" placeholder="Name" />
      <?php }?>

          <label>User Name</label>
      <?php if (isset($_GET['uname'])) { ?>
         <input type="text" name="uname" value="<?php echo $_GET['uname']; ?>" />
      <?php }else{ ?>
        <input type="text" name="uname" placeholder="User_Name" />
      <?php }?>

          <label>Passwords</label>
          <input type="Password" name="pass" placeholder="Password" />
          <label>Com_Passwords</label>
          <input type="Password" name="com_pass" placeholder="Com_Passwords"/>
        <input type="submit" name="submit" value="Signup">
       </div>
       <p><a href="index.php">Already have account</a><p>
        <footer id="footer">
        <div class="copyright">
          &copy; Labbitech Limited All rights reserved.
        </div>
      </footer>

       </div>
      </form>
  </center>
</body>
</html>