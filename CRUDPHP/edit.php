
<?php

include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $isim=$_POST['isim'];
    $telefonkodu=$_POST['telefonkodu'];
    $plakakodu=$_POST['plakakodu'];    
    
    
    if(empty($isim) || empty($telefonkodu) || empty($plakakodu)) {            
        if(empty($isim)) {
            echo "<font color='red'>İsim boş bırakılamaz</font><br/>";
        }
        
        if(empty($telefonkodu)) {
            echo "<font color='red'>Telefon Kodu boş bırakılamaz</font><br/>";
        }
        
        if(empty($plakakodu)) {
            echo "<font color='red'>Plaka kodu boş bırakılamaz</font><br/>";
        }        
    } else {    
        //databasei güncelle
        $result = mysqli_query($mysqli, "UPDATE users SET isim='$isim',telefonkodu='$telefonkodu',plakakodu='$plakakodu' WHERE id=$id");
        
        
        header("Location: index.php");
    }
}
?>
<?php

$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM sehir WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $isim = $res['isim'];
    $telefonkodu = $res['telefonkodu'];
    $plakakodu = $res['plakakodu'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Anasayfa</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>İsim</td>
                <td><input type="text" name="isim" value="<?php echo $isim;?>"></td>
            </tr>
            <tr> 
                <td>Telefon Kodu</td>
                <td><input type="text" name="telefonkodu" value="<?php echo $telefonkodu;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="plakakodu" value="<?php echo $plakakodu;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>