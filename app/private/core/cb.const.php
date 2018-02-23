<?php
	#Author: Jerson Martínez (Side Master)
	#Este fichero contiene todas las CONSTANTES necesarias dentro del proyecto
	#Su mayor funcionamiento será el contenido de rutas, las cuales puedes envocar 
	#incluyendo este fichero en tu proyecto.
	
	#PD  = Path Directory
	#PDS = Path Directory Static
	#PF  = Path File
	
	$Path = $_SERVER['DOCUMENT_ROOT']."/".explode("/", $_SERVER['REQUEST_URI'])[1];
	if (explode("/", $_SERVER['REQUEST_URI'])[1] != "CodeBrain"){
		$Path = $_SERVER['DOCUMENT_ROOT'];
	}

	define ("PD_INDEX", 	$Path."/");
	define ("PD_APP", 		$Path."/app");

	define ("PD_PUBLIC", 		$Path."/app/public");
		define ("PD_PUBLIC_GP", 		$Path."/app/public/graphic");
		define ("PD_PUBLIC_CSS", 		$Path."/app/public/css");
		define ("PD_PUBLIC_JS", 		$Path."/app/public/js");
		define ("PD_PUBLIC_PHP", 		$Path."/app/public/php");
		define ("PD_PUBLIC_PLUGINS", 	$Path."/app/public/plugins");

	define ("PDS_PUBLIC", 	"app/public");
		define ("PDS_PUBLIC_GP", 		"app/public/graphic");
		define ("PDS_PUBLIC_JS", 		"app/public/js");
		define ("PDS_PUBLIC_CSS", 		"app/public/css");
		define ("PDS_PUBLIC_PLUGINS", 	"app/public/plugins");

	define ("PD_PRIVATE", 		$Path."/app/private");
		define ("PD_PRIVATE_DESKTOP", 				$Path."/app/private/desktop");
			define ("PD_PRIVATE_DESKTOP_PHP", 		$Path."/app/private/desktop/php");
			define ("PD_PRIVATE_DESKTOP_GP", 		$Path."/app/private/desktop/graphic");
			define ("PD_PRIVATE_DESKTOP_JS", 		$Path."/app/private/desktop/js");
			define ("PD_PRIVATE_DESKTOP_PLUGINS", 	$Path."/app/private/desktop/plugins");
			
		define ("PDS_PRIVATE_DESKTOP", "app/private/desktop");
			define ("PDS_PRIVATE_DESKTOP_PHP", 		"app/private/desktop/php");
			define ("PDS_PRIVATE_DESKTOP_JS", 		"app/private/desktop/js");
			define ("PDS_PRIVATE_DESKTOP_GP", 		"app/private/desktop/graphic");
			define ("PDS_PRIVATE_DESKTOP_PLUGINS", 	"app/private/desktop/plugins");


	define ("PF_SOURCE", 	$Path."/source.cb");
	define ("PD_CONFIG", 	$Path."/app/private/config");
		define ("PD_CONNECT_SERVER", 	$Path."/app/private/config/connect_server");
			define ("PF_CONNECT_SERVER", 	$Path."/app/private/config/connect_server/cb.connect_server.php");
			define ("PF_INSTALLDB", 		$Path."/app/private/config/connect_server/cb.InstallDB.php");
		
		define ("PD_INSTALL", 			$Path."/app/private/config/install");
			define ("PD_INSTALL_VIEW", 		$Path."/app/private/config/install/view");
		
		define ("PF_CONFIG", 			$Path."/app/private/config/Config.cb");
	
	define ("PD_CORE", 		$Path."/app/private/core");		
		define ("PF_CORE_HEAD", 		$Path."/app/private/core/cb.head.php");
		define ("PF_CORE", 				$Path."/app/private/core/cb.core.php");
		define ("PF_DESKTOP", 			$Path."/app/private/core/cb.desktop.php");
		define ("PF_CORE_FOOT", 		$Path."/app/private/core/cb.foot.php");
?>