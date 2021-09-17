<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['UserName'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?> <p>You Are Wellcome To Our Platform  How Can we Hellp You Sir/Ma</p></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>