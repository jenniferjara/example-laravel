<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col s6">
				<p class="footer-titles">Productos</p>
				<a href="{{ route('layout.beneficio') }}">Beneficios</a>
				<a href="{{ route('layout.reconocimiento') }}">Reconocimientos</a>
				<a href="{{ route('layout.medicion') }}">Medición</a>
			</div>
			<div class="col s6">
				<p class="footer-titles">Contacto</p>
				<a href="">Cotizar</a>
				<a href="">Consulta</a>
				<a href="{{ route('layout.afiliacion') }}">Prueba gratis</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<p class="footer-titles">La Compañia</p>
				{{-- <p>Acerca de</p> --}}
				<a href="{{ route('layout.nosotros') }}">Acerca de</a>
			</div>
		</div>
		<div class="row">
			<div class="footer-bottom">
				<div class="col s12">
					<p>Copyright &copy; 2017 Dá. All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
</section>