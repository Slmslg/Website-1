<!DOCTYPE html>
<html>
<head>
	<title>OOP-Class</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java,java dersleri, java OOP-Class "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java,java dersleri, java OOP-Class " />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java,java dersleri, java OOP-Class " />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java,java dersleri, java OOP-Class " />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Nesneye Dayalı Programlamaya Giriş-Sınıflar (Class)</h4>
		<p>Metot yazarken bir çok metodu aynı proje dosyası içerisinde yazmıştık. Metotlarımızı yazdığımız bu yer bizi ana sınıfımızdı. 
		Yani biz aslında daha önce sınıf kavramını kullanmıştık. Sınıfları yazdığımız kodları bir bütün içerisinde görevleri doğrultusunda 
		ayırmamızı ve gerektiğinde çağırılıp işlemleri yapmamızı sağlayan bir yapı olarak kullanırız. Sınıf içerisine metot ve değişkenler yazabilir iş yükünü bölümlere ayırabiliriz. Aynı kütüphanedeki Bilim,Felsefe,Tarih kitaplarının ayrıldığı gibi sınıflarla işlevleri ayırıp daha düzenli ve hızlı kod yazımı sağlayabiliriz. 
		Java Netbeans'te Class oluşturmak için package kısmına sağ tıklayıp new >> Java Class... yolunu izleyebilirsiniz.</p>
		<img src="java/proje_img/class1.png" alt="java"><br>
		<img src="java/proje_img/class2.png" alt="java"><br>
		<p>Class oluşturduktan sonra main kısmının olmadığını görebiliriz. 
		Biz buradaki metotları ya da değişkenleri izin verdiğimiz kadarıyla main sınıfımızda çağırıp kullanacağız.</p>
		<img src="java/proje_img/class3.png" alt="java"><br>
		<p>Oluşturduğumuz sınıfın kullanımını görelim.<br></p>
		<div class="code">
			public class class_ismi {<br>
				     String ad,soyad;<br>
				     int yas;<br>
				 <br>
				    void yazdir(String ad,String soyad,int yas)<br>
				    {<br>
				        System.out.println("AD :"+ad+<br>
				                "SOYAD :"+soyad+<br>
				                "YAS :"+yas);<br>
				    }<br>
				    int hesapla(int dogumTarihi)<br>
				    {<br>
				        return 2015-dogumTarihi;<br>
				    }<br>
				}<br>
		</div>
		<p>Main class'ta çağıralım.</p>
		<div class="code">
			public class main{<br>
				 public static void main(String[] args) {    <br>
				       class_ismi nesne = new class_ismi();<br>
				       nesne.yazdir("Selim", "Silgu", 24);<br>
				       nesne.hesapla(1991);<br>
				       nesne.ad = "Arda";<br>
				       nesne.soyad = "Turan";<br>
				       nesne.yas = 28;<br>
				       <br>
				        }<br>
				    }<br>
			}<br>
		</div>
		<h4>Nesne (Object) ve New Kavramları</h4>
		<p>
		Yukarıda oluşturduğumuz sınıfı ana classta çağırınca nesne adında birşey yazdık. İşte Nesneye Dayalı Programlama'nın mantığında nesne (object)
		yatar. Bellekte oluşturulan sınıfın bir örneğini tutmak için nesne oluşturulur. Bellekteki yer ayırma işlemini <b>new</b> komutu ile yapar.
		<i>Sınıf_ismi nesne_ismi = new Sınıf_ismi();</i> şeklinde kullanılır.
		Nesne oluştuktan sonra sınıf içerisindeki izin verilen yani public durumundaki tüm metot ve değişkenlere erişebildik. 
		Object Oriented Programming mantığının temeli nesneye dayalı olduğu için burayı iyi anlamak gerekir.</p>
		
<a href="anasayfa.php?git=java_09" id="geri" title="geri"><i><pre><code><< Metotlar (Fonksiyonlar)</code></pre> 
</i></a><a href="anasayfa.php?git=java_11" id="ileri" title="ileri"><i><pre><code> Miras Alma ve Kalıtım (Inheritance)>></code></pre></i></a>


</body>
</html>