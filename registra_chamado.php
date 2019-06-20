<?php
    session_start();

    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
        $titulo = addslashes(str_replace('#', '-', $_POST['titulo']));
        $categoria = addslashes(str_replace('#', '-', $_POST['categoria']));
        $descricao = addslashes(str_replace('#', '-', $_POST['descricao']));

        $arquivo = fopen('arquivo.hd', 'a');

        $texto = $_SESSION['id']. '#' .$titulo. '#' . $categoria. '#' .$descricao.PHP_EOL;

        fwrite($arquivo, $texto);

        fclose($arquivo);

        header('Location: home.php?adicionado=sucesso');
    }
?>