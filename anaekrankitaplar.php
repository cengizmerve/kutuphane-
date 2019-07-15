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
					<li><a href="#">Tables</a></li>
				</ul>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						KİTAPLAR
						<span class="hide"></span>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>KİTAP ADI</th>
									<th>BASKI NUMARASI</th>
									<th>KİTAP TÜRÜ</th>
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
	