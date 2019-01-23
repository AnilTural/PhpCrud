<?php

include_once("config.php");
// veri tabanıyla bağlantıyı sağlamak için mysqli eklentisini kullandım
//veritabanından çekilen verileri result dizisine aktardım
$result = mysqli_query($mysqli, "SELECT * FROM sehir ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Anasayfa</title>
</head>

<body>
<a href="add.html"> Ekle</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>isim</td>
		<td>Telefon Kodu</td>
		<td>Plaka kodu</td>
		<td>Update</td>
	</tr>
	<?php 
	// veri tabanından çekilen bilgiler bu döngüyle alt alta sıralanıyor.
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['isim']."</td>";
		echo "<td>".$res['telefonkodu']."</td>";
		echo "<td>".$res['plakakodu']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Emin misiniz?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>