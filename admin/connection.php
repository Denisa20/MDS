<?php
$connection = mysqli_connect("localhost","root","","baza_de_date");
if (!$connection) {
 die ("Eroare MySQL");
}
if (!isset($GLOBALS['con'])) { $GLOBALS['con'] = $connection; }

?>