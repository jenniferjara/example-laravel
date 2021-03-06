@include('partials.navabarpages')

<section class="form-results valign-wrapper center-align">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="form-messages-wrap">
					<div>
						<span class="da_ico_error icons-special" style="margin-left: 20px;"></span>
					</div>
					<div>
						<p class="titles text-orange">¡Ups!</p>
						<p>Lo sentimos, no se pudo procesar tu pago.</p>
						<p>Vuelva a intentarlo.</p>
					</div>
				</div>
			</div>
			<div class="col s12">
				<div class="btn-da-wrapper">
					<a class="waves-effect btn btn-da btn-flat font-bold" href="{{ route('home.index') }}">Regresar</a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')