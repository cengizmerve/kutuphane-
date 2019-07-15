<?php
	session_start();
	include("_inc/conn.php");
	include("_inc/etc.php");
	if(!isset($_SESSION["login"])){redirect("/");die;}
	$user=R::findOne("users","id=?",[$_SESSION["login"]]);
	include("header.php");
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
						Kitap Ayırtma
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="/kitap/ayirtma" method="POST" class="valid">
							<div class="row">
								<label>Kitap  Adı</label>
								<div class="right"><input type="text" value="" name="isim" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Kitaplar</label>
								<div class="right">
									<?php 
								$ogrenciler = R::find("binalar");
								foreach($ogrenciler as $o){
									$ed=R::findOne("egitimdonemleri","id=?",[$o["egitimdonemi"]]);
									$sv=R::findOne("seviyeler","id=?",[$o["seviye"]]);
								
							?>
								<tr>
									<td><?=$o["adsoyad"]?></td>
									<td><?=$o["tckn"]?></td>
									<td><?=$o["ogrencitelefon"]?></td>
									<td><?=$o["telefon"]?></td>
									<td><?=$ed["isim"]?></td>
									<td><?=$sv["isim"]?></td>
									<td><a href="/ayirt/<?=$o["id"]?>">Görüntüle </a> <a href="/ogrenci/sil/<?=$o["id"]?>">SİL</a></td>
								</tr>
								</div>
							</div>
							
							<div class="row">
								
									<button type="submit"><span>Kitabınız Ayırtılmıştır</span></button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
					<?php
		include("footer.php");
	?>
	