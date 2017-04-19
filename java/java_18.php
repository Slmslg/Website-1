<!DOCTYPE html>
<html>
<head>
	<title>Veri Tabanı İşlemleri JAVA-MSSQL Bağlantısı</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="Java Veri Tavanı Bağlantısı,Java,Veritabanı,MSSQL bağlantısı,
	Java Mssql bağlantısı,Java veritabanı bağlantısı,veritabanı işlemleri,javada veritabanı işlemleri"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="Java Veri Tavanı Bağlantısı,Java,Veritabanı,MSSQL bağlantısı,
	Java Mssql bağlantısı,Java veritabanı bağlantısı,veritabanı işlemleri,javada veritabanı işlemleri" />
	<meta name="google" content="Java Veri Tavanı Bağlantısı,Java,Veritabanı,MSSQL bağlantısı,
	Java Mssql bağlantısı,Java veritabanı bağlantısı,veritabanı işlemleri,javada veritabanı işlemleri" />
	<meta name="google-site-verification" content="Java Veri Tavanı Bağlantısı,Java,Veritabanı,MSSQL bağlantısı,
	Java Mssql bağlantısı,Java veritabanı bağlantısı,veritabanı işlemleri,javada veritabanı işlemleri" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<b>JAVA-MSSQL BAĞLANTISI</b>
		<p>
			Java Programlama dilinde belirli bir noktavya geldiğimize göre artık gerçek bir projede kullanılan çoğu konuyu görmüş olduk.
			Programlama dillerinin en önemli konusu kuşkusuz veri odaklı programlar. Yani Database kullanımı ve veriyi tutma üzerinedir.
			Bu dersimizde Java ile MSSQL bağlantısı yapacağız. Bunu için sisteminizde MS-SQL olması gerekir.
			MSSQL içerisinde ister kod ile ister görsel araçlardan yararlanarak bir veritabanı oluşturalım.
		</p>
			<div class="code">
				Create Table Ogr_Bilgileri<br>
				{<br>
					ad varchar(20),<br>
					soyad varchar(20),<br>
					tc_kimlik_no int NOT NULL,<br>
					yas int NOT NULL,<br>
					cinsiyet ntext,<br>
					PRIMARY KEY ()tc_kimlik_no<br>
 				}<br>
			</div>
			<p>SQL kısmına bu kodu çalıştırırsanız tablonuz oluşmuş olacaktır. Görsel olarak anlatmak gerekirse : <br></p>
			<img src="java/proje_img/create_database.png" alt="create"><br>
			<img src="java/proje_img/database2.png" alt="database işlemleri"><br>
			<img src="java/proje_img/database3.png" alt="database işlemleri"><br>
			<img src="java/proje_img/database4.png" alt="database işlemleri"><br>
			<p>
				Database oluşturduktan sonra isterseniz bir kaç veri ekleyebilirsiniz.
				 İsterseniz bunu aşağıdaki sorgu ile yapabilirsiniz.<br>
				<div class="code">
					Insert Into Ogr_Bilgileri(ad,soyad,tc_kimlik_no,yas,cinsiyet) VALUES ("Selim","Silgu",11111111111,18,"Erkek")
				</div>
			</p>
			<p>
			İstediğiniz kadar veri ekledikten sonra veri tabanı bağlantı işlemlerine başlayalım.
			Senaryo ile devam edelim ki karışmasın işlemlerimiz.<br>
			1.Bağlantımızı yapacağımız <b>Baglan.java</b> adında bir class oluşturalım.<br>
			2.Veri tabanına veri eklemek için <b>Ekle.java</b> classı, silme işlemi için <b>Sil.java</b> classı, tüm verileri göstermek için
			<b>VerileriGoster.java</b> classı, veriler üzerinde değişiklik için <b>Guncelle.java</b> classı ve üzerinde işlemleri yapacağımız main.java ya da benim de ismini verdiğim
			<b> MSSQL2012Connection.java</b> isimli class oluşturalım.<br>
			</p>
			<h4>Baglan.java</h4>
			<p>
			Java-MSSQL bağlantısı yapabilmek için jdbc connection olması gerekir. İndirmek için Tıklayınız.
				<a href="http://www.microsoft.com/en-us/download/details.aspx?id=11774" title="jdbc">JDBC</a><br>
				Bu <b>.jar</b> dosyasını indirdikten sonra projemize gelip aşağıdaki işlemleri yapalım.<br>
				Library kısmına gelip sağ tıklayalım ve <b>Add JAR/Folder</b> seçeneğine tıklayalım.<br>
				<img src="java/proje_img/jdbcEkleme.png" title="add jar"><br>
				Sonrasında indirdiğimiz <b>.jar</b> dosyasını seçelim ve <b>Open</b> diyelim.<br>
				<img src="java/proje_img/jdbcEkleme1.png" title="jar open"><br>
				Artık projemize başlayalım. Projede Bağlantı yapmak için <b>import java.sql.*;</b> sql dosyasını import edelim.
				Bağlantı hatası için try-catch bloguna kodlarımızı yazmamız gerekir.<br>
				Bir Connection oluşuruyoruz.<br>Connection baglan;<br>
				Baglan adındaki yapıcı metoda parametre olarak Connection değişkenini yazıyoruz.<br>
				Class.forName(); içerisine sql driverını tanıtıyoruz.<br>
				Bağlantının başarılı ve başarısız koşulunu yazıyoruz. Bir problem olduğunda try-catch bloğu hata fırlatacaktır.<br>

			</p>
			<div class="code">
				package mssql2012connection;<br>
					import java.sql.*;<br>
					public class Baglan {<br>
					    Connection baglan;<br>
					    public Baglan(Connection con)<br>
					    {<br>
					        try {<br>
					            Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");<br>
					            baglan = con;<br>
					            System.out.println("Database Bağlantısı Başarılı...");<br>
					        } catch (Exception e) {<br>
					            System.out.println("Bağlantıda bir problem oluştu.");<br>
					        }<br>
					    }<br>
					}<br>
			</div>
			<h4>Ekle.java</h4>
			<p>
				Ekle metoduna parametre olarak ; <br>
				bağlantı sorgusu, <br>
				ekleme SQL sorgusu,<br>
				ve Öğrenci bilgilerini parametre olarak alıyoruz.<br>
				Aldığımız bağlantı sorgusunu super classa yolluyoruz bağlantıyı kontrol ediyoruz.<br>
				PreparedStatement sınıfı ile sorguyu parametre olarak alıyoruz.<br>
				set ile PreparedStatement sınıfına eklenecek verileri gönderiyoruz. 
				Ekleme işlemini PreparedStatement sınıfında yaptıktan sonra verileri güncelliyoruz.<br>
				Veri tabanına artık verileri ekledik ekledikten sonraki uyarı mesajını gösteriyoruz.<br>
			</p>
			<div class="code">
				package mssql2012connection;<br>
					import java.sql.*;<br>
					import java.util.logging.Level;<br>
					import java.util.logging.Logger;<br>
					public class Ekle extends Baglan{	<br>				    
					    public Ekle(Connection con,String sorgu,String ad,String soyad,int tc,int yas,String cinsiyet) {<br>
					        super(con);<br>
					        try {<br>
					            PreparedStatement prepare = con.prepareStatement(sorgu);<br>
					            prepare.setString(1,ad);<br>
					            prepare.setString(2, soyad);<br>
					            prepare.setInt(3,tc);<br>
					            prepare.setInt(4,yas);<br>
					            prepare.setString(5,cinsiyet);<br>
					            prepare.executeUpdate();<br>
					             System.out.println("Ekleme işlemi başarılı.");<br>
					        } catch (SQLException ex) {<br>
					            Logger.getLogger(Ekle.class.getName()).log(Level.SEVERE, null, ex);<br>
					        }					           <br>
					    }   <br>
					}<br>
			</div>
			<h4>VerileriGoster.java</h4>
			<p>
				Şimdi Eklediğimiz verileri görelim.<br>
				Super Classımıza bağlantı sorgusunu gönderiyoruz.<br>
				ASC ile verilerin tc kimlik numarasına göre sıralmanması sorgusunu yazıyoruz ve goster değişkenine atama işlemi yapıyoruz.<br>
				Yeni bir Statement nesnesi oluşturuyoruz.<br>
				Sorgumuzu okuması için bir de ResulSet oluşturuğ sorgu parametremizi gönderiyoruz.<br>
				Veri tabanındaki tüm veriler için while döngüsüne sokuyoruz ve ekrana yazdırıyoruz.<br>
			</p>
			<div class="code">
				package mssql2012connection;<br>
				import java.sql.*;<br>
				import java.util.logging.Level;<br>
				import java.util.logging.Logger;<br>
				public class VerileriGoster extends Baglan {<br>
				    int i=1;<br>
				    public VerileriGoster(Connection con) {<br>
				        super(con);<br>
				        try {          <br>  
				            String goster = "SELECT * FROM Ogr_Bilgileri ORDER BY tc_kimlik_no ASC";<br>
				            Statement durum = con.createStatement();<br>
				            ResultSet result = durum.executeQuery(goster);<br>
				            while (result.next()) {   <br>
				                 System.out.println("------------------"+i+". Öğrenci--------------------------");<br>
				                System.out.println("Adı : "+result.getString(1) + <br>
				                        "\nSoyadı : " + result.getString(2)+<br>
				                        "\nTC Kimlik Numarası : "+result.getInt(3)+<br>
				                        "\nYaşı : "+result.getInt(4)+<br>
				                        "\nCinsiyeti : "+result.getString(5));<br>
				               i++;<br>
				            }<br>
				        } catch (SQLException ex) {<br>
				            Logger.getLogger(VerileriGoster.class.getName()).log(Level.SEVERE, null, ex);<br>
				        }<br>
				    }<br>
				}<br>
			</div>
			<h4>Sil.java</h4>
			<p>
				Super sınıfımıza bağlantı kontrolumüzü gönderdikten sonra silme sorgusunu yazıyoruz.<br>
				Statement durumunu null yaptıktan sonra istediğimiz veriyi Statement verisine parametre olarak gönderiğ siliyoruz.<br>
				Son olarak verileri güncelleyip bilgi mesajı veriyoruz.<br>
			</p>
			<div class="code">
						package mssql2012connection;<br>
							import java.sql.*;<br>
							import java.util.logging.Level;<br>
							import java.util.logging.Logger;<br>
							public class Sil extends Baglan {<br>
							   Statement silmeDurumu = null;<br>
							    public Sil(Connection con,int tc) {<br>
							        super(con);<br>
							        try {			<br>				           
							            String sil = "DELETE FROM Ogr_Bilgileri WHERE tc_kimlik_no='"+tc+"'";<br>
							            silmeDurumu = con.createStatement();<br>
							            silmeDurumu.executeUpdate(sil);<br>
							            System.out.println("Silme işlemi başarılı bir şekilde gerçekleşmiştir.");            <br>
							        } catch (SQLException ex) {<br>
							            Logger.getLogger(Sil.class.getName()).log(Level.SEVERE, null, ex);<br>
							        }<br>
							    }        <br>
							}<br>
			</div>
			<h4>Guncelle.java</h4>
			<p>
				Güncelle metoduna güncelleyeceğimiz verileri gönderip super classımıza bağlantıyı kontrol ettiriyoruz.<br>
				Statement oluşturup sorgumuzu yazıyoruz.<br>
				Statement durumuna sorguyu gönderip güncelleme işlemini execute ediyoruz.<br>
				Son olarak bilgi mesajını veriyoruz.<br>
			</p>
			<div class="code">
			package mssql2012connection;<br>
				import java.sql.*;<br>
				public class Guncelle extends Baglan{<br>
				    public Guncelle(Connection con,String ad,String soyad,int tc,int yas,String cinsiyet,int guncellenecekVeri) {<br>
				        super(con);<br>
				        try {<br>
				            Statement durum = con.createStatement();<br>
				            String guncelle = "UPDATE Ogr_Bilgileri SET ad='"+ad+"',soyad='"+soyad+"',"<br>
				                    + "tc_kimlik_no='"+tc+"',yas='"+yas+"',cinsiyet='"+cinsiyet+"' WHERE tc_kimlik_no ='"+guncellenecekVeri+"'";<br>
				            durum.execute(guncelle);<br>
				            System.out.println("Update işlemi başarılı");<br>
				        } catch (Exception e) {<br>
				        }<br>
				    }<br>
				 }<br>
			</div>
			<h4>MSSQLConnection.java (Main Class)</h4>
			<p>
				Veri Ekleme değişkeni ve Statement nesnemizi oluşturuyoruz.<br>
				Eklemek istediğimiz değişkenleri girip ekleme sorgusuna gönderiyoruz.<br>
				Bu sorguyu Ekle.java sınıfına göndermeden önce <b>con</b> isimli bağlantı sorgusu oluşturmak gerekir.<br>
				Database kısmına veri tabanı ismini yani Ogrenci yazdık.<br>
				sqlserver kısmına ip numarası yazılır ve port olarak 1433 kullanılır. Bu port MSSQL içindir.<br>
				User default olarak sa eğer değiştirmediyseniz.<br>
				Password ise verdiğiniz şifre yazılır.<br>
				Bağlantı super classımıza bağlanmayı unutmayalım.<br>

			</p>
			<div class="code">
				package mssql2012connection;<br>
					import java.sql.*;<br>
					public class MSSQL2012Connection {<br>
					public static String ekleSorgusu;<br>
					public static Statement stmt;<br>
					public static Connection con = null;<br>
					    public static void main(String[] args) {<br>
					        System.out.println("Veri Tabanı Bağlantı işlemleri>>\n");<br>
					        try {<br>
					             con = DriverManager.getConnection("jdbc:sqlserver://127.0.0.1:1433;database=Ogrenci;user=sa;password=123456");<br>
					        } catch (Exception e) {<br>
					        }   <br>
					        String ad = "Kemal";<br>
					        String soyad = "Sesigüzel";<br>
					        int tc = 888888888;<br>
					        int yas = 30;<br>
					        String cinsiyet = "Erkek";<br>
					        ekleSorgusu ="INSERT INTO  Ogr_Bilgileri (ad,soyad,tc_kimlik_no,yas,cinsiyet) VALUES (?,?,?,?,?) ";<br>
					          Baglan baglantıKur = new Baglan(con);<br>
					          Sil veriSil = new Sil(con, 333333333); <br>
					          Ekle ekle = new Ekle(con, ekleSorgusu, "Boli", "Bolingoli", 1234569872, 23, "Erkek");<br>
					          Guncelle guncel = new Guncelle(con, "Ali", "Gün", 444444444, 22, "Erkek", 444444444);    <br>      
					          VerileriGoster kayitlariGoster = new VerileriGoster(con);<br>
					    }   <br>
					}<br>
			</div>
			<h4>Oluşturduğumuz Database'in öncesindeki görünümü :</h4>			
			<img src="java/proje_img/dbOncesi.png" title="db öncesi"><br>
			<p>
				Şimdi yaptığımız işlemleri çalıştıralım.<br>
			</p>
			<h4>Ekran Çıktısı :</h4>
			<div class="cikti">
				run:<br>
					Veri Tabanı Bağlantı işlemleri>><br>
<br>
					Database Bağlantısı Başarılı...<br>
					Database Bağlantısı Başarılı...<br>
					Silme işlemi başarılı bir şekilde gerçekleşmiştir.<br>
					Database Bağlantısı Başarılı...<br>
					Ekleme işlemi başarılı.<br>
					Database Bağlantısı Başarılı...<br>
					Update işlemi başarılı<br>
					Database Bağlantısı Başarılı...<br>
					------------------1. Öğrenci--------------------------<br>
					Adı : selim               <br>
					Soyadı : silgu               <br>
					TC Kimlik Numarası : 111111111<br>
					Yaşı : 25<br>
					Cinsiyeti : Erkek<br>
					------------------2. Öğrenci--------------------------<br>
					Adı : Ozlem               <br>
					Soyadı : Ok                  <br>
					TC Kimlik Numarası : 222222222<br>
					Yaşı : 20<br>
					Cinsiyeti : Bayan<br>
					------------------3. Öğrenci--------------------------<br>
					Adı : Ali                 <br>
					Soyadı : Gün              <br>
					TC Kimlik Numarası : 444444444<br>
					Yaşı : 22<br>
					Cinsiyeti : Erkek<br>
					------------------4. Öğrenci--------------------------<br>
					Adı : Murat               <br>
					Soyadı : Ayvalı              <br>
					TC Kimlik Numarası : 555555555<br>
					Yaşı : 22<br>
					Cinsiyeti : Erkek<br>
					------------------5. Öğrenci--------------------------<br>
					Adı : Kazım               <br>
					Soyadı : Şimsek              <br>
					TC Kimlik Numarası : 666666666<br>
					Yaşı : 26<br>
					Cinsiyeti : Erkek<br>
					------------------6. Öğrenci--------------------------<br>
					Adı : Gulsum              <br>
					Soyadı : Silgu               <br>
					TC Kimlik Numarası : 777777777<br>
					Yaşı : 7<br>
					Cinsiyeti : Kız<br>
					------------------7. Öğrenci--------------------------<br>
					Adı : Boli                <br>
					Soyadı : Bolingoli           <br>
					TC Kimlik Numarası : 1234569872<br>
					Yaşı : 23<br>
					Cinsiyeti : Erkek<br>
					BUILD SUCCESSFUL (total time: 6 seconds)<br>
			</div>
			<h4>İşlemler Sonrası Database :</h4>
			<img src="java/proje_img/dbSonrasi.png" title="db sonrası"><br>
<a href="anasayfa.php?git=java_17" id="geri"><i><pre><code><< Kapsülleme (Encapsulation)</code></pre> 
</i></a><a href="anasayfa.php?git=java" id="ileri"><i><pre><code>Java Ders İçeriği>></code></pre></i></a>


</body>
</html>