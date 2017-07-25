@extends('app')

@section('content')

	@include('partials.navbar')

	@include('home.sections.section1')
	@include('home.sections.section2')
	@include('home.sections.section3')
	@include('home.sections.section4')
	@include('home.sections.section5')

	@include('partials.footer')

@stop