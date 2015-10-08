<?php 
	require_once('web-builder.php');
	$web = new WebBuilder('Declaraciones de la Renta');
	$web->printBeforeContent();
?>

<p>La mayoría de gente que no está obligada a realizar la declaración por no llegar al mínimo de renta, ni se lo plantea. Si la hicieran les <b>devolverían</b> la totalidad o un gran porcentaje de las retenciones practicadas. Nos encargamos de buscar en sus condiciones particulares, todas aquellas partidas deducibles y que aportan siempre gran mejora en los resultados de su declaración. No importa si usted es un trabajador por cuenta ajena o autónomo, si es pensionista o ha comprado y vendido acciones, usted <b>pagará lo mismo</b> por su declaración sea cual sea su complejidad.</p>

<div class='line-quote'>Somos especialistas en mejorar los borradores de hacienda</div>

<p>Nos <b>comprometemos</b> a realizar su declaración de la renta o a revisar su borrador con la máxima atención, discreción y mirando siempre por <b>sus intereses</b>. En caso de traer el borrador, se hará un simulacro de la declaración y en caso de no mejorar, solo pagaría la revisión del borrador.</p>

<div class='prices-section'>
	<div class='price-box'>
		<div class='title large-title'>Revisión del</div>
		<div class='title large-title'>borrador</div>
		<div class='price'>5&#8364;</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Declaración</div>
		<div class='title large-title'>individual</div>
		<div class='price'>25&#8364;</div>
	</div>
	<div class='price-box'>
		<div class='title large-title'>Matrimonios</div>
		<div class='title small-title'>(individuales o conjunta)</div>
		<div class='price'>35&#8364;</div>
	</div>	
</div>

<?php
	$web->printAfterContent();
?>