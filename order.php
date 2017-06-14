<?php 
session_start();
include ("baza_de_date.php"); 

if (!isset($totalGeneral)) $totalGeneral = 0;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Cosul de cumparaturi</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link href="style.css" rel="stylesheet" type="text/css">
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
								<td><?php include ('login.php'); ?></td>
							</tr>
						</table>
					</td>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:123px">
							<tr>
								<td>
								<?php if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array())  {
									echo "<a href=\"login_page.php\">Setari cont</a> | <a href=\"login_page.php?action=logout\">Log out</a>"; }
								?></td>
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
					
					<td><img alt="" src="images/spacer.png" width="44" height="1"></td>
					<td><img src="images/z.gif" alt=""><br></td>
					<td><img alt="" src="images/spacer.png" width="20" height="1"></td>
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
									
									<table cellpadding="0" cellspacing="0" border="0" style="height:252px" class="box_body">
										<tr>
											<td>
												<ul>
		<!--Aici INCEPE meniul-->
		<?php include('menu.php'); ?>
		<!--Aici SE TERMINA meniul-->
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
				Confirmare trimitere comanda										
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
 <!--####################################################################################-->
 <!--##########################  Aici incepe Afisarea produselor  #######################--> 
 <!--####################################################################################-->														

															<table cellpadding="0" cellspacing="4" border="0" style="width:448px; height:431px" class="product">

															
																	<td>
																	

<table border="0" cellspacing="4" cellpadding="4" bordercolor="#666666">
<tr bgcolor="#333333" align="center">
    <td><b>Nume produs</b></td>
    <td width="80"><b>Pret</b></td>
  <td><b>nr.</b></td>  
  <td width="80"><b>Total</b></td>
</tr>
<?php
for ($i=0; $i < count($_SESSION['id']); $i++)
	{ if ($_SESSION['nr_loc_rez'][$i] != 0)
	  { print'<tr>
	   <td><b>'.$_SESSION['nume'][$i].'</b>
	   
	   </td>
	   <td align="center">
	   '.$_SESSION['pret'][$i].' RON</td>
	   <td >'.$_SESSION['nr_loc_rez'][$i].'</td>
	   <td align="center">'
	   .($_SESSION['pret'][$i]*$_SESSION['nr_loc_rez'][$i]).
	   ' RON</td></tr>';	  
	  $totalGeneral = $totalGeneral + ($_SESSION['pret'][$i]*$_SESSION['nr_loc_rez'][$i]);
	 }
	}
print '<tr><td align="right"
	colspan="3"><b>Total in cos</b></td><td align="right"><b>'.$totalGeneral.
	'</b> RON</td></tr>';
?>
</table>
<br><br><br>


<?php
if (!isset($_GET['action'])) {
if (isset($_POST['username']) && isset($_POST['password'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT username , password , statut FROM utilizator WHERE username='$username' AND password=md5('$password') AND statut = 1";
$result = mysqli_query($GLOBALS['con'], $query);
if (mysqli_fetch_array($result, MYSQLI_ASSOC)) {
       $_SESSION['valid_client'] = $username;}}
	   
if (isset($_SESSION['valid_client']) && $_SESSION['valid_client']!=array() && count($_SESSION['nume'])>0)  {
    echo '<h1><a href="order.php?action=trimite" class="big">Trimite comanda</a></h1>';
   }
else {
 if (isset($username)){
   echo "Nu va puteti loga.Username sau parola incorecte<br><br>";
   echo '<form method="POST" action="order.php">';
echo'<br>Username: <input type="text" name="username"><br>';
echo'Password: <input type="password" name="password"><br><br>';
echo '<input type="submit" value="Log in" style="width:80px"></form>';
   }
 
  }

echo '<br><br>';

if (count($_SESSION['nume']) == 0 ){ echo '<br><h2>Nu aveti nici un produs in cosul de cumparaturi</h2>';}

}


//adaugare in tabela comanda	

if (isset($_SESSION['valid_client']) && $_SESSION['valid_client']!=array()){
	$query = "SELECT id_utilizator,username,mail FROM utilizator WHERE username = '".$_SESSION['valid_client']."'";
	$resursa = mysqli_query($GLOBALS['con'], $query);
	$row = mysqli_fetch_array($resursa, MYSQLI_ASSOC);
	$id_u = $row['id_utilizator'];
	$mail_address = $row['mail'];
}
$id_comanda = 1;
$query = "SELECT id_comanda FROM comanda";
$resursa = mysqli_query($GLOBALS['con'], $query);
while ($row = mysqli_fetch_array($resursa, MYSQLI_ASSOC)){
if ($id_comanda == $row['id_comanda']) $id_comanda=$id_comanda+1;}
if (isset($_GET['action']) && $_GET['action']=="trimite"){
 $sql_comanda="INSERT INTO comanda (id_comanda,id_utilizator,valoare,data,onorare) VALUES ('".$id_comanda."','".$id_u."','".$totalGeneral."', NOW() ,'0')";
    $rez = mysqli_query($GLOBALS['con'], $sql_comanda);





//adaugare in tabela produs_comanda

for ($i=0; $i < count($_SESSION['id']); $i++)
	{ if ($_SESSION['nr_loc_rez'][$i] != 0)
	  { $query = "SELECT id,nume FROM produse WHERE nume = '".$_SESSION['nume'][$i]."'";
	    $rez=mysqli_query($GLOBALS['con'], $query);
		$row = mysqli_fetch_array($rez, MYSQLI_ASSOC);
	    $sql_produs_comanda="INSERT INTO produs_comanda (id_comanda,id_produs,nr_produse) VALUES ('".$id_comanda."','".$row['id']."','".$_SESSION['nr_loc_rez'][$i]."')";

 $rez = mysqli_query($GLOBALS['con'], $sql_produs_comanda);
	
$sql_update_produs="UPDATE produse SET stoc=stoc-'".$_SESSION['nr_loc_rez'][$i]."' WHERE id='".$row['id']."'";

   

    $rez = mysqli_query($GLOBALS['con'], $sql_update_produs);
		

	 }
	}
	if (isset($mail_address)) { 
		 $subject = "Comanda a fost expediata!";
		 
		 function var_dump_to_string($var){
			$output = "<pre>";
			_var_dump_to_string($var,$output);
			$output .= "</pre>";
			return $output;
		}

		function _var_dump_to_string($var,&$output,$prefix=""){
			foreach($var as $key=>$value){
				if(is_array($value)){
					$output.= $prefix.$key.": \n";
					_var_dump_to_string($value,$output,"  ".$prefix);
				} else{
					$output.= $prefix.$key.": ".$value."\n";
				}
			}
		}
		 $output = var_dump_to_string($_SESSION['nume']);
		 $message = "Comanda dumneavoastra este: ".$output;
		

	}
	echo '<br><br><br><br><div align="center"><h2>Comanda a fost trimisa !</h2></div><br><br><br><br>';
	session_destroy();
}
?>

								
																		
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









