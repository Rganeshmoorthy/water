<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title> 
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body background="pic4.jpg">
  <div class="form">
      <ul class="tab-group">
         <li class="tab"><a href="signup.php">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
	</ul>
	  
      <div class="tab-content">
        <div id="login">   
          <h1>Login</h1>
			 <form name="myform1" action="menu.php" method="post">
		  
		  <?php include('errors.php'); ?><br/>
          
            <div class="field-wrap">
            
            <input type="text" name="username" placeholder="username"/>
			
          </div>
          
          <div class="field-wrap">
          
            <input type="password" name="password" placeholder="Password"/>
			
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
		  <button class="button button-block"  value="Login" name="login_users"/>LogIn</button>
		  <!--<input type="submit" href="menu.php" name="login_users" value="Login" class="button button-block">-->
		  
          
          </form>
      </div>
		
        <div id="login">   
          
        </div>
       

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

</form>

</body>

</html>
