<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include("include/head.php"); ?>
    <title>Modelo</title>
  </head>
  <body class="geral"> <!--classe opicioncal-->
    <div class="geral">
      <?php include("include/header.php"); ?>

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
