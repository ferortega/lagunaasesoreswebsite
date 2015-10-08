<?php 
	require_once('web-builder.php');
	$web = new WebBuilder('Localización');
	$web->printBeforeContent();
?>

<div style='width: 810px; text-align: center; margin: 50px auto;'>

	<img src='img/map.png' style='display: inline-block; height: 80px; padding-top: 5px; margin-right: 20px;' />

	<div style='display: inline-block; vertical-align: top; text-align: left; margin-right: 55px;'>		
		<div style='margin-bottom: 8px;'><b>Centro de Empresas (Despacho 24)</b></div>
		<div style='margin-bottom: 8px;'>C/ Crisol, nº 3</div>
		<div style='margin-bottom: 8px;'>Rivas-Vaciamadrid (Madrid)</div>
	</div>

	<img src='img/car.png' style='height: 80px; padding-top: 5px; margin-right: 20px; display: inline-block;' />
	
	<div style='display: inline-block; vertical-align: top; text-align: left;'/>	
		<div style='margin-bottom: 8px;'><b>Carretera de Valencia (A3)</b></div>
		<div style='margin-bottom: 8px;'>Salida 13 dir. Valencia</div>
		<div style='margin-bottom: 8px;'>Salida 17 dir. Madrid</div>
	</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1520.2808699272819!2d-3.5434844834487196!3d40.352067136330014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423b75d2cfbc49%3A0x9d28014b1e05acba!2sLaguna+Asesores!5e0!3m2!1ses!2ses!4v1413552049455" width="840" height="600" frameborder="0" style="border:0"></iframe>

<?php
	$web->printAfterContent();
?>