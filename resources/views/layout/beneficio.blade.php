@extends('app')

@section('content')

@include('common.navbar')

<section id="beneficio">
	<div class="layout-home">
		<nav class="nav-breadcrumbs">
			<div class="nav-wrapper">
				<div class="row">
					<div class="col s12">
						<a href="{{ route('home.index') }}" class="breadcrumb">Inicio</a>
						<a href="{{ route('layout.beneficio') }}" class="breadcrumb">Beneficios</a>
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
							<p class="titles">¡Dá! Beneficios</p>
							<p class="layout-text">Dale a tus colaboradores los mejores beneficios.</p>
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
						<p class="layout-text">Escoge los beneficios que ofrecemos.</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align options">
						<div class="circle-option">2</div>
						<p class="layout-text">Carga beneficios propios.</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align options">
						<div class="circle-option">3</div>
						<p class="layout-text">Crea grupo de colaboradores para dirigir mejor tus beneficios.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="layout-body bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">¡Es importante dar beneficios!</p>
				</div>
			</div>
			<div class="row">

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Es un ahorro a tus colaboradores</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Genera un compromiso fortaleciendo un vinculo entre empresa y colaborador</p>
					</div>
				</div>

				<div class="col s12">
					<div class="center-align layout-box">
						<img class="home-icons" src="{{ asset('assets/img/icono2.png') }}" alt="">
						<p class="layout-subtitles">Los motiva y hace más felices</p>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="layout-body">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="benef-slider">
						<div class="center-align">
							<img class="home-icons" src="{{ asset('assets/img/icono.png')}}" alt="logo-viajes">
							<p class="benef-slider-title">¡Dá! Viajes</p>
						</div>
						<div class="benef-slider-bottom">
							<ul class="bxslider">
								<li>
									<div class="benef-slider-box">
										<div class="benef-slider-options">Logo 1</div>
										<div class="benef-slider-options">Logo 2</div>
									</div>
								</li>
								<li>
									<div class="benef-slider-box">
										<div class="benef-slider-options">Logo 3</div>
										<div class="benef-slider-options">Logo 4</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="benef-slider">
						<div class="center-align">
							<img class="home-icons" src="{{ asset('assets/img/icono.png') }}" alt="logo-educacion">
							<p class="benef-slider-title">¡Dá! Educación</p>
						</div>
						<div class="benef-slider-bottom">
							<ul class="bxslider">
								<li>
									<div class="benef-slider-box">
										<div class="benef-slider-options">Logo 1</div>
										<div class="benef-slider-options">Logo 2</div>
									</div>
								</li>
								<li>
									<div class="benef-slider-box">
										<div class="benef-slider-options">Logo 3</div>
										<div class="benef-slider-options">Logo 4</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="benef-slider">
						<div class="center-align">
							<img class="home-icons" src="{{ asset('assets/img/icono.png') }}" alt="logo-bienestar">
							<p class="benef-slider-title">¡Dá! Bienestar</p>
						</div>
						<div class="benef-slider-bottom">
							<ul class="bxslider">
								<li>
									<div class="benef-slider-box">
										<div class="benef-slider-options">Logo 1</div>
										<div class="benef-slider-options">Logo 2</div>
									</div>
								</li>
								<li>
									<div class="benef-slider-box">
										<div class="benef-slider-options">Logo 3</div>
										<div class="benef-slider-options">Logo 4</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			
			<div class="row">
				<div class="col s12">
					<div class="btn-da-box">
						<a class="waves-effect waves-light btn btn-da btn-1" href="">¡Pruébalo gratis hoy!</a>
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