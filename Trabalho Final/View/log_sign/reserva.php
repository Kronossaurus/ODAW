<?php
	include_once '../../Model/conexao.php';
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Efetuar Reserva</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
  </head>

  <body>
	<!-- EFETUAR RESERVA -->
    <div class="form">
      <div class="tab-content">
        <div id="signup">   
          <h1>Efetuar Reserva</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Hotel<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="nomeHotel" />
            </div>
        
            <div class="field-wrap">
              <label>
                Tipo de quarto<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/ name="tipoQuarto">
            </div>
          </div>

          <div class="field-wrap">
            <label>
            <span class="req">*</span>
            </label>
            <input type="date"required autocomplete="off"/ name="dataReserva">
          </div>

          <div class="field-wrap">
              <label>
                Cliente<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/ name="nomeCliente">
            </div>
          </div>

          <button type="submit" class="button button-block" formaction="../../Model/insereReserva.php" />Reservar</button>
          
          </form>
        </div>
      </div><!-- tab-content -->
      
      
      <!-- PESQUISAR RESERVA -->
      <div class="form">
      <div class="tab-content">
        <div id="search">   
          <h1>Pesquisar Reserva</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Codigo Hotel<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="codHotelPesquisa" />
            </div>
        
            <div class="field-wrap">
              <label>
                Num. de Registro<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="numRegistroPesquisa /">
            </div>
          </div>

          <div class="field-wrap">
            <label>
            Data da Reserva<span class="req">*</span>
            </label>
            <input type="date" required autocomplete="off" name="dataReservaPesquisa" />
          </div>

          <button type="submit" class="button button-block" formaction="../../Model/pesquisaReserva.php" />Pesquisar</button>
          
          </form>
        </div>
      </div><!-- tab-content -->
      
      
	</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
