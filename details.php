<?php 
session_start();
include ("baza_de_date.php"); 
$idp = $_GET['id'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Detalii produs</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="galerie.js"></script>
<link rel="stylesheet" type="text/css" href="galerie.css">
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
			<center>
			<table cellpadding="0" cellspacing="0" border="0" style="height:30px; background:url(images/bg_top.gif) repeat " class="header">
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
								<span>(</span>
									<a href="cart.php">
														<?php
															$nrRez=0;
															$totalValoare=0;
																	for(
																			$i=0; $i<count($_SESSION['nume']); $i++
																		)
																{ 
																	$nrRez=$nrRez + $_SESSION['nr_loc_rez'][$i];
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
														
<?php
// cate randuri sa afisezi
$per_row = 2;

$count = 0;
$numarate=0;

$sql = "SELECT * FROM produse WHERE id=".$idp;		
$resursa = mysqli_query($GLOBALS['con'], $sql);

$total = mysqli_num_rows($resursa); 

?>
															<table cellpadding="0" cellspacing="4" border="0" style="width:448px; height:431px" class="product">
<?php while ($row = mysqli_fetch_array($resursa, MYSQLI_ASSOC))
     { 	
?>
															
																	<td>
																	
 <!--##########################  Aici incepe produsul  #######################--> 
																		<table cellpadding="0" cellspacing="0" border="0" style="width:440px ;" >
																		
<tr>
 <td>
   <font size="3"><?php echo $row['nume']; ?></font>
 </td>
</tr>
<tr>
 <td>  <br><br><br>
       <table border="0" cellpadding="0" cellspacing="0" align="center">
	     <tr> 		   
		   
		   <td align="center">
		   	<!--##########################  Aici incepe 1 #######################--> 																					
	                       <?php $adresaImagine = "products/".$row['id']."/1.jpg";        
	if (file_exists($adresaImagine)){
							print '<a href="products/'.$row['id'].'/1.jpg" rel="thumbnail">
							<img src="products/'.$row['id'].'/1.jpg" height="200" style="border: 1px solid #666666;">
							</a>';}
							?>																						
	       <!--##########################  Aici se termina 1  #######################--> 	
		   </td>
		   
		 </tr>
	   </table>
 </td>
</tr>
<tr>
   <td><br><br><br>
      <table border="0" align="center" cellspacing="5">
<tr>
		  <td><u>Autor:</u> <b><?php echo $row['autor']; ?> </b></td>
		</tr>
	    <tr>
		  <td><u>Pret:</u> <b><?php echo $row['pret']; ?> RON</b></td>
		</tr>
		<tr>
		  <td><u>Informatii stoc:</u> <b><?php 
			if ($row['stoc'] >5) {
				$mesaj = "In stoc";
			} elseif ($row['stoc']<=5 && $row['stoc']>0) {
				$mesaj = "Stoc limitat";
			} else {
				$mesaj = "Indisponibil momentan";
			}
			echo $mesaj." (".$row['stoc']." produse)"; 
		  ?></b></td>
		</tr>
	    <tr>
		  <td style="width:200px;"><u>Descriere:</u> <b><?php echo $row['detalii']; ?> </b></td>
		</tr>
	  </table><br><br>
   </td>
</tr>		
<tr><td>
<div align="center">
 <form action="cart.php?actiune=adauga" method="POST">
    <INPUT type="hidden" name="id" value="<<?php echo $row['id']; ?>">
    <INPUT type="hidden" name="nume" value="<?php echo $row['nume']; ?>">
    <input type="hidden" name="nr_loc_rez" value="<?php echo $row['nr_loc_rez'];?>"> 
    <input type="hidden" name="pret" value="<?php echo $row['pret'];?>">
	<input type="image" name="actiune" src="images/button_add_to_cart.gif" border="0" align="top">
</form>		
</div>
</td></tr>																
																		
																		</table>
																		
 <!--##########################  Aici se termina PRODUSUL  #######################--> 
																		
																		
																	</td>
<?php
				}
?>

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









