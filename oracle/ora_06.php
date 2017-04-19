<!DOCTYPE html>
<html>
<head>
	<title>SQL Fonksiyonları I</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="oracle,dual,upper,lower,initcap,length,substr,ınstr,concat,lpad,rpad,LTRIM,RTRIM,
	nvl,nullif,coalesce,case,decode,oracle sql fonksiyonları"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="oracle,dual,upper,lower,initcap,length,substr,ınstr,concat,lpad,rpad,LTRIM,RTRIM,
	nvl,nullif,coalesce,case,decode,oracle sql fonksiyonları" />
	<meta name="google" content="oracle,dual,upper,lower,initcap,length,substr,ınstr,concat,lpad,rpad,LTRIM,RTRIM,
	nvl,nullif,coalesce,case,decode,oracle sql fonksiyonları" />
	<meta name="google-site-verification" content="oracle,dual,upper,lower,initcap,length,substr,ınstr,concat,lpad,rpad,LTRIM,RTRIM,
	nvl,nullif,coalesce,case,decode,oracle sql fonksiyonları" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<body>
<h4>SQL FONKSİYONLARI I</h4>
<i>NOT : <b>DUAL :</b> veritabanında bulunmayan işlemler için kullanılan sanal bir tablodur.</i><br>
		<p>SQL sorgularının hazır metotlarından bazılarını ele alacağız.<br></p>
		<h4>LOWER</h4>
		<p>Harfleri küçük harfe çevirir.<br></p>
		<fieldset>select lower('SELİM') from dual; </fieldset>

		<h4>UPPER</h4>
		<p>Harfleri büyük harfe çevirir.<br></p>
		<fieldset>SELECT LOWER('silgu') from dual; </fieldset>

		<h4>INITCAP</h4>
		<p>İlk harfi büyük yazdırmak için kullanılır.<br></p>
		<fieldset>SELECT INITCAP('selim') from dual; </fieldset>

		<h4>LENGTH</h4>
		<p>Uzunluk bulmak için kullanılır. Müşteri adlarının uzunluklarını yazdıralım.<br></p>
		<fieldset>SELECT LENGTH(first_name) FROM Customers </fieldset>

		<h4>SUBSTR</h4>
		<p>Belirli karakterlerin alınmasını sağlar.Aşağıda bir kaç örnek verilmiştir.<br></p>
		<fieldset><p><br>
				SUBSTR('Substr Uygulamasi', 6, 1)<br>
				Sonuç : 'r'<br>
<br>
				SUBSTR('Substr Uygulamasi', 6)<br>
				Sonuç : 'r Uygulamasi'<br>
<br>
				SUBSTR('Substr Uygulamasi', 1, 4)<br>
				Sonuç : 'Subs'<br>
<br>
				SUBSTR('Substr Uygulamasi', -3, 3)<br>
				Sonuç : 'asi'<br>
<br>
				SUBSTR('Substr Uygulamasi', -6, 3)<br>
				Sonuç : 'lam'<br></p>
</fieldset>

		<h4>INSTR</h4>
		<p>Karakterin istenilen karakterden başlayarak indisini bulur.
		 İsminde 1.indisten başlayarak 5.indise kadar olan harflerden 'A' harfinin indisini bulalım.<br></p>
		<fieldset>SELECT INSTR(firstname,'A',1,5) FROM Customers </fieldset>

		<h4>CONCAT</h4>
		<p>Alanları birleştirme işlemleri yapar.<br></p>
		<fieldset>SELECT CONCAT(firstname,surname) FROM Customers </fieldset>

		<h4>LPAD</h4>
		<p>
		Sol tarafına istediğiniz karakteri koyarak istediğiniz sayıda karakter dizisi şeklinde gösterilmesini sağlayabilirsiniz.
		Aşağıdaki örnekte isimlerin önüne isim 20 karakter olana kadar X yazdırdık.<br></p>
		<fieldset>SELECT LPAD(firstname,20,'X') FROM Customers </fieldset>

		<h4>RPAD</h4>
		<p>
		Sağ tarafına istediğiniz karakteri koyarak istediğiniz sayıda karakter dizisi şeklinde gösterilmesini sağlayabilirsiniz.
		Aşağıdaki örnekte isimlerin sonuna isim 20 karakter olana kadar X yazdırdık.<br>
		</p>
		<fieldset>SELECT RPAD(firstname,20,'X') FROM Customers </fieldset>

		<h4>LTRIM ve RTRIM</h4>
		<p>
		Sol ve sağ tarafındaki boşluk karakterilerini silmek kullanılır.<br>
		</p>
		<fieldset>SELECT LRIM(firstname),RTRIM(surname) FROM Customers </fieldset>

		<h4>NVL</h4>
		<p>
		Null değerleri istediğimiz değerle değiştirmemizi sağlar. NVL2 ise ilk dönen değeri verir fakat ilk değer null ise ikinci değeri döndürür.<br>
		</p>
		<fieldset>SELECT NVL(sales,0) FROM Customers ;
			 SELECT NVL2(sales,0) FROM Customers;
		</fieldset>

		<h4>NULLIF</h4>
		<p>
		Eğer iki alan eşit ise null değeri döndürür.
		Eğer eşit değilse ilk değer döner.Aşağıdaki gibi id ve tc numarası eşitse null eşit değilse id numarası döndürülecektir.<br></p>
		<fieldset>SELECT NULLFI(id,tc) FROM Customers </fieldset>

		<h4>COALESCE</h4>
		<p>
		İfadelerden baştan başlayarak null olmayanı döndüren fonksiyondur.
		Aşağıdaki örnekte eğer birinci ifade null değilse ilk ifade döner null ise ikinci ifadeye bakılır, eğer ikinci ifade de null ise üçüncüye bakılır o da null ise null değeri döner.<br>
		</p>
		<fieldset>SELECT COALESCE(id,tc,sales) FROM Customers </fieldset>

		<h4>CASE</h4>
		<p>
		Programlama dillerindeki IF-THEN-ELSE koşullu ifadesinin Oracle versiyonu diyebiliriz.<br>
		</p>
		<fieldset><p><br>
				SELECT firstname<br>
				CASE HR<br>
				  WHEN 'Selim' THEN 'İsminiz Selim'<br>
				  WHEN 'Muhammet' THEN 'İsminiz Muhammet'<br>
				  ELSE firstname<br>
				END<br>
				FROM suppliers;<br></p>
		</fieldset>

		<h4>DECODE</h4>
		<p>
		İkinci bir IF-THEN-ELSE koşullu ifadesi ise Decode fonksiyonudur.
		Eğer personel_id'si 10000 ise Müdür, 10001 ise Müdür Yardımcısı hiç biri değilse Mühendis döndürür.<br>
		</p>
		<fieldset><p><br>
			SELECT firstname,<br>
			DECODE(personnel_id, 10000, 'Müdür',<br>
                    10001, 'Müdür Yardımcısı',<br>
                    10002, 'Mühendis',<br>
                    'Programcı') result<br>
			FROM suppliers;<br></p>
		 </fieldset>

<br>
		<b>Örnek Kullanım : <br></b><br>
		<fieldset>
			
				SELECT LOWER(first_name),UPPER(surname), INITCAPE(job) FROM HR.Customers;
			
		</fieldset>

	<a href="anasayfa.php?git=ora_05" id="geri"><i><pre><code><< Delete | Truncate | Drop</code></pre>
	</i></a><a href="anasayfa.php?git=ora_07" id="ileri"><i><pre><code> DISTINCT | COUNT | ROUND >></code></pre></i></a>

</body>
</html>