@extends('app')

@section('content')

@include('common.navbarlayout')

<section id="beneficio">
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
	
	<div class="bg-beneficio">
		<div class="bg-layout-wrap wrapper-general-text valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col offset-l2 l8 s12">
						<div class="center-align home-wrapper">
							<div><span class="da_ico_benefits icons-special"></span></div>
							<p class="titles text-purple">¡Dá! Beneficios</p>
							<p class="layout-text">Dale a tus colaboradores los mejores beneficios.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="titles text-purple center-align">¡Así funciona!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">1</div>
						<p class="layout-text">Escoge los beneficios que ofrecemos.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">2</div>
						<p class="layout-text">Carga beneficios propios.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">3</div>
						<p class="layout-text">Crea grupo de colaboradores para dirigir mejor tus beneficios.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="wrapper-general bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">¡Es importante dar beneficios!</p>
				</div>
			</div>
			<div class="row">

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle icons-purple-sm"></span></div>
						<p class="layout-text">Es un ahorro a tus colaboradores</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle icons-purple-sm"></span></div>
						<p class="layout-text">Genera un compromiso fortaleciendo un vinculo entre empresa y colaborador</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle icons-purple-sm"></span></div>
						<p class="layout-text">Los motiva y hace más felices</p>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12 l4">
					<div class="benef-slider">
						<div class="center-align">
							<div><span class="da_ico_travel icons-purple-sm"></span></div>
							<p class="titles text-purple">¡Dá! Viajes</p>
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

				<div class="col s12 l4">
					<div class="benef-slider">
						<div class="center-align">
							<div><span class="da_ico_education icons-purple-sm"></span></div>
							<p class="titles text-purple">¡Dá! Educación</p>
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

				<div class="col s12 l4">
					<div class="benef-slider">
						<div class="center-align">
							<div><span class="da_ico_health icons-purple-sm"></span></div>
							<p class="titles text-purple">¡Dá! Bienestar</p>
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
					<div class="btn-da-box valign-wrapper">
						<a class="waves-effect waves-light btn btn-da btn-purple font-bold" href="{{ route('layout.afiliacion') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
				<div class="col s12">
					<div class="btn-da-box d-none">
						<a class="waves-effect waves-light btn btn-da btn-flat" href="{{ route('home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@include('common.footer')

@stop