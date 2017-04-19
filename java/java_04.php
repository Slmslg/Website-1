<!DOCTYPE html>
<html>
<head>
	<title>Erişim Belirleyiciler</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java erişim belirleyiciler,java public,java private,java protect "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java değişkenler,java erişim belirleyiciler,java public,java private,java protect" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java değişkenler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java değişkenler,java erişim belirleyiciler,java public,java private,java protect" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
	</head>
<body>
		<h3>Erişim Belirleyiciler</h3>
			<h4>Public</h4>
			<p>Public her yerden ulaşılabilecek nesneleri tanımlamak için kullanılır.
			 Farklı sınıflardan, metotlardan çağırıp kullanabileceğimiz tanımlayıcıdır.
			  DEğişkenler, classlar ya da metotlarda uygulanabilir.</p>
			<div class="code">
				  public int degisken ;<br>
				    public int fonksiyon(){}<br>
				    public class JavaSinifi{}<br>
			</div>
			<h4>Static Kavramı</h4>
			<p>Bir nesneyi oluşturmadan kullanmak istersek static olarak belirtmemiz gerekir. Bir nesneyi oluşturmak için new komutunu kullanırız. Static olarak belirttiğimizde nesne oluşturmamıza gerek yoktur.
			Aşağıdaki örnekte static ve static olmayan metotların kullanımı gösterilmiştir.
			 Static olan metotu direkt olarak kullandık. Normal metotu ise nesne oluşturarak kullandık.
			  Nesneye Dayalı Programlamada bunu daha iyi anlayacaksınız.</p>
			<div class="code">
				public class test{<br>
					public static void staticMetot(){<br>
<br>
					}<br>
					public void normalMetot(){<br>
<br>
					}<br>
				}<br>
				public static void main(String[] args) {<br>
					test.staticMetot();<br>
					Test normal = new Test();<br>
					normal.normalMetot();<br>
				}<br><br>
			</div>
			<h4>Private</h4>
			<p>Sadece kendi sınıfı içerisinde ulaşılabilen erişim belirleyicisidir. 
			Eğer class içerisinde private olarak static olmayan bir değişken yazarsak bunu kullanmak için nesne oluşturmamız gerekir.
			</p>
			<div class="code">
				public class JavaIlkProgram {<br><br>
					    private String ad = "Selim";<br> <br>  
					    public static void main(String[] args) {<br><br>
					        JavaIlkProgram javaNesnesi = new JavaIlkProgram();<br>
					        String isim = javaNesnesi.ad;<br>
					        System.out.println("İsim : "+isim);<br>
					   <br> }					    <br>
					}<br>
			</div>
				<h4>Protected</h4>
				<p>Aynı paket ve aynı sınıf içerisinden erişilebilen erişim sağlayıcısıdır.
				Aşağıda iki class örneği bir pakette bulunmakta. 
				Bir sınıftan diğerine değişken değerini aktarıp değiştirelim.</p>
				<b>Protected Kullanımı</b>
				<div class="code">
					package javailkprogram;		<br>					
							public class ProtectedKullanımı {<br>
							    protected short id = 1234;<br>
							}<br>

				</div>
				<b>Main Class'ımız</b>
				<div class="code">					
					package javaılkprogram;<br>
					public class JavaIlkProgram {   <br>
					    public static void main(String[] args) {<br>
					        ProtectedKullanımı p = new ProtectedKullanımı();<br>
					        p.id = 120;<br>
					    }					<br>    
					}<br>
				</div>

<a href="anasayfa.php?git=java_03" id="geri"><i><pre><code><< Kullanıcıdan Veri Alma (Scanner)</code></pre> 
</i></a><a href="anasayfa.php?git=java_05" id="ileri"><i><pre><code> Aritmatik İşlemler ve Operatörler>></code></pre></i></a>


</body>
</html>