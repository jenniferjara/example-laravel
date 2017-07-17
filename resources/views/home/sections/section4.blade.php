<section id="cotiza">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<p class="titles center-align">¡Incrementa la felicidá <br>de tus colaboradores!</p>
			</div>
		</div>

		<div class="row">
			<div class="col s12 center-align">
				<p class="home-subtitle">Cotiza tu plan</p>
			</div>
			<div class="col s12">
				<form id="cotiza-home" class="home-form">
					<div class="row">
						<div class="input-field col s12">
							<input id="employeehome" type="number" class="validate" name="employeehome">
							<label for="employeehome">Número de colaboradores*</label>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<div class="btn-da-box">
					<a id="cotiza-home-btn" class="waves-effect waves-light btn btn-da btn-1" href="">¡Cotizar ya!</a>
				</div>
			</div>

			<div id="cotizaopt1" class="col s12" style="display: none;">
				<div class="cotiza-box-300">
					<p>El costo de tu plan es:</p>
					<p class="number"><span>S/</span><span>300</span></p>
				</div>
				<div class="cotiza-300-text-box center-align">
					<p class="home-subtitle">Incluye</p>

					<div class="cotiza-300-text-box">
						<p class="home-subtitle">Reconocimientos</p>
						<div class="cotiza-300-text">
							<p>- Reconocimientos a colaboradores en específico</p>
							<p>- Compra y asignación de Kms</p>
							<p>- Reportes</p>
						</div>
					</div>

					<div class="cotiza-300-text-box">
						<p class="home-subtitle">Beneficios</p>
						<div class="cotiza-300-text">
							<p>- Selecciona beneficios que te ofrece ¡Dá!</p>
							<p>- Gestiona y crea beneficios propios.</p>
							<p>- Crear grupos para administrar beneficios</p>
							<p>- Reportes</p>
						</div>
					</div>

					<div class="cotiza-300-text-box">
						<p class="home-subtitle">Medición</p>
						<div class="cotiza-300-text">
							<p>- Encuestas</p>
							<p>- Dashboard de respuestas</p>
							<p>- Reportes de felicidad</p>
						</div>
					</div>
				</div>
				<div class="btn-da-box">
					<a class="waves-effect waves-light btn btn-da btn-1" href="">¡Lo quiero!</a>
				</div>
			</div>

			<div id="cotizaopt2" class="col s12" style="display: none;">
				<div class="cotiza-personal-title">
					<p>¿Quieres un trato más personalizado?</p>
					<p>¡Escríbenos!</p>
				</div>
				<form id="cotizapersonal" class="home-form">
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

			<div class="col s12">
				<div class="btn-da-box">
					<a class="waves-effect waves-light btn btn-da btn-2" href="{{ route('layout.afiliacion') }}">¡Pruébalo gratis hoy!</a>
				</div>
			</div>
		</div>
	</div>
</section>