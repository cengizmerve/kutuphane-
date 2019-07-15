<?php
	session_start();
	include("_inc/conn.php");
	include("_inc/etc.php");
	if(!isset($_SESSION["login"])){redirect("/");die;}
	$users=R::findOne("admins","id=?",[$_SESSION["login"]]);
	include("nextheader.php");
?>
<style type="text/css">table.rosyBrownTable {
  border: 4px solid #F0E400;
  background-color: #F0E400;
  width: 400px;
  text-align: center;
  border-collapse: collapse;
}
table.rosyBrownTable td, table.rosyBrownTable th {
  border: 1px solid #555555;
  padding: 4px 4px;
}
table.rosyBrownTable tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #000000;
}
table.rosyBrownTable td:nth-child(even) {
  background: #000000;
  color:#fff;
}
table.rosyBrownTable tfoot .links {
  text-align: right;
}
table.rosyBrownTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #BA8697;
  padding: 2px 8px;
  border-radius: 5px;
}</style>
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
						Yeni Kitap Oluştur
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="/kitap/giris" class="valid">
							<div class="row">
								<label>Kitap Adı</label>
								<div class="right"><input type="text" value="" name="kitapadi" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							
							<div class="row">
								<label>Kitap Türü</label>
								<div class="right"><input type="text" value="" name="kitapturu" class="{validate:{required:true, messages:{required:'Lütfen Bu Alanı Boş Bırakmayın.'}}}" /></div>
							</div>
							<div class="row">
								
									<button type="button" id="sinifgetir"><span>Yeni Kitap Oluştur</span></button>
									
							</div>
							
							
								<div class="row" style="display:none;" id="ogrenci">
										<label>Kitaplar</label>
										<div class="right">
											<table class="rosyBrownTable">
													<thead>
											</thead>
													
												</table>
										</div>
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	
					<?php
		include("footer.php");
	?>
