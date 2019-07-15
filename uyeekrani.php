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
		
<div class="carousel-inner" role="listbox">
                    
                        <div class="item active">
                          <img src="/gfx/kütüphanee.jpg" class="logos" alt="" />
                        </div>
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
			
							
			

				
				
	<?php
		include("footer.php");
	?>
	