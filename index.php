<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Crypto Trade</title>
<?php include("head.php"); ?>
</head>
<body class="body">
  <div class="geral">
  <?php include("header.php"); ?>
  <section class="hero has-white-text">
    <!--style="background: url(https://unsplash.it/1800/800/?random) center top no-repeat #f8f8f8;"-->
  <div class="wrap">
    <div class="intro">

      <h1 id="x">CRYPTO TRADE</h1>
      <h3 id="x">APRENDA A INVESTIR, SEU FUTURO ESTA NA SUA MÃO.<span class="y">|</span></h3>
      <!--.-->
      <hr class="dash is-left">
      <p class="exp"></p>

        <div class="big-numbers-wrap">
            <div class="big-numbers">
              <p class="yellow-number">6 anos</p>
              <p>de mercado</p>
            </div>
            <div class="big-numbers">
              <p class="yellow-number">R$ 45 mil</p>
              <p>transacionado</p>
            </div>
            <div class="big-numbers">
              <p >Tenha a disposição mais de</p>
              <p class="yellow-number">10 tipos de graficos</p>
            </div>
        </div>
        <a href="#" class="waves-effect button has-arrow " onclick="Materialize.toast('Estamos Trabalhando !', 4000)" role="button">COMEÇE AGORA<span>. É GRÁTIS!</span></a>


    </div>

  </div>
  <br>
</section>

<section class="main">
  <article>
    <h3>Descubra e aprenda tudo sobre crypto trade</h3>
    <hr class="dash">
    <div class="container">
      <div class="row">
        <div class="col l12 m12 s12 flex">

          <a href="main/cards/bitcoin.php" class="card" >
            <h5>O que é Bitcoin?</h5>
          </a>
          <a href="main/cards/why-btc.php" class="card">
            <h5>Por que usar Bitcoin?</h5>
          </a>
          <a href="main/cards/mercado.php" class="card">
            <h5>Compreenda o Mercado</h5>
          </a>
        </div>
        <div class="col l12 m12 s12 flex">
          <a href="#" class="card">
            <h5>Marcado de Altcoins</h5>
          </a>
          <a href="main/cards/forex.php" class="card">
            <h5>Mercado do Forex</h5>
          </a>
        </div>
        </div>
      </div>
  </article>
</section>

<section class="article-intro">
  <article class="wrap">
    <div class="article-intro-block">
      <h5>DESCUBRA UM MUNDO NOVO</h5>
      <h3>Primeiro site voltado totalmente para o aprendizado e trade de crypto moedas</h3>
      <div style="margin-top: 35px;">
        <a href="main/cards/why-btc.php" class="button is-ghost" role="button">Saiba mais</a>

      </div>
    </div>
  </article>
</section>
</div>
<?php include("footer.php"); ?>
<?php include("main/include/jstoast.php"); ?>
<?php include("main/include/jsmodal.php"); ?>
<?php include("main/include/jssidenav.php"); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80863441-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
$(function(){
 var shrinkHeader = 400;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.navbar-fixed').addClass('shrink');
        }
        else {
            $('.navbar-fixed').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
</script>
  <script src="assets/materialize/js/materialize.min.js"></script>
</body>
<?php include("main/include/form.php"); ?>
<?php include("main/include/menu1.php"); ?>

</html>
