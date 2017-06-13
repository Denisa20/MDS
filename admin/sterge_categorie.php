<?php
session_start();
include ("connection.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sterge categorie</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
if (isset($_SESSION['valid_user']))
 {  include ('menu_links.php');

if(isset($_GET['action']) && $_GET['action'] == "delete") {
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Stergere categorie </div></div><div class="mijloc"><div class="mne">';
$query = "SELECT * FROM categorii WHERE idc = '".$_POST['idc']."'";
 $rez = mysqli_query($GLOBALS['con'], $query);
 $row = mysqli_fetch_array($rez, MYSQLI_ASSOC);
 $cat = $row['cat'];
 $sql="DELETE FROM `categorii` WHERE `categorii`.`idc` = '".$_POST['idc']."' LIMIT 1";
 $result = mysqli_query($GLOBALS['con'], $sql);
 echo 'Categoria '.$cat.' a fost stearsa din baza de date.<br><br><a href="sterge_categorie.php">Sterge</a> alta categorie.<br>Inapoi la <a href="index.php">pagina principala.</a>';

echo '</div></div><div class="jos"></div></div></div>';
exit;
  }
else{
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Alege categoria </div></div><div class="mijloc"><div class="mne">';
?> <form method="post" action="sterge_categorie.php?action=delete">
 <table>
<tr><td>Selecteaza categorie: </td>
<td>
<select name="idc">
<?php
  $query = "SELECT idc,cat FROM categorii";
  $result = mysqli_query($GLOBALS['con'], $query);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  echo '<option value="'.$row['idc'].'">'.$row['cat'].'</option>';}
?>
</select>
</td></tr>
<tr><td colspan="2"><input type="submit" value="Sterge" name="action" style=" width:80px;"/></td></tr>
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