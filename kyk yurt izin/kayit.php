<?php
require("baglanti.php");

$tcno=$_POST['tcno'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$sifre=$_POST['sifre'];

if(!empty($tcno) && !empty($ad) && !empty($soyad) && !empty($sifre)){
    $sql="INSERT INTO ogrenci (tcno,ad,soyad,sifre) VALUES ('$tcno','$ad','$soyad','$sifre')";
    $cevap = mysqli_query($baglanti, $sql);
    if ($cevap){
        echo "<script>alert('Başarıyla kayıt olundu')</script>";
        echo"<script>window.location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('Bu TC no ile daha önce kayıt olunmuş')</script>";
        echo"<script>window.location.href='index.php'</script>";  
    }
}
else{
    echo"<script>alert('Bazı bilgiler eksik girildi')</script>";
    echo"<script>window.location.href='index.php'</script>";
}
?>