@extends('app')

@section('content')

@include('common.navbar')

<section id="reconocimiento">
	<div class="layout-home">
		<nav class="nav-breadcrumbs">
			<div class="nav-wrapper">
				<div class="row">
					<div class="col s12">
						<a href="{{ route('home.index') }}" class="breadcrumb">Inicio</a>
						<a href="{{ route('layout.reconocimiento') }}" class="breadcrumb">Reconocimientos</a>
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
							<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="Icono">
							<p class="titles">¡Dá! Reconocimientos</p>
							<p class="layout-text">Crea cultura de reconocimiento. Ten colaboradores más felices y productivos.</p>
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
					<p class="titles center-align">¡Así funciona!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="center-align options">
						<div class="circle-option">1</div>
						<p class="layout-text">Adquiere paquetes de KMS. LATAM Pass.</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align options">
						<div class="circle-option">2</div>
						<p class="layout-text">Selecciona colaborador</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align options">
						<div class="circle-option">3</div>
						<p class="layout-text">Reconocelo con Kms y un mensaje <br>personalizado.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="layout-body bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">¡El reconocimiento es importante!</p>
				</div>
			</div>
			<div class="row">

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Refuerza conductas positivas</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Motiva a los equipos de trabajo</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Contribuye a alcanzar las metas establecidas</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Obtén reportes de reconocimiento y evalua el desempeño de tus colaboradores</p>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col s12">
					<div class="btn-da-box">
						<a class="waves-effect waves-light btn btn-da btn-1" href="">Contáctanos</a>
					</div>
					<div class="btn-da-box">
						<a class="waves-effect waves-light btn btn-da btn-2" href="{{ route('home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('common.footer')

@stop