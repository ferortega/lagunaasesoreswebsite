<?php 
	require_once('web-builder.php');
	$web = new WebBuilder('Contacto');
	$web->printBeforeContent();
?>



<p>¿Tiene alguna duda? ¿Desea solicitar más información sobre nuestros servicios? No lo dude y contacte con nosotros sin ningún tipo de compromiso. Resolveremos sus dudas, le informaremos de lo que usted desee y podremos concertar una cita.</p>

<div style='width:100%; text-align: center;'>

	<div style="display: inline-block; margin-right: 130px; text-align: left; line-height: 46px; font-size: 17px;">
		<div>
			<span class="fa-stack fa-lg" style="color:#B0B0B0; font-size:16px;">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-at fa-inverse fa-stack-1x"></i>
			</span>
			<b>info@lagunaasesores.com</b>
		</div>
		<div>
			<span class="fa-stack fa-lg" style="color:#B0B0B0; font-size:16px;">
		  		<i class="fa fa-circle fa-stack-2x"></i>
		  		<i class="fa fa-phone fa-inverse fa-stack-1x"></i>
			</span>
			<b>913 017 424</b>
		</div>
		<div>
			<span class="fa-stack fa-lg" style="color:#B0B0B0; font-size:16px;">
		  		<i class="fa fa-circle fa-stack-2x"></i>
		  		<i class="fa fa-mobile fa-inverse fa-lg fa-stack-1x"></i>
			</span>
			<b>609 952 036</b>
		</div>
	</div>

	<img src='img/qr.jpg' style="vertical-align: top;"/>

</div>


<div class="clearfix"></div>

<p>Si lo desea puede rellenar el formulario de consulta y nos pondremos en contacto con usted a la mayor brevedad posible.</p>


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

	<div class='clearfix'></div>
		
	<label><b>Consulta:</b></label>
	<textarea style="overflow: auto; resize: none; width: 678px;" name="query" rows="15" required></textarea>

	<input type="submit" name="enviar" value="Enviar consulta" class="button" />
</form>

<?php	
	if (isset($_POST['email']))
	{
		$to = 'info@lagunaasesores.com';

		$subject = 'Contacto via web de ' . $_POST['name'];

		$message = "Nombre: " . $_POST['name'] . 
			"\r\n\r\nTelefono: " . $_POST['phone'] . 
			"\r\n\r\nEmail: " . $_POST['email'] . 
			"\r\n\r\n\r\nCosulta: " . $_POST['query'];

		$headers = 'From: '.$_POST['email']. '\r\n';

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