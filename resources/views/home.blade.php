<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>SENEL - Semana da Engenharia Elétrica UFRJ</title>

		<!--Imports do css do Materialize-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		
		<link rel="icon" href="assets/icons/senel.ico">

		<link type="text/css" rel="stylesheet" href="css/navbar.css">
		<link type="text/css" rel="stylesheet" href="css/footer.css">
		<link type="text/css" rel="stylesheet" href="css/home.css">
	</head>

	<body>
		<div class="first-section">
			<nav class="transparent z-depth-0">
				<!-- navbar p/ versão desktop e tablet -->
				<ul class="hide-on-small-only nav-tablet-desktop">
					<li><a class="yellow-text text-darken-1" href="home">Página Inicial</a></li>
					<li><a href="badges.html">Galeria</a></li>
					<li><a href="collapsible.html">Edições anteriores</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
				<!-- sidenav p/ versão mobile -->
				<a data-target="slide-out" class="hide-on-med-and-up sidenav-trigger">
					<i class="sidenav-icon material-icons">menu</i>
				</a>
				<ul id="slide-out" class="sidenav">
					<li><a class="nav-mobile-active" href="home">Página Inicial</a></li>
					<li><a href="badges.html">Galeria</a></li>
					<li><a href="collapsible.html">Edições anteriores</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			<img class="hide-on-small-only" src="assets/logo/senel/logo_completa.png">
			<img class="hide-on-med-and-up" src="assets/logo/senel/logo_mobile.png">
			<p class="event-duration">DE 19 A 23 DE AGOSTO</p>
		</div>

		<section class="about">
			<h6>SOBRE</h6>
			<p>
				<span>A Semana da Engenharia Elétrica é um evento</span>
				<span>organizado por alunos do Departamento de</span>
				<span>Engenharia Elétrica da UFRJ, sem fins lucrativos, que</span>
				<span>promove palestras, minicursos, painéis, visitas</span>
				<span>técnicas e workshops, que visam formentar o</span>
				<span>conhecimento além da sala de aula, e ainda</span>
				<span>despertar nos alunos o interesse pelo estudo e</span>
				<span>conhecimento mais próximo da engenharia.</span>
			</p>
		</section>

		<section class="programacao">
			<h6>PROGRAMAÇÃO</h6>
			<p><span>Em breve...</span></p>
		</section>

		<section class="apoiadores">
			<h6 class="yellow-text text-darken-1">PATROCÍNIO</h6>
			<div class="patrocinio">
				<img src="assets/logo/patrocinio/solarize_logo.jpg" height="200">
				<img src="assets/logo/patrocinio/ohmini_logo.png">
			</div>

			<h6 class="yellow-text text-darken-1">APOIO</h6>
			<div class="apoio">
				<img src="assets/logo/patrocinio/hashtag_logo.png" height="100">
				<img src="assets/logo/patrocinio/me-salva_logo.png">
			</div>

			<h6 class="yellow-text text-darken-1">APOIO INSTITUCIONAL</h6>
			<div class="institucional">
				<img src="assets/logo/institucional/ufrj_logo.png" height="100">
				<img src="assets/logo/institucional/engele_logo.png">
				<img src="assets/logo/institucional/poli_logo.png">
				<img src="assets/logo/institucional/coppe_logo.png" height="100">
			</div>
		</section>

		<footer class="page-footer grey lighten-1">
			<div class="footer-copyright grey lighten-1">
				<div class="container">
					<b class="black-text">© 2019 por SENEL UFRJ</b>
					<a class="right" href="https://www.facebook.com/senelufrj/" target="_blank">
						<img src="assets/icons/facebook_icon.png" height="30">
					</a>
					<a class="instagram-icon right" href="https://www.instagram.com/senel_ufrj/" target="_blank">
						<img src="assets/icons/instagram_icon.png" height="30">
					</a>
				</div>
			</div>
		</footer>

		<!-- Import do js do Materialize -->
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.sidenav');
				var instances = M.Sidenav.init(elems);
			});
		</script>
	</body>
</html>
