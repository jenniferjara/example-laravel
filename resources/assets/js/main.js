$(document).ready( function () {

	$('input#input_text, textarea#message').characterCounter();
	
	var $cotizaForm = $('#cotiza-home');
	var $cotizapersonal = $('#cotizapersonal');
	
	$cotizaForm.validate({
		errorElement: 'span',
		rules: {
			employeehome: {
				required: true,
				digits: true
			}
		},
		errorPlacement: function(error, placement){
			if(placement.attr('name') == 'employeehome') {
				error.insertAfter(placement).next('<i class="material-icons">add</i>');
			}
		}
	});

	$('#employeehome').keydown(function(){

	});

	$cotizapersonal.validate({
		errorElement: 'span',
		rules: {
			name: {
				required: true
			},
			company: {
				required: true
			},
			phone: {
				required: true
			},
			email: {
				required: true
			},
			cargo: {
				required: true
			},
			errorPlacement: function(error, placement){
				if (placement.attr('name') == 'name' || 'company' || 'phone' || 'email' || 'cargo') {
					error.insertAfter(placement);
				}
			}

		}
	});

	$('#cotiza-home-btn').on('click', function(e){
		e.preventDefault();

		var $employee = $('#employeehome').val();
		var $cotizaOption1 = $('#cotizaopt1');
		var $cotizaOption2 = $('#cotizaopt2');

		if ( $employee <= 300 && $cotizaForm.valid() ) {
			$('#cotiza').css('height', 'auto');
			$cotizaOption1.css('display', 'block');
			$cotizaOption2.css('display', 'none');
		} else if ( $employee >= 301 && $cotizaForm.valid() ) {
			$('#cotiza').css('height', 'auto');
			$('#employee').val($employee);
			$cotizaOption2.css('display', 'block');
			$cotizaOption1.css('display', 'none');
		}
	});

	$('#cotiza-personal-btn').on('click', function(e){
		e.preventDefault();
		$cotizapersonal.valid();
	});

});