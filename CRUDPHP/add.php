
<html>
<head>
	<title>Veri Ekle</title>
</head>

<body>
<?php
//database bağlantı sayfasını projeye include ettim
include_once("config.php");
if(isset($_POST['Submit'])) // Post edilmişse

      //Post dizisindeki değerler değişkenlere aktarılıyor.
{	
	$isim = mysqli_real_escape_string($mysqli, $_POST['isim']);
	$telefonkodu = mysqli_real_escape_string($mysqli, $_POST['telefonkodu']);
	$plakakodu = mysqli_real_escape_string($mysqli, $_POST['plakakodu']);
		
	// boş alanları kontrol ediyor
	if(empty($isim) || empty($telefonkodu) || empty($plakakodu))  
	{
				
		if(empty($isim)) {
			echo "<font color='red'> İsim boş bırakılamaz</font><br/>";
		}
		
		if(empty($telefonkodu)) {
			echo "<font color='red'> Telefon Kodu boş bırakılamaz</font><br/>";
		}
		
		if(empty($plakakodu)) {
			echo "<font color='red'>Plaka kodu boş bırakılamaz.</font><br/>";
		}
		
		//Önceki sayfaya git.
		echo "<br/><a href='javascript:self.history.back();'>Geri Git</a>";
	} else { 
		//doldurulmayan veri yoksa
			
			// sehir tablosuna verileri ekliyor , $result dizisine atıyor.
		$result = mysqli_query($mysqli, "INSERT INTO sehir(isim,telefonkodu,plakakodu) VALUES('$isim','$telefonkodu','$plakakodu')");
		
		
		echo "<font color='green'>Veri başarıyla eklendi";
		echo "<br/><a href='index.php'>Anasayfaya Git</a>";
	}
}
?>
</body>
</html>