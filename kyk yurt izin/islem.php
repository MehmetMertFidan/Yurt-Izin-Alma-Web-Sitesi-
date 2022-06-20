<?php 
session_start();
if(!isset($_SESSION["ID"])){
    header("Location: http://localhost/kyk%20urt%20izin/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyk İzin</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<div class="ekran">
    <div class="kullanici">
        Hoşgeldin
        <?php
        require("baglanti.php");
        $kullanici_tc=$_COOKIE["tcno"];

        $bul="SELECT ad FROM ogrenci WHERE tcno=$kullanici_tc";
        $kayit=$baglanti->query($bul);
        $satir=$kayit->fetch_assoc();
        echo " ".$satir["ad"];
        ?>
    </div>
    <div class="izin" > 
        <form action="izin.php" method="POST">
            &nbsp;İznin ilk gününü seçin<br>&nbsp;<input type="date" name="ilkgun"><br>
            &nbsp;İznin son günü seçin<br>&nbsp;<input type="date" name="songun"><br>
            &nbsp;<input type="submit" value="İzin al">
        </form>
    </div>
    <div class="cikis">
        <a href="cikis.php"><button>Çıkış</button></a>
    </div>
    <div class="yazi" id="yazi">Geçmiş izinler</div>
    <div class="tablo" id="tablo">
    <?php
require("baglanti.php");
$kullanici_tc=$_COOKIE["tcno"];

$bul="SELECT * FROM izin_kayit2 WHERE tcno=$kullanici_tc";
$kayit=$baglanti->query($bul);

echo "<table><tr><td>izin no</td><td>ilk gün</td><td>son gün</td></tr>";
if($kayit->num_rows>0){

    while($satir=$kayit->fetch_assoc()){
        echo"<tr>";
        echo "<td>".$satir["izin_no"]."</td>";
        echo "<td>".$satir["ilk_gun"]."</td>";
        echo "<td>".$satir["son_gun"]."</td>";
        echo"</tr>";
    }
    echo"</table>";
}
else{
    echo "<script>document.getElementById('yazi').style.visibility = 'hidden';</script>";
    echo "<script>document.getElementById('tablo').style.visibility = 'hidden';</script>";
}

?>
    </div>
    <div class="guncelle">
        <form action="guncelle.php" method="POST">
        &nbsp;Güncellenecek iznin numarasını giriniz<br>&nbsp;<input type="text" name="guncellenecek_no"><br>
        &nbsp;İznin ilk gününü tekrar seçin<br>&nbsp;<input type="date" name="ilkgun1"><br>
        &nbsp;İznin son gününü tekrar seçin<br>&nbsp;<input type="date" name="songun1"><br>&nbsp;
        <input type="submit" value="Güncelle">
        </form>
    </div>
    <div class="iptal">
        <form action="iptal.php" method="POST">
        &nbsp;İptal edilecek iznin numarasını giriniz<br>&nbsp;<input type="text" name="iptal_no"><br>&nbsp;
        <input type="submit" value="İptal et">
        </form>
    </div>
    <div class="izinal">İzin al</div>
    <div class="guncelle_yazi">İzin güncelle</div> 
    <div class="iptal_yazi">İzin iptal</div>
</div>

</body>
</html>