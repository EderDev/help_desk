<?php
session_start();

$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2)
);

$usuario_logado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfils = array(
    1 => 'administrativo',
    2 => 'usuario'
);

if(isset($_POST['email']) && !empty($_POST['email'])){
    if(isset($_POST['senha']) && !empty($_POST['senha'])){
        $nome = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        foreach($usuarios_app as $user){
            if($user['email'] == $nome && $user['senha'] == $senha){
                $usuario_logado = true;
                $usuario_id = $user['id'];
                $usuario_perfil_id = $user['perfil_id'];
            }
        }
    
        if($usuario_logado){
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil_id'] = $usuario_perfil_id;
            header('Location: home.php');
        }else{
            $_SESSION['autenticado'] = 'NAO';
            header('Location: index.php?login=erro');
        }
    }
}
