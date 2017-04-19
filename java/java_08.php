<!DOCTYPE html>
<html>
<head>
	<title>Diziler</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java diziler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java diziler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java diziler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java diziler" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
			</head>
<body>
		<h4>Diziler</h4>
		<p>
			<p>
			Birden fazla değişkeni tutabilen yapılardır.Tek boyutlu ve çok boyutlu diziler şeklinde olabilirler.
			Dizileri iki şekilde gösterebiliriz.
			</p>
			<div class="code">
				public class JavaIlkProgram {  <br> 
				    public static void main(String[] args) {<br><br>
				    int [] dizi1 = new int[20];<br>
				    dizi1[0] = 0;<br>
				    dizi1[1] = 1;<br>
				    dizi1[2] = 2;<br>
				    dizi1[3] = 3;    <br>
				    dizi1[4] = 4;<br>
				    int [] dizi2 = {1,2,3,4,5};<br><br>
				    System.out.println("İlk eleman : "+dizi1[0]);<br>
				    System.out.println("Son eleman : "+dizi1[4]);<br>
				    System.out.println("Eleman : "+dizi2[2]);<br>
				    }		    <br>
				}<br>
			</div>
			<h4>Ekran Çıktısı</h4>
			<div class="cikti">
				run:<br>
					İlk eleman : 0<br>
					Son eleman : 4<br>
					Eleman : 3<br>
					BUILD SUCCESSFUL (total time: 0 seconds)<br>
			</div>
			<h4>Çok Boyutlu Diziler</h4>
			<p>Çok boyutlu dizileri matrisler olarak düşünebiliriz.Satır ve sütünlardan oluşur.</p>
			<div class="code">
								
				package javaılkprogram;<br>
				public class JavaIlkProgram {   <br><br>
				    public static void main(String[] args) {<br><br>
				    int [][] dizi1 = new int[3][3];<br>
				    dizi1[0][0] = 0;<br>
				    dizi1[0][1] = 1;<br>
				    dizi1[0][2] = 2;<br>
				    dizi1[1][0] = 3;    <br>
				    dizi1[1][1] = 4;<br>
				    dizi1[1][2] = 5;<br>
				    dizi1[2][0] = 6;<br>
				    dizi1[2][1] = 7;<br>
				    dizi1[2][2] = 8;<br><br>
				    System.out.println("1.satır 1.sütun Elemanı : "+dizi1[1][1]);<br>
				    System.out.println("2.satır 0.sütun Elemanı : "+dizi1[2][0]);<br><br>
				    int[][] dizi2 = new int[][]{<br>
				                    {1,9,0,5},<br>
				                    {5,0,9,1},<br>
				                    {1,4,5,3},<br>
				                    {1,9,9,1},<br>
				                    {1,9,9,9}<br>
				                };<br>
				    System.out.println("1.satır 1.sütun Elemanı : "+dizi2[1][1]);<br>
				    System.out.println("2.satır 0.sütun Elemanı : "+dizi2[2][0]);<br>
				    }				    <br>
				}<br>
			</div>
			<h4>Ekran Çıktısı</h4>
			<div class="cikti">
				run:<br>
					1.satır 1.sütun Elemanı : 4<br>
					2.satır 0.sütun Elemanı : 6<br>
					1.satır 1.sütun Elemanı : 0<br>
					2.satır 0.sütun Elemanı : 1<br>
					BUILD SUCCESSFUL (total time: 0 seconds)<br>
			</div>
			<p>İlerleyen zmanlarda epeyce örnekler sitemizde mevcut olacaktır.<br></p>
		</p>
<a href="anasayfa.php?git=java_07" id="geri"><i><pre><code><< Döngüler</code></pre>
 </i></a><a href="anasayfa.php?git=java_09" id="ileri"><i><pre><code> Metotlar (Fonksiyonlar)>></code></pre></i></a>


</body>
</html>