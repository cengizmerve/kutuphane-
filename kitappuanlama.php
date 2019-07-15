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
					<li><a href="#">Anasayfa</a></li>
					<li><a href="#">Giriş</a></li>
					<li><a href="#">Panel</a></li>
				</ul>
			</div>
			
				
				<div class="half">
					<div class="box">
						<div class="title">
							Kitap Puanlama
							<span class="hide"></span>
						</div>
						<div class="content">
							<form action="">
								<div class="row">
									<label>Puanlıyacağınız Kitap</label>
									<div class="right"><input type="text" value="" /></div>
								</div>
								<div class="row">
									<label>Verdiğiniz Puan</label>
									<div class="right"><input type="text" value="" /></div>
								</div>
								<div class="row">
									<label></label>
									<div class="right"><button type="submit"><span>Gönder</span></button></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			

				
				
	<?php
		include("footer.php");
	?>
	