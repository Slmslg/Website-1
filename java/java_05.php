<!DOCTYPE html>
<html>
<head>
	<title>Aritmatik İşlemler ve Operatörler</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java aritmatik işlemler ve operatörler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java aritmatik işlemler ve operatörler " />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java aritmatik işlemler ve operatörler " />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java aritmatik işlemler ve operatörler " />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
			<style type="text/css">
					#operator{
						border:1px solid red;
						padding: 0;
						padding-left: 20px;
						text-indent: 0px;
						width: auto;
						clear: both;
						float: left;
						margin-left: 50px;
						padding: 20px;
						text-align: justify;
					}
			</style>
	</head>
<body>
		<h4>Operatörler</h4>
		<p>
		Matematikte kullandığımız operatörleri burada da kullanabiliyoruz.
		Aynı zaman da mantıksal işlemleri de yapabiliyoruz.
		</p>
		<h4>Karşılaştırma Operatörleri</h4>
		<p>İki operatörün karşılaştırılması için kullanılır.</p>
				<div id="operator">
				==  Eşittir<br>
				!=  Eşit Değil<br>
				<   Küçüktür<br>
				>   Büyükür<br>
				>=  Büyük Eşittir<br>
				<=  Küçük Eşittir<br>
				</div><br>
				<div class="clear"></div>
		<h4>Mantıksal Operatörler</h4>
		<div id="operator">
			& (Ve) : Bu Operatör her iki operanın değerlerini alır ve her iki operanın
			da doğru olmadığı sürece yanlış sonucunu üretir. Doğru sonucunu vermesi için her iki operanın
			doğru olması gerekir. <br>
			| (Veya) : Herhangi birinin doğru olması, doğru sonucunu üretmek için yeterlidir. Sadece<br>
			ve sadece iki operanın yanlış olması halinde sonuç yanlıştır. <br>
			^ (XOR) : Bu operatör ise iki operanın herhangi biri farklı ise doğru sonucunu üretir.
			 İki operanın da aynı değere sahip ise sonuç yanlıştır. <br>
			! (Degil) : Tek opera ile birlikte çalışır. Operaya ait değerin tersini alır.
			 Operanın yanlış ise doğru, doğru ise yanlış sonucunu üretir.<br>
		</div>
		<div class="clear"></div>

		<h4>Arttırma ve Azaltma Operatörü</h4>
		<div id="operator">
			•	++ Sayıyı bir bir arttırır.
			•	--   Sayıyı bir bir azaltır.
			•	+=  Toplama işlemi yapar ve sonucu soldaki sayıya atar.
			•	-=   Çıkarma işlemi yapar ve sonucu soldaki sayıya atar.

		</div><div class="clear"></div>
		<h4>Örnekler</h4>
		<div class="code">
			public class JavaIlkProgram {<br><br>
	    private String ad = "Selim";    <br>
	    public static void main(String[] args) {<br><br>
	       int a,b,c,d,sonuc;<br>
	       a = 10;<br>
	       b = 20;<br>
	       c = 12;<br>
	       d = 15;<br>
	       System.out.println("Aritmatik İşlemler :");<br>
	       sonuc = a + b + c + d ;<br>
	        System.out.println("Toplama İşlemi :"+sonuc);<br>
	        sonuc = a - b ;<br>
	        System.out.println("Çıkarma İşlemi :"+sonuc);<br>
	        sonuc = a / b ;<br>
	        System.out.println("Bölme İşlemi :"+sonuc);<br>
	       sonuc = a*b*d;<br>
	       System.out.println("Çarpma İşlemi :"+sonuc);<br>
	       sonuc = a%c;<br>
	       System.out.println("Mod İşlemi :"+sonuc);<br>
	       System.out.println("Karşılaştırma Operatörleri :");<br>
	       a = 10 ;<br>
	       b = 10 ;<br>
	       c = 12 ;<br>
	       d = 0;<br>
	       System.out.println(a==b);<br>
	       System.out.println(b!=c);<br>
	       System.out.println(c>d);<br>
	       System.out.println(a< d);<br>
	       System.out.println(a>=c);<br>
	       System.out.println(b<=d);<br>
	        System.out.println("Mantıksal Operatörler :");<br>
	        <br>
	       System.out.println(a&b);<br>
	       System.out.println(b|c);<br>
	       System.out.println(c^d);<br>
	       System.out.println(!true);<br>
	       a = 0 ;<br>
	        System.out.println("a++ : "+(a++));<br>
	        System.out.println("++a : "+(++a));<br>
	        a = 1 ;<br>
	        System.out.println("a-- : "+(a--));<br>
	        System.out.println("--a : "+(--a));<br>
	        a += 10 ;<br>
	        System.out.println("+= : "+a);<br>
	        a -= 5 ;<br>
	        System.out.println("-= : "+a);  <br>             
    }<br>
    <br>
}<br>
		</div>
		<h4>Ekran Çıktısı</h4>
		<div class="cikti">
			run:<br>
				Aritmatik İşlemler :<br>
				Toplama İşlemi :57<br>
				Çıkarma İşlemi :-10<br>
				Bölme İşlemi :0<br>
				Çarpma İşlemi :3000<br>
				Mod İşlemi :10<br>
				Karşılaştırma Operatörleri :<br>
				true<br>
				true<br>
				true<br>
				false<br>
				false<br>
				false<br>
				Mantıksal Operatörler :<br>
				10<br>
				14<br>
				12<br>
				false<br>
				a++ : 0<br>
				++a : 2<br>
				a-- : 1<br>
				--a : -1<br>
				+= : 9<br>
				-= : 4<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
<a href="anasayfa.php?git=java_04" id="geri"><i><pre><code><< Erişim Belirleyiciler</code></pre> 
</i></a><a href="anasayfa.php?git=java_06" id="ileri"><i><pre><code> Koşul İfadeleri (If-Else | Switch)>></code></pre></i></a>


</body>
</html>