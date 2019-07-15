
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Mustache: Dashboard</title>
	
	<meta name="apple-mobile-web-app-capable" content="no" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="viewport" content="width=device-width,initial-scale=0.69,user-scalable=yes,maximum-scale=1.00" />
	
	<style type="text/css">
		@import url("/css/style.css");
		@import url("/css/forms.css");
		@import url("/css/forms-btn.css");
		@import url("/css/menu.css");
		@import url('css/style_text.css');
		@import url("/css/datatables.css");
		@import url("/css/fullcalendar.css");
		@import url("/css/pirebox.css");
		@import url("/css/modalwindow.css");
		@import url("/css/statics.css");
		@import url("/css/tabs-toggle.css");
		@import url("/css/system-message.css");
		@import url("/css/tooltip.css");
		@import url("/css/wizard.css");
		@import url("/css/wysiwyg.css");
		@import url("/css/wysiwyg.modal.css");
		@import url("/css/wysiwyg-editor.css");
		@import url("/css/handheld.css");
	</style>
	
	<!--[if lte IE 8]>
		<script type="text/javascript" src="/js/excanvas.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery.backgroundPosition.js"></script>
	<script type="text/javascript" src="/js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="/js/jquery.ui.1.8.17.js"></script>
	<script type="text/javascript" src="/js/jquery.ui.select.js"></script>
	<script type="text/javascript" src="/js/jquery.ui.spinner.js"></script>
	<script type="text/javascript" src="/js/superfish.js"></script>
	<script type="text/javascript" src="/js/supersubs.js"></script>
	<script type="text/javascript" src="/js/jquery.datatables.js"></script>
	<script type="text/javascript" src="/js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="/js/jquery.smartwizard-2.0.min.js"></script>
	<script type="text/javascript" src="/js/pirobox.extended.min.js"></script>
	<script type="text/javascript" src="/js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="/js/jquery.elastic.source.js"></script>
	<script type="text/javascript" src="/js/jquery.jBreadCrumb.1.1.js"></script>
	<script type="text/javascript" src="/js/jquery.customInput.js"></script>
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/jquery.metadata.js"></script>
	<script type="text/javascript" src="/js/jquery.filestyle.mini.js"></script>
	<script type="text/javascript" src="/js/jquery.filter.input.js"></script>
	<script type="text/javascript" src="/js/jquery.flot.js"></script>
	<script type="text/javascript" src="/js/jquery.flot.pie.min.js"></script>
	<script type="text/javascript" src="/js/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="/js/jquery.graphtable-0.2.js"></script>
	<script type="text/javascript" src="/js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="/js/controls/wysiwyg.image.js"></script>
	<script type="text/javascript" src="/js/controls/wysiwyg.link.js"></script>
	<script type="text/javascript" src="/js/controls/wysiwyg.table.js"></script>
	<script type="text/javascript" src="/js/plugins/wysiwyg.rmFormat.js"></script>
	<script type="text/javascript" src="/js/costum.js"></script>
	
</head>

<body>

<div id="wrapper">
	<div id="container">
	
		<div class="hide-btn top tip-s" original-title="Close sidebar"></div>
		<div class="hide-btn center tip-s" original-title="Close sidebar"></div>
		<div class="hide-btn bottom tip-s" original-title="Close sidebar"></div>
		
		<div id="top">
			<h1 id="logo"><a href="/">kütüphane bilgi sistemi</a></h1>
			<div id="labels">
				<ul>
					<li><a href="/login" class="user"><span class="bar">Giriş(Yönetici)</span></a></li>
					<li><a href="/loginn" class="user"><span class="bar">Giriş(Üye)</span></a></li>
					<li><a href="#" class="settings"></a></li>				
					<li><a href="/account/logout" class="logout"></a></li>
				</ul>
			</div>
			<div id="menu">
				<ul> 
					<li class="current"><a href="/dashboard">Anasayfa</a></li> 
						<li>
						<a href="#">üye ol</a>
						<ul> 
							
							<li><a href="/uyeol">üye ol</a></li>
						</ul>
					</li>
							
					
					
					<li>
						<a href="#">kitaplar</a>
						<ul> 
							<li><a href="/anaekrankitaplar">Kitaplar</a></li>
						</ul>
					</li>
					
					<li>
						<a href="#">iletişim</a>
						<ul> 
							<li><a href="/yoltarifi">yol tarifi</a></li>
							<li><a href="/iletisim">iletişim</a></li>
						</ul>
					</li>
					
					
					</ul>
			</div>
		</div>

		<div id="left">
			
			<div class="box submenu">
				<div class="content">
					<img src="/gfx/logo.jpg" class="logos" alt="" />
				</div>
			</div>
			
			<div class="box statics">
				<div class="content">
					<ul>
						<li><h2>DUYURULAR</h2></li>
						<li>Üye Sayısı <div class="info red"><span><?=R::count("uyeler");?></span></div></li>
						<li>Kitap Sayısı <div class="info blue"><span><?=R::count("kitaplar","yetki=?",[3]);?></span></div></li>
						<li>Tarih <div class="info black"><span><?=date("d.m.Y");?></span></div></li>
					</ul>
				</div>
			</div>
			
		</div>
		
		