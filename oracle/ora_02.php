<!DOCTYPE html>
<html>
<head>
	<title>User (Schema) Oluşturma İşlemleri</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="Oracle Kurulumu "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Oracle User (Schema) Oluşturma İşlemleri" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle User (Schema) Oluşturma İşlemleri" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Oracle User (Schema) Oluşturma İşlemleri" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<style type="text/css">
	.konular ul li{
		list-style: circle;
		display: block;
		color: black;
		float: center;
		clear: both;
		padding: 0; margin: 0;
		text-align: left;
		margin-bottom: 10px;
		margin-left: 10px;
	}
	.konular ul{
		margin: 0;
		padding: 0;
	}
	.konular{
		margin-bottom: 10px;
		height: auto;
		margin-left: 100px;
	}
</style>
<body><p>
		<h4>User (Schema) Oluşturma</h4>
			
			<p>
			Kullanıcı oluşturmak için öncelikle oluşturma işlemini yapan <b>Create</b> kullanılır ve user adı yazılır.<br>
			User adının hemen sonrasında ise şifre yazılmalıdır.
			</p>
			<fieldset>
			<legend>User (Schema) Oluşturma</legend>			
			CREATE USER "schema_adi"<br>
			IDENTIFIED BY sifre
			</fieldset>

			<h4>Kullanıcı Yetkileri</h4>
			<p>
			Fakat kullanıcı bu şekliyle oluşturulduğunda her işlemi yapamazlar. Bunu için çeşitli izinler verilmesi gerekir. Bunun için <b>System Privileges</b> : Veritabanına ulaşılma ve <b>DLL (Database Definition Language) : </b>Create,Alter,Drop işlem izinlerinin verilmesi gerekir.<br>
			Peki bu işlemler ya da izinler nelerdir ? diye sorarsanız, Oracle veritabanında bir çok izin vardır. Örnek olarak verecek olursak insert (ekleme),delete(silme) gibi yetkileri verebiliriz.
			Verilecek olan yetkileri görmek için <b>select name from system_privilege_map</b> sorgusunu kullanabilirsiniz.<br>
			</p>
			<img src="oracle_img/yetkiler.png"><br>
			<h4>System Privileges</h4>
			<p>
			Yetkiler <b>GRANT</b> sorgusuyla verilir.<br>
			Oracle 11g'ye bağlanmak için <b>Session</b> izni vermeliyiz. Aşağıda HR kullanıcısına bağlantı iznini veriyoruz.<br>
			</p>
			<fieldset>			
				<legend>System Privileges</legend>
				GRANT CREATE CREATE SESSION TO HR; <br>
			</fieldset>
			<p>Çeşitli tablo oluşturmak,tablo oluşturmak gibi yetkileri de aşağıdaki gibi verebiliriz.<br></p>
			<fieldset>
				GRANT CREATE VIEW,CREATE SEQUENCE,CREATE SESSION TO HR;
			</fieldset>
			<p>Fakat hala bazı yetkileri tam olarak vermiş değiliz. Örneğin tablo ekleme sorgusunuz eklemeye çalışırsak</p>
			<div class="hata"><i>
			SQL Error: ORA-01031: insufficient privileges<br>
			01031. 00000 – “insufficient privileges”<br></i></div>
			<p>Hatasi aliriz. Bunun nedeni yeni bir tablo oluşturmak için bir yetkimizin olmaması.<br></p>
			<fieldset>
				<legend>Create Table</legend>
				GRANT CREATE TABLE TO HR;<br>
			</fieldset>
			<p>
			Veritabanları tablolardan oluşur. Veriler tablo şeklinde veritabanlarında tutulur. Bu neden oluşturduğumuz user'a tablo eklememiz gerekir. Tablo eklerken içerisine alan adlarını da yazarız. ve bu alanların veritiplerini de belirtmeliyiz. Tablo oluşturmadan önce veritiplerinden bahsedelim.<br>
			Alanlara girdiğimiz verilerin sayı mı,kelime mi yoksa tarih mi kaç karakterle sınırlandırılmalı gibi işlemleri yapmamız gerekir. Oracle'daki en çok kullanılan veri türlerinden bazılarını ele alalım.Yeri geldiğinde detaylı bilgi edineceğiz.
			</p>
			<fieldset><legend>En Çok Kullanılan Veri Türleri</legend>
			<p> *********************************************************************************<br>
			<b> varchar :</b> Metin girmek istediğimizde kullandığımız veri türüdür. Chardan farkı karakterin sonuna boşluk eklememesidir. Her karakter için 1 byte yer kaplar.<br>
			<b>varchar2 :</b> Oracle'ın önerdiği veri türüdür. varchar'dan farkı null değerlere boşluk atamasıdır. 
			Bu nedenle yapılan işlemlerde hata alma olasılığını azaltabilirsiniz.<br>
			<b>number :</b> Ondalıklı sayılar için kullanılır.<br>
			<b>date :</b> Tarih ve zaman işlemleri için kullanılır.
			 to_date() fonsyonu ile veri giriş şeklini kendiniz belirleyebilirsiniz.<br>
			TO_DATE('15.09.2015','dd.mm.yyyy') ; <br>
			şeklinde bir tarih girişi isteyebilirsiniz.<br>
			<b>char :</b> Sabit uzunluklu karakter setleri için kullanılır. 
			Örnek ; char(2) = 'SE' şeklinde karakterler alır.1 byte yer kaplar.<br>
			<b>decimal :</b>Ondalıklı sayıları tutar.<br>
			<b>Real :</b>Float veri tipine karşılık gelir.<br>
			<b>int :</b>4 byte veri kaplayan sayı tipindeki veri türüdür.<br>
			<b>Integer :</b>ANSI standartlarındaki sayı veri türüdür. Oracle'ın önerdiği veri türüdür.
			 number(38)'e karşılık gelir.<br>
			</p>
			</fieldset>
			<br><p>Veri türlerinden de bilgi edindiğimize göre geçelim table oluşturmaya.<br></p>
			<fieldset>
				<legend>New Table</legend>
				CREATE TABLE table_name{
				ad varchar2(30),
				soyad varchar(30),
				yas number(2),
				dogumTarihi date
				}
			</fieldset>
			<p>Yukarıdaki gibi tablo ve alanları belirleyebilirsiniz.<br></p>
			<h4>Object Privileges</h4>
			<p>Nesne yetkileri vermek için hangi sorgunun ne işe yaradığını görelim.<br></p>
			<div class="konular">
			<ul>
				<li><b>SELECT :</b> Tablo, View, Sequence verilerinin sorgulanması içindir.</li>
				<li><b>INSERT :</b> Tablo veya View ‘e kayıt ekleme iznidir.</li>
				<li><b>UPDATE :</b> Tablo veya View modifiye etme iznidir için kullanılır.</li>
				<li><b>DELETE :</b> Tablo veya View 'de kayıt silme izni için kullanılır.</li>
				<li><b>INDEX :</b> Index oluşturma izni için kullanılır.</li>
				<li><b>ALTER :</b> Bir tablo veya sequence üzerinde değişiklik yapılması iznidir.</li>
				<li><b>REFERENCES :</b> Foreign key izni için kullanılır.</li>
			</ul>
			</div>
			<div class="clear"></div>
			<br><fieldset>
				<legend>Genel Kullanım</legend>
				<p>
				*****************************************************<br>
				GRANT SELECT, INSERT, UPDATE, DELETE, INDEX, ALTER, REFERANCE<br>
				ON Schema_Adı.Table_Adı<br>
				TO User_Adı;<br>
				</p>
			</fieldset>
			<p>Burada istediğimiz tabloya tüm yetkileri verdik. Eğer ki istediğimiz bir alan için sınırlama koysaydık.<br></p>
			<fieldset>
			<p>
			********************************<br>
				GRANT Select,Update(ad,soyad)<br>
				ON HR.Bilgiler<br>
				TO HR; <br>
				</p>
			</fieldset>
			<br><p>Şeklinde kullanırdık. Tüm tablolara aynı yetkileri vermek için ise ;</p>
			<fieldset>
				GRANT INSERT,SELECT ANY TABLE TO HR;
			</fieldset>
			<br> <p>gibi tüm tablolara insert ve select yetkilerini verebilirdik.<br>
			Eğer ki kullanıcıya tüm yetkileri vermek isterseniz <b>ALL</b> kelimesini kullanırız. </p>
			<br><fieldset>
			<p>
			******************<br>
				GRANT ALL <br>
				ON Schema_Adı.Tablo_Adı<br>
				TO username<br>
				WITH GRANT OPTION;<br>
				</p>
			</fieldset>
			<p>Eğer kullanıcı üzerinden bağlantı yaptıysanız tablo öncesinde schema adını yazmanıza gerek yoktur.<br></p>
			<fieldset>
			<p>
				GRANT ALL <br>
				ON Tablo_Adı<br>
				TO username<br>
				WITH GRANT OPTION;<br>
			</p>
			</fieldset>
</p>
	<a href="anasayfa.php?git=ora_01" id="geri"><i><pre><code><< Oracle ve VmWare Kurulumları</code></pre> 
	</i></a><a href="anasayfa.php?git=ora_03" id="ileri"><i><pre><code> Tablespace | Grant (Privigeles)>></code></pre></i></a>			
</body>
</html>