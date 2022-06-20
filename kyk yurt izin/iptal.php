<?php
require("baglanti.php");
extract($_POST);
$iptalno=$_POST["iptal_no"];
$tcno=$_COOKIE["tcno"];

if(isset($_POST["iptal_no"])){
    $bul="SELECT tcno FROM izin_kayit2 WHERE izin_no=$iptalno";
    $kayit=$baglanti->query($bul);
    $satir=$kayit->fetch_assoc();
    $say = mysqli_num_rows($kayit);
    if($say==0){
        echo"<script>alert('Bu izin numarasına ait bir izniniz bulunmamakta')</script>";
        echo"<script>window.location.href='islem.php'</script>"; 
    }

    if($satir["tcno"]==$tcno){
        $sql="DELETE FROM izin_kayit2 WHERE izin_no=$iptalno";
        $cevap = mysqli_query($baglanti, $sql);
        echo"<script>window.location.href='islem.php'</script>";
    }
}
?>