<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">
    
  </head>

    <body>

    <div class="form">
      <!--
      <ul class="tab-group">
        <li class="tab active"><a href="#cadastro">Cadastre-se!</a></li>
      </ul>
      -->
      
      <div class="tab-content">
        <div id="cadastro" align="center">   
          <h1>Cadastre-se!</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome Completo<span class="req"></span>
              </label>
              <input type="text" required autocomplete="off" name="nomeCliente" />
            </div>
        
            <div class="field-wrap">
            <label>
              Endereço<span class="req"></span>
            </label>
            <input type="text"required autocomplete="off" name="enderecoCliente"/>
          </div>

          <div class="field-wrap">
            <label>
              Telefone<span class="req"></span>
            </label>
            <input type="text"required autocomplete="off" name="foneCliente"/>
          </div>
          
          <div class="field-wrap">
            <label>
              CPF<span class="req"></span>
            </label>
            <input type="text"required autocomplete="off" name="cpfCliente"/>
          </div>

          <button type="submit" class="button button-block" formaction="../../Model/insereCliente.php" />Cadastrar</button>
          
          </form>

        </div>
</div> <!-- /form -->
<br>
    <div class="field-wrap">
              <button type="submit" class="button button-block" onclick="location.href='../index.html';" />Voltar</button>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

  </body>
