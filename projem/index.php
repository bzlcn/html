<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Anasayfa | Kod Yazıyorum</title>
	<link rel="stylesheet"  href="css/style.css">

	<script src="https://kit.fontawesome.com/8b0370bca7.js" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>
<body>
	<section id="menu">
		<div id="logo">Kod Yazıyorum</div>
		<nav>
			<a href=""><i class="fa-sharp fa-solid fa-house ikon"></i>Anasayfa</a>
			<a href=""><i class="fa-sharp fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
			<a href=""><i class="fa-solid fa-graduation-cap ikon"></i>Eğitimler</a>
			<a href=""><i class="fa-solid fa-people-group ikon"></i>Ekip</a>
			<a href=""><i class="fa-solid fa-map-pin ikon"></i>İletişim</a>
		</nav>
	</section>
	<section id="anasayfa">
		<div id="black"></div>
		<div id="icerik">
			<h2>Kod Yazıyorum</h2>
			<hr width="300" align="left">
			<p>Yeni projeler ve yeni diller hem öğrenip hem geliştiriyorum bu sayfanın amaçı da hem öğrenme ve çğretmek hemde farklı bir seviyede projeler ortaya çıkarmak.</p>
		</div>
	</section>
	<section id="hakkimizda">
      <h3>Hakkımızda</h3>		
      <div class="container" >
      	<div id="sol">
      		<h5 id="h5sol">HTML,CSS VE JAVASCRİP dillerinini kullanarak wep siteleri yapıyoruz. </h5>
      	</div>
      	<div id="sag">
      		<span style="margin-right: -25px;    padding-top: 12px;">H</span>
      		<p id="psag">arran Üniversitesi Bilgisayar Proğramcılığı 2. sınıf öğrencisyiz ve robotik kodlama,siber güvenlik ve c# sertifikalarımız mevcuttur. </p>
      	</div>
      	<img src="img/t.jpg" alt="" class="img-fluid mt100" >
      	<p id="pson">Robotik kodlama tam benim işim diyorsan atölyemizde yerin hazır! Atölye ile öğrencilerimiz temel kodlama kavramlarıyla eğlenceli bir şekilde tanışacak ve güçlü bir kodlama temeli kazanarak kendini geliştirebilme şansını elde edecek.</p>
      </div>
	</section>
	<section id="egitimler">
		<div class="container">
			<h3>Bilinen Diller</h3>
			<div class="owl-carousel owl-theme" >
				<div class="card item" data-merge=1.5> <img src="img/p.jpg" class="img-fluid">
                 <h5 class="baslikcard">HTML VE CSS BİLGİSİ</h5>
                 <p class="cardp">Wep sitesi tasarımı ve yaımı ile ilgili hem eğitim hem de proje yapılmaktadır. </p>
				</div>

				<div class="card item" data-merge=1.5> <img src="img/p.jpg" class="img-fluid">
                 <h5 class="baslikcard">LOGO TASARIMI</h5>
                 <p class="cardp">Birbirinden farklı Logo tasarımı ve Kartvizit tasarımı yapılmaktadır. </p>
				</div>

				<div class="card item" data-merge=1.5> <img src="img/p.jpg" class="img-fluid">
                 <h5 class="baslikcard">PHP VE ROBOTİK KODLAMA</h5>
                 <p class="cardp">Robotik kodlama ve Php projeleri yapılmakta ve aynı zamanda kendimizi geliştirmekteyiz. </p>
				</div>

			</div>
            </div>
	</section>

	<section id="ekip">
		<div class="container">
			<h3 id="ekiph3">Ekip</h3>
			<div class="sutun-sol-sag">
				<img src="img/o.jpg" class="img-fluid oval">
				<h4 class="ekipismi">Sinem TAN</h4>
				<p class="ekipp">Merhaba ben Sinem bilgisayar ile ilgili ne varsa hepsi ilgi alanıma giriyor.</p>
				<div class="ekip-ikon">
					<a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
					<a href="#"><i class="fa-brands fa-instagram social"></i></a>
					<a href="#"><i class="fa-brands fa-github social"></i></a>
				</div>
			</div>

			<div class="sutun">
				<img src="img/o.jpg" class="img-fluid oval">
				<h4 class="ekipismi">Aylin DERİN</h4>
				<p class="ekipp">Merhaba ben Aylin bilgisayar ile ilgili ne varsa hepsi ilgi alanıma giriyor.</p>
				<div class="ekip-ikon">
					<a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
					<a href="#"><i class="fa-brands fa-instagram social"></i></a>
					<a href="#"><i class="fa-brands fa-github social"></i></a>
				</div>
			</div>

			<div class="sutun-sol-sag">
				<img src="img/o.jpg" class="img-fluid oval">
				<h4 class="ekipismi">Elza KAYA</h4>
				<p class="ekipp">Merhaba ben Elza bilgisayar ile ilgili ne varsa hepsi ilgi alanıma giriyor.</p>
				<div class="ekip-ikon">
					<a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
					<a href="#"><i class="fa-brands fa-instagram social"></i></a>
					<a href="#"><i class="fa-brands fa-github social"></i></a>
				</div>
			</div>
		</div>
	</section>
	<section id="iletisim">
		<div class="container">
			<h3 id="h3iletisim">İletişim</h3>
			<form action="index.php" method="post">
			<div id="iletisimopak">
				<div id="formgroup">
					<div id="solform">
						<input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
						<input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
					</div>
					<div id="sagform">
						<input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
						<input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control"></div>
				
				<textarea name="mesaj" id="" rows="10" cols="30"placeholder="Mesaj Giriniz" required  class="form-control"></textarea>
				<input type="submit" value="Gönder">
			</div>
		
				<div id="adres">
					<h4 id="adresbaslik">Adres:</h4>
					<p class="adresp">Muradiye Mah.</p>
					<p class="adresp">Uyanık Caddesi</p>
					<p class="adresp">3316.sokak No:6/A</p>
					<p class="adresp">0212 216 20 18</p>
					<p class="adresp">Email:ünikızlar5@gmail.com</p>
				</div>
			</div>	</form>
			<footer>
				<div id="copyright">2022 | Tüm Haklar Saklıdır.</div>
				<div id="socialfooter">
					<a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
					<a href="#"><i class="fa-brands fa-instagram social"></i></a>
					<a href="#"><i class="fa-brands fa-github social"></i>
				</div>
				<a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>
			</footer>
		</div>
	</section>




<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script src="owl/script.js"></script>
</body>
</html>

<?php

include("baglanti.php");

if(isset($_POST["mesaj"]))
 {
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
	$konu=$_POST["mesaj"];
	
	$ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu,
 mesaj) VALUES
 ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

if ($baglan->query($ekle)==true) {
	echo "<script>alert('mesajınız gönderildi')</script>";
}
else
{
	echo "<script>alert('mesajınız iletilirken sorun oluştu.')</script>";
}
}

?>