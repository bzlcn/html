<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="paylastikca";

$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

if (!$baglan) {
	die("veritabanı baglantı işlemi başarısız".mysql_connect_error());
}

?>