<!DOCTYPE html>
<html>
<head>
	<title>Alter | Add | Modify | DROP | LOCK</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,oracle,Alter,Add,Modify,DROP,LOCK"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,Alter,Add,Modify,DROP,LOCK" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,Alter,Add,Modify,DROP,LOCK" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,oracleAlter,Add,Modify,DROP,LOCK" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<body>	<h4>ALTER</h4>
		<p>Alter tablolar üzerinde değişiklikler yapan DDL komutlarıdır.</p>
		<h4>ALTER TABLE</h4>
		<p>Bir tablo oluşturalım</p><br>
		<fieldset><p><br>
			CREATE TABLE test_tablosu(<br>
			ID NUMBER,<br>
			ad VARCHAR2(100),<br>
			soyad VARCHAR2(100));<br>
		</fieldset>
		<p>Şimdi oluşturduğumuz tabloda değişiklikler yapalım.</p><br>
		<h4>Rename</h4>
		<fieldset><p><br>
			ALTER TABLE test_tablo RENAME TO yeni_tablo_ismi;<br>
			<i>Tablo ismini yeni_tablo ismi ile değiştirdik.</i></p>
		</fieldset>
		<h4>ADD</h4>
		<fieldset><p><br>
			ALTER TABLE yeni_tablo_ismi ADD dogum_tarihi DATE;<br>
			<i>Tabloya sutun ekledik.</i></p>
		</fieldset>

		<h4>MODIFY</h4>
		<fieldset><p><br>
			ALTER TABLE yeni_tablo_ismi MODIFY ID VARCHAR2(8);<br>
			<i>Tablodaki ID veritipini VARCHAR2 olarak değiştirdik.</i></p>
		</fieldset>
				<h4>DROP</h4>
		<fieldset><p><br>
			ALTER TABLE yeni_tablo_ismi DROP COLUMN sira_no;<br>
			<i>Tablodaki sira_no alanını sildik.</i><br>
			ALTER TABLE yeni_tablo_ismi DROP UNUSED COLUMNS;<br>
			<i>Kullanılmayan kolonları siliyoruz.</i><br></p>
		</fieldset>

		<h4>LOCK</h4>
		<fieldset><p><br>
			ALTER TABLE yeni_tablo_ismi  ENABLE TABLE LOCK;<br>
			<i>Tablonun erişebilirlğini açtık.</i><br><br>
			ALTER TABLE yeni_tablo_ismi  DISABLE TABLE LOCK;<br>
			<i>Tablonun erişebiliği kapalı yaptık.</i><br></p>
		</fieldset>
<p><i>En çok kullanılan ALTER komutlarını göstermiş olduk.</i></p>
			
<a href="anasayfa.php?git=roa_09" id="geri"><i><pre><code><< Group By | AS | Having</code></pre> 
</i></a><a href="anasayfa.php?git=ora_11" id="ileri"><i><pre><code>View | Constraint>></code></pre></i></a>


</body>
</html>