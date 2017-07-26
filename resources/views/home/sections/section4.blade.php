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
					<div class="btn-da-wrapper">
						<a id="cotiza-home-btn" class="waves-effect btn btn-da btn-purple font-bold" href="">¡Cotizar ya!</a>
					</div>
				</div>

				<div class="col s12">
					<div class="btn-da-wrapper">
						<a class="waves-effect btn btn-da btn-cyan" href="{{ route('pages.free') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

@include('home.cotiza.option1')
@include('home.cotiza.option2')

@include('partials.loader')