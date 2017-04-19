<!DOCTYPE html>
<html>
<head>
	<title>Index | Sequence</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,Triggers "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Index,Sequence" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,Index,Sequence" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Index,Sequence" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<body>
	
			<h4>INDEX</h4>
			<p>Oracle verileri ararken ilk önce indexi olup olmadığına bakar. Eğer indexi varsa aramayı indexe göre yapar. Bu performans artışına neden olur.
			   Fakat bu her veriye index değeri vermek anlamına gelmez. İndexler genelde tekil ya da çok sık kullanılan verilere verilmelidir.
			   Aksi taktirde performansı olumsuz yönde etkiler.
			</p>
			   <br>
			   <fieldset>
			   	CREATE INDEX Index_Adi<br>
				ON Tablo_Adi (alan_adi);
			   </fieldset>
			   <br>
			   <p>Örneğin bir tc kimlik no alanına index değeri verelim</p>
			   <br>
			   <fieldset>
			   	CREATE UNIQUE INDEX tc_no_index<br>
			   	ON table_name(tc_kimlik_no);
			   </fieldset>
			
			<h4>SEQUENCE</h4>
			<P>Otomatik artış alanı sağlamak için kullanılır. Bir tablo oluşturalım.<br></P>
			<fieldset><p><br>
				CREATE TABLE OGR_BILGILERI<br>
				(<br>
				   OKUL_NO       NUMBER (10),<br>
				   AD       VARCHAR2 (50),<br>
				   SOYAD    VARCHAR2 (50),<br>
				   DOGUM_TARIHI  DATE,<br>
				   PRIMARY KEY (OKUL_NO)<br>
				)<br></p>
			</fieldset>
			<br>
			<p>Şimdide başka bir bağlı tablo oluşturalım.</p>
			<br>
			<fieldset><p><br>
				CREATE TABLE OGR_NOTLARI<br>
				(<br>
				   SINIF_NO    NUMBER (12),<br>
				   OKUL_NO      NUMBER (10),<br>
				   SINIF_ORTALAMASI   DECIMAL (15, 5),<br>
				   GENEL_ORTALAMA   DECIMAL (15, 5),<br>
				   TARIH         DATE,<br>
				   PRIMARY KEY (SINIF_NO),<br>
				   FOREIGN KEY (OKUL_NO) REFERENCES OGR_BILGILERI (OKUL_NO)<br>
				)<br></p>
			</fieldset>
			<p>Sequence'imizi oluşturalım.</p><br>
			<b>Öğrenci Bilgileri Sequence'i</b>
			<fieldset><p><br>
				CREATE SEQUENCE OGR_BILGILERI_SEQ<br>
				   START WITH 1<br>
				   INCREMENT BY 1<br>
				   MAXVALUE 9999;<br></p>
			</fieldset>
			<b>Öğrenci Notları Sequence'i</b>
			<fieldset><p><br>
				CREATE SEQUENCE OGR_NOTLARI_SEQ<br>
				   START WITH 1<br>
				   INCREMENT BY 1<br>
				   MAXVALUE 9999;<br></p>
			</fieldset>
			<br>
			<p>
			<b>Start With </b>başlangıç sayma sayısı, <b>Increment By </b> ise artış miktarını verir. Maxvalue ise en son değer.<br>
			Daha önce Trigger kullanmayı görmüştük. Trigger kullanarak ekleme işleminde otomatik artışı sağlayalım.</p>
			<b>Öğrenci Bilgileri Trigger'ı</b>
			<fieldset><p><br>
				CREATE TRIGGER OGR_BILGILERI_SEQ_TRIG<br>
				   BEFORE INSERT<br>
				   ON OGR_BILGILERI<br>
				   REFERENCING NEW AS NEW<br>
				   FOR EACH ROW<br>
				BEGIN<br>
				   SELECT OGR_BILGILERI_SEQ.NEXTVAL INTO :NEW.OKUL_NO FROM DUAL;<br>
				END;<br></p>
			</fieldset>
			<br>
			<b>Öğrenci Notları Trigger'ı</b>
			<fieldset><p><br>
				CREATE OR REPLACE TRIGGER OGR_NOTLARI_SEQ<br>
				   BEFORE INSERT<br>
				   ON OGR_NOTLARI<br>
				   REFERENCING NEW AS NEW<br>
				   FOR EACH ROW<br>
				BEGIN<br>
				   SELECT OGR_NOTLARI_SEQ.NEXTVAL INTO :NEW.OKUL_NO FROM DUAL;<br>
				END;<br></p>
			</fieldset>
			
		<a href="anasayfa.php?git=ora_12" id="geri"><i><pre><code><< Triggers</code></pre>
		</i></a><a href="anasayfa.php?git=ora_14" id="ileri"><i><pre><code> Role>></code></pre></i></a>

</body>
</html>