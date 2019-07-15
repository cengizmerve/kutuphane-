<?php
	session_start();
	include("_inc/conn.php");
	include("_inc/etc.php");
	include("genelheader.php");
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
						Yeni Üye Kaydı
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="/uye/ol" method="POST" class="valid">
							<div class="row">
								<label>Ad Soyad</label>
								<div class="right"><input type="text" value="" name="adsoyad" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Kimlik Numarası</label>
								<div class="right"><input type="text" value="" name="tckn" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Doğum Tarihi</label>
								<div class="right"><input type="text" class="datepicker" name="dogumtarihi" placeholder="dd.mm.yyyy" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Telefon</label>
								<div class="right"><input type="text" value="" name="uyetelefon" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							
							
							<div class="row">
								<label>Kayıt Tarihi</label>
								<div class="right"><input type="text" class="datepicker" name="kayittarihi" placeholder="dd.mm.yyyy" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>							
							</div>
							
							
							<div class="row">
								<label>Bölüm</label>
								<div class="right"><input type="text" value="" name="bolum"  /></div>
							</div>
							<div class="row">
								<label>Sınıf</label>
								<div class="right"><input type="text" value="" name="sinif"  /></div>
							</div>	
													
							<div class="row">
									<button type="submit"><span>üye Kaydet</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
					<?php
		include("footer.php");
	?>
	