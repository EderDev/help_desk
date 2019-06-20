<?php require_once 'validador_acesso.php' ?>
    <?php 
      if(isset($_GET['adicionado']) && $_GET['adicionado'] == 'sucesso'){
        ?>
        <div class="alert alert-success">
          Chamado aberto com sucesso
        </div>
        <?php
      }
    ?>
    <div class="container">    
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>