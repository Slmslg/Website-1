<!DOCTYPE html>
<html>
<head>
	<title>Metotlar</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java metotlar,java fonksiyonlar,javada metot kullanımı"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java metotlar,java fonksiyonlar,javada metot kullanımı" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java metotlar,java fonksiyonlar,javada metot kullanımı" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java metotlar,java fonksiyonlar,javada metot kullanımı" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>METOTLAR</h4>
		<p>Geldik şimdi Java'da Metotlar konusuna. Programlama dilinde en çok kullanacağımız kısım burası. Matematikteki formüller gibi düşünebilirsiniz.
		Bazı yerlerde fonksiyonlar olarak da görebilirsiniz. İstediğiniz bir işlemi defalarca aynı kodu yazmadan yaptırmak için kullanılır.
		Matematikte ispat yapmak yerine sonucunda bulunan formulu direkt olarak uygularız. 
		Burada da aynı şekilde istenilen işlem metot çağrılarak yapılır.</p>
		<h4>Değer Döndüren Metotlar</h4>
		<p>İşlem sonrasında değeri bir çok yerde kullanabildiğiniz işlem sonucunu döndürür. Return kullanılması gerekir.<br></p>
		<b>Genel Kullanımı :</b>
		<div class="cikti">
			Değişken_Adi metot_ismi(parametre)<br>
			{<br>
				Kodlar<br>
				return döndürüklecek_değer;<br>
			}<br>
			metot_ismi(parametreler); // Şeklinde çağrılır<br>
		</div>
		<p>
		Bir diziye değer atayan metot yazalım.</p>
		<div class="code">
			package javaılkprogram;<br>
				public class JavaIlkProgram {  <br>
				    public static int [] dizi = new int[10] ;<br>
				    public static int metot()<br>
				    {<br>
				        for (int i = 0; i < 10; i++) {<br>
				            dizi[i] = i;<br>
				        }   <br>
				    return 0; <br>
				    }<br>
				    public static void main(String[] args) {<br>
				              metot();<br>
				              for (int i = 0; i < 10; i++) {<br>
				                  System.out.println("Eleman : "+dizi[i]);<br>
				        }<br>
				        }<br>
				    }    <br>
		</div>
		<h5>Ekran Çıktısı</h5>
		<div class="cikti">
			run:<br>
			Eleman : 0<br>
			Eleman : 1<br>
			Eleman : 2<br>
			Eleman : 3<br>
			Eleman : 4<br>
			Eleman : 5<br>
			Eleman : 6<br>
			Eleman : 7<br>
			Eleman : 8<br>
			Eleman : 9<br>
			BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
		<h4>Parametre Alan ve Değer Döndüren Metotlar</h4>
		<p>Bir de parametre alan bir metot yazalım.
		 İstediğimiz bir sayıyı parametre olarak yolladığımızda bize toplamlarını versin.</p>
		<div class="code">
			    public static int metot(int x)<br>
			    {<br>
			        int toplam =0;<br>
			        for (int i = 0; i < x; i++) {<br>
			            toplam += i;<br>
			        }   <br>
			    return toplam;<br> 
			    }<br>
			    public static void main(String[] args) {<br><br>          
			                  System.out.println("1'den 12'ye kadar olan sayıların toplamı : "+metot(12));<br> 
                 			 System.out.println("1'den 21'ye kadar olan sayıların toplamı : "+metot(21));<br>   
			        }<br>
			    }<br>
		</div>
		<h5>Ekran Çıktısı</h5>
		<div class="cikti">
			run:<br>
				1'den 12'ye kadar olan sayıların toplamı : 66<br>
				1'den 21'ye kadar olan sayıların toplamı : 210<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
		<h4>Değer Döndürmeyen Metotlar</h4>
		<p>İşlemleri kendi metot içerisinde gerçekleştirip ekrana sonucu aktaran metot biçimidir. Return kullanılmaz.
		Otomatik olarak 10 defa JAVA yazdıralım. Fakat bu metotu üç kere kullanalım ve sonuc olarak yazmaya çalışsaydık üç kere for döngüsü kullanmak zorunda kalacaktık.
		Bu şekilde ise sadece üç kere metodu çağırarak kod blogunu azalttık.</p>
		<div class="code">
			public class JavaIlkProgram {  <br>
			    public static void metot()<br>
			    {        <br>
			        for (int i = 0; i < 10; i++) {<br>
			          System.out.println(" JAVA ");  <br>
			        }   <br>
			    }<br>
			    public static void main(String[] args) {          <br>
			                metot();   <br>
			                metot(); <br>
			                metot();     <br>             
			        }<br>
			    }    <br>
		</div>
		<h5>Ekran Çıktısı</h5>
		<div class="cikti">
			run:<br>
				 JAVA<br> 
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				 JAVA <br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
		<h4>Parametre Alan ve Değer Döndürmeyen Metotlar</h4>
		<p>İstediğimiz parametreyi metota gönderip sonucunu almamız için kullanılır.
		Aşağıda istediğimiz sayılar arasındaki sayıların toplamını yapan bir metot yazdık.</p>
		<div class="code">
			public class JavaIlkProgram {  <br>
			    public static void metot(int baslangıc,int son)<br>
			    {       <br>
			        int toplam =0;<br>
			        for (int i = baslangıc; i < son; i++) {<br>
			          toplam += i;<br>
			        }   <br>
			        System.out.println(baslangıc+" ile "+son+" arasındaki sayıların toplamı : "+toplam);<br>
			    }<br>
			    public static void main(String[] args) {          <br>
			               metot(20, 32);<br>
			        }<br>
			    }<br>
		</div>
		<h5>Ekran Çıktısı</h5>
		<div class="cikti">
			run:<br>
				20 ile 32 arasındaki sayıların toplamı : 306<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
		<h4>Overload (Aşırı Yükleme) Metotları</h4>
		<p>Aynı isimde fakar parametre ya da türü farklı olan metotlardır.</p>
		<div class="code">
			public class JavaIlkProgram {  <br>
				    public static void metot(int baslangıc,int son)<br>
				    {       <br>
				        int toplam =0;<br>
				        for (int i = baslangıc; i < son; i++) {<br>
				          toplam += i;<br>
				        }   <br>
				        System.out.println(baslangıc+" ile "+son+" arasındaki sayıların toplamı : "+toplam);<br>
				    }<br>
				    public static void metot()<br>
				    {<br>
				        System.out.println("Overloading....");<br>
				    }<br>
				    public static String metot(String a)<br>
				    {<br>
				        return a;<br>
				    } <br>
				    public static void main(String[] args) {    <br>
				        int a = 2, b=8;<br>
				        String str = "Selim Silgu";<br>
				               metot();<br>
				               String stringDeger = metot(str); <br>
				               System.out.println(stringDeger);<br>
				               metot(a, b);<br>
				        }<br>
				    }<br>
		</div>
		<h5>Ekran Çıktısı</h5>
		<div class="cikti">
			run:<br>
				Overloading....<br>
				Selim Silgu<br>
				2 ile 8 arasındaki sayıların toplamı : 27<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
	
<a href="anasayfa.php?git=java_08" id="geri"><i><pre><code><< Diziler</code></pre> 
</i></a><a href="anasayfa.php?git=java_10" id="ileri"><i><pre><code> Nesneye Dayalı Programlamaya Giriş-Sınıflar (Class)>></code></pre></i></a>


</body>
</html>