<!DOCTYPE html>
<html>
<head>
	<title>Aritmetik Fonksiyonlar</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,oracle,Aritmetik Fonksiyonlar,oracle Aritmetik Fonksiyonlar"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,oracle Aritmetik Fonksiyonlar,Aritmetik Fonksiyonlar" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,Where,Exist,BETWEEN" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,oracle,Aritmetik Fonksiyonlar,oracle Aritmetik Fonksiyonlar" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<body>

		<h4>ABS</h4>
		<p>Mutlak değer fonksiyonudur.<br><p>
		<fieldset>SELECT ABS(sales) FROM Customers </fieldset>

			<h4>ASCII</h4>
		<p>ASCI karşılığını döndürür. Aşağıdaki sorgu sonucu : 116 <br></p>
		<fieldset>SELECT ABS('t') FROM DUAL </fieldset>

				<h4>CHR</h4>
		<p>ASCII'nin tersine ASCII değerlerin karşılığını verir. Aşağıdaki sonuç t olacaktır.<br></p>
		<fieldset>SELECT CHR(116) FROM DUAL </fieldset>

		<h4>DISTINCT</h4>
		<p>En çok kullanacağımız fonksiyonlar biridir.Farklı verileri bulmamıza yarar.Aynı olanlardan bir tanesini alır.
		Müsterilere hizmet eden personelleri saydıralım.Bir personel birden fazla müşteriye hizmet edeceğinden tek bir tanesini almamız yeterlidir.<br></p>
		<fieldset>SELECT DISTINCT(personel_id) FROM Customers </fieldset>

		<h4>AVG</h4>
		<p>Average kelimesinin kısaltılmışıdır. Yani ortalama bulmak için kullanılır.<br></p>
		<fieldset>SELECT AVG(sales) FROM Customers </fieldset>

		<h4>CEIL</h4>
		<p>Bir üst tamsayıya yuvarlama işlemi yapar. Mesela aşağıdaki örnekte maaşları tam sayı olarak alalım.<br></p>
		<fieldset>SELECT CEIL(maaslar) FROM Employees </fieldset>

		<h4>FLOOR</h4>
		<p>CEIL fonksiyonunun aksine bir alt tamsayıya yuvarlama işlemi yapar.
		 Mesela  aşağıdaki örnekte maaşları tam sayı olarak alalım.<br></p>
		<fieldset>SELECT FLOOR(maaslar) FROM Employees </fieldset>

		<h4>COUNT</h4>
		<p>En çok kullanılan fonsiyonlardan biri sayma işlemi yapılan count komutu. Kaç personel var bulalım.<br></p>
		<fieldset>SELECT COUNT(personel_id) FROM Employees </fieldset>

		<h4>CURRENT_DATE</h4>
		<p>Geçerli zamanı gösterir.<br></p>
		<fieldset>SELECT CURRENT_DATE FROM DUAL </fieldset>

		<h4>EXP</h4>
		<p>
		e sayısının üssünü alır.<br>
		</p>
		<fieldset>SELECT EXP(2) FROM DUAL </fieldset>

		<h4>MAX</h4>
		<p>Kolondaki değerleri en yükseğini bulur.En yüksek maaşlı personeli bulalım.<br></p>
		<fieldset>SELECT MAX(salary) FROM Employees </fieldset>

		<h4>MIN</h4>
		<p>Kolondaki en düşük değeri alır.En düşük maaşlı personeli bulalım.<br></p>
		<fieldset>SELECT MIN(salary) FROM Employees </fieldset>

		<h4>SUM</h4>
		<p>Tüm verileri toplamak için kullanılır. Aşağıda personellere verilen toplam maaş sorgusu yazılmıştır.<br></p>
		<fieldset>SELECT SUM(salary) FROM Employees</fieldset>

		<h4>TO_DATE</h4>
		<p>
		Şimdi de geldik en çok kullanma olasılığınız olan fonksiyona.Tarihleri istediğiniz formata çevirip veritabanında o şekilde saklamanızı sağlar.<br>
		<br>Aşağıda çeşitli örnekler vardır :<br></p>
		<fieldset><p><br>
		TO_DATE('2015/07/09', 'yyyy/mm/dd')<br>
				Sonuç :  July 9, 2015<br>
<br>
				TO_DATE('070915', 'MMDDYY')<br>
				Sonuç :  July 9, 2015<br>
<br>
				TO_DATE('20150315', 'yyyymmdd')<br>
				Sonuç :  Mar 15, 2015<br></p>
		</fieldset>

		<h4>ROUND</h4>
		<p>Round iki farklı yuvarlama yapabilir.Biri tarih olarak diğeri sayı olarak.</p>
		<fieldset><p><br>
				<b>TO_DATE</b><br>
<br>
		ROUND(TO_DATE ('22-AUG-03'),'YEAR')<br>
			Sonuç : '01-JAN-04'<br>
<br>
			ROUND(TO_DATE ('22-AUG-03'),'Q')<br>
			Sonuç : '01-OCT-03'<br>
<br>
			ROUND(TO_DATE ('22-AUG-03'),'MONTH')<br>
			Sonuç : '01-SEP-03'<br>
<br>
			ROUND(TO_DATE ('22-AUG-03'),'DDD')<br>
			Sonuç : '22-AUG-03'<br>
<br>
			ROUND(TO_DATE ('22-AUG-03'),'DAY')<br>
			Sonuç : '24-AUG-03'<br>
<br>
				<b>NUMBER</b><br>
				ROUND(1905.315)<br>
				Sonuç : 1905<br>
<br>
				ROUND(1905.315, 0)<br>
				Sonuç : 1905<br>
<br>
				ROUND(1905.315, 1)<br>
				Sonuç: 1905.3<br>
<br>
				ROUND(1905.315, 2)<br>
				Sonuç : 1905.32<br>
<br>
				ROUND(1905.315, 3)<br>
				Sonuç : 125.315<br>
<br>
				ROUND(-1905.315, 2)<br>
				Sonuç : -125.32<br></p>
		</fieldset>

		<h4>VSIZE</h4>
		<p>Verilerin uzunluğunu verir. Yapılan yorumların kaç karakterden oluştuğunu bulalım.
		Hesaplama yaparken boşluk karakteri de dikkate alınır.<br></p>
		<fieldset>SELECT VSIZE(comment) FROM Employees</fieldset>

<a href="anasayfa.php?git=ora_06" id="geri"><i><pre><code><< SQL Fonksiyonları I</code></pre>
 </i></a><a href="anasayfa.php?git=ora_08" id="ileri"><i><pre><code> WHERE | EXIST >></code></pre></i></a>

</body>
</html>