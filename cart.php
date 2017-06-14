<?php 
	session_start();
		include ("baza_de_date.php"); 

			if(isset($_GET['actiune']) && $_GET['actiune'] == "adauga")
		{
			$_SESSION['nume'][] = $_POST['nume'];
			$_SESSION['id'][] = $_POST['id'];  
			$_SESSION['pret'][] = $_POST['pret'];
			$_SESSION['nr_loc_rez'][] = 1;
		}

			if(isset($_GET['actiune']) && $_GET['actiune'] == "modifica")
				{
				
					for ($i=0;$i<count($_SESSION['id']);$i++)  
					{
						$_SESSION['nr_loc_rez'][$i] = $_POST['noulNr'][$i];
					}
				
				}
			if (!isset($_GET['actiune'])) $_GET['actiune'] = "none";
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
		
		
		<!-- Poza antet -->
		
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td height="263">
		
							<img height="550" src="img/antet.jpg">	
						
					</td>
				</tr>
			</table>
			
		<!-- Sfarsit Poza antet -->
		
		
			<table cellpadding="0" cellspacing="0" border="0" style="height:30px; background:url(images/bg_top.gif) no-repeat " class="header">
				<tr>
					<td>
						<img alt="" src="images/spacer.png" width="39" height="1">
					</td>
					
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:65px">
							<tr>
								<td>
								<?php include ('login.php'); ?>
								</td>
							</tr>
						</table>
					</td>
					
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:123px">
							<tr>
								<td>
								<?php 
								
									if (isset($_SESSION['valid_client'])&& $_SESSION['valid_client']!= array()) 
										{
											echo "<a href=\"login_page.php\">Setari cont</a> | <a href=\"login_page.php?action=logout\">Log out</a>"; 
										}
								?>
								</td>
							</tr>
						</table>
					</td>
					
					<td>
						<img alt="" src="images/spacer.png" width="44" height="1">
					</td>
					
					<td>
						<img src="images/z.gif" alt=""><br>
					</td>
					
					<td>
						<img alt="" src="images/spacer.png" width="20" height="1">
					</td>
					
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:10px">
							<tr>
								<td>
									<a href="cart.php"><img src="images/z1.gif" alt=""></a><br>
								</td>
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
																for($i=0; $i<count($_SESSION['nume']); $i++)
																{ 
																	$nrRez=$nrRez + $_SESSION['nr_loc_rez'][$i];
																	$totalValoare = $totalValoare + ($_SESSION['nr_loc_rez'][$i]*$_SESSION['pret'][$i]);
																}
														?>
														
														<?php echo $nrRez;?>
														</b> produse	
												</a>
											<span>)</span>		
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
					<td>
						<img alt="" src="images/spacer.png" width="4" height="1">
					</td>
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
									
									<table cellpadding="0" cellspacing="0" border="0" style="height:210px; background-color:#1A1917;">
										<tr>
											<td>
												<div align="center" style=" margin-left:35px">
												<marquee behavior="scroll" direction="up" scrolldelay="0" align="middle">
												   <img src="images/1_p1.jpg" border="0" width="150"><br>
												   <img src="images/1_p2.jpg" border="0" width="150"><br>
												   <img src="images/2_p7.jpg" border="0" width="150"><br>
												</marquee>
												</div>
											</td>
										</tr>
									</table>
									
									<table cellpadding="0" cellspacing="0" border="0" style="height:31px">
										<tr>
											<td>
												<img src="images/li.gif" alt="">
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
					
					<td>
						<img alt="" src="images/spacer.png" width="7" height="1px">
					</td>
					
					<td>
						<table cellpadding="0" cellspacing="0" border="0" style="width:486px">
							<tr>
								<td>
									<table cellpadding="0" cellspacing="0" border="0" style="height:489px ">
										<tr>
											<td>
												<table cellpadding="0" cellspacing="0" border="0" class="cont_header_txt">
													<tr>
														<td>
															<img src="images/q-3.gif" alt=""><br>
														</td>
														
														<td style="width:429px">Cosul de cumparaturi</td>
														<td>
															<img src="images/q-4.gif" alt=""><br>
														</td>
													</tr>
												</table>
												
						

 
 <!-- Afisare produse --> 
 

						
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td bgcolor="#BEBEBE">
				<img alt="" src="images/spacer.png" width="1" height="1">
			</td>
			
			<td>
				<img alt="" src="images/spacer.png" width="18" height="1">
			</td>
			
			<td>
			
				<table cellpadding="0" cellspacing="4" border="0" style="width:448px; height:431px" class="product">
					<td>										
						<form action="cart.php?actiune=modifica" method="POST">
							<table border="0" cellspacing="4" cellpadding="4" bordercolor="#666666">
								<tr bgcolor="#333333" align="center">
									<td>
										<b>Nume produs</b>
									</td>
									
									<td width="80">
										<b>Pret</b>
									</td>
									
									<td>
										<b>cant.</b>
									</td>  
									
									<td width="80">
										<b>Total</b>
									</td>
								</tr>
								
							<?php
								for ($i=0; $i < count($_SESSION['id']); $i++)
								{ 
									if ($_SESSION['nr_loc_rez'][$i] != 0)
									{ print'<tr>
												<td>
													<b>'.$_SESSION['nume'][$i].'</b>
												</td>
												
												<td align="center">
													'.$_SESSION['pret'][$i].' RON
												</td>
												
												<td >
													<input type="text" name="noulNr['.$i.']" size="1" value="'.$_SESSION['nr_loc_rez'][$i].'">
												</td>
												
												<td align="center">
													'.($_SESSION['pret'][$i]*$_SESSION['nr_loc_rez'][$i]).' RON
												</td>
											</tr>';	  
									$totalGeneral = $totalGeneral + ($_SESSION['pret'][$i]*$_SESSION['nr_loc_rez'][$i]);
									}
								}
									print '
										<tr>
											<td align="right"colspan="3">
												<b>Total in cos</b>
											</td>
											
											<td align="right">
												<b>'.$totalGeneral.'</b> RON
											</td>
										</tr>';
							?>
								
							</table>
										<br><br><br>
								<div align="center">
									<input type="image" src="images/eng/button_update_cart.gif" border="0">
								</div>
										<br>
											<br>
												<br>
									Introduceti <b>0</b> la cantitatea produsului, pentru produsele pe care doriti sa le anulati (stergeti)!
												</br>
											</br>
										</br>
								<center>
									<?php
										if (isset($_SESSION['valid_client']) && $_SESSION['valid_client']== array())  
											{
												echo "Trebuie sa fiti logat ca sa puteti trimite comenzi.";
											}
									?>
								</center>
									<br><br><br>
									
								<table width="577">
									<tr>
										<td width="235" align="center"> 
											<a href="index.php"><img src="images/eng/button_continue_shopping.gif"></a>
												<?php
													if (isset($_SESSION['valid_client']) && $_SESSION['valid_client']!= array())  
													{    
														echo "<a href=\"order.php\"><img src=\"images/eng/button_confirm_order.gif\"></a>";
													}
												?>	
										</td>
									</tr>
								</table>																
																		
					</td>
		</tr>
						<tr>
							<td colspan="3" style="height:17px "></td>
						</tr>
						
				</table>
			</td>
						<td>
							<img alt="" src="images/spacer.png" width="18" height="1">
						</td>
						
						<td bgcolor="#BEBEBE">
							<img alt="" src="images/spacer.png" width="1" height="1">
						</td>
										</tr>
	</table>
	
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td>
									<img src="images/line.gif" alt=""><br>
								</td>
							</tr>
						</table>
											</td>
							</tr>
									</table>
									<table cellpadding="0" cellspacing="0" border="0" style="height:95px" class="footer">
										<tr>
											<td style="border:1px solid #ffffff; border-width:19px 0px 0px 19px;">
		
												<div align="center">
														<img src="images/z2.gif" alt="">
													<span>
														<a href="index.php">Acasa</a>
													</span> 
														<img src="images/z2.gif" alt="">
													<span>
														<a href="contact.php">Contact</a>
													</span>
														<img src="images/z2.gif" alt=""> 
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