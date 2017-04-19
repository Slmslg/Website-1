<!DOCTYPE html>
<html>
<head>
	<title>Where | Exist | BETWEEN </title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,oracle,Where,Exist,BETWEEN"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,Where,Exist,BETWEEN" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,Where,Exist,BETWEEN" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,oracle,Where,Exist,BETWEEN" />
		<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
		<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
		<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
</head>
<body>
		<h4>WHERE</h4>
		<p>
			Sorguları koşullu olarak ekranda görmek için Where sorgu ifadesi kullanılır.
			Maaşı 1000 TL'den az olanları sorgulamak istersek Where ile şu şekilde yapabiliriz.
		</p>
		<fieldset>
			SELECT firstname,lastname,salary FROM Isciler <b>WHERE</b> salary < 1000 ;
		</fieldset>
		<br>
		<p>Where ifadesi ile birlikte OR veya AND ifalerini de kullanabiliriz.</p><br>
		<fieldset><p>
		<br>
			SELECT firstname,lastname,salary FROM Isciler <b>WHERE</b> salary > 1000 AND salary < 2000 ;<br>
			<i>Maaşı 1000 TL ile 2000 TL arasında olan işçiler</i><br><br>
			SELECT firstname,lastname,salary FROM Isciler <b>WHERE</b> salary = 1000 OR salary = 2000 ;<br>
			<i>Maaşı 1000 TL ve ya 2000 TL olanlar</i>
			</p>
		</fieldset>

		<h4>BETWEEN</h4>
		<p>İki koşul arasındaki değeri döndürür.Örneğin id'si 2000-3000 arasında olanları bulalım.<br></p>

		<fieldset><p><br>
			SELECT *<br>
			FROM Musteriler<br>
			WHERE id BETWEEN 2000<br>
			AND 3000;<br></p>
		</fieldset><br>
		<p>İki tarih arasındaki değerleri de alabiliriz. <br>
		Örneğin 1 Mayıs ve 1 Haziran tarihleri arasındaki verileri çekebiliriz.</p>
		<fieldset><p><br>
			SELECT *<br>
			FROM Tarihler<br>
			WHERE tarih BETWEEN TO_DATE('2015/05/01', 'yyyy/mm/dd')<br>
			 AND TO_DATE('2015/06/01','yyyy/mm/dd');<br>
			 </p>
		</fieldset>

		<h4>EXIST</h4>
		<p>Verinin var olup olmadığının kontrolünü sağlar.
		İşçiler tablosunda bulunan Müşterileri bulmak için ; </p><br>
		<fieldset><p><br>
			SELECT * FROM Musteriler<br>
				WHERE EXISTS (SELECT * FROM Isciler<br>
	              WHERE Musteriler.id = Isciler.id);<br>
	              </p>
		</fieldset>

		<a href="anasayfa.php?git=ora_07" id="geri"><i><pre><code><< SQL Fonksiyonları II</code></pre> 
		</i></a><a href="anasayfa.php?git=ora_09" id="ileri"><i><pre><code> Group By | Having >></code></pre></i></a>
</body>
</html>