<?php
	session_start();
	include("_inc/conn.php");
	include("_inc/etc.php");
	if(!isset($_SESSION["loginn"])){redirect("/");die;}
	$users=R::findOne("users","id=?",[$_SESSION["loginn"]]);
	include("uyeheader.php");
?>
		<div id="right">
		
			<div id="breadcrumbs">
				<ul>
					<li></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Tables</a></li>
				</ul>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						iletişim
						<span class="hide"></span>
					</div>
					
						<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
						<a href="#">MÜCAHİT ÖZALP--->mucahit.ozalp0@gmail.com</a>
						</table>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
						<a href="#">ŞEVVAL BUĞDAYCI--->sevvalbugdayci@gmail.com</a>
						</table>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
						<a href="#">BAŞAK BULAK--->bskkzlblk@gmail.com</a>
						</table>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
						<a href="#">EBRU UTKAN--->ebruutkann@outlook.com</a>
						</table>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
						<a href="#">MERVE CENGİZ--->mrv.0203@hotmail.com</a>
						</table>
					</div>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
			<?php
		include("footer.php");
	?>
	