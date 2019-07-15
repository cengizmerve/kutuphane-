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
					<li><a href="#">Forms</a></li>
				</ul>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Sorumlu Programı Oluştur
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="/program/kaydet" method="POST" class="valid">
							<div class="row">
								<label>Sorumlu Adı</label>
								<div class="right"><input type="text" value="" name="isim" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								<label>Sorumlu K. Günleri</label>
								<div class="right">
									<select multiple="multiple" name="gunler[]" size="5" class="multiple">
									
										<option value="1">Pazartesi</option>
										<option value="2">Salı</option>
										<option value="3">Çarşamba</option>
										<option value="4">Perşembe</option>
										<option value="5">Cuma</option>
										<option value="6">Cumartesi</option>
										<option value="7">Pazar</option>
								
									</select>
								</div>
							</div>
							<div class="row">
								<label>Çalışma Saatleri</label>
								<div class="right">
									<select class="small" name="giris">
									<?php 
										$times  = R::find("time");
										foreach($times as $t){
									?>
										<option value="<?=$t["time"]?>"><?=$t["time"]?></option>
										<?php } ?>
									</select>
									<select class="small" name="cikis">
									<?php 
										$times  = R::find("time");
										foreach($times as $t){
									?>
										<option value="<?=$t["time"]?>"><?=$t["time"]?></option>
										<?php } 
									?>
									</select>
								</div>
							</div>
							<div class="row">
								
									<button type="submit"><span>Sorumlu Programı Oluştur</span></button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
					<?php
		include("footer.php");
	?>
	