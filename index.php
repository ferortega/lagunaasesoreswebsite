<?php 
	require_once('web-builder.php');
	$web = new WebBuilder();
	$web->printBeforeContent();
?>

<p>En Laguna Asesores contamos con un equipo joven y altamente cualificado centrado en ofrecerle el mejor servicio.</p>

<p>Unimos precio y calidad. Los mejores precios del mercado sin renunciar a un servicio completo y de la mejor calidad.</p>

<style>
			#slider {width: 700px; display:inline-block; overflow: hidden; position: relative; border: 1px solid #555; vertical-align: middle;}

			#slider > #slider-container {margin-left: 0; width: 1000%;}

			#slider > #slider-container > .slider-elem {float: left; width: 700px; height: 292px;}

			#slider-next, #slider-prev {font-size: 50px; cursor: pointer; vertical-align: middle; color: #E1E1E1; margin: 8px;}

			#slider-next:hover, #slider-prev:hover {color: #BFBFBF;}
		</style>

<div style='text-align: center; width: 100%'>

	<i id='slider-prev' class="fa fa-chevron-circle-left"></i>

	<div id='slider' style=''>
		<div id='slider-container'>
			<a class='slider-elem' href='autonomos_sociedades'><img src='img/carrousel-autonomos.jpg' /></a>
			<a class='slider-elem' href='autonomos_sociedades'><img src='img/carrousel-sociedades.jpg' /></a>
			<a class='slider-elem' href='otros_servicios'><img src='img/carrousel-alquiler.jpg' /></a>
			<a class='slider-elem' href='fincas'><img src='img/carrousel-fincas.jpg' /></a>
		</div>
	</div>

	<i id='slider-next' class="fa fa-chevron-circle-right"></i>

</div>

<script type='text/javascript' src='js/slider.js'></script>
<script type='text/javascript'>		
	initSlider({
		next: '#slider-next', 
		prev: '#slider-prev', 
		slider: '#slider', 
		container: '#slider-container'
	});
</script>

<?php
	$web->printAfterContent();
?>