<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col s6 l4">
				<p class="footer-titles">Productos</p>
				<a href="{{ route('pages.beneficio') }}">Beneficios</a>
				<a href="{{ route('pages.reconocimiento') }}">Reconocimientos</a>
				<a href="{{ route('pages.medicion') }}">Medición</a>
			</div>

			<div class="col s6 l4">
				<p class="footer-titles">Contacto</p>
				<a class="go-cotiza" href="{{ route('home.index') }}#cotiza">Cotizar</a>
				<a href="{{ route('pages.contacto') }}">Consulta</a>
				<a href="{{ route('pages.free') }}">Prueba gratis</a>
			</div>

			<div class="col s12 l4">
				<p class="footer-titles">La Compañia</p>
				{{-- <p>Acerca de</p> --}}
				<a href="{{ route('pages.nosotros') }}">Acerca de</a>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p>Copyright &copy; 2017 Dá. All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
	<img class="footer-tilde" src="{{ asset('assets/img/img_tilde.png') }}" alt="tilde">
</section>