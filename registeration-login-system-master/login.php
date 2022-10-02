<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="login.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
       
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo '<script>alert(" Data is Wrong , Login Again")</script>';
          echo  "<script>
window.history.go(-1);
</script>";
        }
    } else {
?>
  <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form <br>User</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="#" class="login" method="post">
            <div class="field">
            <input type="text" name="username" class="input-box" placeholder="Username" required>
            </div>
            <div class="field">
            <input type="password" name="password" class="input-box" placeholder="Password"  minlength="8" required>
            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
            </div>
            <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="submit" class="btn"/>
              
              
            </div>
            
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            <div class="signup-link">Admin ? <a href="admin.php">Adminlogin</a></div>
             

            


          </form>
          
          <form action="registration.php" class="signup">
            <div class="field">
            <input type="text" name="username" class="input-box" placeholder="Username" required> 
            </div>
            <div class="field">
            <input type="email" name="email" class="input-box" placeholder="Email" Required>
            </div>
            <div class="field">
            <input type="password" name="password" class="input-box" placeholder="Password"minlength="8"required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="submit" value="Register" class="btn">
            </div>
            
          </form>
        </div>
      </div>
    </div>

<!-- <section class="left-section">
    <div id="left-cover" class="cover cover-hide">
        <img src="pexels-janko-ferlic-590493.jpg" alt="">
        
        <h1>Welcome !</h1>
        <h3>Already have an account ?</h3>
        
        <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
    </div>
    <div id="left-form" class="form fade-in-element">
        <h1>UserLogin</h1>
        <form action="" method="post">
            <input type="text" name="username" class="input-box" placeholder="Username" required>
            <input type="password" name="password" class="input-box" placeholder="Password" required>
            <input type="submit" value="Login" name="submit" class="btn"/>
           
        </form>
        <br>
        <form action="admin.php">
            <input class="btn" type="submit" value="Adminlogin">
        </form>
        
    </div>
    
</section>


    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form> -->

<!-- 
<section class="right-section">
    <div id="right-cover" class="cover fade-in-element">
        <img src="pexels-rafael-cosquiere-2041540.jpg" alt="">
        <h1>Welcome !</h1>
        <h3>Don't have an account ?</h3>
        <button type="button" class="switch-btn" onclick="switchSignup()">Signup</button>
    </div>
    <div id="right-form" class="form form-hide">
        <h1>Signup</h1>
        <form action="registration.php" method="post">
            <input type="text" name="username" class="input-box" placeholder="Username" required> 
            <input type="email" name="email" class="input-box" placeholder="Email" Required>
            <input type="password" name="password" class="input-box" placeholder="Password"required>
            <input type="submit" name="submit" value="Register" class="btn">
      
            <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
            <input type="button" name="signup-btn" class="btn" value="Signup">
        </form>
    </div> -->
</section><script src="main.js"></script> 
<?php
    }
?>
</body>
</html>
