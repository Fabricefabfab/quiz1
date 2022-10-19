<!DOCTYPE html>
<html>
  <head>
    <title>Customer</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/sytle.css">
  </head>
 
  <body>
    <form action="/action_page.php">
      <h1>Login</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="email"><strong>Email</strong></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>

      </div>
      <button type="submit">Log in</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <input type="checkbox"  checked="checked" name="remember"> Remember me
        </label>
        <span class="password"><a href="#"> Forgot password?</a></span>
      </div>
    </form>
  </body>
</html>
