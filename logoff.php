<?php
    session_start();

    //remover indices do array de sessão
    //unset()
    unset($_SESSION['autenticar']);

    header('Location: index.php');

    //Destruir a variável de sessão
    //session_destroy()
?>