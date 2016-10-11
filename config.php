<?php
	
	// define ROOT
	define('ROOT', __DIR__ . '/');
	
	// define HTTP
	$uri = preg_replace('/\/[^\/]*$/', '', $_SERVER['REQUEST_URI']);
	
	// URI || URI + file
	if (substr(__DIR__, -strlen($uri)) === $uri) {
		$dir = $uri;
	}
	// URI + page/
	else {
		$dir = preg_replace('/' . addcslashes($_SERVER['DOCUMENT_ROOT'], '/') . '/', '', __DIR__);
	}
	
	define('HTTP', 'http://' . $_SERVER['SERVER_NAME'] . $dir . '/');
	
	// get status
	if (!$code) {
		$code = $_GET['error'];
	}
	
	// associate with message
	$message = array(
		400 => "Requête erronée",
		403 => "Interdit d'accéder",
		404 => "Ressource non trouvée",
		500 => "Erreur interne du serveur",
		502 => "Mauvaise passerelle",
		504 => "Temps d’attente d’une réponse écoulé",
		509 => "Limite de la bande passante dépassé"
	);
	
	if (!$message[$code] && basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'config') {
		$code = 404;
	}
	
	if ($message[$code]) {
		include_once(ROOT . 'system/scripts/error.php');
		exit;
	}
	
	// include system
	include_once(ROOT . 'system/system.php');

	// include top of page
	include_once(ROOT . 'system/sections/header.php');

?>