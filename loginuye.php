<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Mustache: Login</title>

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

<div id="wrapper" class="login">
	
	<div class="box">
		<div class="title">
			ÜYE GİRİŞİ
			<span class="hide"></span>
		</div>
		<div class="content">
		<?php 
			if(isset($_GET["hata"])){
		
		?>
			<div class="message inner red">
				<span><b>Hata</b>: T.C. Kimlik Numaranız yada Şifreniz Yanlış</span>
			</div>
		<?php } ?>
			<form action="/acoount/loginn" method="POST">
				<div class="row">
					<label>Ad Soyad</label>
					<div class="right"><input type="text" value="" name="adsoyad"/></div>
				</div>
				<div class="row">
					<label>TCKN</label>
					<div class="right"><input type="text" value="" name="tckn"/></div>
				</div>
				<div class="row">
					<div class="right">
						<button type="submit"><span>Giriş Yap</span></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	


</body>


</html> 