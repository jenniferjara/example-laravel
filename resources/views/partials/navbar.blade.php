<header id="nav-bar" class="nav-bar">
	<div class="row">
		<div class="col s12">
			<nav class="nav-top">
				<a class="nav-logo" href="{{ route('home.index') }}">
					<span class="da_logo_da"></span>
				</a>


				<ul class="right nav-lineal">
					<li class="nav-lineal-opt"><a id="go-products-home" class="nav-lineal-link" href="#productos">Nuestro Producto</a></li>
					<li class="nav-lineal-opt"><a class="nav-lineal-link" href="{{ route('pages.nosotros') }}">Nosotros</a></li>
					<li class="nav-lineal-opt"><a class="nav-lineal-link" href="{{ route('pages.contacto') }}">Contáctanos</a></li>
					<li class="nav-lineal-opt"><a data-activates='dropdown1' class="login dropdown-button"><span class="da_ico_user nav-lineal-icon-login"></span>Inicia sesión</a></li>
				</ul>
				<div class="nav-collapse d-none">
					<a data-activates='dropdown2' class="nav-perfil button-collapse">
						<i class="da_ico_user nav-perfil-icon"></i>
					</a>
					<a data-activates="slide-out" class="nav-barra button-collapse">
						<i class="material-icons">menu</i>
					</a>
				</div>
			</nav>
		</div>
	</div>
</header>

<ul id="slide-out" class="side-nav d-none">
	<li><a class="go-products" href="{{ route('home.index') }}#productos">Conoce Dá</a></li>
	<li><a href="{{ route('pages.nosotros') }}">Acerca de nosotros</a></li>
	<li><a href="{{ route('pages.beneficio')}}">Beneficios</a></li>
	<li><a href="{{ route('pages.reconocimiento') }}">Reconocimientos</a></li>
	<li><a href="{{ route('pages.medicion') }}">Medición</a></li>
	<li><a class="go-cotiza" href="{{ route('home.index') }}#cotiza">Cotiza tu plan</a></li>
	<li><a href="{{ route('pages.afiliacion') }}">Pruébalo gratis</a></li>
	<li><a class="waves-effect" href="{{ route('pages.contacto') }}">Contáctanos</a></li>
</ul>

<ul id='dropdown1' class='dropdown-content d-none'>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como empresa</a></li>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como colaborador</a></li>
</ul>

<ul id='dropdown2' class='dropdown-content'>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como empresa</a></li>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como colaborador</a></li>
</ul>