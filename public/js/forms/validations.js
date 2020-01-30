(function($) {

    // validacao do formulario de contato
	if ($('#form-contact').length) {
		// validation
		$('#form-contact').validate({
			rules: {
				name: {
					required: true,
					minlength: 2,
					maxlength: 100,
				},
				email: {
					required: true,
					minlength: 3,
					maxlength: 100,
					email: true,
				},
				phone: {
					required: true,
					minlength: 14,
					maxlength: 15,
				},
				subject: {
					required: true,
					minlength: 2,
					maxlength: 100,
				},
				text: {
					required: true,
					minlength: 5,
					maxlength: 2000,
				}
			}
		});
    }

    // validacao do formulario de anuncio
    if ($('#form-advertise').length) {
		// validation
		$('#form-advertise').validate({
			rules: {
                // Informacoes de contato
				name: {
					required: true,
					minlength: 2,
					maxlength: 100,
				},
				phone: {
					required: true,
					minlength: 14,
					maxlength: 15,
				},
				born: {
                    required: true,
                    date: true,
				},
				email: {
					required: true,
					emailOnly: true,
				},
				password: {
					required: true,
					minlength: 6,
					maxlength: 30,
                },
				cpf: {
					required: true,
                },
				owner_user: {
					required: true,
                },
                // Informacoes basicas
				advertise_type: {
					required: true,
				},
				group_type: {
					required: true,
				},
				property_type: {
					required: true,
				},
				bathroom: {
					required: true,
				},
				bedroom: {
					required: true,
				},
				parking: {
					required: true,
				},
				square_meter: {
					required: true,
                },
                // Valores
				price: {
                    required: true,
                },
                // Descricao
				description: {
					required: true,
					minlength: 5,
					maxlength: 2000,
                },
                // Endereco
				address: {
					required: true,
					minlength: 3,
					maxlength: 255,
                },
				number: {
					required: true,
					minlength: 1,
					maxlength: 50,
                },
				comp: {
					maxlength: 100,
                },
				neighborhood: {
					required: true,
					minlength: 3,
					maxlength: 255,
                },
				state: {
					required: true,
				},
				city: {
					required: true,
				},
				zipcode: {
					required: true,
					maxlength: 9,
				}
			}
		});
    }

})(window.jQuery);
