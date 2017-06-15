<?php 
session_start();
include ("baza_de_date.php"); 

if (!isset($_SESSION['valid_client'])) {
	$_SESSION['valid_client'] = array(); 
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Contact</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
function validate_required(field,alerttxt)
{with (field){
  if (value==null||value=="") {alert(alerttxt);return false;}
  else {return true;}}}
function validate_email(field,alerttxt)
{with (field)
  { apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos < 1 ||dotpos-apos < 2) {alert(alerttxt);return false;}
  else {return true;} }}
function validate_phone(field,alerttxt)
{with (field)
  { 
  if (isNaN(document.thisform.field.value)) {alert(alerttxt);return false;}
  else {return true;} }}
function validate_form(thisform)
{with (thisform)
  {if (validate_required(username,"Completati username-ul")==false)
  {username.focus();return false;}
  if (validate_required(password,"Completati parola")==false)
  {password.focus();return false;}
  if (validate_required(nume,"Completati numele")==false)
  {nume.focus();return false;}
  if (validate_required(prenume,"Completati prenumele")==false)
  {prenume.focus();return false;}
  if (validate_required(cnp,"Completati cnp-ul")==false)
  {cnp.focus();return false;}
  if (validate_required(telefon,"Introduceti un numar de telefon corect")==false)
  {telefon.focus();return false;}
  if (validate_required(mail,"Completati email-ul")==false)
  {mail.focus();return false;}
  if (validate_email(mail,"Adresa de mail nu este valida")==false)
    {mail.focus();return false;}
  }}
</script>

<link href="style.css" rel="stylesheet" type="text/css">
<?php
if(isset($_GET['action']) && ($_GET['action'] == "logout" || $_GET['action'] == "login")) {
	echo "<script type=\"text/javascript\">
	setTimeout(function () {
	   window.location.href= 'index.php'; // the redirect goes here
	
	},3000); // 5 seconds
	</script>";
}
?>
</head>
<body>

<table cellpadding="0" cellspacing="0" border="0" style="width:717px; height:750px" align="center"> 
	<tr>
		<td height="196">
		<!-- Meniul flash -->
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td height="263">
		
					<img height="550" src="img/antet.jpg">
						
					</td>
				</tr>
			</table>
		<!-- Sfarsit Meniul flash -->
			<table cellpadding="0" cellspacing="0" border="0" style="height:30px; background:url(images/bg_top.gif) no-repeat " class="header">
				<tr>
					<td><img alt="" src="images/spacer.png" width="39" height="1"></td>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:65px">
							<tr>
								<td></td>
							</tr>
						</table>
					</td>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:123px">
							<tr>
								<td></td>
							</tr>
						</table>
					</td>

					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:65px">
							<tr>
								<td></td>
							</tr>
						</table>
					</td>
					<td>
		
					</td>
					
					
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:10px">
							<tr>
								<td><a href="cart.php"><img src="images/z1.gif" alt=""></a><br></td>
							</tr>
						</table>
					</td>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:200px">
							<tr>
								<td>
<!-- Cos de cumparaturi -->					
								<strong>Cosul de cumparaturi</strong> &nbsp;
								<span>(</span><a href="cart.php">
<?php
 $nrRez=0;
 $totalValoare=0;
 for($i=0; $i<count($_SESSION['nume']); $i++)
   { $nrRez=$nrRez + $_SESSION['nr_loc_rez'][$i];
     $totalValoare = $totalValoare + ($_SESSION['nr_loc_rez'][$i]*$_SESSION['pret'][$i]);
   }
 ?>
   <?php echo $nrRez; ?></b> produse	
   </a><span>)</span>		
<!-- Cos de cumparaturi -->									
								
								
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<br>
		</td>
	</tr>
	<tr>
		<td>
			<table cellpadding="0" cellspacing="0" border="0" style="height:584">
				<tr>
					<td><img alt="" src="images/spacer.png" width="4" height="1"></td>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:220px">
							<tr>
								<td>
									<table cellpadding="0" cellspacing="0" border="0" class="box_header_txt">
										<tr>
											<td><img src="images/q-1.gif" alt=""><br></td>
											<td style="width:193px">Meniu login:</td>
											<td><img src="images/q-2.gif" alt=""><br></td>
										</tr>
									</table>
									<table cellpadding="0" cellspacing="0" border="0" style="height:252px" class="box_body">
										<tr>
											<td>
												<ul>
<?php 
if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']== array())  {
	echo "<li class=\"bg_list\"><a href=\"login_page.php?action=login\">Log in</a></li>";
}
?>
<li class="bg_list"><a href="login_page.php?action=creaza">Creeaza cont nou</a></li>
<li class="bg_list"><a href="login_page.php?action=modifica">Modifica cont</a></li>
<?php
	if (isset($_SESSION['valid_client']) && $_SESSION['statut_user'] == 0) {
		echo "<li class=\"bg_list\"><a href=\"admin/index.php\">Administrare site</a></li>";
	}
?>
<?php 
if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
	echo "<li class=\"bg_list\"><a href=\"login_page.php?action=comenzile_mele\">Comenzile mele</a><br /></li>";
	echo "<li class=\"bg_list\"><a href=\"login_page.php?action=change_pass\">Schimba parola</a><br /></li>";
	echo "<li class=\"bg_list\"><a href=\"login_page.php?action=logout\">Log out</a><br /></li>";
}
?>
												</ul>
											</td>
										</tr>
									</table>
									<table cellpadding="0" cellspacing="0" border="0" class="box_header_txt1">
										<tr>
											
										</tr>
									</table>
									<table cellpadding="0" cellspacing="0" border="0" style="height:210px; background-color:#1A1917;">
										<tr>
											<td>
<div align="center" style=" margin-left:35px">
<marquee behavior="scroll" direction="up" scrolldelay="0" align="middle">
   <img src="images/1_p1.jpg" border="0" width="150"><br>
   <img src="images/1_p2.jpg" border="0" width="150"><br>
   <img src="images/1_p3.jpg" border="0" width="150"><br>
</marquee>
</div>

											</td>
										</tr>
									</table>
									<table cellpadding="0" cellspacing="0" border="0" style="height:31px">
										<tr>
											<td><img src="images/li.gif" alt=""></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
					<td><img alt="" src="images/spacer.png" width="7" height="1px"></td>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:486px">
							<tr>
								<td>
									<table cellpadding="0" cellspacing="0" border="0" style="height:489px ">
										<tr>
											<td>
												<table cellpadding="0" cellspacing="0" border="0" class="cont_header_txt">
													<tr>
														<td><img src="images/q-3.gif" alt=""><br></td>
														<td style="width:429px">
	<!--  Aici incepe TITLUL CATEGORIEI --> 													
											
	<!--  Aici se termina TITLUL CATEGORIEI -->											
														</td>
														<td><img src="images/q-4.gif" alt=""><br></td>
													</tr>
												</table>
												<table cellpadding="0" cellspacing="0" border="0">
													<tr>
														<td bgcolor="#BEBEBE"><img alt="" src="images/spacer.png" width="1" height="1"></td>
														<td><img alt="" src="images/spacer.png" width="18" height="1"></td>
														<td>
 <!--##########################  Aici incepe Afisarea produselor  #######################--> 

															<table cellpadding="0" cellspacing="4" border="0" style="width:448px; height:431px" class="product">

															
																	<td>
 <!--##########################  Aici incepe produsul  #######################--> 
																		<table cellpadding="0" cellspacing="0" border="0" style="width:440px ;" >
																		

<tr>
  <td><br><br><br>
    
	
	
	
	<?php 
//Inceput Log In
if((isset($_GET['action']) && $_GET['action'] == "login") || !isset($_GET['action'])) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = "SELECT username , password , statut FROM utilizator WHERE username='$username' AND password=md5('$password')";
			$result = mysqli_query($GLOBALS['con'], $query);
				while ($rezultat = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					$_SESSION['valid_client'] = $username;
					$_SESSION['statut_user']= $rezultat['statut'];
						echo "";
				}
    }
	   
		if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
				echo 'Bine ai venit <b>'.$_SESSION['valid_client'].'</b><br>';
		}
			else {
				if (isset($username)){
					echo "Nu va puteti loga.Username sau parola incorecte<br><br>";
					echo '<form method="POST" action="login_page.php?action=login">';
					echo'<br>Username: <input type="text" name="username"><br>';
					echo'Password: <input type="password" name="password"><br><br>';
					echo '<input type="submit" value="Log in" style="width:80px"></form>';
				}
				else {
					echo "Nu sunteti logat. Introduceti username-ul si parola<br><br>";
					echo '<form method="POST" action="login_page.php?action=login">';
					echo'<br>Username: <input type="text" name="username"><br>';
					echo'Password: <input type="password" name="password"><br><br>';
					echo '<input type="submit" value="Log in" style="width:80px"></form>';
				}
			}
}//Sfarsit Log In

//creare uutilizator
if(isset($_GET['action']) && $_GET['action'] == "creaza") {
echo '<form onsubmit="return validate_form(this);" method="post" action="login_page.php?action=inreg"   >
 <table>
<tr><td>Username: </td><td><input type="text" name="username" /></td></tr>
<tr><td>Parola: </td><td><input type="password" name="password" /></td></tr>
<tr><td>Nume: </td><td><input type="text" name="nume" /></td></tr>
<tr><td>Prenume: </td><td><input type="text" name="prenume" /></td></tr>
<tr><td>CNP: </td><td><input type="text" name="cnp" /></td></tr>
<tr><td>Telefon: </td><td><input type="text" name="telefon" /></td></tr>
<tr><td>Mail: </td><td><input type="text" name="mail" /></td></tr>
<tr><td>Judet: </td><td><input type="text" name="judet" /></td></tr>
<tr><td>Oras: </td><td><input type="text" name="oras" /></td></tr>
<tr><td>Strada: </td><td><input type="text" name="strada" /></td></tr>
<tr><td>Numar: </td><td><input type="text" name="numar" /></td></tr>
<tr><td>Cod postal: </td><td><input type="text" name="cod_postal" /></td></tr>
<tr><td><input type="submit" value="Inregistreaza" name="action" style="width:100px;"/></td><td><input type="reset" value="Resetare" style="width:80px;"/></td></tr>
</table>
</form>';} //sfarsit creare uutilizator
//adaugare utilizator in baza de date
if(isset($_GET['action']) && $_GET['action'] == "inreg") {
   if($_POST['username']=="") {echo 'Trebuie sa completati UserName-ul <br><a href="login_page.php?action=inreg">Inapoi</a>';exit;}
	$sql="SELECT username,password FROM utilizator WHERE username='".$_POST['username']."' AND statut = 1";
    $resursa=mysqli_query($GLOBALS['con'], $sql);
    if(mysqli_num_rows($resursa) != 0)
 	  { print 'Userul <b>'.$_POST['nume_nou'].'</b> exista deja in baza de date!<br>
	   <a href="login_page.php?action=creaza">Inapoi</a>';
	  exit;}
    if($_POST['password']=="") {echo 'Trebuie sa completati parola <br><a href="login_page.php?action=creaza">Inapoi</a>';
	exit;}
   if($_POST['mail']=="")
      { print 'Trebuie sa completezi adresa de e-mail!<br>
	     <a href="login_page.php?action=creaza">Inapoi</a>';
	   exit;
      }
    $sql="SELECT mail FROM utilizator WHERE mail='".$_POST['mail']."'";
    $resursa=mysqli_query($GLOBALS['con'], $sql);
    if(mysqli_num_rows($resursa) != 0)
 	{ print 'E-mailul <b>'.$_POST['mail'].'</b> exista deja in baza de date!<br>
	  <a href="login_page.php?action=creaza">Inapoi</a>';exit;
	}
	
 $sql="INSERT INTO utilizator (id_utilizator,username,password,nume,prenume,cnp,telefon,mail,judet,oras,strada,numar,cod_postal,statut) VALUES ('','".$_POST['username']."',md5('".$_POST['password']."'),'".$_POST['nume']."','".$_POST['prenume']."','".$_POST['cnp']."','".$_POST['telefon']."','".$_POST['mail']."','".$_POST['judet']."','".$_POST['oras']."','".$_POST['strada']."','".$_POST['numar']."','".$_POST['cod_postal']."','1')";
    mysqli_query($GLOBALS['con'], $sql);
    print 'Userul <b>'.$_POST['username'].'</b> cu adresa de mail: <b>'.$_POST['mail'].'</b> a fost adaugat in baza de date!<br><br><br>
	  <a href="login_page.php?action=login">Log in</a><br>Inapoi la <a href="index.php">prima pagina</a>.';
	  exit;
  }//sfarsit adaugare utilizator in baza de date


if (isset($_SESSION['valid_client'])) //modificare utilizator
	{  
if(isset($_GET['action']) && $_GET['action'] == "modif") {
		if($_POST['mail']=="") {echo 'Trebuie sa completati mail-ul ';exit;}
			$sql="UPDATE `baza_de_date`.`utilizator` SET `nume` = '".$_POST['nume']."',
				`prenume` 	= '".$_POST['prenume']."', 
				`cnp` 		= '".$_POST['cnp']."',
				`telefon` 	= '".$_POST['telefon']."', 
				`mail` 		= '".$_POST['mail']."', 
				`judet`	 	= '".$_POST['judet']."',
				`oras` 		= '".$_POST['oras']."', 
				`strada` 	= '".$_POST['strada']."', 
				`numar` 	= '".$_POST['numar']."',
				`cod_postal`= '".$_POST['cod_postal']."'
				WHERE `utilizator`.`id_utilizator` =".$_POST['id_utilizator']." LIMIT 1 ";
				
					mysqli_query($GLOBALS['con'], $sql);
						print 'Userul cu adresa de mail: <b>'.$_POST['mail'].'</b> a fost modificat in baza de date!<br><br>
								<a href="login_page.php?action=modifica">Modifica</a> contul din nou.<br>Inapoi la <a href="index.php">pagina principala</a>.<br><br>';
				exit;
  }//sfarsit modificare utilizator 
  
if(isset($_GET['action']) && $_GET['action'] == "modifica") {
$sql="SELECT * FROM utilizator WHERE username='".$_SESSION['valid_client']."'";
$resursa=mysqli_query($GLOBALS['con'], $sql);
$row = mysqli_fetch_array($resursa, MYSQLI_ASSOC); 

echo '<form method="post" action="login_page.php?action=modif">
 <table>
<tr><td>Username: </td><td>'.$row['username'].'</td></tr>
<tr><td>Parola criptata: </td><td>'.$row['password'].'</td></tr>
<tr><td>Nume: </td><td><input type="text" name="nume" value="'.$row['nume'].'"/></td></tr>
<tr><td>Prenume: </td><td><input type="text" name="prenume" value="'.$row['prenume'].'"/></td></tr>
<tr><td>CNP: </td><td><input type="text" name="cnp" value="'.$row['cnp'].'" /></td></tr>
<tr><td>Telefon: </td><td><input type="text" name="telefon" value="'.$row['telefon'].'" /></td></tr>
<tr><td>Mail: </td><td><input type="text" name="mail" value="'.$row['mail'].'"/></td></tr>
<tr><td>Judet: </td><td><input type="text" name="judet" value="'.$row['judet'].'"/></td></tr>
<tr><td>Oras: </td><td><input type="text" name="oras" value="'.$row['oras'].'" /></td></tr>
<tr><td>Strada: </td><td><input type="text" name="strada" value="'.$row['strada'].'" /></td></tr>
<tr><td>Numar: </td><td><input type="text" name="numar" value="'.$row['numar'].'" /></td></tr>
<tr><td>Cod postal: </td><td><input type="text" name="cod_postal" value="'.$row['cod_postal'].'" /></td></tr>
<tr><td><input type="hidden" name="id_utilizator" value="'.$row['id_utilizator'].'" /><input type="submit" value="Modifica" name="action" style="width:80px"/></td><td><input type="reset" value="Resetare" style="width:80px" /></td></tr>
</table>
</form>';}
}
 else { if(isset($_GET['action']) && $_GET['action'] == "modifica") {
   echo '<br><br><br>Nu sunteti logat. Doar membrii pot accesa aceasta pagina.<br>Pentru a va loga, accesati pagina de <a href="login_page.php?action=login">Log in</a>';}}
 //Log Out
if(isset($_GET['action']) && $_GET['action'] == "logout") {
  $old_user = $_SESSION['valid_client'];
  unset($_SESSION['valid_client']);
  session_destroy();
  if (!empty($old_user))
   {  echo '<br><br>Nu mai sunteti logat . Click <a href="login_page.php?action=login">aici</a> pentru a va loga<br><br>'; }
   else { echo '<br><br>Nu sunteti logat. Pentru a va loga, accesati pagina de <a href="login_page.php?action=login">Log in</a><br><br>';}
   
} //Sfarsit Log Out


if(isset($_GET['action']) && $_GET['action'] == "change_pass") {
	if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
		echo "<form action=\"login_page.php?action=change_pass_final\" method=\"POST\" >
		      <table><tr><td>Parola veche:</td><td><input type=\"password\" name=\"pass1\"></td></tr>
		      <tr><td>Reintroduceti parola veche:</td><td><input type=\"password\" name=\"pass2\"></td></tr>
		      <tr><td>Parola noua:</td><td><input type=\"password\" name=\"new_pass\"></td></tr>
			  <tr><td colspan=\"2\"><input type=\"submit\" value=\"Schimba parola\"></td></tr>
			  </table>
			  </form>";
	} else {
		echo "<h2>Trebuie sa fii logat ca sa poti schimba parola !</h2>";
	}
}

if(isset($_GET['action']) && $_GET['action'] == "change_pass_final") {
	if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
		$query = "SELECT * FROM utilizator WHERE username LIKE \"".$_SESSION['valid_client']."\"";
		$rezultat = mysqli_query($GLOBALS['con'], $query);
		$rez = mysqli_fetch_array($rezultat, MYSQLI_ASSOC);
		$id_utilizator =$rez['id_utilizator'];
		$parola = $rez['password'];
		
		$parola_veche1 = $_POST['pass1'];
		$parola_veche2 = $_POST['pass2'];
		if ($parola_veche1 != $parola_veche2)
		{
		    echo "<h2>Parola veche a fost reintrodusa gresit !!</h2>";
		}
		else 
		{
			$sql="UPDATE `baza_de_date`.`utilizator` SET `password` = md5('".$_POST['new_pass']."')
				WHERE `utilizator`.`id_utilizator` =".$id_utilizator." LIMIT 1 ";
			mysqli_query($GLOBALS['con'], $sql);
				print '<h3> Parola a fost modificata </h3>.<br><br>';
		}
		
	} else {
		echo "<h2>Trebuie sa fii logat ca sa poti schimba parola !</h2>";
	}
}

if(isset($_GET['action']) && $_GET['action'] == "comenzile_mele") {
	if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
		$query = "SELECT * FROM utilizator WHERE username LIKE \"".$_SESSION['valid_client']."\"";
		$rezultat = mysqli_query($GLOBALS['con'], $query);
		$rez = mysqli_fetch_array($rezultat, MYSQLI_ASSOC);
		$id_utilizator =$rez['id_utilizator'];
		
		$queryy = "SELECT * FROM comanda WHERE id_utilizator = ".$id_utilizator." ORDER BY data ASC";
		$result = mysqli_query($GLOBALS['con'], $queryy);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			if ($row['onorare']) {
				$onorare = "comanda a fost onorata";
			} else {
				$onorare = "comanda urmeaza a fi onorata";
			}
			echo '<a href="login_page.php?action=vezi_comanda&id_comanda='.$row['id_comanda'].'">Comanda '.$row['data'].' => '.$onorare.'</a><br>';}
	} else {
		echo "<h2>Trebuie sa fii logat ca sa poti vedea comenzile !</h2>";
	}
}
if(isset($_GET['action']) && $_GET['action'] == "vezi_comanda") {
	if (isset($_GET['id_comanda'])) {
		$id_comanda = $_GET['id_comanda'];
		echo '<h2> Detalii comanda</h2>';

		// selectare date din comanda
		$query_comanda = "SELECT id_comanda,id_utilizator,valoare, data,onorare FROM comanda WHERE id_comanda = '".$id_comanda."'";
		$result_comanda = mysqli_query($GLOBALS['con'], $query_comanda);
		$row_c = mysqli_fetch_array($result_comanda, MYSQLI_ASSOC);

		$query_produs_comanda = "SELECT * FROM produs_comanda WHERE id_comanda = '".$id_comanda."'";
		$result_produs_comanda = mysqli_query($GLOBALS['con'],$query_produs_comanda);

		$query_utilizator = "SELECT * FROM utilizator WHERE id_utilizator = '".$row_c['id_utilizator']."'";
		$result_utilizator = mysqli_query($GLOBALS['con'],$query_utilizator);
		$row_u = mysqli_fetch_array($result_utilizator, MYSQLI_ASSOC);
		echo '<br><br>Total de plata: <b>'.$row_c['valoare'].' RON</b>';
	    echo "<br> Data plasare comanda:<b> ".$row_c['data']."</b>";
		if ($row_c['onorare']) {
			$onorare = "comanda a fost onorata";
		} else {
			$onorare = "comanda urmeaza a fi onorata";
		}
		echo "<br> Onorare:<b> ".$onorare."</b><br><br><br>";
		
		while ($row_cc = mysqli_fetch_array($result_produs_comanda, MYSQLI_ASSOC)){
		$query_produs = "SELECT nume,id,pret FROM produse WHERE id = '".$row_cc['id_produs']."'";
		$result_produs = mysqli_query($GLOBALS['con'], $query_produs);
		$row_cs = mysqli_fetch_array($result_produs, MYSQLI_ASSOC);
		echo 'Model: <b>'.$row_cs['nume'].'</b> ;<br> Numar: <b>'.$row_cc['nr_produse'].'</b> ;<br> Pret: <b>'.$row_cc['nr_produse']*$row_cs['pret'].' RON</b><br><br>';
		}
	}
}

?>
	
	
	
	
	
  </td>
</tr>
</table>
																		
 <!--####################################################################################-->
 <!--##########################  Aici se termina PRODUSUL  #######################--> 
 <!--####################################################################################-->																		
																		
																	</td>

																</tr>
																<tr>
																	<td colspan="3" style="height:17px "></td>
																</tr>
															</table>
														</td>
														<td><img alt="" src="images/spacer.png" width="18" height="1"></td>
														<td bgcolor="#BEBEBE"><img alt="" src="images/spacer.png" width="1" height="1"></td>
													</tr>
												</table>
												<table cellpadding="0" cellspacing="0" border="0">
													<tr>
														<td><img src="images/line.gif" alt=""><br></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<table cellpadding="0" cellspacing="0" border="0" style="height:95px" class="footer">
										<tr>
											<td style="border:1px solid #ffffff; border-width:19px 0px 0px 19px;">
		
		<div align="center">
					<img src="images/z2.gif" alt=""><span>
			<a href="index.php">Acasa</a></span> <img src="images/z2.gif" alt=""><span>
			<a href="contact.php">Contact</a></span><img src="images/z2.gif" alt=""> 
		</div>

								<br style="line-height:5px">
											<br>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>









