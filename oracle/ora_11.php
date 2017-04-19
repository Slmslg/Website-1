<!DOCTYPE html>
<html>
<head>
	<title>VIEW | CONSTRAINTS</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,oracle,VIEW,CONSTRAINTS"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,VIEW,CONSTRAINTS" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,VIEW,CONSTRAINTS" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,VIEW,CONSTRAINTS" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/oracle.css">
	</head>
<body>
		<p>
			<h4>VIEW</h4>
			<p>
			Viewler oluşturduğunuz veritabanının ayrınılı olarak görüp müdahale edemeyeceğiniz güvenli yapılardır.Eğer sorgu sonucu güvenlik amaçlı herhangi bir işlem yapılmasını istemiyorsanız tablo üzerinde görüntüsünü göndererek bu güvenliği sağlayabilirsiniz.
			<br>Oluşturulan view'e istediğiniz verileri atayabilirsiniz.Ad ve soyadında s olan işçilerin view'ini oluşturalım.
			</p>
			<fieldset><p><br>
				CREATE VIEW ad_soyad_view AS<br>
				  SELECT firstname,lastname<br>
				  FROM Employees<br>
				  WHERE LIKE '%s%';<br>
<br>
				  Select * from ad_soyad_view<br></p>
			</fieldset>
			<b>VIEW'i güncellemek.</b>
			<fieldset><p><br>
				CREATE OR REPLACE VIEW ad_soyad_view AS<br>
				  SELECT firstname,lastname,id<br>
				  FROM Employees<br>
				  WHERE  LIKE '%s%';<br></p>
			</fieldset>
			<br><h4>DROP VIEW</h4>
			<fieldset>
				DROP VIEW ad_soyad_view;
			</fieldset>
		</p>
		<h4>CONSTRAINT</h4>
		<p>
			Oracle'da veri kısıtlamaları için constraintler kullanılır. Çeşitli kısıt koymak için constraintler vardır.
		</p>	
			<h3>UNIQUE </h3>
			<div class="konular">
			<ul>
				<li><b>NOT NULL</b> : Veri girilmeden tabloya kayıt eklemek istemiyorsanız not null kullanılır.</li>
				<li><b>UNIQUE</b> : Veriler girilirken tekil olmasını sağlar.</li>
				<li><b>PRIMARY KEY</b> : Unique gibidir farkı bir tabloda bir kere kullanılmasıdır.</li>
				<li><b>FOREIGN KEY</b> : Başka bir tabloyla ilişkilendirme yapılır. Bu kolon tablodaki primary key ile eşleştirilir.</li>
				<li><b>CHECK CONSTRAINT</b> : Bir kolonun limitini belirlemede kullanılır.</li>
				<li><b>DEFAULT CONSTRAINT</b> : Değerini otomatik olarak verilmesini istediğimizde kullanabiliriz.</li>
			</ul>
			</div><div class="clear"></div>
			
			<p>Aşağıdaki örnekte constraint kullanımı yapılmıştır.</p>
				<fieldset><p><br>
					CREATE TABLE constraint_tablosu{<br>
					ad varchar2(30) NOT NULL,<br>
					soyas varchar2(30) NOT NULL,<br>
					tc_kimlik_no char(11) PRIMARY KEY,<br>
					sinif_no NOT NULL UNIQUE,<br>
					yas int NOT NULL CHECK (YAS > 6),<br>
					UYRUK char(2) DEFAULT 'TC'<br>
					}<br></p>
				</fieldset><br>
				<p>Constraintler Oracle veritabanında bir tablo şeklinde tutulur. Bu nedenle constraintleri adlandırabiliriz. 
				Aynı anda iki kolona da aynı constraint özelliğini de verebiliriz.
				</p>
				<fieldset><p><br>
					CREATE TABLE CONSTRAINT_TABLOSU{<br>
					ad varchar2(30) ,<br>
					soyas varchar2(30),<br>
					CONSTRAINT ad_soyad NOT NULL(ad,soyad),<br>
					tc_kimlik_no char(11) PRIMARY KEY,<br>
					sinif_no NOT NULL UNIQUE,<br>
					yas int NOT NULL,<br>
					CONSTRAINT YAS_CONST CHECK (YAS > 7 AND YAS < 20)<br>
					UYRUK char(2) DEFAULT 'TC'<br>
					}<br>
				</fieldset><br>
				<p>Bir tabloya ya da sutuna sonradan constraint vermek için <b>ALTER</b> kullanılır.</p>
				<fieldset><p><br>
					ALTER TABLE CONSTRAINT_TABLOSU<br>
   					 MODIFY  UYRUK DEFAULT 'TC';br></p>
				</fieldset>
				<br>
				<fieldset><p><br>
					ALTER TABLE CONSTRAINT_TABLOSU<br>
					  ADD FOREIGN KEY (SINIF_NO)<br>
					  REFERENCES SINIF(ID);<br></p>
				</fieldset>
				<br>
				<p>YAS_CONST ismini verdiğimiz constrainti silelim.</p>
				<fieldset><p><br>
					ALTER TABLE CONSTRAINT_TABLOSU<br>
  					DROP CONSTRAINT YAS_CONST;<br></p>
				</fieldset>
			
			
<a href="anasayfa.php?git=ora_10" id="geri"><i><pre><code><< Alter | Add | Modify | DROP | LOCK</code></pre>
</i></a><a href="anasayfa.php?git=ora_12" id="ileri"><i><pre><code> Triggers>></code></pre></i></a>


</body>
</html>