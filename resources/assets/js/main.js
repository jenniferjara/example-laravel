$(document).ready( function () {

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('input#input_text, textarea#message').characterCounter();
	$('#sector').material_select();

	$('.nav-barra').sideNav({ 
		edge: 'right',
		closeOnClick: true,
		draggable: true 
	});
	
	$('.login').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: true,
		gutter: 0,
		belowOrigin: true,
		alignment: 'left',
		stopPropagation: false
	});

	$('.nav-perfil').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: false,
		gutter: 0,
		belowOrigin: true,
		alignment: 'right',
		stopPropagation: false
	});

	function goProducts (e) {
		e.preventDefault();
		var id = $(this).find('a').attr('href'),
		position, elemento, padding = 50;
		elemento = $(id);
		position = ($(elemento).offset() || 0).top - padding;
		$('html, body').animate({scrollTop: position}, 800);
		return false;
	}
	function goProductBtn (e) {
		e.preventDefault();
		var id = $(this).attr('href'),
		position, elemento, padding = 50;
		elemento = $(id);
		position = ($(elemento).offset() || 0).top - padding;
		$('html, body').animate({scrollTop: position}, 800);
		return false;
	}
	$('#go-products').on('click', goProducts);
	$('#go-products-btn').on('click', goProductBtn);
	
	function scrollMenu () {
		var start_change = $('#nav-bar');
		start_change.toggleClass('scrolled', $(this).scrollTop() > start_change.height());
	}
	$(document).scroll(scrollMenu);

	var $cotizaHome = $('#cotiza-home');
	var $cotizapersonal = $('#cotizapersonal');
	var $formFree = $('#form-free');
	var $formContact = $('#form-contact');

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
	$('#phone_contact').keydown(justNumbers);
	$('#employee_number').keydown(justNumbers);

	$.validator.setDefaults({
	       ignore: []
	});

	$cotizaHome.validate({
		errorElement: 'p',
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

	$formContact.validate({
		errorElement: 'span',
		errorClass: 'error',
		rules: {
			name_contact: {
				required: true
			},
			company_contact: {
				required: true
			},
			phone_contact: {
				required: true
			},
			email_contact: {
				required: true
			},
			cargo_contact: {
				required: true
			},
			employee_contact: {
				required: true
			}
		},
		messages: {
			email_contact: {
				required: 'El correo electrónico es inválido.'
			},
			phone_contact: {
				required: 'Por favor solo ingrese números.'
			}
		},
		errorPlacement: function(error, placement) {
			if (placement.attr('name') == 'name_contact' || 'company_contact' || 'phone_contact' || 'employee_contact') {
				error.insertAfter(placement);
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
			$('.cotiza-wrapper').css('height', 'auto');
			$cotizaOption1.css('display', 'block');
			$cotizaOption2.css('display', 'none');
		} else if ($cotizaHome.valid() && $employee >= 301 ) {
			$('.cotiza-wrapper').css('height', 'auto');
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

	$('#btn-send-contact').on('click', function(e){
		e.preventDefault();
		if ($formContact.valid()) {
			console.log('ok');
		} else {
			console.log('error');
		}
	});
	

});