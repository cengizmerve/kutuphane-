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
					<li><a href="#">Forms</a></li>
				</ul>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Kitap Teslim Ekle
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="/donem/kaydet" method="POST" class="valid">
							<div class="row">
								<label>Kitap Adı</label>
								<div class="right"><input type="text" value="" name="isim" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Başlangıç Tarihi</label>
								<div class="right"><input type="text" class="datepicker" name="baslangictarihi" placeholder="dd.mm.yyyy" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Bitiş Tarihi</label>
								<div class="right"><input type="text" class="datepicker" name="bitistarihi" placeholder="dd.mm.yyyy" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
									<button type="submit"><span>Kaydet</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
					<?php
		include("footer.php");
	?>
	