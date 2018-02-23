<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			#Author: Jerson Martínez (Side Master)			
			#Se agrega el head del core, utilizando la constante PF_CORE_HEAD.
			include (PF_CORE_HEAD);
		?>
	</head>
	
	<body class="theme-red">
		<?php
			function RefreshPage(){
				header("Refresh:0 url=".$_SERVER['PHP_SELF']."");
			}

			# Este decide si se muestra el Sign In, Sign Up o la aplicación.
			if (@$_SESSION['gp_signin'] == true)
				echo "Se muestra el login";
			else if (@$_SESSION['gp_signup'] == true)
				echo "Se muestra el registro";
			else
				include (PD_PRIVATE_DESKTOP_GP."/main.php");
		?>
	</body>

</html>