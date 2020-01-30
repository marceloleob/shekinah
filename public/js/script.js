
$(document).ready(function()
{
	/**
	 * Habilita a opcao de tooltips
	 */
	$('[data-toggle="tooltip"]').tooltip();

	/**
	 * Posta o token do form toda fez que for ativado um post por ajax
	 */
	$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
		return jqXHR.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
	});

	/**
	 * Mostra a mensagem de retorno por 4 segundos
	 */
	$('.feedback').animate({
		opacity: 1.0
	}, 5000).fadeOut('slow');

	/**
	 * Fecha a mensagem caso seja clicada
	 */
	$('.feedback .close').click(function(e) {
		e.preventDefault();
		$(this).parent().parent().fadeOut('slow');
		return false;
    });

	//Scroll top by clicking arrow up
    $(window).scroll(function ()
    {
		if ($(this).scrollTop() > 500) {
			$('#scroll').fadeIn();
		}
		else {
			$('#scroll').fadeOut();
		}
    });

	$('#scroll').click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
		return !1;
	});

    if ($('.wow').length) {
        var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       false,      // trigger animations on mobile devices (default is true)
            live:         true        // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }
});
