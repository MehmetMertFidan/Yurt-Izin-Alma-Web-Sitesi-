<?php
session_start();
setcookie("tcno","",time()-(60*60));
setcookie("ad","",time()-(60*60));
unset($_SESSION["ID"]);
echo"<script>alert('Başarıyla çıkış yapıldı')</script>";
echo"<script>window.location.href='index.php'</script>";
?>