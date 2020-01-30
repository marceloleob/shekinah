
$(document).ready(function()
{
	/**
	 * Posta o token do form toda fez que for ativado um post por ajax
	 */
	$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
		return jqXHR.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
    });

    /**
     * Bootstrap selectpiker
     */
    //$('select').selectpicker('refresh');
    $('.selectpicker').on( 'hide.bs.select', function ( ) {
        $(this).trigger("focusout");
    });

    /**
     * Ativa ou inativa o valor do CONDOMINIO
     */
    $('#check_condo_fee').on('click', function() {
        // verifica se esta checkado
        if ($(this).is(':checked')) {
            $('input[name="condo_fee"]').val('');
            $('input[name="old_condo_fee"]').val('');
        }
        // altera a situacao do input
        $('input[name="condo_fee"]').attr('disabled', $(this).is(':checked')).focus();
    });
    // verifica se o input ja tem valor setado
    if ($('input[name="old_condo_fee"]').val()) {
        $('input[name="condo_fee"]').attr('disabled', false);
        $('#check_condo_fee').attr('checked', false);
    } else {
        $('input[name="condo_fee"]').attr('disabled', true);
        $('#check_condo_fee').attr('checked', true);
    }

    /**
     * Ativa ou inativa o valor do IPTU
     */
    $('#check_tax_fee').on('click', function() {
        // verifica se esta checkado
        if ($(this).is(':checked')) {
            $('input[name="tax_fee"]').val('');
            $('input[name="old_tax_fee"]').val('');
        }
        // altera a situacao do input
        $('input[name="tax_fee"]').attr('disabled', $(this).is(':checked')).focus();
    });

    // verifica se o input ja tem valor setado
    if ($('input[name="old_tax_fee"]').val()) {
        $('input[name="tax_fee"]').attr('disabled', false);
        $('#check_tax_fee').attr('checked', false);
    } else {
        $('input[name="tax_fee"]').attr('disabled', true);
        $('#check_tax_fee').attr('checked', true);
    }

    /**
     * Ativa ou inativa a quantidade de suites
     */
    $('#check_master').on('click', function() {
        // verifica se esta checkado
        if ($(this).is(':checked')) {
            $('input[name="master"]').val('');
            $('input[name="old_master"]').val('');
        }
        // altera a situacao do input
        $('input[name="master"]').attr('disabled', $(this).is(':checked')).focus();
    });
    // verifica se o input ja tem valor setado
    if ($('input[name="old_master"]').val()) {
        $('input[name="master"]').attr('disabled', false);
        $('#check_master').attr('checked', false);
    } else {
        $('input[name="master"]').attr('disabled', true);
        $('#check_master').attr('checked', true);
    }

    /**
     * Altera a label referente ao valor do Aluguel ou da Venda
     */
    $('select[name="advertise_type"]').change(function()
    {
        var texto = 'da <span class="span-text-price">venda</span>';
        if ($(this).val() == 'A') {
            texto = 'do <span class="span-text-price">aluguel</span>';
        }
        $('.span-price').html(texto);
    });

    /**
     * Altera a label referente ao valor do Aluguel ou da Venda
     */
    $('select[name="group_type"]').change(function()
    {
        var placeholder = 'Quartos';
        $('.residential').css('visibility', 'visible');

        if ($(this).val() == 'C') {
            placeholder = 'Salas';
            $('.residential').css('visibility', 'hidden');
        }
        $('input[name="bedroom"]').attr('placeholder', placeholder);
    });

    /**
     * Altera o valor do checkbox "proprietario"
     */
    $('input[name="owner"]').on('click', function()
    {
        $(this).val(($(this).is(':checked')) ? 'S' : 'N');
        $('input[name="owner_user"]').val(($(this).is(':checked')) ? 'S' : 'N');
    });

    /**
     * Verifica se e um cadastro novo
     */
    if ($('input[name="id"]').val() == undefined) {
        $('input[name="owner_user"]').val('N');
    }

	/**
	 * Carrega o combo de TIPO DE IMOVEIS de acordo com o GRUPO
	 */
	if ($('select[name="group_type"]').length) {
		// verifica se o combo ja tem valor setado
		if ($('input[name="old_property_type"]').val()) {
			// binda o combo
			setTimeout(function() {
                // recupera os values
                var groupType = $('select[name="group_type"]').val();
                var propertyType = $('input[name="old_property_type"]').val();
                // carrega o combo de categorias
				loadPropertyType(groupType, propertyType)
            }, 1000);
        }

        // binda combo
        $('select[name="group_type"]').change(function()
        {
            var combobox = $('select[name="property_type"]');
            combobox.empty();
            combobox.prepend($('<option></option>').html('Carregando...'));
            combobox.selectpicker('refresh');
            // carrega o combo
            loadPropertyType($(this).val(), '');
        });
	}

    /**
	 * Funcao que executa o ajax
     *
     * @param string groupType
     * @param int propertyType
	 */
	function loadPropertyType(groupType, propertyType)
	{
		// carrega o combo
		$.ajax({
			url: '/ajax/options-propertytype',
			type: 'POST',
            dataType: 'html',
			data: {
				grouptype: groupType,
				propertytype: propertyType,
			},
			success: function(response)
			{
                var combobox = $('select[name="property_type"]');
                combobox.empty();
                combobox.html(response);
                combobox.selectpicker('refresh');
            }
        });
    }

	/**
	 * Carrega o combo de CIDADES de acordo com o ESTADO
	 */
	if ($('select[name="state"]').length) {
		// verifica se o combo ja tem valor setado
		if ($('input[name="old_city"]').val()) {
			// binda o combo
			setTimeout(function() {
                // recupera os values
                var state = $('select[name="state"]').val();
                var city = $('input[name="old_city"]').val();
                // carrega o combo de cidades
				loadCity(state, city)
            }, 2000);
        }

        // binda combo
        $('select[name="state"]').change(function()
        {
            var combobox = $('select[name="city"]');
            combobox.empty();
            combobox.prepend($('<option></option>').html('Carregando...'));
            combobox.selectpicker('refresh');
            // carrega o combo
            loadCity($(this).val(), '');
        });
	}

    /**
	 * Funcao que executa o ajax
     *
     * @param int state
     * @param int city
	 */
	function loadCity(state, city)
	{
		// carrega o combo
		$.ajax({
			url: '/ajax/options-city',
			type: 'POST',
            dataType: 'html',
			data: {
				state: state,
				city: city,
			},
			success: function(response)
			{
                var combobox = $('select[name="city"]');
                combobox.empty();
                combobox.html(response);
                combobox.selectpicker('refresh');
            }
        });
    }


});
