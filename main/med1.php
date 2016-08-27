<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Crypto Trade - Aulas</title>
    <?php include("include/head.php"); ?>
  </head>
  <body>
    <div class="geral">
      <?php include("include/header.php"); ?>
      <div class="center">
        <div class="container clearfix">
          <div class="row">
            <div class="col s12 m12 l12">
            <h3>
              Padões de Candle
            </h3>
            <h5>Padões de Continuidade</h5>
            <p>
              São padrões gráficos que representam uma pausa na tendência vigente, um momento de consolidação ou congestão do preço. Após este período há uma maior chance de continuação da tendência que antecede o padrão.<br>
              São padões de continuidade de uma tendência por exemplo: Retângulo, Triângulo Simétrico, Triângulo de Alta, Triângulo de Baixa, Bandeira, Flâmula.<br>
              <figure>
                    <img class="responsive-img"src="../assets/img/resist3.png" alt="Candles" />
                    <figcaption>Essas são figuras, padrões de candle que representam cointinuidade de tendência </figcaption>
              </figure>
              <br>


            </p>
            <br>

            </div>
  <?php include("include/paginacao/page21.php"); ?>
          </div>
        </div>
      </div>
      <?php include("include/disqus.php"); ?>
    </div>
    <?php include("include/footer.php"); ?>
    <?php include("include/jsmodal.php"); ?>
    <?php include("include/jstoast.php"); ?>
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
