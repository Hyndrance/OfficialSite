<?php
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'home' :
		$content 	= 'home.php';
		$template = 'include/template.php';	
		break;
		
	case 'team' :
		$content 	= 'team.php';
		$template = 'include/template.php';	
		break;
		
	case 'services' :
		$content 	= 'services.php';
		$template = 'include/template.php';	
		break;
		
	case 'portfolio' :
		$content 	= 'portfolio.php';
		$template = 'include/template.php';	
		break;
		
	case 'contact' :
		$content 	= 'contact.php';
		$template = 'include/template.php';	
		break;
			
	default :
		$content 	= 'home.php';
		$template = 'include/template.php';

}

require_once $template;

?>