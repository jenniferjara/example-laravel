@extends('app')

@section('content')

@include('common.navbarlayout')

<section id="afiliacion">

	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('layout.afiliacion') }}" class="breadcrumb">Afiliación</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="center-align">
						<p class="titles">Afiliate</p>
						<p>¡Realiza tu prueba gratis!</p>
						<p>Puedes inscribir hasta 10 colaboradores</p>
					</div>
					<div class="row">
						<div class="col s12 offset-l2 l8">
							<form id="form-free" class="form-common">
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="number_ruc" id="number_ruc"" type="text" class="validate">
										<label for="number_ruc"">Número de RUC*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="company" type="text" class="validate" autocomplete="off">
										<label for="company">Nombre de la Empresa*</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12 l6">
										<input name="razon" id="text" type="text" class="validate" autocomplete="off">
										<label for="razon">Razón social*</label>
									</div>
									<div class="input-field col s12 l6">
										<div class="select-box">
			                                <select class="browser-default select-afiliate" id="sector" name="sector">
			                    				<option value="" disabled selected>Sector*</option>
			                    				<option value="1">Manager</option>
			                                    <option value="2">Developer</option>
			                                    <option value="3">Business</option>
			                    			</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="contact_person" type="text" class="validate" autocomplete="off">
										<label for="contact_person">Persona de contacto*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="contact_person_email" type="email" class="validate" autocomplete="off">
										<label for="contact_person_email">Correo electrónico de contacto*</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12 l6">
										<input id="contact_person_phone" name="contact_person_phone" type="text" class="validate" autocomplete="off">
										<label for="contact_person_phone">Teléfono*</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12">
										<div class="terms-box">
											<input name="terms" type="checkbox" id="terms" autocomplete="off">
											<label for="terms">Acepto términos y condiciones*</label>
										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
					<p class="campos-requeridos">*Campos requeridos</p>
					<div class="layout-btn-box valign-wrapper">
						<a id="btn-send-free" class="waves-effect waves-light btn btn-da btn-purple font-bold" href="">Enviar</a>
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