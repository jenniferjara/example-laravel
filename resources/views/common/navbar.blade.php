<header id="nav-bar">
	<div class="row">
		<div class="col s12">
			<nav class="nav-top">
				<a class="nav-logo" href="{{ route('home.index') }}">
					<span class="da_logo_da"></span>
				</a>


				<ul class="right nav-lineal">
					<li><a href="#productos">Nuestro Producto</a></li>
					<li><a href="{{ route('layout.nosotros') }}">Nosotros</a></li>
					<li> <a href="{{ route('layout.contacto') }}">Contáctanos</a></li>
					<li><a data-activates="slide-out" class="login" href=""><span class="da_ico_user" style="margin-right: 5px;"></span>Inicia sesión</a></li>
				</ul>
				<div class="nav-collapse">
					<a data-activates="slide-out" class="nav-perfil button-collapse">
						<i class="da_ico_user nav-perfil-icon"></i>
					</a>
					<a data-activates="slide-out2" class="nav-barra button-collapse">
						<i class="material-icons">menu</i>
					</a>
				</div>
			</nav>
		</div>
	</div>
</header>

<ul id="slide-out" class="side-nav">
	{{-- <li>
		<div class="user-view">
			<div class="background">
				<img src="images/office.jpg">
			</div>
			<a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
			<a href="#!name"><span class="white-text name">John Doe</span></a>
			<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div>
	</li>
	<li>
	<a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
	<li><a href="#!">Second Link</a></li>
	<li><div class="divider"></div></li>
	<li><a class="subheader">Subheader</a></li>
	<li><a class="waves-effect" href="#!">Third Link With Waves</a></li> --}}
</ul>

<ul id="slide-out2" class="side-nav">
	{{-- <li>
		<div class="user-view">
			<div class="background">
				<img src="images/office.jpg">
			</div>
			<a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
			<a href="#!name"><span class="white-text name">John Doe</span></a>
			<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div>
	</li>
	<li>
	<a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
	<li><a href="#!">Second Link</a></li>
	<li><div class="divider"></div></li>
	<li><a class="subheader">Subheader</a></li>
	<li><a class="waves-effect" href="#!">Third Link With Waves</a></li> --}}
</ul>