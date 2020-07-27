<?php
// init variable

if(isset($_POST['submit'])){ 
  session_start();
  $username = "samuel";
  $password = "123456";
  if($_POST["username"] == $username && $_POST["password"] == $password){
    $_SESSION['username'] = $username;
    header('location: index.php');
  }
  else{
        echo "<script> alert('Wrong details')</script>";
}   
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Log in Page</title>
</head>
<body>
    <section class="login-container">

        <div class="container">

            <div class="form-wrapper">
                <div class="heading">
                <h2>Log-in</h2>
                <p>Enter your details below to hop in</p>
                </div>
                <form action="" method="POST">

                    <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <input type="submit"
                        name="submit" value="Hop In">
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>