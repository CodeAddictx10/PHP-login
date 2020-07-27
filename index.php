<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
echo "welcome";
echo $_SESSION['username'];
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
         <h1>Welcome</h1>
          <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
</body>
</html>