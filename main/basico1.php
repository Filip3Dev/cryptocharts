<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Crypto Trade - Aulas</title>
  <?php include("include/head.php"); ?>
</head>
<body >
  <div class="geral">
    <?php include("include/header.php"); ?>
  <div class="center">
  <div class="text-box">
          <h3>
            Candles
          </h3>
        </div>
    <div class="container-fluid clearfix">
      <div class="row">
        <div class="col s12 m12 l12">
          
        </div>
        <div class="col s6 m6 l6">
          <img class="responsive-img"src="../assets/img/candles.png" class="img-responsive"alt="Candles" />
          <br>
          <br>
          <img class="responsive-img"src="../assets/img/graphic.png" class="img-responsive"alt="Candles" />
        </div>
        <div class="col s6 m6 l6">
          <h5 class="green-text">A orientação dos preços</h5>
          <br>
          <hr>
          <br>
          <p>
            O candle é o rastro do preço o qual você utiliza para identificar tendências. <br>
            Cada candle representa a movimentação de preço em um determinado periodo de tempo. <br>
            Para operações de curto prazo utilizamos graficos de 2 horas a 1 dias, o que significa que: cada candle podera representar de 2 horas a 1 dia.<br>

Já para operações de Day trade que são operações mais curtas ainda, seria utilizados graficos de 1 hora a 3 minutos o que significa que cada candle dentro do grafico representaria de 1 hora a 3 minutos.<br>

Vale a pena ressaltar que a logica e o funcionamento é a mesma independente se o candle é 1 minuto ou de 1 semana.<br>

Existem apensa 2 tipos de candle; O candle de alta e o candle de baixa.<br>

Quando o preço de fechamento do candle for maior que o preço de abertura, significa que o preço subiu durante aquele período e o candlestick será de alta.<br>

Quando o preço de fechamento do candle está abaixo do preço de abertura, significa que o preço da ação caiu durante aquele determinado período, e o Candle será de baixa.<br>

Acima e a baixo do candle quase sempre tem uma linha fina, essas linhas representão o valor maximo e minimo que o ativo ou moeda atingiu durante o periodo que o candle representa.<br>
Dentro do grafico os candles ficam dispostos como vocês podem ver a seguir baseados no tempo que é o eixo horizontal e no preço que é o eixo vertical.<br>
          </p>
          <br>

        </div>
        <?php include("include/paginacao/page1.php"); ?>
      </div>
    </div>
  </div>
<?php include("include/disqus.php"); ?>
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
