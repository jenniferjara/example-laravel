<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col s6 l4">
				<p class="footer-titles">Productos</p>
				<a href="{{ route('layout.beneficio') }}">Beneficios</a>
				<a href="{{ route('layout.reconocimiento') }}">Reconocimientos</a>
				<a href="{{ route('layout.medicion') }}">Medición</a>
			</div>

			<div class="col s6 l4">
				<p class="footer-titles">Contacto</p>
				<a id="go-cotiza" href="{{ route('home.index') }}#cotiza">Cotizar</a>
				<a>Consulta</a>
				<a href="{{ route('layout.afiliacion') }}">Prueba gratis</a>
			</div>

			<div class="col s12 l4">
				<p class="footer-titles">La Compañia</p>
				{{-- <p>Acerca de</p> --}}
				<a href="{{ route('layout.nosotros') }}">Acerca de</a>
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