<?php
    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('Location: index.php?login=erro2');
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>App Help Desk</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
        .card-home {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
        .card-abrir-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
        </style>
    </head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a href="logoff.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>