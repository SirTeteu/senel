<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SENEL - Semana da Engenharia Elétrica UFRJ</title>

		<!--Imports do css do Materialize-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!-- Import dos icons do Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link type="text/css" rel="stylesheet" href="css/navbar.css">
		<link type="text/css" rel="stylesheet" href="css/footer.css">
		<link type="text/css" rel="stylesheet" href="css/contato.css">
	</head>

	<body>
		<div class="first-section">
			<nav class="transparent z-depth-0">
				<!-- navbar p/ versão desktop e tablet -->
				<ul class="hide-on-small-only nav-tablet-desktop">
					<li><a href="home">Página Inicial</a></li>
					<li><a href="badges.html">Galeria</a></li>
					<li><a href="collapsible.html">Edições anteriores</a></li>
					<li><a class="yellow-text text-darken-1" href="contato">Contato</a></li>
				</ul>
				<!-- sidenav p/ versão mobile -->
				<a data-target="slide-out" class="hide-on-med-and-up sidenav-trigger">
					<i class="sidenav-icon material-icons">menu</i>
				</a>
				<ul id="slide-out" class="sidenav">
					<li><a href="home">Página Inicial</a></li>
					<li><a href="badges.html">Galeria</a></li>
					<li><a href="collapsible.html">Edições anteriores</a></li>
					<li><a class="nav-mobile-active" href="contato">Contato</a></li>
				</ul>
			</nav>
			<h2>
				<span>Possui alguma dúvida?</span>
				<span>Fale conosco!</span>
			</h2>
		</div>

		<section class="white container form">
			<p class="form">
				Deixe suas informações abaixo e entraremos em contato o mais rápido possível.
			</p>
			<form class="container">
				<div class="row">
					<div class="input-field col s12 m6 l6">
						<input id="name" name="name" type="text" autocomplete="off">
						<label for="name">Nome</label>
					</div>
					<div class="input-field col s12 m6 l6">
						<input id="email" name="email" type="text" autocomplete="off">
						<label for="email">E-mail</label>
					</div>
					<div class="input-field col s12 m12 l12">
						<input id="subject" name="subject" type="text" autocomplete="off">
						<label for="subject">Assunto</label>
					</div>
					<div class="input-field col s12 m12 l12">
						<textarea id="message" name="message" class="materialize-textarea"></textarea>
						<label for="message">Mensagem</label>
					</div>
					<a class="black right waves-effect waves-light btn" id="submit">Enviar Mensagem</a>
					<div class="right preloader-wrapper small">
						<div class="spinner-layer spinner-blue">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div><div class="gap-patch">
								<div class="circle"></div>
							</div><div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>

						<div class="spinner-layer spinner-red">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div><div class="gap-patch">
								<div class="circle"></div>
							</div><div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>

						<div class="spinner-layer spinner-yellow">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div><div class="gap-patch">
								<div class="circle"></div>
							</div><div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>

						<div class="spinner-layer spinner-green">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div><div class="gap-patch">
								<div class="circle"></div>
							</div><div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</section>

		<section class="container informations">
			<div class="row">
				<h5>Informações de contato</h5>
				<div class="first-row">
					<div class="center col s6 m3 l3">
						<i class="medium material-icons">map</i>
						<h6>Endereço</h6>
						<p>Av. Athos da Silveira Ramos, 149 - Cidade Universitária, Rio de Janeiro - RJ, 21941-909</p>
					</div>
					<div class="center col s6 m3 l3">
						<i class="medium material-icons">email</i>
						<h6>E-mail</h6>
						<p>senel@poli.ufrj.br</p>
					</div>
				</div>
				<div class="center col s6 m3 l3">
					<i class="fa fa-facebook-square"></i>
					<h6>Facebook</h6>
					<a href="https://www.facebook.com/senelufrj/" target="_blank">/senelufrj</a>
				</div>
				<div class="center col s6 m3 l3">
					<i class="fa fa-instagram"></i>
					<h6>Instagram</h6>
					<a href="https://www.instagram.com/senel_ufrj/" target="_blank">@senel_ufrj</a>
				</div>
			</div>
		</section>

		<section class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.4374495564502!2d-43.23266523503524!3d-22.860293335035514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99793653897e45%3A0x71e2b3ce458e89f3!2sCentro+de+Tecnologia+da+UFRJ!5e0!3m2!1spt-BR!2sbr!4v1560742396126!5m2!1spt-BR!2sbr" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
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

		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<!-- para inicializar a sidenav -->
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.sidenav');
				var instances = M.Sidenav.init(elems);
			});
		</script>
		<!-- para tratar o submit do form de contato -->
		<script type="text/javascript">
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$('#submit').click(function(e) {
				e.preventDefault();

				var name = $("input[name=name]").val();
				var email = $("input[name=email]").val();
				var subject = $("input[name=subject]").val();
				var message = $("textarea[name=message]").val();

				$('.preloader-wrapper').addClass('active');
				$('#submit').attr('disabled', 'disabled');

				$.ajax({
					type: 'POST',
					url:'/send-mail',
					data: {
						name: name,
						email: email,
						subject: subject,
						message: message
					},
					success: function(data) {
						$('.preloader-wrapper').removeClass('active');
						$('#submit').removeAttr('disabled');
						M.toast({html: data.success})
					}
				});

			});
		</script>
	</body>
</html>
