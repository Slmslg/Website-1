<!DOCTYPE html>
<html>
<head>
	<title>Silme İşlemleri</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="oracle, DROP,TRUNCATE, DELETE, RENAME,COMMENT,oracle silme işlemleri"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="oracle, DROP,TRUNCATE, DELETE, RENAME,COMMENT,oracle silme işlemleri" />
	<meta name="google" content="oracle, DROP,TRUNCATE, DELETE, RENAME,COMMENT,oracle silme işlemleri" />
	<meta name="google-site-verification" content="oracle, DROP,TRUNCATE, DELETE, RENAME,COMMENT,oracle silme işlemleri" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
	<style type="text/css">
	.konular ul li{
		list-style: circle;
		display: block;
		color: black;
		float: left;
		clear: both;
		padding: 0; margin: 0;
		margin-bottom: 10px;
		margin-left: 10px;
		width: auto;
		text-align: justify;
		padding-right: 20px;
	}
	.konular ul{
		margin: 0;
		padding: 0;
	}
	.konular{
		margin-bottom: 10px;
		height: auto;
		margin-right: 10px;
	}
</style>
</head>
<body>
<h4>Oracle'da Silme İşlemleri</h4>
<p>
	Data Definition Language (DDL) tablo işlemlerinin yapıldığı komutlardan oluşur.CREATE, ALTER, DROP, RENAME, TRUNCATE, COMMENT DDL komutlarıdır.
	Daha önceden create komutunu görmüştük. Bu dersimizde ise DROP,TRUNCATE, DELETE, RENAME ve COMMENT komularını göreceğiz. DML komutu olan DELETE'i burada görmemizin nedeni TRUNCATE ve DROP ile karıştırılma olasılığıdır.
</p>
<div class="konular">
	<ul>
		<li><b>DELETE :</b> Tablodan kayıt ya da kayıtları silmek için kullanılır.Veriler silinse de tablespacete kapladığı boyut kalır.</li>
		<li><b>TRUNCATE :</b> Tablo ve boşluklar da dahil herşeyi siler.Fakat Delete komutunda olduğu gibi fiziksel olarak tablespaceteki boyutu ortadan kaldırmaz.Delete'ten farkı where komutu ile kullanılmamasıdır ve kesinlikle yapılan silme işi geri alınamaz.</li>
		<li><b>DROP : </b>Delete ve Truncate komutlarının aksine tüm veriyi fiziksel olarak siler.</li>
		<li><b>RENAME :</b> Bir nesneyi adlandırmak için kullanılır.</li>
		<li><b>COMMENT :</b> Oracle'da Dictionary denilen verilerin ne işe yaradığının tutlduğu bir tablo vardır. Bu komut ile verilere yorum ekleyebilirsiniz.</li>
	</ul>
</div><div class="clear"></div>
		<div><b>NOT : <i>HR Schema(USER) adıdır.</i></b><br></div>

			<h4>DELETE</h4>
			<p>Tabloyu silelim.</p>
			<fieldset>DELETE TABLE tablo_adi</fieldset>
			<p>id numarası 10000'den büyük olan verileri silelim.</p>
			<fieldset>DELETE TABLE HR WHERE id > 10000</fieldset>

			<h4>DROP</h4>
			<p>Veritabanını silmei işlemi.</p>
			<fieldset>DROP DATABASE veritabani_adi</fieldset>

			<h4>TRUNCATE</h4>
			<p>Customers tablosunu silme</p>
			<fieldset>TRUNCATE TABLE HR.Customers</fieldset>

			<h4>RENAME</h4>
			<p>Customers tablosunun ismini Musteriler ile değiştirdik.</p>
			<fieldset>RENAME Table Customers TO Musteriler</fieldset>
			<p>Sutun (Alan) adını değiştirmek.Musteriler tablosundaki İsim alanını Ad olarak değiştirelim.</p>
			<fieldset>RENAME COLUMN Musteriler.İsim TO Ad</fieldset>

			<h4>COMMET</h4>
			<p>Musteriler tablosunun id alanına bir açıklama ekleyelim.<br></p>
			<fieldset>COMMENT ON COLUMN Musteriler.id IS 'İsci numarasini belirlemede kullanilir.';</fieldset>
			<p>Tabloya yorum eklemek için ;<br></p>
			<fieldset>COMMENT ON TABLE Musteriler IS 'Musteri bilgilerini tutar.'</fieldset>
		<a href="anasayfa.php?git=ora_04" id="geri"><i><pre><code><< Select | Insert Into | Update</code></pre> 
		</i></a><a href="anasayfa.php?git=ora_06" id="ileri"><i><pre><code> SQL Fonksiyonları I>></code></pre></i></a>

	</body>
</html>