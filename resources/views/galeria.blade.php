<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>SENEL - Semana da Engenharia Elétrica UFRJ</title>

		<!--Imports do css do Materialize-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!-- Import dos icons do Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="icon" href="assets/icons/senel.ico">

		<link type="text/css" rel="stylesheet" href="css/navbar.css">
		<link type="text/css" rel="stylesheet" href="css/footer.css">
        <link type="text/css" rel="stylesheet" href="css/galeria.css">
	</head>

	<body>
		<div class="first-section">
			<nav class="transparent z-depth-0">
				<!-- navbar p/ versão desktop e tablet -->
				<ul class="hide-on-small-only nav-tablet-desktop">
					<li><a href="home">Página Inicial</a></li>
					<li><a class="yellow-text text-darken-1" href="galeria">Galeria</a></li>
					<li><a href="collapsible.html">Edições anteriores</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
				<!-- sidenav p/ versão mobile -->
				<a data-target="slide-out" class="hide-on-med-and-up sidenav-trigger">
					<i class="sidenav-icon material-icons">menu</i>
				</a>
				<ul id="slide-out" class="sidenav">
					<li><a href="home">Página Inicial</a></li>
					<li><a class="nav-mobile-active" href="galeria">Galeria</a></li>
					<li><a href="collapsible.html">Edições anteriores</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
		</div>

        <div class="carousel carousel-slider center hide-on-med-and-down" id="large">

			<div class="carousel-fixed-item center middle-indicator" id="chevron">
				<div class="left">
					<a onclick="movePrevCarousel('l')" class="middle-indicator-text waves-effect waves-light content-indicator">
						<i class="material-icons left middle-indicator-text">chevron_left</i>
					</a>
				</div>

				<div class="right">
					<a onclick="moveNextCarousel('l')" class="middle-indicator-text waves-effect waves-light content-indicator">
						<i class="material-icons right middle-indicator-text">chevron_right</i>
					</a>
				</div>
			</div>

			<div class="carousel-item row">
				<div class="row col l6" id="left-column">
					<img class="materialboxed col l6" src="assets/gallery/geracao_1.jpg">
					<img class="materialboxed col l6" src="assets/gallery/hall_1.jpg">
					<img class="materialboxed col l12" src="assets/gallery/litro_18.jpg">
				</div>
				<div class="row col l6" id="right-column">
					<img class="materialboxed col l12" src="assets/gallery/transportes_8.jpg">
					<img class="materialboxed col l6" src="assets/gallery/transportes_1.jpg">
					<img class="materialboxed col l6" src="assets/gallery/litro_13.jpg">
				</div>
			</div>
			<div class="carousel-item row">
				<div class="row col l6" id="left-column">
					<img class="materialboxed col l12" src="assets/gallery/transportes_8.jpg">
					<img class="materialboxed col l6" src="assets/gallery/transportes_1.jpg">
					<img class="materialboxed col l6" src="assets/gallery/litro_13.jpg">
				</div>
				<div class="row col l6" id="right-column">
					<img class="materialboxed col l6" src="assets/gallery/geracao_1.jpg">
					<img class="materialboxed col l6" src="assets/gallery/hall_1.jpg">
					<img class="materialboxed col l12" src="assets/gallery/litro_18.jpg">
				</div>
			</div>
		</div>

		<div class="carousel carousel-slider center hide-on-small-only hide-on-large-only" id="med">
			
			<div class="carousel-fixed-item center middle-indicator" id="chevron">
				<div class="left">
					<a onclick="movePrevCarousel('m')" class="middle-indicator-text waves-effect waves-light content-indicator">
						<i class="material-icons left middle-indicator-text">chevron_left</i>
					</a>
				</div>

				<div class="right">
					<a onclick="moveNextCarousel('m')" class="middle-indicator-text waves-effect waves-light content-indicator">
						<i class="material-icons right middle-indicator-text">chevron_right</i>
					</a>
				</div>
			</div>
		
			<div class="carousel-item row">
				<img class="materialboxed col m6" src="assets/gallery/geracao_1.jpg" id="left-column">
				<img class="materialboxed col m6" src="assets/gallery/hall_1.jpg">
				<img class="materialboxed col m12" src="assets/gallery/litro_18.jpg">
			</div>
			<div class="carousel-item row">
				<img class="materialboxed col m12" src="assets/gallery/transportes_8.jpg">
				<img class="materialboxed col m6" src="assets/gallery/transportes_1.jpg" id="left-column">
				<img class="materialboxed col m6" src="assets/gallery/litro_13.jpg">
			</div>
			<div class="carousel-item row">
				<img class="materialboxed col m12" src="assets/gallery/transportes_8.jpg">
				<img class="materialboxed col m6" src="assets/gallery/transportes_1.jpg" id="left-column">
				<img class="materialboxed col m6" src="assets/gallery/litro_13.jpg">
			</div>
			<div class="carousel-item row">
				<img class="materialboxed col m6" src="assets/gallery/geracao_1.jpg" id="left-column">
				<img class="materialboxed col m6" src="assets/gallery/hall_1.jpg">
				<img class="materialboxed col m12" src="assets/gallery/litro_18.jpg">
			</div>
		</div>
		
		<div class="carousel carousel-slider center hide-on-med-and-up" id="small">
			
			<div class="carousel-fixed-item center middle-indicator" id="chevron">
				<div class="left">
					<a onclick="movePrevCarousel('s')" class="middle-indicator-text waves-effect waves-light content-indicator">
						<i class="material-icons left middle-indicator-text">chevron_left</i>
					</a>
				</div>

				<div class="right">
					<a onclick="moveNextCarousel('s')" class="middle-indicator-text waves-effect waves-light content-indicator">
						<i class="material-icons right middle-indicator-text">chevron_right</i>
					</a>
				</div>
			</div>
		
			<div class="carousel-item row">
				<img class="materialboxed col s12" src="assets/gallery/geracao_1.jpg">
				<img class="materialboxed col s12" src="assets/gallery/hall_1.jpg">
			</div>
			<div class="carousel-item row">
				<img class="materialboxed col s12" src="assets/gallery/litro_18.jpg">
				<img class="materialboxed col s12" src="assets/gallery/transportes_8.jpg">
			</div>
			<div class="carousel-item row">
				<img class="materialboxed col s12" src="assets/gallery/transportes_1.jpg">
				<img class="materialboxed col s12" src="assets/gallery/litro_13.jpg">
			</div>
		</div>

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
                // inicialização da sidenav
				var elemSidenav = document.querySelectorAll('.sidenav');
				var instanceSidenav = M.Sidenav.init(elemSidenav);

                // inicialização do carousel
                var elemCarousel = document.querySelectorAll('.carousel');
                var optionsCarousel = {
                    fullWidth: true,
                    indicators: true
                };
                var instanceCarousel = M.Carousel.init(elemCarousel, optionsCarousel);

                // inicialização das imagens
                var elemsBox = document.querySelectorAll('.materialboxed');
				var optionsBox = {
					onOpenStart: function() {
						var chevron = document.getElementById('chevron');
						chevron.classList.add('hidden');
						stopPlay();
					},
					onCloseStart: function() {
						var chevron = document.getElementById('chevron');
						chevron.classList.remove('hidden');
					}
				}
                var instanceBox = M.Materialbox.init(elemsBox, optionsBox);
			});
		</script>
		<!-- funções do carousel -->
		<script type="text/javascript">
			var play = setInterval(autoplay, 6000);

			// pegando os carousels de cada dispositivo
			function getCarouselInstances() {
				var elem = document.querySelector('#large');
				var instance1 = M.Carousel.getInstance(elem);

				var elem = document.querySelector('#med');
				var instance2 = M.Carousel.getInstance(elem);
				
				var elem = document.querySelector('#small');
				var instance3 = M.Carousel.getInstance(elem);

				return [
					instance1,
					instance2,
					instance3
				];
			}

			// starta o autoplay 
			function autoplay() {
				var instances = getCarouselInstances();

				instances[0].next(1);
				instances[1].next(1);
				instances[2].next(1);
			}

			// para o autoplay
			function stopPlay() {
				if(play) {
					clearInterval(play);
					play = false;
				}
			}

			// move o carousel para direita
			function moveNextCarousel(dispositive) {
				stopPlay();

				var instances = getCarouselInstances();

				switch(dispositive) {
					case 'l':
						instances[0].next(1);
						break;
					case 'm':
						instances[1].next(1);
						break;
					default:
						instances[2].next(1);
						break;
				}
    		}

			// move o carousel para esquerda
    		function movePrevCarousel() {
				stopPlay();

				var instances = getCarouselInstances();

				switch(dispositive) {
					case 'l':
						instances[0].prev(1);
						break;
					case 'm':
						instances[1].prev(1);
						break;
					default:
						instances[2].prev(1);
						break;
				}
    		}
		</script>
	</body>
</html>
