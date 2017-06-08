-- PENTRU BAZA DE DATE

<?php
$con = mysqli_connect("localhost","root","", "baza_de_date");
if (!$con) {
 die ("Nu s-a deschis conexiunea cu serverul MySQL.");
}
if (!isset($GLOBALS['con'])) { $GLOBALS['con'] = $con; }

// initializari variabile
if (isset($_SESSION['nr_produse'])) { $nr_produse = $_SESSION['nr_produse']; } else { $_SESSION['nr_produse'] = array(); $nr_produse = 0;}
if (isset($_SESSION['pret'])) { $nr_produse = $_SESSION['pret']; } else { $_SESSION['pret'] = array(); $pret = 0;}

if (!isset($_SESSION['nr_loc_rez'])) $_SESSION['nr_loc_rez'] = array();
if (!isset($_SESSION['nume'])) $_SESSION['nume'] = array();
if (!isset($_SESSION['nr_produse'])) $_SESSION['nr_produse'] = array();
if (!isset($_SESSION['id_produs'])) $_SESSION['id_produs'] = array();
if (!isset($_SESSION['pret'])) $_SESSION['pret'] = array();
if (!isset($_SESSION['id'])) $_SESSION['id'] = array();
if (!isset($_SESSION['statut_user'])) { $_SESSION['statut_user'] = 1; }

?>
