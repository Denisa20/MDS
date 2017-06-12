<?php
$connection = mysqli_connect("localhost","root","","pc_base");
if (!$connection) {
 die ("Eroare MySQL");
}
if (!isset($GLOBALS['con'])) { $GLOBALS['con'] = $connection; }

?>