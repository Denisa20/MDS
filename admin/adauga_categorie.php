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
<title>Adauga categorie</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
if (isset($_SESSION['valid_user']))
 {  include ('menu_links.php');


//verificare conditie de actiune
if(isset($_GET['action']) && $_GET['action'] == "add") {
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Adauga categorie </div></div><div class="mijloc"><div class="mne">';
   if($_POST['cat']=="") {echo 'Trebuie sa completati numele categoriei <br><a href="adauga_categorie.php">Inapoi</a>';exit;}
	$sql="SELECT cat FROM categorii WHERE cat='".$_POST['cat']."'";
    $resursa=mysqli_query($GLOBALS['con'], $sql);
    if(mysqli_num_rows($resursa) != 0)
 	  { print 'Categoria <b>'.$_POST['cat'].'</b> exista deja in baza de date!<br>
	   <a href="adauga_categorie.php">Inapoi</a>';
	   echo '</div></div><div class="jos"></div></div></div>';exit;}
//inserare in categorii   
 $sql="INSERT INTO categorii (idc,cat,descriere) VALUES ('','".$_POST['cat']."','".$_POST['descriere']."')";
    mysqli_query($GLOBALS['con'], $sql);
    print 'Categoria <b>'.$_POST['cat'].'</b> cu descrierea: <b>'.$_POST['descriere'].'</b> a fost adaugata in baza de date!<br><br>
	  <a href="adauga_categorie.php">Adauga</a> alta categorie.<br>Inapoi la <a href="index.php">meniul principal</a>.';
echo '</div></div><div class="jos"></div></div></div>';
	  exit;
  }//sfarsit adaugare
else{
echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Adauga categorie </div></div><div class="mijloc"><div class="mne">';
?> <form method="post" action="adauga_categorie.php?action=add">
 <table>
<tr><td>Nume categorie: </td><td><input type="text" name="cat" /></td></tr>
<tr><td>Descriere: </td><td><input type="text" name="descriere" /></td></tr>
<tr><td><input type="submit" value="Creeaza" name="action" style=" width:80px;"/></td><td><input type="reset" value="Resetare" style=" width:80px;" /></td></tr>
</table>
</form>
 
<?php
} echo '</div></div><div class="jos"></div></div></div>';
}
 else { //conditie pentru userii nelogati,care au ajuns la aceasta pagina prin alte metode
   echo 'Nu sunteti logat. Doar membrii privilegiati pot accesa aceasta pagina.<br>Pentru a va loga, accesati pagina de <a href="index.php">Log in</a>';}
?>

</body>
</html>