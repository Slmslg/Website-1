<!DOCTYPE html>
<html>
<head>
	<title>DML (Data Manipulating Language)</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="oracle,select,insert into,update,delete,sql,dml,dml komutları"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,select,insert into,update,delete,sql" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,select,insert into,update,delete,sql" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,oracle,select,insert into,update,delete,sql" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
	
</head>
<body>
<p>
<h4>DML (Data Manipulation Language)</h4> 
<p>
Veriyi kullanıp için kullanılan sorgulardır.
Select, Insert, Update, Delete ve Merge Komutlarından oluşur.
</p>
</p>

<h4>SELECT</h4>
<p> Seçme sorguları için kullanılır.</p></b>
<fieldset>
Select * from Table_Name ;</b>
Select ad, soyad from tablo ;</b>
</fieldset>
<p>şeklinde kullanılır.</b>
* ile tüm tablo alanlarını seçeriz.</p>

<h4>Insert Into</h4>
<p> Tabloya veri eklemek için kullanılır.</p>
<fieldset>
Insert Into HR values ('Selim','Silgu');
</fieldset>
<p>
şeklinde alan adlarına sırasıyla verileri ekleyebildiğimiz gibi istediğimiz alanlara veri eklemek istersek :
<p>
<fieldset>
Insert Into HR (ad,soyad) values ('Selim','Silgu');
</fieldset>
<p>şeklinde kullabiliriz.</p>

<h4>UPDATE</h4>
<p>
Varolan veriler üzerinde değişiklik yapmak için kullanılır.
</p>
<fieldset>
Update bilgiler_tablosu Set adi = 'Şemsi',soyad='Yıldız';
</fieldset>
<p>
şeklinde kullanılır.</p>

<h4>Delete</h4> 
<p>Veri yada tablo silmek için kullanılır. Delete sorgusuna daha sonra ayrıntılı bir şekilde değineceğiz.</p>
<fieldset>Delete from table_name;</fieldset>

<a href="anasayfa.php?git=ora_03" id="geri"><i><pre><code><< Tablespace | Grant (Privigeles)</code></pre>
</i></a><a href="anasayfa.php?git=ora_05" id="ileri"><i><pre><code> Delete | Truncate | Drop>></code></pre></i></a>

</body>
</html>
