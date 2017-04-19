<!DOCTYPE html>
<html>
<head>
	<title>Kullanıcı Girişi</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java kullanıcı girişi "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java kullanıcı girişi" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java değişkenler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java kullanıcı girişi" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
	</head>
<body>
		<h4>Veri Girisi</h4>
		Kullanıcıdan veri almak için <b>Scanner</b> sınıfı kullanılır. Bu sınıfı dahil etmeden veri girişi yapamayız.
		<div class="code">
		<code>
			package java;<br>
<br>
	import java.util.Scanner;<br>
<br>
	public class Java {<br><br>
<br>
	    public static void main(String[] args) {<br><br>
			      System.out.println("Kullanıcı Bilgi Girişi");<br>        
		       Scanner scanner = new Scanner(System.in);<br><br>
		       System.out.println("Kullanıcı adını giriniz :");<br>
		       String ad = scanner.next();<br><br>
		       System.out.println("Kullanıcı soyadını giriniz :");<br>
		       String soyad = scanner.next();<br><br>
		       System.out.println("Kullanıcı cinsiyetini giriniz (Erkek/Kadın) :");<br>
		       String cinsiyet = scanner.next();<br><br>
		       System.out.println("Kullanıcı yaşını giriniz :");<br>
		       short yas = scanner.nextShort();<br><br>
		       System.out.println("Kullanıcı Bilgileriniz :\n");<br>
		       System.out.println("Kullanıcı adınız :"+ad+<br>
		               "\nKullanıcı soyadı :"+soyad+<br>
		               "\nKullanıcı cinsiyeti :"+cinsiyet+<br>
		               "\nKullanıcı yaşı :"+yas);<br>
    }    <br>
}<br>
		</code>
		</div>
		<h5>Ekran Çıktısı</h5>
		<div class="cikti">
							run:<br>
				Kullanıcı Bilgi Girişi<br>
				Kullanıcı adını giriniz :<br>
				Selim<br>
				Kullanıcı soyadını giriniz :<br>
				Silgu<br>
				Kullanıcı cinsiyetini giriniz (Erkek/Kadın) :<br>
				Erkek<br>
				Kullanıcı yaşını giriniz :<br>
				24<br>
				Kullanıcı Bilgileriniz :<br>
<br>
				Kullanıcı adınız :Selim<br>
				Kullanıcı soyadı :Silgu<br>
				Kullanıcı cinsiyeti :Erkek<br>
				Kullanıcı yaşı :24<br>
				BUILD SUCCESSFUL (total time: 19 seconds)<br><br>

		</div>
		
			
<a href="anasayfa.php?git=java_02" id="geri"><i><pre><code><< Değişkenler</code></pre>
 </i></a><a href="anasayfa.php?git=java_04" id="ileri"><i><pre><code> Erişim Belirleyiciler>></code></pre></i></a>


</body>
</html>