<!DOCTYPE html>
<html>
<head>
	<title>Abstract Sınıflar</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java Abstract Sınıflar,java Abstract Sınıflar,abstract "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java Abstract Sınıflar,java Abstract Sınıflar,abstract" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java Abstract Sınıflar,java Abstract Sınıflar,abstract" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java Abstract Sınıflar,java Abstract Sınıflar,abstract" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Soyutlama (Abstraction)</h4>
		<p>
		Bazen aynı işlevi yapan fonksiyonların yöntemleri farklı olabiliyor. Abstract yani soyutlama burada devreye giriyor. Burada kullandığımız metotların
		içlerini boş bırakarak kullanılacağı sınıfta doldurabiliriz. Abstract Sınıfları çağırdığımızda alt sınıfta bu Abstract Sınıfı içindeki abstract metotlar kullanılmak zorundadır.
		<br>Abstract sınıflar ise içerisinde normal metot ve abstract metot bulunduran metotlardır. Çok fazla uzatmaya gerek olmadığını düşünüyorum. Diğer sitelerde epeyce konular uzatılıyor zaten. Bu
		da yazıyı sıkıcı hale getiriyor.Senaryo ile anlatırsak daha iyi olur. İlk öğrendiğimde tüm sitelerde aynı örnek yer alıyordu. Kare- Dikdörtgen örneği.
		Ben maaş örneği vereceğim.<br></p>
		<b>Senaryo</b><p>
		1.Odeme, Memur ve Mudur Classlar'ımız olacak.<br>
		2.Odeme şekli memur ve müdür için farklı hesaplamalarla zam alarak verilecek.<br>
		<b>Odeme.java Class'ı</b></p>
		<div class="code">
			package siniflar;<br>
				public abstract class Odeme {<br>
				    public abstract double hesapla(double maas);<br>
				    public abstract void kisiselBilgiler(String adSoyad);<br>
				    public void yazdir()<br>
				    {<br>
				        System.out.println("Maaş Bilgileri : \n");<br>
				    }<br>
				}<br>
		</div>
		<p>Buradaki iki abstract metodu kullanmak zorundayız extends edilen classlar içerisinde.
		 yazdir() metodunu kullanmak zorunda değiliz.</p>
		<b>Mudur.java Class'ı</b>
		<div class="code">			
				package siniflar;<br>
				public class Mudur extends Odeme{<br>
				    double maas;<br>
				    public Mudur(double maas) {<br>
				        setMaas(maas);<br>
				        this.maas = maas;<br>
				    }<br>
				    public double getMaas() {<br>
				        return maas;<br>
				    }<br>
				    public void setMaas(double maas) {<br>
				        if (maas < 2499) {<br>
				            maas = 2500;<br>
				        }else<br>
				        {<br>
				            this.maas = maas;<br>
				        }  <br>
				    }			<br>	    
				   @Override<br>
				    public double hesapla(double maas) {       <br>
				       this.maas = maas+maas*(0.5);<br>
				        return this.maas;<br>
				    }      <br>
				    @Override<br>
				    public void kisiselBilgiler(String adSoyad) {<br>
				        hesapla(this.maas);<br>
				         System.out.println("Ad-Soyad : "+adSoyad+" Zamlı Maaşı : "+this.maas+" TL");<br>
				    }<br>
				}<br>
		</div>
		<p>Müdür için maaş zam hesaplaması 0.5 artış olarak belirlenmiştir. Eğer Odeme classındaki abstract metotları kullanılmamış olsaydı hata alırdık.
		Fakat yazdir() metodunu kullanma gereği duymadık.</p>
		<h4>Memur.java Class'ı</h4>
		<div class="code">			
			package siniflar;<br>
			public class Memur extends Odeme {<br>
			double maas ;<br>
			    public Memur(double maas) {<br>
			        setMaas(maas);<br>
			        this.maas = maas; <br>       
			    }<br>
			    public double getMaas() {<br>
			        return this.maas;<br>
			    }<br>
			    public void setMaas(double maas) {<br>
			        if (maas < 799) {<br>
			            maas = 800;<br>
			        }else<br>
			        {<br>
			            this.maas = maas;<br>
			        }        <br>
			    }<br>
			    @Override<br>
			    public double hesapla(double maas) {        <br>
			        this.maas = maas+maas*(0.3);<br>
			        return this.maas;<br>
			    }<br>
			    @Override<br>
			    public void kisiselBilgiler(String adSoyad) {<br>
			        hesapla(this.maas);<br>
			        System.out.println("Ad-Soyad : "+adSoyad+" Zamlı Maaşı : "+this.maas+" TL");<br>
			    }		<br>	    
			}<br>
		</div>
		<p>Burada müdürden farklı olarak zam 0.3 olarak ayarlanmştır.
		 Kısacası extends edilen aynı classın aynı metodunda farklı işlemler yaptırdık.</p>
		<h4>Main Class'ımız</h4>
		<div class="code">					
				package siniflar;<br>
				public class Siniflar {				    <br>
				    public static void main(String[] args) {<br>
				        Memur memur = new Memur(850);<br>
				        memur.kisiselBilgiler("Boli Bolingoli");<br>
				        Mudur mudur = new Mudur(7500);<br>
				        mudur.kisiselBilgiler("Selim Silgu");<br>
				    }				    <br>
				}<br>
		</div>
		<p>Bir memur ve bir müdür girerek test ediyoruz.</p>
		<h4>Ekran Çıktısı : </h4>
		<div class="cikti">
			run:<br>
				Ad-Soyad : Boli Bolingoli Maaşı : 1105.0 TL<br>
				Ad-Soyad : Selim Silgu Maaşı : 11250.0 TL<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
<a href="anasayfa.php?git=java_13" id="geri"><i><pre><code><< Getter ve Setter Metotları</code></pre>
 </i></a><a href="anasayfa.php?git=java_15" id="ileri"><i><pre><code> Arayüz Oluşturma (Interface)>></code></pre></i></a>


</body>
</html>