<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crypto Trade - Utilidades</title>
  <link rel="shortcut icon" href="../assets/img/favicon.png" sizes="32x32 48x48 64x64">
  <link rel="stylesheet" href="../assets/materialize/css/materialize.css" media="screen" title="no title" charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../assets/font-awesome-4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="../assets/css/main.css" media="screen" title="no title" charset="utf-8">
  <script src="../assets/css/jquery-3.0.0.min.js"></script>
</head>
<body class="">
<div class="geral">
  <?php include("include/header.php"); ?>
  <table class="table table-striped sortable margin" id="tableMarkets">
				<thead>
					<tr>
						<th data-sort="string">Site</th>
						<th data-sort="string" >Tipo</th>
						<th data-sort="string" >Descrição</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td><a href="https://tradeblock.com/bitcoin/explorer" target="_blank">TradeBlock</a></td>
							<td data-sort-value="1467346462" class="badge">Explorador de blocos</td>
              <td data-sort-value="8" ><span >Certamente um dos exploradores mais interesantes do ponto de vista estetico e funcional, esse é com certeza um dos melhores no mundo crypto.</span></td>

						</tr>
											<tr>
							<td><a href="http://ratesbtc.com/" target="_blank">Rates BTC</a></td>
							<td data-sort-value="1467345892" class="badge">Preço do Bitcoin</td>
							<td data-sort-value="8" ><span >Site para calcular o preço do Bitcoin em varias moedas FIAT espalhadas pelo mundo.</span></td>

						</tr>
											<tr>
							<td><a href="https://bitcointalk.org/index.php" target="_blank">Bitcoin Forum</a></td>
							<td data-sort-value="1467346465" class="badge">Forum</td>
							<td data-sort-value="31" ><span>Forum voltado para discussão de assuntos do mundo crypto em esfera mundial, onde se encontra lançamentos de moedas novas, debates, especulações e etc.. e uma dica aos mais novos; Campanhas de assinatura pagam pelo seu post ou comentario. </span></td>

						</tr>
											<tr>
							<td><a href="https://biscoint.io/bitcoin/price-comparison/buy/single-exchange" target="_blank">Biscoint</a></td>
							<td data-sort-value="1467346690" class="badge">Comparador de Preços</td>
							<td data-sort-value="34" ><span>Site para comparar em tempo real os melhores preços efetivos do Bitcoin nas maiores corretoras do Brasil, ja considerando as taxas.</span></td>
						</tr>
											<tr>
							<td><a href="http://bitvalor.com/" target="_blank">bitValor</a></td>
							<td data-sort-value="1467346684" class="badge">Indicador de Exchanges</td>
							<td data-sort-value="26"><span>Acompanhe o preço do bitcoin em todas as Exchanges Brasileiras! Dados disponíveis do livro de ofertas, últimos negócios e volumes pelo website e também analises mensais sobre o desenvolvimento do mercado nacional de Bitcoin.</span></td>

						</tr>
											<tr>
							<td><a href="https://www.bitbol.com.br/" target="_blank">Bitbol</a></td>
							<td data-sort-value="1467346452" class="badge">Pague com Bitcoin</td>
							<td data-sort-value="343" ><span>Pague boletos de maneira rápida e segura , faça pagamentos utilizando Bitcoin, recarga de celular e envio de dinheiro para o exterior ou qualquer tipo de conta corrente.</span></td>

						</tr>
											<tr>
							<td><a href="https://originalmy.com/" target="_blank">Original MY</a></td>
							<td data-sort-value="1467346627" class="badge">Registro de Autenticidade</td>
							<td data-sort-value="1" >Assinatura Digital, Certificação e Registro de Documentos no Blockchain da Rede Bitcoin, garantindo Prova Legal de Autenticidade que protege suas criações, ideias, contratos e muito mais <span>1</span></td>

						</tr>
											<tr>
							<td><a href="http://www.icocountdown.com/" target="_blank">Ico Countdown</a></td>
							<td data-sort-value="1467345972" class="badge">Timer para ICO</td>
							<td data-sort-value="788" ><span>Site criado para reunir todas as ICOs em fase dinicial, muito utila para quem gosta de incentivar novos projetos e ainda faturar uma B O A grana com o lançamento das alts.</span></td>

						</tr>
											<tr>
							<td><a href="https://jaxx.io/" target="_blank">Jaxx</a></td>
							<td data-sort-value="1467346539" class="badge">Wallet</td>
							<td data-sort-value="2"><span>Wallet para Bitcoin, Ethereum e DAO; Wallet muito boa com desing diferenciado, segura e com fee variavel segundo a sua nescessidade.</span></td>

						</tr>
                      <tr>
              <td><a href="https://br.investing.com/economi-calendar/" target="_blank">Investing</a></td>
              <td data-sort-value="1467346539" class="badge">Calendario Econômico</td>
              <td data-sort-value="2"><span>Site que comporta um calendario em tempo real sobre eventos e indicadores importantes na economia mundial, que no caso é muito interesante para traders de forex.</span></td>

            </tr>

									</tbody>
			</table>

      <div class="caixa">
        <div class="row">
          <div class="col s6 m6 l6">
            <h4>Confira tambem</h4>
            <a href="exchanges.php"><h5>Exchanges</h5></a>
            <a href="altcoins.php"><h5>Lista de Altcoins</h5></a>
          </div>

        </div>

      </div>

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
<?php include("include/menu1.php"); ?>
</html>
