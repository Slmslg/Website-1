<!DOCTYPE html>
<html>
<head>
	<title>ORACLE ROLE</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,ORACLE ROLE,Role "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,IORACLE ROLE,Role" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,ORACLE ROLE,Role" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,ORACLE ROLE,Role" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/oracle.css">
	<style type="text/css">
	fieldset{
		margin: 20px;
	}
	</style>
</head>
<body>
<p>
	<h4>ROLE KULLANIMI</h4>
	<p>
	Oracle veritabanında çeşitli izinleri,rolleri bir değişken gibi atayıp istediğiniz yerde kullanabilirsiniz.
	Birçok kez yazılmasını engellersiniz.
	Bir user'a belirlediğiniz rolleri bu şekilde verebilirsiniz.
	</p>
	<fieldset>
		CREATE ROLE Role_Name
		IDENTIFIED BY Password;
	</fieldset>
	Şifreyi ayarlamak için :
	<fieldset>
		SET ROLE Role_Name IDENTIFIED BY NewPassword;
	</fieldset>
	Grant ile izin verme rolü oluşturma.
	<fieldset>
		GRANT select, insert, update, delete ON suppliers TO Role_Name;
	</fieldset>
	Tüm yetkileri bir role'de toplamak.
	<fieldset>
		GRANT all ON suppliers TO All_Role;
	</fieldset>
	Role Geri Alma
	<fieldset>
		REVOKE DELETE ON suppliers FROM Role_Name;
	</fieldset>
	Role'ü iptal etmek için süslü parantezdeki işlemlerden yazarak geri alabilirsiniz.
	<fieldset>
		REVOKE {SELECT,INSERT,UPDATE,REFERENCES,ALTER,INDEX,ALL} ON suppliers FROM Role_Name;
	</fieldset>
	Tüm role'leri kaldırmak için ise :
	<fieldset>
		REVOKE ALL ON suppliers FROM Role_Name;
	</fieldset>
	<h4>ROLE'ü USER'a ATAMAK</h4>
	Oluşturduğumuz rolu kullanıcıya izin olarak verelim.
	<fieldset>
		GRANT Role_Name TO USER_NAME;
	</fieldset>
	Default Role Oluşturma
	<fieldset>
		ALTER USER User_Name
			DEFAULT ROLE
			Role_Name;
	</fieldset>	
	<fieldset>
		ALTER USER User_Name
			DEFAULT ROLE
			ALL;
	</fieldset>
	Ve son olarak oluşturduğumuz Role'ü silelim.
	<fieldset>
		DROP ROLE Role_Name;
	</fieldset>
		<a href="anasayfa.php?git=ora_13" id="geri"><i><pre><code><< Index | Sequence</code></pre>
		</i></a><a href="anasayfa.php?git=ora_15" id="ileri"><i><pre><code> Oracle Uygulaması>></code></pre></i></a>

</body>
</html>