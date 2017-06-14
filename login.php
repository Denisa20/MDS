<?php
if (!isset($_SESSION['valid_client'])) {
	$_SESSION['valid_client'] = array(); 
}

if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
   echo 'Bine ai venit <b style="color:#000;">'.$_SESSION['valid_client'].'</b><br>';
   }
else {
	echo "<a href=\"login_page.php\" style=\"font-weight:bold; size:20px;\">Log in</a> <br> <a href=\"http://localhost/Proiect/login_page.php?action=creaza\" style=\"font-weight:bold; size:20px;\">Register</a>";
}

?>
