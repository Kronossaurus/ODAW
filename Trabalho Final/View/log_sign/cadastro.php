<?php
	include_once '../../Model/conexao.php';
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>

    <div class="form">
      <div class="tab-content">
        <div id="cadastro">   
          <h1>Cadastre-se</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome Completo<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="nomeCliente" />
            </div>

          <div class="field-wrap">
            <label>
              Endereço<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="enderecoCliente"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Telefone<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="foneCliente"/>
          </div>
          
          <div class="field-wrap">
            <label>
              CPF<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="cpfCliente"/>
          </div>

          <button type="submit" formaction="../../Model/insereCliente.php" class="button button-block"/>Começar agora</button>
          
          </form>

        </div>
      
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
    
  </body>
</html>
