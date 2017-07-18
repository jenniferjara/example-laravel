@extends('app')

@section('content')

@include('common.navbar')

<section id="nosotros">
	<div class="layout-home">
		<nav class="nav-breadcrumbs">
			<div class="nav-wrapper">
				<div class="row">
					<div class="col s12">
						<a href="{{ route('home.index') }}" class="breadcrumb">Inicio</a>
						<a href="{{ route('layout.nosotros') }}" class="breadcrumb">Acerca de nosotros</a>
					</div>
				</div>
			</div>
		</nav>
		<div style="height: 200px; background-color: #c5c5c5;"></div>
		<div class="layout-home-text">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<p class="title-home">"La felicidad como herramienta de transformación mejora el rendimiento de tus colaboradores, refuerza la cultura y contribuye la conexión de los equipos de trabajo."</p>
						<br>
						<p class="text-orange">Giacomo Zolezzi, GG</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="layout-body bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="center-align titles">Nuestro producto</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="center-align home-box">
						<div><span class="da_ico_recognition icons-violet-lg"></span></div>
						<p class="home-subtitle">Reconocimientos</p>
						<p>Reconoce a tus colaboradores con KMS. <br>LATAM Pass</p>
						<a class="home-link" href="{{ route('layout.reconocimiento') }}">Leer más</a>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align home-box">
						<div><span class="da_ico_benefits icons-violet-lg"></span></div>
						<p class="home-subtitle">Beneficios</p>
						<p>Queremos que des experiencias enfocadas <br>en educación, viajes y bienestar.</p>
						<a class="home-link" href="{{ route('layout.beneficio') }}">Leer más</a>
					</div>
				</div>
				
				<div class="col s12">
					<div class="center-align home-box">
						<div><span class="da_ico_measuring icons-violet-lg"></span></div>
						<p class="home-subtitle">Medición</p>
						<p>Gestiona la felicidad y vuelve más productivo <br>a tu equipo.</p>
						<a class="home-link" href="{{ route('layout.medicion') }}">Leer más</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="layout-body">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align about-perfil">
					<p class="titles">Fundadores</p>
				</div>
			</div>
			<div class="row">
				<div class="center-align about-perfil">
					<div class="col s6">
						<div class="about-perfil-pic"></div>
						<div class="about-perfil-text">
							<p>Yoel Chlimper</p>
							<p>Gerente Genreal</p>
						</div>
					</div>
					<div class="col s6">
						<div class="about-perfil-pic"></div>
						<div class="about-perfil-text">
							<p>Giacomo Zolezzi</p>
							<p>Gerente General</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color: grey; height: 200px;"></div>
	<div class="layout-body">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="home-subtitle">¡Trabaja con nostros!</p>
					<p>Si quieres formar parte de nuestro equipo, <br>envíanos tu CV a:</p>
					<p class="contact-email">Trabajaconnostros&commat;da.pe</p>
				</div>
				<div class="col s12">
					<div class="layout-btn-box">
						<a class="waves-effect waves-light btn btn-da btn-flat" href="{{ route('home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('common.footer')

@stop
