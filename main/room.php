<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Sala do Trader</title>
  <?php include("include/head.php"); ?>
</head>
<body class="body">
<div class="geral">
  <?php include("include/header.php"); ?>
  <section class="">

  <div class="container clearfix">
    <div class="row margem3 position">
      <div class="col s12 m6 l4">
        <div class="box 1">
          <div class="animated slideInUp">
          <br>
          <h4 >Básico</h4>
          <div class="line"></div>
          <p> De candles a tendências, passando por identificação de suportes e resistências.</p>
          <br>
          <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Navegar</a>
        </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="box 2">
          <div class="animated slideInUp">
          <br>
          <h4>Intermediário</h4>
          <div class="line"></div>
          <p>De padrões de candle a price action, passando por ferramentas do gráfico e indicadores.</p>
          <br>
          <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Navegar</a>
        </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="box 3">
          <div class="animated slideInUp">
          <br>
          <h4>Avançado</h4>
          <div class="line"></div>
          <p>De desenvolvimento de estrategia a analises, passando por indicadores e detalhes do mercado.</p>
          <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Navegar</a>
        </div>
        </div>
      </div>
    </div>

  </div>
</section>
<br>
<br>
<br>



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
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/49270/script.js');
</script>

<script src="../assets/materialize/js/materialize.min.js"></script>
</body>
<?php include("include/form.php"); ?>
<?php include("include/menu1.php"); ?>
<?php include("include/menu2.php"); ?>
<?php include("include/menu3.php"); ?>
</html>
