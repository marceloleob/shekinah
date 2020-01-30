
$(document).ready(function()
{
	/**
	 * Posta o token do form toda fez que for ativado um post por ajax
	 */
	$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
		return jqXHR.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
    });

    /**
     * Realiza a chamada da busca
     */
    $('.btngo').on('click', function(event)
    {
        // recupera os parametros
        var searchType = $('input[name="search_type"]').val();
        var propertyType = $('select[name="property_type"] option:checked').val();

        var url = $('#form-search').attr('action') + '/' + searchType + '/' + ((propertyType) ? propertyType : 'qualquer-tipo') + '/sao-paulo/' + 'qualquer-cidade';

        window.location.href = url;
    });

    /**
     * Altera o valor do checkbox "tipo de transacao"
     */
    $('input[name="search"]').on('click', function()
    {
        $(this).val(($(this).is(':checked')) ? 'comprar' : 'alugar');
        $('input[name="search_type"]').val(($(this).is(':checked')) ? 'comprar' : 'alugar');
    });

    /**
     * Bootstrap selectpiker
     */
    $('.property').selectpicker({
        dropupAuto: false,
        size: 7
    });

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


	// 29. Pricing bar Filter like index 7
	$(".filter_price").slider({
		from: 500,
		to: 100000,
		step: 1000,
		smooth: true,
		round: 0,
		dimension: "R$",
		skin: "plastic"
	});

	$(".filter_area").slider({
		from: 0,
		to: 10000,
		step: 10,
		smooth: true,
		round: 0,
		dimension: "m²",
		skin: "plastic"
	});



});
