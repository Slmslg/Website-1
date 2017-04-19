<!DOCTYPE html>
<html>
<head>
	<title>Tablespace</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,oracle,tablespace,oracle tablespace "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,oracle,tablespace,oracle tablespace" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,oracle,tablespace,oracle tablespace" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,oracle,tablespace,oracle tablespace" />
		<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
		<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
		<link rel="stylesheet" type="text/css" href="css/oracle.css">
	</head>
<body><p>
		<h4>Tablespace Nedir ?</h4>
		<p>
		Bu yazıyı çok fazla uzatabilirim fakat yazıya boğup anlamayı zorlaştırmayı sevmiyorum çünkü bu blogun amacı kısa şekilde birşeyler öğretmek ya da bilgi vermek<br>
		Oracle veritabanını fiziksel bir şekilde datafile şeklinde bir dosya ile saklar. 
		Bunun mantıksal ismi ise <b>tablespace</b>'dir. <br>
		Tablespace mantığı segment denilen küçük tablolar şeklinde düşünebileceğiniz kısımlardan meydana gelir. 
		<br><i><b>DataBlocks >> Extends Segment >> DataFile >> Tablespace</b></i><br>
		şeklinde büyükten küçüğe doğru sıralayabiliriz. Bu bu alanları yönetebiliriz. Tablespace ile böylelikle objeleri tutarak çeşitli alanlarda bizlere yardımcı olur. Yedek almak yerine tablespace'i kurtarmak, offline yapıp ulaşılmasını engellemek ve read only yapıp sadece okunma işleminin yapılması gibi işlemleri yapabiliriz.<br>
		</p>
		<h4>Tablespace Oluşturmak</h4>
		<p>Daha önce oluşturduğumuz userlar tablespace olmadan fiziksel olarak saklanamayacakları için oluşturduğumuz tablespace'i default değer olarak kullanıya atamamız gerekir.</p>
		<fieldset>
			<legend>Create Tablespace</legend>
			<p>
			***************************************<br>
			      CREATE TABLESPACE TABLESPACE_NAME<br>
			      DATAFILE 'datafile_name.dbf' <br>
			      SIZE 80M AUTOEXTEND ON NEXT 5M MAXSIZE UNLIMITED<br>
			      EXTENT MANAGEMENT LOCAL UNIFORM SIZE 128K<br>
			      SEGMENT SPACE MANAGEMENT<br>
			      AUTO<br>
			      ONLINE ;<br>
			</p>
		</fieldset>
		<p>
		<br>Yukarıdakileri tek açıklamak gerekir. tablespace oluşturmak için yukarıda yazılanların hepsinin yazılması zorunlu değildir.<br>
		<b>Datafile :</b>Fiziksel olarak oluşturulan database'in saklanacağı dosyanın ismi verilir.<br>
		<b>Size :</b>Tablespace boyutunu sınırlamamıza yarar. <i>Autoextend</i> ile genişleyen bir tablespace oluşturabiliriz. Örnekte limitsiz, boyutu aştıktan 5M'ta bir artan tablespace oluşturmuş olduk.<br>
		<b>Extent : </b>ile extent yönetiminde boyutlarını local olarak kendimiz belirleyebiliriz.<br>
		<b>Segment :</b>Aynı şekilde segment boyutunu belirlememizi sağladı. Biz burada otomatik olarak artmasını sağlamış olduk.<br>
		<b>Online :</b>Tablespace erişiminin açık olduğunu gösterir.<br>
		<i><b>Tablespace ile ilgili bigilere ulaşmak için :</b></i><br><br>
		1) DBA_TABLESPACES<br>
		2) DBA_DATA_FİLES<br>
		3) DBA_TEMP_FİLES<br>
		4) V$TABLESPACE<br>
		</p>
		<p>Bunları görmek için basit bir sorgu yazabiliriz.</p>
		<fieldset>Select * from DBA_DATA_FILES</fieldset>
		<p>
			Eğer bir kullanıcının oluşturduğunuz bu tablespace'i kullanmasını isterseniz : <br>
			<fieldset>
				CREATE USER kullanici
				IDENTIFIED BY sifre
				DEFAULT TABLESPACE TABLESPACE_NAME
			</fieldset>
			şeklinde kullanabilirsiniz.<br>
		</p>
		<p>Tablespace'e sınırsız yetki vermek için : 
		<fieldset>
			GRANT UNLIMITED TABLESPACE TO HR;<br>
		</fieldset>
		</p>
		<p>Madem komutlar arasında <b>Select</b> geçti artık SQL sorgularına giriş yapabiliriz. Oracle ile ilgili veritabanı işlemlerimiz tamamlandı.Şimdi de geldi sıra veriler arasında işlemlere. Bir sonraki dersimiz Select sorgusu olacak.</p>
</p>
		<a href="anasayfa.php?git=ora_02" id="geri"><i><pre><code><< User (Schema) Oluşturma</code></pre>
		</i></a><a href="anasayfa.php?git=ora_04" id="ileri"><i><pre><code> Select | Insert Into | Update>></code></pre></i></a>
</body>
</html>