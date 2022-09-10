<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../components/sign.css">
    <title>Mylove</title>
</head>
<body>
    <div class="sign-box">
        <h2>Sign up</h2>
      <form action="valida_cadastro.php" method="post">
        <div class="user-box">
          <input type="text" name="username" required>
          <label for="User">Username</label>
        </div>
        <div class="user-box">
            <input type="email" name="email" required>
            <label for="Email">Email</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required>
          <label for="Password">Password</label>
        </div>
        <div class="user-box">
            <input type="password" name="confirmPassword" required>
            <label for="confirmPassword">Confirm Password</label>
        </div>
        <!-- <a href="#"> -->
          <button type="submit">
           <span></span>
            <span></span>
            <span></span>
            <span></span>
            Sign
          </button>
      </form>
    </div>
</body>
</html>