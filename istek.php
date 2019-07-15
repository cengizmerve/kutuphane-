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
						Kİtap İstek
						<span class="hide"></span>

					</div>
					
							

							<div class="row">
								<label>İstekte bulundunuz.</label>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>

		
					<?php
		include("footer.php");
	?>
	