<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web-page</title>
    <style media="screen">
      a{
        text-decoration: none;
        display: block;
        background-color: darkblue;
        color: white;
        border-radius: 8px;
        margin: 10px;
        padding: 10px;
        font-size: large;
        width: 80px;
      }
      a:hover{
        background-color: red;
      }
      input{
        display: block;
      }
    </style>
  </head>
  <body>
    <h1>Registration form</h1>
    <form action="form-handler.php" method="get">
      <input type="text" name="username" value="user" placeholder="Enter username" required>
      <input type="email" name="email" value="a@b.com" placeholder="Enter e-mail" required>
      <input type="password" name="password" value="123" placeholder="Enter password" required>
      <input type="radio" name="sex" value="male">
      <input type="radio" name="sex" value="female">I agree to terms and everything
      <input type="checkbox" name="consent" value="">
      <select class="" name="age">
        <?php
          for ($i=0; $i < 20; $i++){
            echo '<option value=" ' . $i . '">' . $i . '</option>';
          }
         ?>
      </select>
      <textarea name="description" rows="8" cols="80" hidden>The browser version is Edge v.36</textarea>
      <input type="submit" name="" value="Send the data to the server">

    </form>
    <a href="http://google.com">Google</a>
    <a href="https://facebook.com">Facebook</a>
    <img src="https://cs8.pikabu.ru/avatars/2404/x2404298-198453271.png" alt="">
  </body>
</html>
