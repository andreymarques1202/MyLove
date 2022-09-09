<?php
    session_start();

    //variavel que verifica se a autenticaçao foi realizada
    $usuario_autenticado = false;
    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => 'adm123'),
        array('email' => 'user@teste.com.br', 'senha' => 'user123')
    );
    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';
    foreach($usuarios_app as $user) {     
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }   //por algum motivo o login não está sendo autenticado
        if($usuario_autenticado) {
            echo ' Usuário autenticado';
            $_SESSION['autenticado'] = 'SIM';
            header('Location: home.php');
        } else {
            $_SESSION['autenticado'] = 'NAO';
            header('Location: login.php?login=erro');
        }
        

    
?>