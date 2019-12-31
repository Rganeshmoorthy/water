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
  
		
		<div id="login">   
          <h1>Login</h1>
			 <form name="myform1" action="adminlogin.php" method="post">
		  			  	<?php include('errors.php'); ?><br/>

		 <br/>
          
            <div class="field-wrap">
            
            <input type="text" name="username" placeholder="username"/>
			
          </div>
          
          <div class="field-wrap">
          
            <input type="password" name="password" placeholder="Password"/>
			
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
  
		  <input type="submit" name="login_userss" value="Login" class="button button-block">
		  
          
          </form>
      </div>
		
        <div id="login">   
          
        </div>
      
</div> <!-- /form -->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script  src="js/index.js"></script>
</form>

</body>

</html>
