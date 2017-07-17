$(document).ready( function () {

	$('input#input_text, textarea#message').characterCounter();
	$('select').material_select();
	
	var $cotizaForm = $('#cotiza-home');
	var $cotizapersonal = $('#cotizapersonal');

	$("#employeehome, #phone").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	
	$cotizaForm.validate({
		errorElement: 'span',
		rules: {
			'employeehome': {
				required: true,
				digits: true,
			}
		},
		errorPlacement: function(error, placement){
			if(placement.attr('name') == 'employeehome') {
				error.insertAfter(placement);
			}
		}
	});

	$cotizapersonal.validate({
		errorElement: 'p',
		errorClass: 'not-valid',
		rules: {
			'name': {
				required: true
			},
			'company': {
				required: true
			},
			'phone': {
				required: true,
				digits: true
			},
			'email': {
				required: true
			},
			'cargo': {
				required: true
			}
		},
		messages: {
			'email': {
				required: 'El correo electrónico es invalido.'
			},
			'phone': {
				required: 'Por favor solo ingrese números.'
			}
		},
		errorPlacement: function(error, placement){
			if (placement.attr('name') == 'name' || 'company' || 'phone' || 'email' || 'cargo') {
				error.insertAfter(placement);
			}
		}
	});

	$('#cotiza-home-btn').on('click', function(e){
		e.preventDefault();

		var $employee = $('#employeehome').val();
		var $cotizaOption1 = $('#cotizaopt1');
		var $cotizaOption2 = $('#cotizaopt2');

		if ($employee > 0 && $employee <= 10) {
			window.location.href = urlAfiliacion;

		} else if ( $employee <= 300 && $cotizaForm.valid() ) {
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