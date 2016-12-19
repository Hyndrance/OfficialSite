<?php
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
			
	default :
		$home 	= 'home.php';
		$meetus = 'meetUs.php';
		$portfolio = 'portfolio.php';
		$clients = 'clients.php';
		$aboutus = 'aboutus.php';
		$testimonial = 'testimonial.php';
		$contactus = 'contactus.php';
		$services = 'services.php';

}

require_once 'template.php';

?>

