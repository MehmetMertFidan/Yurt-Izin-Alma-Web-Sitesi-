<?php
session_start();

extract($_POST);
$tcno=$_POST['tc'];
$sifre=$_POST['sifre_giris'];
require("baglanti.php");
if(!empty($_POST["tc"]) && !empty($_POST["sifre_giris"])){
    $sql="SELECT * from ogrenci where tcno='$tcno' and sifre='$sifre'";
    $cevap=mysqli_query($baglanti,$sql);
    
    $say = mysqli_num_rows($cevap);//kaç tane satırın tarife uyduğunu kaydediyor
    if($say==1){
        setcookie("tcno",$tcno,time()+(60*60));
        $bul="SELECT ad FROM ogrenci WHERE tcno=$tcno";
        $kayit=$baglanti->query($bul);
        $satir=$kayit->fetch_assoc();
        setcookie("ad",$satir["ad"],time()+(60*60));
        $_SESSION["ID"]=$tcno;
        echo"<script>window.location.href='islem.php'</script>";
    }
    else{
        echo"<script>alert('Girilen tc no ve şifre eşleşmiyor')</script>";
        echo"<script>window.location.href='index.php'</script>";
    }
}
else{
    echo"<script>alert('Bilgiler eksik girildi')</script>";
    echo"<script>window.location.href='index.php'</script>";
}
?>