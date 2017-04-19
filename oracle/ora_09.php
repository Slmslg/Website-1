
<!DOCTYPE html>
<html>
<head>
	<title>GROUP BY | HAVING | AS </title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,oracle,GROUP BY,HAVING,AS"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,oracle,GROUP BY,HAVING,AS" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,oracle,GROUP BY,HAVING,AS" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,oracle,oracle,GROUP BY,HAVING,AS" />
		<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
		<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
		<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<body><h4>GROUP BY</h4>
		<p>
		Group By ifadesinden önce daha önce de kulanmış olabileğim AS kelimesinden bahsedelim.Sorgu yaparken kolon adının görünmesi istediğimiz şekilde düzenleyebiliriz.Kalıcı bir düzenleme değildir.Sadece görüntü oluşturur.
		İstediğimiz kolonun önüne AS yazarak ya da genel kullanımı olan direkt olarak görünmesini istediğimiz isimle yazabiliriz.
		Aşağıdaki örneklerde AS kullanımını görebilirsiniz.<br>		
		Kayıtları istediğimiz kriterlere göre sıralamamıza yarar.Örneğin ülkelere göre takımları sgruplamak istersek ;</p>
		<fieldset><br>
			SELECT ulkeler,SUM(DISTINCT(team_name)) FROM TEAM GROUP BY ulkeler ;
		</fieldset>
		<br><fieldset><p><br>
			SELECT kategori, COUNT(*) AS "Takım sayısı"<br>
			FROM team<br>
			WHERE kupa_sayısı > 5<br>
			GROUP BY kategori;<br>
		</fieldset>
		<br><fieldset><p><br>
			SELECT department, MIN(salary) AS "En dusuk ucret"<br>
			FROM employees<br>
			GROUP BY department;<br>
		</fieldset>

		<h4>HAVING</h4>
		<p>Gropu By ile koşul koyduğumuzda hata ile karşılaşırız.Bunun için WHERE yerine HAVING ifadesini kullanırız.Toplam satışın 25000 olanları gruplamak isteyelim.</p>
		<fieldset><p><br>
			SELECT department, SUM(sales) "Toplam Satis"<br>
			FROM details<br>
			GROUP BY department<br>
			HAVING SUM(sales) > 25000;<br>
		</fieldset>
		<p><b>Örnek :</b></p><br>
		<fieldset> <p><br>
			SELECT department, SUM(sales) "Toplam satis"<br>
			FROM details<br>
			GROUP BY department<br>
			HAVING SUM(sales) > 25000;<br>
		</fieldset>
		<br><p>5000'den küçük ve en düşük ücretlileri gruplayalım</p>
		<fieldset><p><br>
			SELECT department, MIN(salary) AS "En dusuk ucret"<br>
			FROM employees<br>
			GROUP BY department<br>
			HAVING MIN(salary) < 5000;<br>
		</fieldset>
		<a href="anasayfa.php?git=ora_08" id="geri"><i><pre><code><< WHERE | EXIST | BETWEEN</code></pre>
		 </i></a><a href="anasayfa.php?git=ora_10" id="ileri"><i><pre><code> Alter | Add | Modify | Revoke >></code></pre></i></a>
</body>
</html>