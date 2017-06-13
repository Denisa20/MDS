<?php
//start sesiune
session_start();
//conectare la baza de date
include ("connection.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modifica produs</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
if (isset($_SESSION['valid_user'])) //verificare daca userul este valid
 {  include ('menu_links.php');
// functie de modificare produs
if(isset($_GET['action']) && $_GET['action'] == "category") {
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Alege nume </div></div><div class="mijloc"><div class="mne">';
 $query = "SELECT cat,idc FROm categorii WHERE idc = '".$_POST['idc']."'";
 $rez = mysqli_query($GLOBALS['con'], $query);
 $rand = mysqli_fetch_array($rez, MYSQLI_ASSOC);
echo '<form method="post" action="modifica_produs.php?action=nume"><table>
<tr><td>Nume categorie: </td><td>'.$rand['cat'].'</td></tr>
<tr><td>Produs: </td><td>
<select name="id">';

$sql="SELECT idc,id,nume FROM produse WHERE idc = '".$_POST['idc']."'";
 $result = mysqli_query($GLOBALS['con'], $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 echo '<option value="'.$row['id'].'">'.$row['nume'].'</option>'; }
 
echo '</select>
</td></tr>
<tr><td colspan="2"><input type="submit" value="Selecteaza" name="action" style=" width:100px;"/></td></tr>
</table></form>';
echo '</div></div><div class="jos"></div></div></div>';
exit;
  }
if(isset($_GET['action']) && $_GET['action'] == "nume") {
$query = "SELECT * FROM produse WHERE id = '".$_POST['id']."'";
$rez = mysqli_query($GLOBALS['con'], $query);
$row = mysqli_fetch_array($rez, MYSQLI_ASSOC);
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Modifica produs </div></div><div class="mijloc"><div class="mne">';
echo '<form method="post" action="modifica_produs.php?action=modifica">
 <table>
<tr><td>Denumire: </td><td><input type="text" name="nume" value="'.$row['nume'].'" /></td></tr>
<tr><td>Detalii: </td><td><textarea name="detalii" >'.$row['detalii'].'</textarea></td></tr>
<tr><td>Pret: </td><td><input type="text" name="pret" value="'.$row['pret'].'" /></td></tr>
<tr><td>Stoc: </td><td><input type="text" name="stoc" value="'.$row['stoc'].'" /></td></tr>
<tr><td><input type="hidden" name="id" value="'.$_POST['id'].'" /><input type="submit" value="Modifica" name="action" style="width:80px;"/></td><td><input type="reset" value="Resetare" style="width:80px;"/></td></tr>
</table>
</form>';
 
	  echo '</div></div><div class="jos"></div></div></div>';
	  exit;}
	  
if(isset($_GET['action']) && $_GET['action'] == "modifica") {
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Rezultat </div></div><div class="mijloc"><div class="mne">';
 $sql="UPDATE `pc_base`.`produse` SET `nume` = '".$_POST['nume']."' , `pret` = '".$_POST['pret']."' , `detalii` = '".$_POST['detalii']."' , `stoc` = '".$_POST['stoc']."' WHERE `produse`.`id` =".$_POST['id']." LIMIT 1 ";
    mysqli_query($GLOBALS['con'], $sql);
	 print 'Modelul <b>'.$_POST['nume'].'</b> cu pretul <b>'.$_POST['pret'].'</b> RON a fost modificat in baza de date!<br><br>
	  <a href="index.php">Inapoi</a> la meniul principal.<br><a href="modifica_produs.php">Modifica</a> un alt produs.<br>';
	  echo '</div></div><div class="jos"></div></div></div>';
	  exit;}

else{
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Alege marca </div></div><div class="mijloc"><div class="mne">';
?> <form method="post" action="modifica_produs.php?action=category">
 <table>
<tr><td>Selecteaza categorie: </td>
<td>
<select name="idc">
<?php
  $query = "SELECT * FROM categorii";
  $result = mysqli_query($GLOBALS['con'], $query);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  echo '<option value="'.$row['idc'].'">'.$row['cat'].'</option>';}
?>
</select>
</td></tr>
<tr><td colspan="2"><input type="submit" value="Selecteaza" name="action" style=" width:80px;"/></td></tr>
</table>
</form>
<?php 
} echo '</div></div><div class="jos"></div></div></div>';
}
 else {
   echo 'Nu sunteti logat. Doar membrii privilegiati pot accesa aceasta pagina.<br>Pentru a va loga, accesati pagina de <a href="index.php">Log in</a>';}
?>
</body>
</html>