<?php 
	require_once('web-builder.php');
	$web = new WebBuilder('Otros Servicios');
	$web->printBeforeContent();
?>

<div style='width:633px; float: left; border-right: 1px solid #D8D8D8'>
	<div style='width: 500px; float:left;'>
		<p><b>Contratos mercantiles</b></p>

		<p>Nos encargamos de redactar los contratos de arras, compra venta de vehículos y arrendamientos, conforme a la ley correspondiente para evitar problemas futuros.</p>
	</div>

	<div class='price-bubble' style='float:left; margin: 37px 0 0 31.5px;'>45&#8364;</div>


	<div class='clearfix'></div>

	<div style='width: 500px; float:left;'>
		<p><b>Certificados energéticos</b></p>

		<p style='margin-bottom:0;'>Actualmente para el alquiler y venta de viviendas es obligatorio disponer de un certificado energético de la vivienda. Colaboramos con una empresa autorizada para facilitarte la venta y alquiler de tu vivienda. <u>Este servicio sólo está disponible para viviendas de la Comunidad de Madrid.</u></p>
	</div>

	<div class='price-bubble' style='float:left;margin: 59px 0 0 31.5px;'>80&#8364;</div>
</div>

<div class='prices-section' style='width:206px; float: left; margin-top: 48px;'>
	<div class='price-box'>
		<div class='title large-title'>Precio combinado</div>
		<div class='price'>95&#8364;</div>
		<div class='subtitle'>Contrato de alquiler o arras + certificado energético</div>
	</div>
</div>

<div class='clearfix'></div>

<p><b>Empleadas de hogar</b></p>

<p>Le asesoraremos sobre su mejor opción para el proceso de contratación y optimización de cada caso. Aplicaremos la legislación para que al final usted pague lo mínimo posible. Además, si lo desea, hablamos con su personal para explicarles las dudas que les puedan surgir.</p>

<p>Nosotros nos encargamos de preparar toda la documentación para que usted quede protegido frente a posibles denuncias o accidentes.</p>

<div class='prices-section'>
	<div class='price-box'>
		<div class='title large-title' style='position:relative;top:10px;'>Alta y contrato</div>
		<div class='title large-title'>&nbsp;</div>
		<div class='price'>40&#8364;</div>
		<div class='subtitle'>Incluye TA.6 y TA.2/S-138</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Alta, contrato y</div>
		<div class='title large-title'>nominas del año</div>
		<div class='price'>50&#8364;</div>
		<div class='subtitle'>Incluye TA.6 y TA.2/S-138</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Nómina de un</div>
		<div class='title large-title'>mes</div>
		<div class='price'>10&#8364;</div>
		<div class='subtitle'>&nbsp;</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Pack de nóminas</div>
		<div class='title large-title'>anual</div>
		<div class='price'>30&#8364;</div>
		<div class='subtitle'>&nbsp;</div>
	</div>
</div>

<?php
	$web->printAfterContent();
?>