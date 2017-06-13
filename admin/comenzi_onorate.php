<?php
//start de sesiune
session_start();
//conectare la baza de date
include ("connection.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Comenzi onorate</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
if (isset($_SESSION['valid_user'])) //verificare daca userul este setat
 {  include ('menu_links.php');

if(isset($_GET['id_comanda'])) {
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Comanda onorata </div></div><div class="mijloc"><div class="mne">';
// selectare date din comanda
$query_comanda = "SELECT id_comanda,id_utilizator,valoare,data FROM comanda WHERE id_comanda = '".$_GET['id_comanda']."'";
$result_comanda = mysqli_query($GLOBALS['con'], $query_comanda);
$row_c = mysqli_fetch_array($result_comanda, MYSQLI_ASSOC);

$query_produs_comanda = "SELECT * FROM produs_comanda WHERE id_comanda = '".$_GET['id_comanda']."'";
$result_produs_comanda = mysqli_query($GLOBALS['con'], $query_produs_comanda);

$query_utilizator = "SELECT * FROM utilizator WHERE id_utilizator = '".$row_c['id_utilizator']."'";
$result_utilizator = mysqli_query($GLOBALS['con'], $query_utilizator);
$row_u = mysqli_fetch_array($result_utilizator, MYSQLI_ASSOC);
echo 'Total de plata: <b>'.$row_c['valoare'].' RON</b><br><br>';

while ($row_cc = mysqli_fetch_array($result_produs_comanda, MYSQLI_ASSOC)){
	$query_produs = "SELECT nume,id,pret FROM produse WHERE id = '".$row_cc['id_produs']."'";
	$result_produs = mysqli_query($GLOBALS['con'], $query_produs);
	$row_cs = mysqli_fetch_array($result_produs, MYSQLI_ASSOC);
	echo 'Model: <b>'.$row_cs['nume'].'</b> ;<br> Numar: <b>'.$row_cc['nr_produse'].'</b> ;<br> Pret: <b>'.$row_cc['nr_produse']*$row_cs['pret'].' RON</b><br><br>';
	echo "<br> Data plasare comanda:<b> ".$row_c['data']."</b>";
}

echo '<br><br><table>
<tr><td>Username: </td><td>'.$row_u['username'].'</td></tr>
<tr><td>Nume: </td><td>'.$row_u['nume'].'</td></tr>
<tr><td>Prenume: </td><td>'.$row_u['prenume'].'</td></tr>
<tr><td>CNP: </td><td>'.$row_u['cnp'].'</td></tr>
<tr><td>Telefon: </td><td>'.$row_u['telefon'].'</td></tr>
<tr><td>Mail: </td><td>'.$row_u['mail'].'</td></tr>
<tr><td>Judet: </td><td>'.$row_u['judet'].'</td></tr>
<tr><td>Oras: </td><td>'.$row_u['oras'].'</td></tr>
<tr><td>Strada: </td><td>'.$row_u['strada'].'</td></tr>
<tr><td>Numar: </td><td>'.$row_u['numar'].'</td></tr>
<tr><td>Cod postal: </td><td>'.$row_u['cod_postal'].'</td></tr></table>';

echo '<br><form action="comenzi_onorate.php?action=sterge" method="post">
 <input type="submit" value="Sterge comanda" >
 <input type="hidden" name="id_comanda" value="'.$_GET['id_comanda'].'" >
</form>';
echo '</div></div><div class="jos"></div></div></div>';
exit;
  }
if(isset($_GET['action']) && $_GET['action'] == "sterge"){ //functia de stergere comanda
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Comenzi onorate </div></div><div class="mijloc"><div class="mne">';
echo '<div align="center"><h3>Comanda a fost stearsa din baza de date !</h3></div><br><br><a href="index.php">Inapoi</a> la prima pagina<br><a href="comenzi_onorate.php">Sterge</a> alta comanda onorata<br><br>';
$delete_comanda="DELETE FROM `comanda` WHERE `comanda`.`id_comanda` = '".$_POST['id_comanda']."' LIMIT 1";
 $resultc = mysqli_query($GLOBALS['con'], $delete_comanda);
$delete_produse="DELETE FROM `produs_comanda` WHERE `produs_comanda`.`id_comanda` = '".$_POST['id_comanda']."'";
 $resultcs = mysqli_query($GLOBALS['con'], $delete_produse);
 
  $query = "SELECT id_comanda,onorare,data FROM comanda WHERE onorare = '1' ORDER BY data ASC";
  $result = mysqli_query($GLOBALS['con'], $query);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  echo '<a href="comenzi_onorate.php?id_comanda='.$row['id_comanda'].'">Comanda '.$row['data'].'</a><br>';}

echo '</div></div><div class="jos"></div></div></div>';
}
else{ //afisare comenzi onorate
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Alege comanda </div></div><div class="mijloc"><div class="mne">';
?> 
<?php
  $query = "SELECT id_comanda,onorare,data FROM comanda WHERE onorare = '1' ORDER BY data ASC";
  $result = mysqli_query($GLOBALS['con'], $query);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  echo '<a href="comenzi_onorate.php?id_comanda='.$row['id_comanda'].'">Comanda '.$row['data'].'</a><br>';}
?>
 
<?php 
} echo '</div></div><div class="jos"></div></div></div>';
}
 else {
   echo 'Nu sunteti logat. Doar membrii privilegiati pot accesa aceasta pagina.<br>Pentru a va loga, accesati pagina de <a href="index.php">Log in</a>';}
?>

</body>
</html>