<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="admin.css">
	<title>Login Page</title>
</head>

<body>  <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form <br>Admin</div>
        
      </div>
      <div class="form-container">
        <!-- <div class="slide-controls"> -->
          <!-- <input type="radio" name="slide" id="login" checked> -->
        
          <!-- <label for="login" class="slide login">Login</label> -->
          
          <!-- <div class="slider-tab"></div> -->
        </div>
        <div class="form-inner">
          <form action="validate.php" class="login" method="post">
            <div class="field">
            <input type="text" name="username" class="input-box" placeholder="Username" required>
            </div>
            <div class="field">
            <input type="password" name="password" class="input-box" placeholder="Password" required>
            </div>
            <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="submit" class="btn"/>
              
              
            </div>
            
            <div class="signup-link">User ? <a href="login.php">Userlogin</a></div>
             

            


          </form>

<!-- <div class="form-inner">
          <form action="validate.php"  method="post">
            <div class="field">
            <input type="text" name="username" class="input-box" placeholder="Username" required>
            </div>
            <div class="field">
            <input type="password" name="password" class="input-box" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <!<div class="btn-layer"></div>
              <input type="submit" value="Login" name="submit" class="btn"/>
              
              
            </div>
            
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            <div class="signup-link">Admin ? <a href="admin.php">Adminlogin</a></div>
              -->

            

<!-- 
          </form> --> 
<!-- <section class="left-section">
    <div id="left-cover" class="cover cover-hide">
        <img src="pexels-janko-ferlic-590493.jpg" alt="">
        
       
    </div>
    <div id="left-form" class="form fade-in-element">
        <h1>Adminlogin</h1>
        <form action="validate.php" method="post">
            <input type="text" name="username" class="input-box" placeholder="Username" required>
            <input type="password" name="password" class="input-box" placeholder="Password" required>
            <input type="submit" value="Login" name="submit" class="btn"/>
           
        </form>
        <br>
        <form action="login.php">
            <input class="btn" type="submit" value="Userlogin">
        </form>
        
    </div>
    
</section> -->
	<!-- <form action="validate.php" method="post">
		<div class="login-box">
			<h1>Adminlogin</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="" required>
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value=""required>
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
					
        
		
	</form> -->
	<!-- <form action="login.php">
            <input class="button" type="submit" value="Userlogin">
        </form></div> -->
</body>

</html>
