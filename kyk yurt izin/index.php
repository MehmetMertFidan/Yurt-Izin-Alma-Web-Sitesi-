<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYK İzin Giriş</title>
    <link rel="stylesheet" href="sekillendir1.css">
</head>
<body>

<div class="ekran">
    <div class="kutu1">
        <div class="yazi1">Giriş</div>
        <div class="giris">
            <form action="giris.php" method="POST">
                &nbspTC no: <input type="text" name="tc"><br>
                &nbspŞifre: <input type="password" name="sifre_giris"><br>
                <div class="buton1"><input type="submit" value="Giriş yap"></div>
            </form>
        </div>
    </div>
    <div class="kutu2">
        <div class="yazi2">Kayıt</div>
        <div class="kayit">
            <form action="kayit.php" method="POST">
                &nbsp;TC no: <input type="text" name="tcno"><br>
                &nbsp;Ad: <input type="text" name="ad"><br>
                &nbsp; Soyad: <input type="text" name="soyad"><br>
                &nbsp;Şifre: <input type="password" name="sifre"><br>
                <div class="buton2"><input type="submit" value="Kayıt ol" name="kayit_butonu"><div>
            </form>
        </div>
    </div>
    <div class="uzanti">
        <a href="https://github.com/MehmetMertFidan/Yurt-zin-Alma-Web-Sitesi-">Github'a gitmek için tıklayın</a>
    </div>   
</div>

</body>
</html>
