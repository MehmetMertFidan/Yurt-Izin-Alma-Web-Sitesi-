# Yurt-Izin-Alma-Web-Sitesi-

Site linki: http://yurtizinal.cf/kyk%20yurt%20izin/

  Bu kodları kendi bilgisayarınızda çalıştırmak için önce XAMPP uygulamasını bilgisayarınıza indirip kurmanız gerekiyor. Kurarken kullanıcı adını "root" yapın ve şifre kısmını boş bırakın. Ardından kodları derlemek için bir derleyiciye ihtiyacınız olacak. Bunun için Visual Studio Code uygulamasını indirmenizi tavsiye ederim ancak siz başka bir derleyici de kullanabilirsiniz. 

  Şimdi derleyicinizi açıp bir klasör oluturun ve içinde 11 tane sayfa oluşturun. Sayfaların isimlerinin benim paylaştığım kyk yurt izin dosyasındakilerle aynı olmasına dikkat edin. Sonra ilgili sayfalara benim paylaştığım kodları kopyalayıp yapıştırın. Yalnızca baglanti.php adlı sayfaya aşağıdaki kodu yapıştırın(baştaki # işaretini yapıştırmayın).

#<?php

$server="localhost";

$user="root";

$password="";

$database="kyk";

$baglanti=mysqli_connect($server,$user,$password,$database);

?>

  Ardından oluşturduğunuz dosyayı XAMPP klasöründeki htdocs klasörüne atın.
 
  Şimdi yapmanız gereken şey site için bir database oluşturmak. Bunun için XAMPP uygulamasını açarak Apache ve MySQL kısımlarını start diyerek başlatıyoruz. Sonra kullandığınız arama motorunu açıp üstteki çubuğa "http://localhost/phpmyadmin/" bu linki yapıştırın. Siteye girince üstteki menüden SQL kısmına basın ve aşağıdaki kodu yazıp git diyerek çalıştırın.
  
CREATE DATABASE kyk;

Sonra soldaki menüden kyk adlı database'e tıklatın ve SQL kısmına bu kez paylaşmıl oldupum "epiz_31989499_kyk.sql" sayfasını yapıştırıp çalıştırın. Ve database'iniz hazır.

Şimdi arama moturunuzun üstteki arama çubuğununa "localhost" yazın ve enter'a basın. Ve işte siteniz hazır. Klasöre tıklayarak siteye erişebilirsiniz.




  





