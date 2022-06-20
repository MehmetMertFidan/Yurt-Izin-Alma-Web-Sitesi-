<?php
require("baglanti.php");
$guncelle_no=$_POST["guncellenecek_no"];
$ilkgun=$_POST["ilkgun1"];
$songun=$_POST["songun1"];
$tcno=$_COOKIE["tcno"];

if(!empty($_POST["guncellenecek_no"]) && !empty($ilkgun=$_POST["ilkgun1"]) && !empty($_POST["songun1"])){
    $bul="SELECT * FROM izin_kayit2 WHERE izin_no=$guncelle_no";
    $kayit=$baglanti->query($bul);
    $satir=$kayit->fetch_assoc();
    
    if($satir["tcno"]==$_COOKIE["tcno"]){
        $sql="UPDATE izin_kayit2 SET ilk_gun='$ilkgun',son_gun='$songun' WHERE izin_no=$guncelle_no";
        $cevap=mysqli_query($baglanti,$sql);
        
        if ($baglanti->affected_rows > 0) {
            echo "<script>alert('İzniniz güncellendi')</script>";
            echo"<script>window.location.href='islem.php'</script>";
        } else {
            echo "<script>alert('Bu izin numarasına ait bir izniniz bulunmamakta')</script>";
            echo"<script>window.location.href='islem.php'</script>";
        }
    }
    else{
        echo "<script>alert('Bu izin numarasına ait bir izniniz bulunmamakta')</script>";
        echo"<script>window.location.href='islem.php'</script>";      
    }
}
else{
    echo"<script>alert('Bilgiler eksik girildi')</script>";
    echo"<script>window.location.href='islem.php'</script>";
}
?>