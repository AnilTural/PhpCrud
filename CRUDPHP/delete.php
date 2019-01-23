
<?php

include("config.php");
// index sayfasındaki Delete linkinden get metoduyla id alınıyor.
$id = $_GET['id'];
//databasede sehir tablosundan o satır siliniyor
$result = mysqli_query($mysqli, "DELETE FROM sehir WHERE id=$id");
//index sayfasına geri dönülüyor
header("Location:index.php");
?>