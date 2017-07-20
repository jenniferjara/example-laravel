$(document).ready( function () {

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('input#input_text, textarea#message').characterCounter();
	$('#sector').material_select();
	
	var $cotizaHome = $('#cotiza-home');
	var $cotizapersonal = $('#cotizapersonal');
	var $formFree = $('#form-free');

	function justNumbers (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    };

	$('#employeehome').keydown(justNumbers);
	$('#phone').keydown(justNumbers);
	$('#contact_person_phone').keydown(justNumbers);

	$.validator.setDefaults({
	       ignore: []
	});

	$cotizaHome.validate({
		errorElement: 'span',
		errorClass: 'error',
		rules: {
			employeehome: {
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
		errorElement: 'span',
		errorClass: 'error',
		rules: {
			name: {
				required: true
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				digits: true
			},
			email: {
				required: true
			},
			cargo: {
				required: true
			}
		},
		messages: {
			email: {
				required: 'El correo electrónico es inválido.'
			},
			phone: {
				required: 'Por favor solo ingrese números.'
			}
		},
		errorPlacement: function(error, placement){
			if (placement.attr('name') == 'name' || 'company' || 'phone' || 'email' || 'cargo') {
				error.insertAfter(placement);
			}
		}
	});

	$formFree.validate({
		errorElement: 'span',
		rules: {
			number_ruc: {
				required: true,
				digits: true,
				maxlength: 11
			},
			company: {
				required: true
			},
			razon: {
				required: true
			},
			sector: {
				required: true
			},
			contact_person: {
				required: true
			},
			contact_person_email: {
				required: true,
			},
			contact_person_phone: {
				required: true,
				digits: true
			},
			terms: {
				required: true
			}
		},
		messages: {
			sector: {
				required: 'Debe seleccionar un sector.'
			},
			contact_person_email: {
				required: 'El correo electrónico es inválido.'
			},
			contact_person_phone: {
				required: 'Por favor solo ingrese números.'
			},
			terms: {
				required: 'Debe aceptar terminos y condiciones.'
			}
		},
		errorPlacement: function(error, placement){
			console.log(placement);
			if (placement.attr('name') === 'number_ruc' || 'company' || 'razon' || 'contact_person' || 'contact_person_phone' || 'contact_person_email') {
				error.insertAfter(placement);
			} 
			if (placement.attr('type') === 'checkbox') {
				error.insertAfter(placement.parent('.terms-box'));
			} 
			if (placement.parent('.select-box').length > 0) {
				error.insertAfter(placement.parent('.select-box'));
			}
		}
	});

	$('#cotiza-home-btn').on('click', function(e){
		e.preventDefault();

		var $employee = $('#employeehome').val();
		var $cotizaOption1 = $('#cotizaopt1');
		var $cotizaOption2 = $('#cotizaopt2');

		if ( $cotizaHome.valid() && ($employee >= 1 && $employee <= 10) ) {
			window.location.href = urlAfiliacion;

		} else if ( $cotizaHome.valid() && ($employee >= 11 && $employee <= 300) ) {
			$('#cotiza').css('height', 'auto');
			$cotizaOption1.css('display', 'block');
			$cotizaOption2.css('display', 'none');
		} else if ($cotizaHome.valid() && $employee >= 301 ) {
			$('#cotiza').css('height', 'auto');
			$('#employee').val($employee);
			$cotizaOption2.css('display', 'block');
			$cotizaOption1.css('display', 'none');
		}

	});

	$('#cotiza-personal-btn').on('click', function(e){
		e.preventDefault();
		if ($cotizapersonal.valid()) {
			console.log('ok')
		} else {
			console.log('error');
		}
	});

	$('#btn-send-free').on('click', function(e){
		e.preventDefault();
		if ($formFree.valid()) {
			console.log('ok');
		} else {
			console.log('error');
		}
	});
	

});