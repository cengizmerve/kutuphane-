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
			
			<div class="half">
					<div class="box">
						<div class="title">
							Yorum Ekleme
							<span class="hide"></span>
						</div>
						<div class="content">
							<form action="">
								<div class="row">
									<label>Kitap İsmi</label>
									<div class="right"><input type="text" value="" /></div>
								</div>
								
								<div class="row">
									<label>Yorumunuz</label>
									<div class="right"><textarea rows="" cols="" style="height : 144px;"></textarea></div>
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
			
			
			
		</div>
		
			<?php
		include("footer.php");
	?>
	