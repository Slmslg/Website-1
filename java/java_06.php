<!DOCTYPE html>
<html>
<head>
	<title>Koşullu İfadeler</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java koşullu ifadeler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java koşullu ifadeler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java koşullu ifadeler" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
			<h4>IF-ELSE-ELSE IF</h4>
			<p>Türkçe'deli eğer sözcüğüne karşılık gelir.
			 Koşul koyarak istediğimiz işlemleri bu koşullara göre yaptırabiliriz.</p>
			<div class="code">
				if (a==b)<br>
				{<br>
					System.out.println("a ile b sayıları eşittir.");<br>
				}<br>
				else if(a!=b)<br>
				{<br>
					System.out.println("a ile b sayıları eşit değillerdir.");<br>
				}<br>
				else<br>
				{<br>
					System.out.println("Default");<br>
				}<br>
			</div><div class="clear"></div>
			<h4>SWITCH CASE</h4>
			<p>Girilen değere göre sonuç döndüren koşullu ifadelerdir.</p>
			<div class="code">
				package javaılkprogram;<br>
					import java.util.Scanner;<br><br>
					public class JavaIlkProgram {<br><br> 
					    public static void main(String[] args) {<br><br>
					      Scanner scanner = new Scanner(System.in);<br>
					      String secim = scanner.next();<br><br>
					       switch(secim){<br>
					           case "Pazartesi" : System.out.println("Can sıkıcı günün başlangıcı...");<br>
					               break ;<br>
					           case "Sali" : System.out.println("İş zamanı");<br>
					               break ; <br>
					           case "Carsamba" : System.out.println("Hafta ortası yoğun iş zamanı");<br>
					               break ;<br>
					            case "Persembe" : System.out.println("İşlerin bitirmenin son zamanları");<br>
					               break ;<br>
					           case "Cuma" : System.out.println("Haftanın son günü ve yorgunluğu");<br>
					               break ;<br>
					           case "Cumartesi" : System.out.println("Gezmeler...");<br>
					               break ;<br>
					            case "Pazar" : System.out.println("Evde dinlenme");<br>
					               break ;<br>
					       }<br>
					            <br>   
					    }<br>
			</div>
<a href="anasayfa.php?git=java_05" id="geri"><i><pre><code><< Aritmatik İşlemler ve Operatörler</code></pre> 
</i></a><a href="anasayfa.php?git=java_07" id="ileri"><i><pre><code> Döngüler>></code></pre></i></a>


</body>
</html>