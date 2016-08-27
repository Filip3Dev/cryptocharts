<header class="header">
  <nav>
  <div class="navbar-fixed">
        <a href="#">
            <i class="fa fa-line-chart fa-3x margem1" aria-hidden="true"></i>
            <span class="brand-logo up">Crypto Trade</span>
        </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="main/apresentacao.php" style="font-size:20px">Apresentação</a></li>
      <li><a href="main/room2.php" style="font-size:20px">Sala do Trader</a></li>
      <li><a href="charts/click.html" target="_blank" style="font-size:20px">Gráficos</a></li>
      <li><a class="waves-effect waves-light btn" onclick="Materialize.toast('Estamos Trabalhando !', 4000)"href="#">Sign Up</a></li>
    </ul>

    <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="main/apresentacao.php">Apresentação</a></li>
      <li><a href="main/room.php">Analise</a></li>
      <li><a href="chart/free.html">Graficos</a></li>
      <li ><a class="green-text text-darken-2" style="font-weight:600" id="btn-login" onclick="Materialize.toast('Estamos Trabalhando !', 4000)">Sign In</a></li>
    </ul>
    <div id="logged-in-box" class="logged-in-box auth0-box logged-in" style="display: none;">
      <h1 id="logo"><img src="auth0_logo_final_blue_RGB.png" /></h1>
      <h2>Welcome <span id="nick" class="nickname"></span></h2>
      <button id="btn-api" class="btn btn-lg btn-primary btn-api">Call API</button>
    </div>
  </div>
</nav>

</header>
