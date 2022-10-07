<?php
$title = "| Login Page";
    require_once('common_files/header.php');
  ?>
 <div class="wallpaper">
<section class="loginContainer">
<div class="loginWrapper">

  <form action="loginvalidate.php" method="post" class="login">
    
    <h2>Login</h2>
    <div class="form-element">
    <label for="username">Username</label>
    <input
      type="email"
      id="username"
      name="username"
      placeholder="registered email please"
      required
    />
    </div>
    <div class="form-element">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required />
    </div>
   

    <!--  <input type="reset" />  -->
    
    <input type="submit" value="Login " /><br><br>
    <a href="regis.php">Register</a> | <a href="forgotpass.php">Forgot Password ?</a>
  </form>

  </div>
  </section>  
</div>

</body>
</html>
