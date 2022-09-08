<?php
    session_start();
    $_SESSION['autenticado'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/login.css">
    <title>Mylove</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
      <form action="valida_login.php" method="post">
        <div class="user-box">
          <input name="email" type="email" placeholder="email">
          <label>E-mail</label>
        </div>
        <div class="user-box">
          <input name="senha" type="password" placeholder="senha">
          <label>Senha</label>
        </div>
        <? if(isset($_GET['login']) && $_GET['login'] == 'erro') {
          ?>
          <div class="text-danger">
          Usuário ou senha inválido(s)
          </div>
        <? } ?>
        <? if(isset($_GET['login']) && $_GET['login'] == 'erro2') {
          ?>
          <div class ="text-danger">
          Faça Login
          </div>
        <? } ?>
        <!-- foi trocado o "<a>" por um <button> para tentativa de debug -->
          <!-- <a href="valida_login.php"> -->
        <button href="valida_login.php" type="submit">
           <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login 
        </button>
      </form>
    </div>
</body>
</html>