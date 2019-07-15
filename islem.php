<?php
session_start();
include("_inc/conn.php");
include("_inc/etc.php");

if(isset($_GET["query"]))
{
	
	switch($_GET["query"]){
		case "login":
			$users = R::findOne("admins","tckn=? && password=? && rank=?",[$_POST["tckn"],$_POST["password"],"1"]);
			if ($users)
			{
				$_SESSION["login"]=$users["id"];
				redirect("/dashboard");
			}
			else
			{
				redirect("/login/error");
			}
			
		break;

		case "loginn":
			$users = R::findOne("users","adsoyad=? && tckn=? && rank=?",[$_POST["adsoyad"],$_POST["tckn"],"1"]);
			if ($users)
			{
				$_SESSION["loginn"]=$users["id"];
				redirect("/uyeekrani");
			}
			else
			{
				redirect("/login/error");
			}
			
		break;


		case "logout":
			session_destroy();
			redirect('/');
		break;
		case "uyesil":
			$o = R::findOne("users","id=?",[$_GET["id"]]);
			R::trash($o);
			
			redirect("/uyeler");
		break;
				
		case "uyeol":
			$o = R::dispense("users");
			$o->adsoyad = $_POST["adsoyad"];
			$o->tckn = $_POST["tckn"];
			$o->dogumtarihi = $_POST["dogumtarihi"];
			$o->uyetelefon = $_POST["uyetelefon"];;
			$o->kayittarihi = $_POST["kayittarihi"];
			$o->bolum = $_POST["bolum"];
			$o->sinif = $_POST["sinif"];
			$o->yetki = 3;
			$o->rank = 1;			
			R::store($o);
			redirect("/index");
		break;
		case "kitapekle":
			$o = R::dispense("kitaplar");
			$o->adsoyad = $_POST["adsoyad"];
			$o->baskinumarasi = $_POST["baskinumarasi"];
			$o->kitaptur = $_POST["kitaptur"];
			$o->yetki = 3;
			$o->durum = 1;
			R::store($o);
			redirect("/kitaplar");
		break;
		case "kitapayirtma":
			$o = R::dispense("kitaplar");
			$o->isim = $_POST["isim"];
			R::store($o);
			redirect("/kitaplarr");
		break;
				
		case "programkaydet":
			
			$o = R::dispense("istekler");
			$o->isim = $_POST["isim"];
			R::store($o);
			redirect("/istek");
		break;
			
		
		case "donemkaydet":
			$o = R::dispense("egitimdonemleri");
			$o->isim = $_POST["isim"];
			$o->baslangictarihi = $_POST["baslangictarihi"];
			$o->bitistarihi = $_POST["bitistarihi"];
			R::store($o);
			redirect("/kitaplarr");
		break;
		
		case "kitapkaydet":
			$o = R::dispense("binalar");
			$o->isim = $_POST["isim"];
			R::store($o);
			redirect("/kitaplar");
		break;



		
	}
}
	?>