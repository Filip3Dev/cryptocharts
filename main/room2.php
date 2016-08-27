<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include("include/head.php"); ?>
    <title>Crypto Trade - Sala do Trader</title>
  </head>
  <body class="body"> <!--classe opicioncal-->
    <div class="geral">
      <?php include("include/header.php"); ?>
      <div class="space">
      <div class="container-fluid">
        <div class="row">
           <a class="col s4 l4 m4 type-box dropdown-button" href="#" data-activates='dropdown1'>
             <h4 class="center">Basico</h4>
           </a>
         <a class="col s4 l4 m4 type-box dropdown-button" href="#" data-activates='dropdown2'>
             <h4 class="center">Intemediario</h4>
           </a>
           <a class="col s4 l4 m4 type-box dropdown-button" href="#" data-activates='dropdown3'>
             <h4 class="center">Avançado</h4>
           </a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col s4 l4 m4">
            <ul id='dropdown1' class='dropdown-content'>
              <a href="basico1.php"><li><h5 class="center">Candles</h5></li></a>
              <a href="basico2.php"><li><h5 class="center">Teoria de Eliot</h5></li></a>
              <a href="basico3.php"><li><h5 class="center">Identificação de Tendência</h5></li></a>
              <a href="basico4.php"><li><h5 class="center">Tendência de Alta</h5></li></a>
              <a href=""><li><h5 class="center">Tendência de Baixa</h5></li></a>
            </ul>
          </div>
          <div class="col s4 l4 m4">
            <ul id='dropdown2' class='dropdown-content'>
              <a href=""><li><h5 class="center">Padrões de Candles</h5></li></a>
              <a href=""><li><h5 class="center">Ferramentas de Gráfico</h5></li></a>
              <a href=""><li><h5 class="center">Indicadores I</h5></li></a>
              <a href=""><li><h5 class="center">Indicadores II</h5></li></a>
              <a href=""><li><h5 class="center">Gerenciamento de Risco</h5></li></a>
            </ul>
          </div>
          <div class="col s4 l4 m4">
            <ul id='dropdown3' class="dropdown-content">
              <a href=""><li><h5 class="center">Desenvolvimento de Estratégias</h5></li></a>
              <a href=""><li><h5 class="center">Desenvolvimento de Indicadores</h5></li></a>
              <a href=""><li><h5 class="center">Detalhes do Mercado</h5></li></a>
              <a href=""><li><h5 class="center">Gerenciamento de Banca</h5></li></a>
              <a href=""><li><h5 class="center">BackTesting</h5></li></a>
            </ul>
          </div>
          <div class="col s4 l4 m4 center">
            <h4 class="center">De candle a identificação de tendências</h4>
             <br>
            <h5>Tudo que um iniciante precisa conhecer para começar sua jornada pelo no mundo do trade, um lastro para iniciarmos as operações.</h5>
          </div>
          <div class="col s4 l4 m4 center">
          <h4 class="center">De padrões de candle a gerenciamento de risco</h4>
          <br>
          <h5>Nessa parte vamos descobrir como identificar reversões de tendências e como utilizar os indicadores, a partir daqui a pratica já se torna indispensável.</h5>
          </div>
          <div class="col s4 l4 m4 center">
          <h4 class="center">De desenvolvimneto de estratégias a BackTesting</h4>
          <br>
          <h5>Essa ultima parte é onde desenvolvemos nossa estrategia fixa, onde vamos ajustar indicadores as nossas nescessidades e testar a evolução.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include("include/footer.php"); ?>
<?php include("include/jstoast.php"); ?>
<?php include("include/jsmodal.php"); ?>
<?php include("include/jssidenav.php"); ?>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-80863441-1', 'auto');
ga('send', 'pageview');

</script>
<script src="../assets/materialize/js/materialize.min.js"></script>

  </body>
  <?php include("include/form.php"); ?>
</html>
