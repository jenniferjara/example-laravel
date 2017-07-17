@extends('app')

@section('content')

@include('common.navbar')

<section id="afiliacion">

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
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="cotiza-personal-title">
					<p>Afiliate</p>
					<p>¡Realiza tu prueba gratis!</p>
					<p>Puedes inscribir hasta 10 colaboradores</p>
				</div>
				<form class="home-form">
					<div class="row">
						<div class="input-field col s12">
							<input name="name" id="name" type="text" class="validate">
							<label for="name">Nombre*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="company" id="company" type="text" class="validate">
							<label for="company">Empresa*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="phone" id="phone" type="number" class="validate">
							<label for="phone">Teléfono*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="email" id="email" type="email" class="validate">
							<label for="email">Correo corporativo*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="cargo" id="cargo" type="text" class="validate">
							<label for="cargo">Cargo*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="employee" type="text" class="validate">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="message" class="materialize-textarea" data-length="120"></textarea>
							<label for="message">Escribe un mensaje (opcional)</label>
						</div>
					</div>
				</form>
				<p>*Campos requeridos</p>
				<div class="btn-da-box">
					<a id="cotiza-personal-btn" class="waves-effect waves-light btn btn-da btn-1" href="">Enviar</a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('common.footer')

@stop