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
						kitap
						<span class="hide"></span>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<a href="http://ekitap.kulturturizm.gov.tr" target="_blank">e-kitaplar (turizm bakanlığından)</a><br>
							
						
						
						
						</table>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
			<?php
		include("footer.php");
	?>