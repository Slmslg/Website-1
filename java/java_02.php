<!DOCTYPE html>
<html>
<head>
	<title>Değişkenler</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java değişkenler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java değişkenler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java değişkenler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java değişkenler" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
	<style type="text/css">
	.java_02 li{
		display: block;
		float: left;		
	}
	.clear{
		clear: both;
	}
	
	</style>
	</head>
<body>
		<h4>Değişkenler</h4>
		Byte, short, int, long, float, double, boolean, char, string veri türleri <b>Java</b> programlama dilinde kullanılır.
		<div class="ul_02">
			<p><b>Boolean :</b> Mantıksal olarak true veya false değeri döndürür.</p>
			<p><b>Short :</b> 2 Byte veri boyutu vardır. -32.768 ile 32.767 arasında değer alabilir.</p>
			<p><b>Int :</b> 4 Byte yer kaplar. 2.147.483.648 ila 2.147.483.647 arasında değerler alır.</p>
			<p><b>Float :</b> 4 Byte yer kaplar. 1,40239846 * 10<sup>-45</sup> ile 3,40282347 * 10<sup>38</sup> arasında değer alır.
			Üs ifadesi E olarak yazdırılır.</p>
			<p><b>Double :</b> 8 Byte yer kaplar. Ondalıklı sayılar için de kullanılır.
			  4,94065645841246544 * 10<sup>-324</sup> ile 1,79769313486231570 * 10<sup>308</sup> arasında değer alabilir.</p>
			<p><b>Byte : </b> 1 Byte yer kaplar. -128 ile 127 arasında değerler alabilir.</p>
			<p><b>Char : </b> 2 Byte yer kaplar. Sembol,sayı,harf gibi değerler alır ve  ' ' (tek tırnak) arasına yazılır.</p>
			<p><b>String : </b> Birden çok karakterin bir araya gelmesi sonucu oluşur.
			 Yani alfanümerik değişkenler alabilir. Matematiksel işlem yapılmaz. Bir kelime grubunu içerebilir.
			Dizi şeklinde karakterler tutulur.</p>
			<p><b>Long :</b> 8 Byte yer kaplar. ile 2.147.483.647 arasında değer alabilir.</p><br>
			</div>
			<div class="clear"></div>
			<p>Bir örnekle tümünü gösterelim :</p>
			<div class="code">
			<code>
							 // Byte, short, int, long, float, double, boolean, char, string <br>
			       byte ByteSayi = -127 ;<br>
			       short ShortSayi = 32767;<br>
			       int IntSayi = 1237891739;<br>
			       long LongSayi = 1234567891;<br>
			       float floatSayi = (float)0.9699;<br>
			       double doubleSayi = 0.7;<br>
			       boolean booleanDegisken = true;<br>
			       char karakter = 'S';<br>
			       String stringKelime = "Selim Silgu";<br>
			       System.out.println("Byte : "+ByteSayi + "\nShort :"+ ShortSayi + <br>
               "\nInt :"+IntSayi+"\nLong :"+LongSayi+"\nfloat :"+floatSayi+<br>
               "\nDouble :"+doubleSayi+"\nBoolean :"+booleanDegisken+"\nChar :"+karakter);<br>
			</code>
			</div>
			<h4>Ekran Çıktısı</h4>
			<div class="cikti">
				run:<br>
					Byte : -127<br>
					Short :32767<br>
					Int :1237891739<br>
					Long :1234567891<br>
					float :0.9699<br>
					Double :0.7<br>
					Boolean :true<br>
					Char :S<br>
			</div>
		
<a href="anasayfa.php?git=java_01" id="geri"><i><pre><code><< Java'da Ekrana Yazdırma</code></pre> 
</i></a><a href="anasayfa.php?git=java_03" id="ileri"><i><pre><code>Kullanıcıdan Veri Alma (Scanner)>></code></pre></i></a>


</body>
</html>