
<!--Aici INCEPE meniul-->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.flashyNav.1.0.js"></script>

<script type="text/javascript">
$(function(){
	
	$('.nav1').flashyNav({
		rolloverColor: '#5400ff',	//the default color of the rollover element
		rolloverDuration: 1000,	//the default duration for the rollover
		easingMethod: 'easeInOutQuint'	//easing method used for animation
	});
	
	$('.nav2').flashyNav({
		rolloverColor: '#00d2ff',	//the default color of the rollover element
		rolloverDuration: 800,	//the default duration for the rollover
		easingMethod: 'easeOutBounce'	//easing method used for animation
	});

	$('.nav3').flashyNav({
		rolloverColor: '#a800ff',	//the default color of the rollover element
		rolloverDuration: 800,	//the default duration for the rollover
		easingMethod: 'easeOutElastic'	//easing method used for animation
	});
	
});
</script>

<style type="text/css">

	a {color:#fff}
	ul.nav {
	list-style:none;
	margin:20px;
	width:100px;
	font-size:10px;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold}
	
	ul.nav li {
	position:relative;
	border-bottom:1px solid #333;
	display:block;
	height:30px;
	overflow:hidden}
	
	ul.nav li a {
	position:relative;
	color:#fff;
	text-decoration:none;
	display:block;
	height:20px;
	padding:10px 0 0 10px;
	z-index:100;
	text-transform:uppercase}
	
</style>

    <ul class="nav nav2">
						<li>
							<?php
								$sql="SELECT * FROM categorii ORDER BY idc ASC";
								$resursa=mysqli_query($GLOBALS['con'], $sql);
								while ($row = mysqli_fetch_array($resursa, MYSQLI_ASSOC))
								{ print '<li><a href="cat.php?idc='.$row['idc'].'">'.$row['cat'].'</a></li>';
									}
							?>
						</li>
    </ul>




<!--Aici SE TERMINA meniul-->
<br><br>
<center>
<form action="cauta.php" method="post">
<input type="text" name="cuvinte" style="width:120px;background-color:#fff; border:0px; color:#09F; font-weight:bold;" />
<input type="submit" value="Cauta" style="color:#09F; background-color:#222; border:0px;" />
</form>
</center>
<br>





