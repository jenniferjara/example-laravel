@extends('app')

@section('content')

@include('common.navbar2')

<section id="medicion">
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
	<div class="bg-medicion">
		<div class="wrapper-general-text bg-layout-wrap valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="center-align">
							<div><span class="da_ico_measuring icons-special"></span></div>
							<p class="titles">Mide la felicidad <br>de tus colaboradores</p>
						</div>
					</div>
					<div class="col s12">
						<div class="btn-da-box valign-wrapper">
							<a class="waves-effect waves-light btn btn-da btn-purple" href="">¡Mide hoy!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-grey height-wrapper valign-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="titles center-align">Nuestra Herramienta!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="center-align options">
						<div><span class="da_ico_test_line icons-purple-lg"></span></div>
						<p class="layout-text">Contamos con una encuesta desarrollada por psicologos expertos en felicidad en el trabajo.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div><span class="da_ico_areas_line icons-purple-lg"></span></div>
						<p class="layout-text">Puedes selecionar a qué áreas de tu empresa la quieres enviar</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div><span class="da_ico_dashboard_line icons-purple-lg"></span></div>
						<p class="layout-text">¡Ofrecemos un dashboard para que puedas revisar tus resultados!</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="wrapper-general height-wrapper valign-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">¡La felicidad es importante!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle icons-purple-sm"></span></div>
						<p>Incrementa la productividad</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle icons-purple-sm"></span></div>
						<p>Genera una relación cercana entre los colaboradores y la empresa</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle icons-purple-sm"></span></div>
						<p>Mejora el ambiente de trabajo</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="layout-btn-box valign-wrapper">
						<a class="waves-effect waves-light btn btn-da btn-purple" href="{{ route('layout.afiliacion') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">Estudios</p>
					<p>Esta herramienta está respaldada por Jorge Yamamoto, Doctor en Psicología y Antropología.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="docs-wrapper">
						<div><img class="img-common" src="{{ asset('assets/img/estudios/img_estudio1.jpg') }}" alt=""></div>
						<div class="center-align docs-wrapper-inner">
							<p class="subtitles">Estudio 1</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing. Reiciendis doloremque error.</p>
							<div class="btn-da-box">
								<a class="docs-wrapper-btn" href="{{ asset('assets/dosc/best-place-work.pdf') }}" download><i class="material-icons left">open_in_browser</i>Descargar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="docs-wrapper">
						<div><img class="img-common" src="{{ asset('assets/img/estudios/img_estudio2.jpg') }}" alt=""></div>
						<div class="center-align docs-wrapper-inner">
							<p class="subtitles">Estudio 2</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing. Reiciendis doloremque error.</p>
							<div class="btn-da-box">
								<a class="docs-wrapper-btn" href="{{ asset('assets/docs/happiness-work.pdf') }}" download><i class="material-icons left">open_in_browser</i>Descargar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="docs-wrapper">
						<div><img class="img-common" src="{{ asset('assets/img/estudios/img_estudio3.jpg') }}" alt=""></div>
						<div class="center-align docs-wrapper-inner">
							<p class="subtitles">Estudio 3</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing. Reiciendis doloremque error.</p>
							<div class="btn-da-box">
								<a class="docs-wrapper-btn" href="{{ asset('assets/docs/felices-en-el-trabajo.pdf') }}"><i class="material-icons left">open_in_browser</i>Descargar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 d-none">
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