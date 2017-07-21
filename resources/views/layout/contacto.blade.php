@extends('app')

@section('content')

@include('common.navbar')

<section id="contacto">

	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('layout.afiliacion') }}" class="breadcrumb">Contáctanos</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="center-align">
						<p class="titles">Contáctanos</p>
						<p>Ingresa tus datos y nos comunicaremos contigo</p>
					</div>
					<div class="row">
						<div class="col s12 offset-l2 l8">
							<form id="form-contact" class="form-common">
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="name_contact" id="name_contact" type="text" class="validate">
										<label for="name_contact">Nombre*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="company_contact" id="company_contact" type="text" class="validate">
										<label for="company_contact">Empresa*</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="phone_contact" id="phone_contact" type="text" class="validate">
										<label for="phone_contact">Teléfono*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="email_contact" id="email_contact" type="email" class="validate">
										<label for="email_contact">Correo corporativo*</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="cargo_contact" id="cargo_contact" type="text" class="validate">
										<label for="cargo_contact">Puesto*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="employee_contact" id="employee_contact" type="text" class="validate">
										<label for="employee_contact">Número de colaboradores*</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="message_contact" class="materialize-textarea" data-length="120"></textarea>
										<label for="message_contact">Escribe un mensaje (opcional)</label>
									</div>
								</div>
							</form>
						</div>
					</div>
					<p class="campos-requeridos">*Campos requeridos</p>
					<div class="layout-btn-box valign-wrapper">
						<a id="btn-send-contact" class="waves-effect waves-light btn btn-da btn-violet font-bold" href="">Enviar</a>
					</div>
					<div class="layout-btn-box d-none">
						<a class="waves-effect waves-light btn btn-da btn-flat" href="{{ route('home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>	
	</div>

</section>

@include('common.footer')

@stop