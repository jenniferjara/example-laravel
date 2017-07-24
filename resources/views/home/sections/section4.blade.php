<section id="cotiza" class="go-to-section" data-section-name="cotiza">
	<div class="cotiza-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="titles left-center">¡Incrementa la felicidá <br>de tus colaboradores!</p>
					<p class="subtitles left-center">Cotiza tu plan</p>
					<form id="cotiza-home" class="form-common">
						<div class="row">
							<div class="input-field col l10 s12">
								<input id="employeehome" type="text" class="validate" name="employeehome"  autocomplete="off">
								<label for="employeehome">Número de colaboradores*</label>
							</div>
						</div>
					</form>
				</div>
				<div class="col s12">
					<div class="btn-da-box">
						<a id="cotiza-home-btn" class="waves-effect btn btn-da btn-purple font-bold" href="">¡Cotizar ya!</a>
					</div>
				</div>

				<div class="col s12">
					<div class="btn-da-box">
						<a class="waves-effect btn btn-da btn-cyan" href="{{ route('layout.afiliacion') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section id="cotizaopt1" class="cotizaopt1 bg-grey wrapper-general" style="display: none;">
	<div class="container center-align">
		<div class="row">
			<div class="col s12">
				<div class="cotiza-box-300">
					<p>El costo de tu plan es:</p>
					<p class="number"><span>S/</span><span>300</span></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 l4">
				<div class="cotiza-300-text-box">
					<p class="subtitles">Reconocimientos</p>
					<div class="cotiza-300-text">
						<p>- Reconocimientos a colaboradores en específico</p>
						<p>- Compra y asignación de Kms</p>
						<p>- Reportes</p>
					</div>
				</div>
			</div>

			<div class="col s12 l4">
				<div class="cotiza-300-text-box">
					<p class="subtitles">Beneficios</p>
					<div class="cotiza-300-text">
						<p>- Selecciona beneficios que te ofrece ¡Dá!</p>
						<p>- Gestiona y crea beneficios propios.</p>
						<p>- Crear grupos para administrar beneficios</p>
						<p>- Reportes</p>
					</div>
				</div>
			</div>
			<div class="col s12 l4">
				<div class="cotiza-300-text-box">
					<p class="subtitles">Medición</p>
					<div class="cotiza-300-text">
						<p>- Encuestas</p>
						<p>- Dashboard de respuestas</p>
						<p>- Reportes de felicidad</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="btn-da-box valign-wrapper">
				<a class="waves-effect waves-light btn btn-da btn-purple font-bold" href="#">¡Lo quiero!</a>
			</div>
		</div>
	</div>
</section>

<section id="cotizaopt2" class="cotizaopt2 bg-grey wrapper-general" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="cotiza-personal-title">
					<p>¿Quieres un trato más personalizado?</p>
					<p>¡Escríbenos!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 offset-l2 l8">
				<form id="cotizapersonal" class="form-common">
					<div class="row">
						<div class="input-field col s12 l6">
							<input name="name" id="name" type="text" class="validate" autocomplete="off">
							<label for="name">Nombre*</label>
						</div>
						<div class="input-field col s12 l6">
							<input name="company" id="company" type="text" class="validate" autocomplete="off">
							<label for="company">Empresa*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
							<input name="phone" id="phone" type="text" class="validate" autocomplete="off">
							<label for="phone">Teléfono*</label>
						</div>
						<div class="input-field col s12 l6">
							<input name="email" id="email" type="email" class="validate" autocomplete="off">
							<label for="email">Correo corporativo*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
							<input name="cargo" id="cargo" type="text" class="validate" autocomplete="off">
							<label for="cargo">Cargo*</label>
						</div>
						<div class="input-field col s12 l6">
							<input id="employee" type="text" class="validate" autocomplete="off">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="message" class="materialize-textarea" data-length="120" autocomplete="off"></textarea>
							<label for="message">Escribe un mensaje (opcional)</label>
						</div>
					</div>
				</form>
			</div>

			<div class="col s12">
				<p class="center-left">*Campos requeridos</p>
				<div class="btn-da-box valign-wrapper">
					<a id="cotiza-personal-btn" class="waves-effect waves-light btn btn-da btn-purple font-bold" href="">Enviar</a>
				</div>
			</div>
		</div>
	</div>
</section>