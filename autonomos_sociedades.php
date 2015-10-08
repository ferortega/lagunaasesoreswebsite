<?php 
	require_once('web-builder.php');
	$web = new WebBuilder('Autónomos y Sociedades');
	$web->printBeforeContent();
?>

<p>Nuestro equipo de <b>profesionales</b> está especializado en la asesoría integral de autónomos y sociedades. Buscamos siempre optimizar el resultado de tus impuestos, contabilidad, nóminas y contratos para sacar el máximo beneficio para tu empresa de acuerdo con la <b>legislación</b> vigente. Te tendremos informado de todas las <b>ayudas</b> y <b>subvenciones</b> a las que pudieras tener derecho.</p>

<div class='line-quote'>Tú preocúpate de tu negocio, nosotros nos encargamos del resto</div>

<p>Nuestros precios son <b>"todo incluido"</b>: siempre pagarás la misma cuota mensual, sin sorpresas de última hora. El único pago adicional será el precio público vigente cada año de <b>registro</b> de libros y cuentas anuales en el registro mercantil en el caso de sociedades.</p>

<div class='prices-section'>
	<div class='price-box'>
		<div class='title large-title'>Todo incluido</div>
		<div class='title large-title'>estimación directa</div>
		<div class='price'>35&#8364;</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Todo incluido</div>
		<div class='title large-title'>módulos</div>
		<div class='price'>20&#8364;</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Todo incluido</div>
		<div class='title large-title'>sociedades</div>
		<div class='price'>75&#8364;</div>
	</div>	
</div>

<div class='price-info'>Suplemento de <b>+10&#8364;</b> por el primer trabajador. Suplemento de <b>+5&#8364;</b> a partir del segundo trabajador.</div>

<p>En caso de necesitarlo, también te <b>asesoraremos</b> sobre trámites previos para abrir un nuevo negocio, estrategias de promoción y marketing, publicidad, introducción en redes sociales...</p>

<?php
	$web->printAfterContent();
?>