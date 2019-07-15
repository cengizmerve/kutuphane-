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
						Kitap Ayırtma
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="/kitap/ayirtma" method="POST" class="valid">
							<div class="row">
								<label>Kitap  Adı</label>
								<div class="right"><input type="text" value="" name="isim" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>Kitaplar</th>
									<th>Baskı Numarası</th>
									<th>Kitap Türü</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$users = R::find("kitaplar","yetki=?",["3"]);
								foreach($users as $u){
								$seviye = explode("|",$u["seviye"]);								
							?>
								<tr> 
									<td><?=$u["adsoyad"]?></td>
									<td><?=$u["baskinumarasi"]?></td>
									<td><?=$u["kitaptur"]?></td>
									<td><a href="/kitap/duzenle/<?=$s["id"]?>">Ayırt</a></td>
									
								
								</tr>
							
							<?php 
								}
							?>
							
							</tbody>
						</table>
					</div>
							
							<div class="row">
								
									<button type="submit"><span>Ayırt</span></button>
									
								
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
					<?php
		include("footer.php");
	?>
	