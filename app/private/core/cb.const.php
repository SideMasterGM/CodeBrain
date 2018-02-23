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
	define ("PD_APP", 		$Path."/app/private");
	define ("PF_SOURCE", 	$Path."/source.cb");
	define ("PD_CONFIG", 	$Path."/app/private/config");
		define ("PD_CONNECT_SERVER", 	$Path."/app/private/config/connect_server");
			define ("PF_CONNECT_SERVER", 	$Path."/app/private/config/connect_server/cb.connect_server.php");
			define ("PF_INSTALLDB", 		$Path."/app/private/config/connect_server/cb.InstallDB.php");
		
		define ("PD_INSTALL", 			$Path."/app/private/config/install");
			define ("PD_INSTALL_VIEW", 		$Path."/app/private/config/install/view");
		
		define ("PF_CONFIG", 			$Path."/app/private/config/Config.cb");
	define ("PD_CONTROLLER",$Path."/app/private/controller");
		define ("PD_CONTROLLER_JS", 	$Path."/app/private/controller/js");
		define ("PD_CONTROLLER_PHP", 	$Path."/app/private/controller/php");
		define ("PD_CONTROLLER_SRC", 	$Path."/app/private/controller/src");
	
	define ("PD_CORE", 		$Path."/app/private/core");
		define ("PD_CORE_SERVICES", $Path."/app/private/core/Services");
		
		define ("PF_CORE_HEAD", 		$Path."/app/private/core/cb.head.php");
		define ("PF_CORE", 				$Path."/app/private/core/cb.core.php");
		define ("PF_DESKTOP", 			$Path."/app/private/core/cb.desktop.php");
		define ("PF_CORE_FOOT", 		$Path."/app/private/core/cb.foot.php");
		
	define ("PD_DESKTOP", 	$Path."/app/private/Desktop");
		define ("PD_DESKTOP_ROOT", 		$Path."/app/private/Desktop/Root");
			define ("PD_DESKTOP_ROOT_PHP", 		$Path."/app/private/Desktop/Root/php");
			define ("PD_DESKTOP_ROOT_GP", 		$Path."/app/private/Desktop/Root/graphic");
			define ("PD_DESKTOP_ROOT_JS", 		$Path."/app/private/Desktop/Root/js");
		define ("PDS_DESKTOP_ROOT", "app/private/Desktop/Root");
			define ("PDS_DESKTOP_ROOT_PHP", 	"app/private/Desktop/Root/php");
			define ("PDS_DESKTOP_ROOT_JS", 		"app/private/Desktop/Root/js");
			define ("PDS_DESKTOP_ROOT_GP", 		"app/private/Desktop/Root/graphic");
		
		define ("PD_DESKTOP_ADMIN", 	$Path."/app/private/Desktop/Administrador");
			define ("PD_DESKTOP_ADMIN_PHP", 	$Path."/app/private/Desktop/Administrador/php");
			define ("PD_DESKTOP_ADMIN_GP", 		$Path."/app/private/Desktop/Administrador/graphic");
			define ("PD_DESKTOP_ADMIN_JS", 		$Path."/app/private/Desktop/Administrador/js");
		define ("PDS_DESKTOP_ADMIN", 	"app/private/Desktop/Administrador");
			define ("PDS_DESKTOP_ADMIN_PHP", 	"app/private/Desktop/Administrador/php");
			define ("PDS_DESKTOP_ADMIN_GP", 	"app/private/Desktop/Administrador/graphic");
			define ("PDS_DESKTOP_ADMIN_JS", 	"app/private/Desktop/Administrador/js");
	define ("PD_GRAPHIC", 	$Path."/app/private/graphic");
	define ("PD_SRC", 		$Path."/app/private/src");
?>