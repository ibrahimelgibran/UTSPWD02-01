<!DOCTYPE html>
<link rel="icon" href="img/logo.png" />
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
  <div class="center">
    <h1>Login Dashboard</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" required />
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" required />
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <div class="button">
        <a href="./home.php">Login</a>
      </div>

      <div class="signup_link">
        Register Member? <a href="sign_login.php">Signup</a>
      </div>
    </form>
  </div>
</body>

</html>