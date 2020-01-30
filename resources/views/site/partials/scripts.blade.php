
{{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
<!--[if lt IE 9]>
    {!! HTML::script('js/html5shiv.min.js') !!}
    {!! Html::script('js/respond.min.js') !!}
<![endif]-->

{{-- JS LIBS / JQUERY --}}
{!! Html::script('js/libs/jquery-3.3.1.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/greensock.js', ['defer' => 'defer']) !!}
{{-- JS LIBS / LAYERSLIDER --}}
{!! Html::script('js/libs/layerslider.transitions.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/layerslider.kreaturamedia.jquery.js', ['defer' => 'defer']) !!}
{{-- JS LIBS / POPPER AND BOOTSTRAP --}}
{!! Html::script('js/libs/popper-1.14.3.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/bootstrap-4.3.1.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/bootstrap-select.min.js', ['defer' => 'defer']) !!}
{{-- JS LIBS / YOUTUBE API --}}
{!! Html::script('js/libs/YouTubePopUp.jquery.js', ['defer' => 'defer']) !!}
{{-- JS LIBS / OTHERS --}}
{!! Html::script('js/libs/jquery.fancybox.pack.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jquery.fancybox-media.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/owl.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/nsc.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/mixitup.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/wow.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jquery.cookie.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/settings.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jshashtable-2.1_src.js', ['defer' => 'defer']) !!}
{{-- {!! Html::script('js/libs/jquery.numberformatter-1.2.3.js', ['defer' => 'defer']) !!} --}}
{!! Html::script('js/libs/tmpl.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jquery.dependClass-0.1.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/draggable-0.1.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jquery.slider.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jquery.barrating.js', ['defer' => 'defer']) !!}
{{-- JS LIBS / GOOGLE MAPS --}
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/map/markerwithlabel_packed.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/map/infobox.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/map/markerclusterer_packed.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/map/custom-map.js', ['defer' => 'defer']) !!}
{{-- JS SCRIPTS --}}
{!! Html::script('js/script.js', ['defer' => 'defer']) !!}

{{-- JS CUSTOM --}}
@yield('js-custom')



{{--
<script>
(function($){
	var _latitude = 36.596165;
	var _longitude = -97.062988;
	createHomepageGoogleMap(_latitude,_longitude);
})(jQuery);
</script>
--}}
