<!DOCTYPE html>
<html>
<head>
	<title>Oracle Kurulumu</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="Oracle Kurulumu "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Oracle Kurulumu" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Oracle Kurulumu" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
	<style type="text/css">
	p>img{
		width: 800px;
		height: 600px;
		margin-bottom: 10px;
		margin-top: 10px;
	}
	</style>
</head>
<body>
	<p>
		Microsoft Windows için siteminize uygun doyaları adresinden indirelim : <a href="http://www.oracle.com/technetwork/indexes/downloads/index.html#database">Link</a><br>
		Tek klasöre topladığınız dosyalardan <b>setup.exe</b>dosyasına tıklayıp çalıştırınız.<br>
	</p>
		
			<p>1.Gelen formu doldurmadan <b>Next</b> seçeneğini seçerseniz bir uyarı gelecektir. Fakat siz bu kısmı <b>Yes</b> butonunu seçip geçebilirsiniz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture3.png"><br>
			</p>
			
			<p>2.Sonraki kısımda ise <b>'Create and configure a database'</b> seçeneğini seçip <b>Next</b>'e tıklayınız.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture4.png"><br>
			</p>
		
			<p>3.İstediğimiz ayarları yapmak için <b>Server Class</b> seçeneğini seçiyoruz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture5.png"><br>
			</p>
		
			<p>4.Single instance database installation seçeneği ile devam ediyoruz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture6.png"><br>
			</p>
		
			<p>5.Kendi ayarlarımız yapmak için <b>Advance Install</b> seçeneğini seçerek ilerleyiniz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture6.png"><br>
			</p>
		

			<p>6.Burada kullanmak istediğiniz dili seçiyoruz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture8.png"><br>
			</p>
		
			<p>7.Bu bölümde Oracle'ın hangi sürümünü yüklemek istediğinizi soruyor.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture9.png"><br>
			</p>
		
			<p>8.Burada SQL işlemleri yapacağımız için <b>General Purpose / Transaction Processing</b> seçeneğini seçip ilerleyelim.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture10.png"><br>
			</p>
		
			<p>9.Bu bölüm oldukça önemli çünkü ileride <b>Connection</b> oluştururken lazım olacak.Global Database kısmına <b>Oracle</b> yazıyorum. Service adına da default değeri yerine istediğimizi yazabiliriz.Ona da <b>Oracle</b> yazıyorum.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture11.png"><br>
			</p>
		
			<p>10.Bu bölümde <b>Enable Automatic Memory Management</b> seçeneğini işaretleyip Ram miktarını otomatik olarak Oracle'ın yapmasını sağlayalım<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture12.png"><br>
			</p>
		
			<p>11.Character Set sekmesinde <b>Use Unicode</b> seçeneğini seçelim. <br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture13.png"><br>
			</p>
		
			<p>12.Bu kısımda seçeneği işaretleyelim.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture141.png"><br>
			</p>
		
			<p>13.Sample Schema seçeneği tikini kaldırıp ilerleyelim.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture15.png"><br>
			</p>
		
			<p>14.Karşımıza gelen formda <b>Use Database Control for database management</b> seçeneğini işaretleyelim.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture16.png"><br>
			</p>
		
			<p>15.Bu bölümde <b>File System</b> seçeneği ile veritabanı yolunu seçelim.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture16.png"><br>
			</p>
		
			<p>15.Veritabanının otomatik yedeğinin alınmasını istemediğimden <b>Do not enable automated backups</b> seçeneğini işaretliyorum.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture18.png"><br>
			</p>
		
			<p>16.Burada her kullanıcıya farklı şifre verebilirsiniz. Fakat biz <b>use the same password for all accounts</b> seçeneği ile tüm kullanıcıların şifresini aynı yapıyorum Oracle bizi uyarıyor güvenli değil diye.<br>
			<img src="https://eyupalemdar.files.wordpress.com/2012/07/database_21.jpg?w=584&h=438"><br>
			</p>
		
			<p>17.Formdaki uyarıyı <b>Ignore All</b> diyerek geçebiliriz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture20.png"><br>
			</p>
		
			<p>18.Formdaki uyarıyı <b>Ignore All</b> diyerek geçebiliriz.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture20.png"><br>
			</p>
		
			<p>19.Next diyelim ve Oracle'ın yüklenmesini bekleyelim.<br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture21.png"><br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture22.png"><br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture23.png"><br>
			<img src="http://selimkaratas.com.tr/wp/wp-content/uploads/2014/01/CropperCapture24.png"><br>
			Oracle kurulumunu tamamlamış olduk. Hayırlı olsun.
			</p>
		
	
		<a href="anasayfa.php?git=oracle" id="geri"><i><pre><code><< Oracle Dersleri</code></pre>
		 </i></a><a href="anasayfa.php?git=ora_02" id="ileri"><i><pre><code> User (Schema) Oluşturma>></code></pre></i></a>
</body>
</html>