<?php
require("baglanti.php");

$kullanici_tc=$_COOKIE["tcno"];
$ilkgun=$_POST['ilkgun'];
$songun=$_POST['songun'];

if(($_POST["ilkgun"])!=null && ($_POST["songun"])!=null){
    if($_POST["ilkgun"]>$_POST["songun"]){
        echo"<script>alert('İznin son günü ilk günden önce olamaz')</script>";
        require("islem.php");
    }
    else{
        $sql= "INSERT INTO izin_kayit2 (tcno,ilk_gun,son_gun) VALUES ('$kullanici_tc','$ilkgun','$songun')";
        $cevap = mysqli_query($baglanti, $sql);
        if($cevap)
        echo "<script>alert('İzin isteğiniz başrıyla oluşturuldu')</script>";
        require("islem.php");
    }
}
else{
    echo"<script>alert('Lütfen gerekli tarihleri girdiğinizden emin olun')</script>";
    require("islem.php");
}
?>