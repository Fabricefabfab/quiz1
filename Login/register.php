<!DOCTYPE html>
<html>
  <head>
    <title>Customer</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/sytle.css">
  </head>
 
  <body>
    <form action="/action_page.php">
      <h1>Register Customer</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="fullname"><strong>Full name</strong></label>
        <input type="text" placeholder="Enter Full name" name="fullname" required>

        <label for="email"><strong>Email</strong></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="country"><strong>Country</strong></label>
        <input type="text" placeholder="Enter Country" name="country" required>

        <label for="city"><strong>City</strong></label>
        <input type="text" placeholder="Enter City" name="city" required>

        <label for="phone"><strong>Contact Number</strong></label>
        <input type="text" placeholder="Enter Contact number" name="phone" required>
      </div>
      <button type="submit">Register</button>

    </form>
  </body>
</html>
