<?php
//start de sesiune
session_start();
//conectare la baza de date
include ("connection.php"); 

//notam directorul curent,comparativ cu root-ul
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// notam in variabila locatia fisierului care prelucreaza functia de upload
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'adauga_produs.php?action=add';

// dimensiunea maxima a imaginii
$max_file_size = 3000000000; //marimea ~ bytes

// notam intr-o variabila locatia formularului de upload
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'adauga_produs.php';

//pagina care afiseaza daca operatia a avut loc cu success
$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'adauga_produs.php?action=add';

// numele fieldname-ului pentru fisierul respectiv
$fieldname = 'file';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Adauga produs</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
<body>
	<!-- daca userul este setat ... -->
	<?php
		if (isset($_SESSION['valid_user'])){
			include ('menu_links.php');
 
		if(isset($_GET['action']) && $_GET['action'] == "add") {
		
			$qdir = "SELECT cat FROM categorii WHERE idc = ".$_POST['idc'];
			$rdir = mysqli_query($GLOBALS['con'], $qdir);
			$d = mysqli_fetch_array($rdir, MYSQLI_ASSOC);
	

	echo '<div align="center">
			<div class="mare">
				<div class="sus">
					<div class="ne"> Adauga produs </div>
				</div>
					<div class="mijloc">
						<div class="mne">';
						
							if($_POST['nume']=="") {echo 'Trebuie sa completati numele produsului <br><a href="adauga_produs.php">Inapoi</a>';
							
					echo ' </div>
					</div>
			<div class="jos"></div>
			</div>
		  </div>';exit;}
		$sql="SELECT nume FROM produse WHERE nume='".$_POST['nume']."'";
		$resursa=mysqli_query($GLOBALS['con'], $sql);
		if(mysqli_num_rows($resursa) != 0)
		  { print 'Produsul <b>'.$_POST['nume'].'</b> exista deja in baza de date!<br>
		   <a href="adauga_produs.php">Inapoi</a>';
		   echo '</div></div><div class="jos"></div></div></div>';exit;}
	   
	 $sql="INSERT INTO produse (id,idc,nume,autor,pret,detalii,stoc) VALUES ('','".$_POST['idc']."','".$_POST['nume']."','".$_POST['autor']."','".$_POST['pret']."','".$_POST['detalii']."','".$_POST['stoc']."')";
		mysqli_query($GLOBALS['con'], $sql);
		print 'Produsul <b>'.$_POST['nume'].'</b> cu pretul <b>'.$_POST['pret'].'</b> RON a fost adaugata in baza de date!<br>
		  <a href="index.php">Inapoi la meniu</a><br><a href="adauga_produs.php">Adauga un alt produs</a>';
		  echo '</div></div><div class="jos"></div></div></div>';exit;
  }//sfarsit inserare in produs
else{

echo '<div align="center"><div class="mare"><div class="sus"><div class="ne"> Adauga produs </div></div><div class="mijloc"><div class="mne">';
?> <form method="post" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" >
 <table>
<tr><td>Marca: </td><td>
<select name="idc">
<?php
$query = "SELECT idc , cat FROM categorii";
$result = mysqli_query($GLOBALS['con'], $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo '<option value="'.$row['idc'].'">'.$row['cat'].'</option>';}
?>
</select>
</td></tr>
<tr><td>Nume: </td><td><input type="text" name="nume" /></td></tr>
<tr><td>Autor: </td><td><input type="text" name="autor" /></td></tr>
<tr><td>Detalii: </td><td><textarea name="detalii"></textarea></td></tr>
<tr><td>Pret: </td><td><input type="text" name="pret" /></td></tr>
<tr><td>Stoc: </td><td><input type="text" name="stoc" /></td></tr>

<tr><td><input type="submit" value="Creeaza" id="submit" name="action" style="width:80px;"/></td><td><input type="reset" value="Resetare" style="width:80px;"/></td></tr>
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