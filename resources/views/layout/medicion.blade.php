@extends('app')

@section('content')

@include('common.navbar')

<section id="medicion">
	<div class="layout-home">
		<nav class="nav-breadcrumbs">
			<div class="nav-wrapper">
				<div class="row">
					<div class="col s12">
						<a href="{{ route('home.index') }}" class="breadcrumb">Inicio</a>
						<a href="{{ route('layout.medicion') }}" class="breadcrumb">Medición</a>
					</div>
				</div>
			</div>
		</nav>
		<div style="height: 200px; background-color: #c5c5c5;"></div>
		<div class="layout-home-text">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="center-align home-box">
							<img class="home-icons" src="{{ asset('assets/img/icono.png') }}" alt="Icono">
							<p class="title-home">Mide la felicidad <br>de tus colaboradores</p>
						</div>
						<div class="btn-da-box">
							<a class="waves-effect waves-light btn btn-da btn-2" href="">¡Mide hoy!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="layout-body bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="title-home center-align">Nuestra Herramienta!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="center-align options">
						<img class="home-icons" src="{{asset('assets/img/icono.png') }}" alt="">
						<p class="layout-text">Contamos con una encuesta desarrollada por psicologos expertos en felicidad en el trabajo.</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align options">
						<img class="home-icons" src="{{asset('assets/img/icono.png') }}" alt="">
						<p class="layout-text">Puedes selecionar a qué áreas de tu empresa la quieres enviar</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align options">
						<img class="home-icons" src="{{asset('assets/img/icono.png') }}" alt="">
						<p class="layout-text">¡Ofrecemos un dashboard para que puedas revisar tus resultados!</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="layout-body bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="title-home">¡La felicidad es importante!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="titles">Incrementa la productividad</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="titles">Genera una relación cercana entre los colaboradores y la empresa</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="titles">Mejora el ambiente de trabajo</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="layout-btn-box">
						<a class="waves-effect waves-light btn btn-da btn-2" href="">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="layout-body">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="title-home">Estudios</p>
					<p>Esta herramienta está respaldada por Jorge Yamamoto, Doctor en Psicología y Antropología.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="home-docs">
						<div style="height: 150px; background-color: #c5c5c5;"></div>
						<div class="center-align home-docs-box">
							<p class="titles">Estudio 1</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing. Reiciendis doloremque error.</p>
							<div class="btn-da-box">
								<a class="home-btn-docs" href=""><i class="material-icons left">open_in_browser</i>Descargar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="home-docs">
						<div style="height: 150px; background-color: #c5c5c5;"></div>
						<div class="center-align home-docs-box">
							<p class="titles">Estudio 2</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing. Reiciendis doloremque error.</p>
							<div class="btn-da-box">
								<a class="home-btn-docs" href=""><i class="material-icons left">open_in_browser</i>Descargar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="home-docs">
						<div style="height: 150px; background-color: #c5c5c5;"></div>
						<div class="center-align home-docs-box">
							<p class="titles">Estudio 3</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing. Reiciendis doloremque error.</p>
							<div class="btn-da-box">
								<a class="home-btn-docs" href=""><i class="material-icons left">open_in_browser</i>Descargar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="layout-btn-box">
						<a class="waves-effect waves-light btn btn-da btn-2" href="{{ route('home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('common.footer')
@stop