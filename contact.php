<?php 
session_start();
include ("baza_de_date.php"); 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Contact</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<table cellpadding="0" cellspacing="0" border="0" style="width:717px; height:750px" align="center"> 
	<tr>
		<td height="196">
		<!-- Meniul poza antet -->
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td height="263">
		
					<img height="550" src="img/antet.jpg">
						
					</td>
				</tr>
			</table>
		<!-- Sfarsit Meniul  -->

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
									<table cellpadding="0" cellspacing="0" border="0" class="box_header_txt">
										<tr>
											<td><img src="images/q-1.gif" alt=""><br></td>
											<td style="width:193px">Categorii:</td>
											<td><img src="images/q-2.gif" alt=""><br></td>
										</tr>
									</table>
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
	<!--  Aici incepe TITLUL CATEGORIEI --> 									Contact:
											
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
 								

															<table cellpadding="0" cellspacing="4" border="0" style="width:448px; height:431px" class="product">

															
																	<td>
																	
 

 																		<table cellpadding="0" cellspacing="0" border="0" style="width:440px ;" >
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>Magazin de Carti </title>
			<meta http-equiv="content-type" content="text/html; charset=UTF-8">
			<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	
<body>																		
Ne puteti contacta oricand la : <br><br>

	Telefon: 0744444444 <br>
	Facebook: Raftul de Carti <br>
	Email: raftul_de_carti@mail.com <br>


</body>

</table>
																			
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









