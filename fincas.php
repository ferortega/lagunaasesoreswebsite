<?php 
	require_once('web-builder.php');
	$web = new WebBuilder('Gestión de Fincas');
	$web->printBeforeContent();
?>

<p>Ofrecemos el servicio más completo para la administración de su comunidad y con los mejores precios del mercado.</p>

<table class='highlights'>
	<tr>
		<td>Transparencia</td>
		<td>Toda la documentación relativa a la comunidad asi como la contabilidad de la misma estará en todo momento a disposición de los propietarios en nuestras oficinas. Además se enviará trimestralmente un balance a todos los vecinos por e-mail para que estén al tanto del estado de la comunidad</td>
	</tr>
	<tr>
		<td>Optimización de recursos</td>
		<td>Somos expertos en sanear cuentas de comunidades. Se eliminan gastos innecesarios, comisiones, reducimos el gasto de fotocopias, se revisan todas las empresas que prestan sus servicios en la comunidad para garantizar que cumplan con los servicios de sus contratos. Antes de finalizar cada contrato se presentaran varios presupuestos con los mismos servicios para poder elegir la mejor relación calidad-precio</td>
	</tr>
	<tr>
		<td>Información continua</td>
		<td>Comunicación constante con los propietarios vía e-mail o con carteles en la comunidad para mantenerles informados de todo lo relativo a la comunidad</td>
	</tr>
	<tr>
		<td>Precio “todo incluido”</td>
		<td>Una cuota mensual muy económica y sin ningún suplemento, ni por asistencia a juntas extraordinarias ni de ningún otro tipo</td>
	</tr>
	<tr>
		<td>Teléfono 24 horas</td>
		<td>Teléfono de emergencias 24 horas para solucionar cuestiones urgentes relativas a la comunidad a disposición de los propietarios</td>
	</tr>
	<tr>
		<td>Sin permanencia</td>
		<td>En cualquier momento se podrá rescindir el contrato sin ninguna penalización o pago</td>
	</tr>
</table>

<p>Solicita tu presupuesto sin compromiso. Rellena los datos de tu comunidad en el formulario que encontrarás a continuación y nos pondremos en contacto contigo para ofrecerte el presupuesto que más se ajuste a tus necesidades.</p>

<form method="post" class="contact"> 

	<div style="float: left; width: 220px; margin-right: 20px;">
		<label><b>Nombre:</b></label>
		<input type="text" name="name" style="width: 198px;" required/>
	</div>
		
	<div style="float: left; width: 220px; margin-right: 20px;">
		<label><b>Teléfono:</b></label>
		<input type="text" name="phone" pattern="[0-9]{9}" style="width: 198px;" required/>
	</div>
		
	<div style="float: left; width: 220px;">
		<label><b>Email:</b></label>
		<input type="email" name="email" style="width: 198px;" required/>
	</div>

	<div class='clearfix' style='margin-bottom: 12px !important'></div>

	<div style="float: left; width: 460px; margin-right: 20px;">
		<label><b>Dirección:</b></label>
		<input type="text" name="address" style="width: 438px;" required/>
	</div>
		
	<div style="float: left; width: 220px;">
		<label><b>Población:</b></label>
		<input type="text" name="city" style="width: 198px;" required/>
	</div>

	<div class='clearfix' style='margin-bottom: 12px !important'></div>

	<div style="float: left; width: 220px; margin-right: 20px;">
		<label><b>Número de vecinos:</b></label>
		<input type="number" name="neighbors" style="width: 198px;" required/>
	</div>
		
	<div style="float: left; width: 220px; margin-right: 20px;">
		<label><b>¿Tiene garaje?</b></label>
		<input type="text" name="garage" style="width: 198px;" required/>
	</div>
		
	<div style="float: left; width: 220px;">
		<label><b>¿Tiene piscina?</b></label>
		<input type="text" name="pool" style="width: 198px;" required/>
	</div>

	<div class='clearfix'></div>
		
	<label><b>Observaciones:</b></label>
	<textarea style="overflow: auto; resize: none; width: 678px;" name="query" rows="8"></textarea>

	<input type="submit" name="enviar" value="Enviar consulta" class="button" />
</form>

<?php	
	if (isset($_POST['email']))
	{
		$to = 'info@lagunaasesores.com';

		$subject = 'Contacto via web de ' . $_POST['name'];

		$message = "DATOS DE CONTACTO" .
			"\r\n-----------------------------------------" .
			"\r\n\r\nNombre: " . $_POST['name'] . 
			"\r\n\r\nTelefono: " . $_POST['phone'] . 
			"\r\n\r\nEmail: " . $_POST['email'] . 
			"\r\n\r\n\r\nDATOS DE LA COMUNIDAD" .
			"\r\n-----------------------------------------" .
			"\r\n\r\nDiección: " . $_POST['address'] . 
			"\r\n\r\nPoblación: " . $_POST['city'] . 
			"\r\n\r\nNúmero de vecinos: " . $_POST['neighbors'] . 
			"\r\n\r\n¿Tiene garaje? " . $_POST['garage'] . 
			"\r\n\r\n¿Tiene piscina? " . $_POST['pool'] . 
			"\r\n\r\n\r\nCosulta: " . $_POST['query'];

		$headers = "From: ".$_POST['email']. "\r\n";

		if (mail($to, $subject, wordwrap($message, 68), $headers )) 
		{
			echo '<script>alert("Mensaje enviado correctamente");</script>';
		}
		else
		{
			echo '<script>alert("Error al enviar el mensaje. Por favor, intentelo pasados unos minutos. Si el problema persiste contacte con nosotros por otros medios.");</script>';
		}
	}
?>

<?php
	$web->printAfterContent();
?>