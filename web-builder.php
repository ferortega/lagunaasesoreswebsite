<?php
	class WebBuilder
	{
		private $pagename;

		function __construct($pagename = null)
		{
			$this->pagename = $pagename;
		}

		function printBeforeContent ()
		{
			echo '<!DOCTYPE html><html><head>';

			if ($this->pagename != null)
				echo "<title>$this->pagename | Laguna Asesores</title>";
			else
				echo "<title>Laguna Asesores</title>";

			require_once('tpl/head.html');

			echo '</head><body><div id="wrapper">';

			require_once('tpl/header.html');

			$this->printMenu();

			echo '<div id="content">';
		}

		function printAfterContent ()
		{
			echo '</div>';

			require_once('tpl/footer.html');

			require_once('tpl/analytics.html');

			echo '<script type="text/javascript" src="js/resize.js"></script></div></html>';
		}

		private function printMenu ()
		{
			$menu = array(
				array('name' => 'Autónomos y Sociedades', 'link' => 'autonomos_sociedades'),
				array('name' => 'Declaraciones de la Renta', 'link' => 'rentas'),
				array('name' => 'Gestión de Fincas', 'link' => 'fincas'),
				array('name' => 'Otros Servicios', 'link' => 'otros_servicios')
			);

			$menupage = false;

			foreach ($menu as $item) 
			{
				if ($item['name'] === $this->pagename) 
				{
					$menupage = true;
					break;
				}
			}

			echo '<ul id="menu">';

			foreach ($menu as $item) 
			{
				echo '<li';
				//if (!$menupage || $item['name'] === $this->pagename) echo ' class="active"';
				if ($item['name'] === $this->pagename) echo ' class="active"';
				echo '><a href="', $item['link'], '">', $item['name'], '</a></li>';
			}

			echo '</ul>';
		}
	}