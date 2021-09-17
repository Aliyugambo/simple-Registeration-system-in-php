<!DOCTYPE html>

<html >
<head>
<TITLE>Registeration System</TITLE>
<head>
<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

 </head>
<body>
  <center>
     <form action="login.php" method="POST" >

      <div class="frmDronpDown">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
        <div class="row">
          <label>User Name</label>
          <input type="text" name="uname" placeholder="User Name" />
           </div>
           <div class="row">
          <label>Passwords</label>
          <input type="Password" name="pass" placeholder="Password" />
        </div>
       
       <div class="row">
        <input type="submit" name="submit" value="Login">
       </div>
       <p><a href="register.php">click here to register</a><p>
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