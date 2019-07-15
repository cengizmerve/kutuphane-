<?php
	session_start();
	include("_inc/conn.php");
	include("_inc/etc.php");
	if(!isset($_SESSION["login"])){redirect("/");die;}
	$users=R::findOne("admins","id=?",[$_SESSION["login"]]);
	include("nextheader.php");
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
						Üye sil
						<span class="hide"></span>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>Ad Soyad</th>
									<th>TCKN</th>
									<th>Kayıt Tarihi</th>
								
									
									<th>#</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$ogrenciler = R::find("users");	
								foreach ($ogrenciler as $o ) {
								
							?>
								<tr>
									<td><?=$o["adsoyad"]?></td>
									<td><?=$o["tckn"]?></td>
									<td><?=$o["kayittarihi"]?></td>
									<td> <a href="/uye/sil/<?=$o["id"]?>">SİL</a></td>
								</tr>
							
							<?php 
								}
							?>
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
			<?php
		include("footer.php");
	?>
	