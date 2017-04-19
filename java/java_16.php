<!DOCTYPE html>
<html>
<head>
	<title>Polymorphism</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,Polymorphism,java Polymorphism,Çok Biçimlilik,java çok biçimlilik "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Polymorphism,java Polymorphism,Çok Biçimlilik,java çok biçimlilik" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,Polymorphism,java Polymorphism,Çok Biçimlilik,java çok biçimlilik" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Polymorphism,java Polymorphism,Çok Biçimlilik,java çok biçimlilik" />

			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Polymorphism (Çok Biçimlilik)</h4>	
		<p>
		OOP'nin belkide anlaşılması en zor konularından biri muhtemelen Polymorphism. Kısaca şöyle diyelim.
		Bir nesneyi parametre olarak gönderebildiğimiz yapılara çok biçimlilik denir. Heralde en basit anlatımıyla bu. 
		Yine bir senaryo şeklinde gidelim.<br><br>
		1.BursSorgula isminde super classımız olsun.<br>
		2.OgrenciBilgileri adındaki alt classımız da super classı extends edip sorgulama işlemini yapsın.<br>
		3.Main classın içerisinde ekrana bursu kazanıp kazanmadığını gösteren bir metota oluşturduğumuz doğruluk nesnemizi parametre olarak yolayalım.<br>
		</p>
		<h4>BursSorgula.java</h4>
		<div class="code">
			package polimorphismPackage;<br>
				public class BursSorgula {<br>
				    String adSoyad;<br>
				    int id;<br>
				    boolean dogrula = false;<br>
				   public boolean sorgula()<br>
				   {<br>
				       this.dogrula = dogrula;<br>
				      return dogrula;<br>
				   }				   <br>
				}<br>
		</div>	
		<h4>OgrenciBilgileri</h4>
		<div class="code">			
				package polimorphismPackage;<br>
				public class OgrenciBilgileri extends BursSorgula{<br><br>
				    private String[] burslular = {"Selim Silgu","Boli Bolingoli","Şahin Şahinoğlu","Zikri Fikir","Fikri Zikir","Osman Küçükosman"};<br>
				   private int[] burslularNo = {100,101,102,103,104,105};<br>
				    public OgrenciBilgileri(String adSoyad,int okulNo) {<br><br>
				        this.adSoyad =  adSoyad;<br>
				        this.id = okulNo;<br>
				    }   <br><br>
				    @Override<br>
				    public boolean sorgula() {<br><br>
				        for (int i = 0; i < 6; i++) {<br>
				            if (this.adSoyad == burslular[i] && this.id == burslularNo[i]) {<br>
				                dogrula = true;<br>
				            }<br>
				        }<br>
				                if (this.dogrula==true) {<br>
				            System.out.println("Tebrikler. Burs Kazandınız...");<br>
				        }<br>
				        else<br>
				        {<br>
				            System.out.println("Üzgünüz. Burs Kazanamadınız..");<br>
				        }<br>
				        return dogrula; <br>
				    }  <br>
				}<br>
		</div>	
		<p>Burada burs kazanan ve öğrenci numarasını içeren diziler oluşturduk. Parametre olarak bu bilgileri alan Constructor oluşturduk.
		Extends ettiğimiz super classın metodunda koşulu belirledik. Index numaralarına göre dizilerde varsa dogrulamayı true yoksa false yaptık.
		</p>
		<h4>Poly.java Main Classımız</h4>
		<div class="code">
			package polimorphismPackage;  <br> 
				public class Poly { <br>
				    public static void yazdir(<b>BursSorgula sorgula</b>)<br>
				    {<br>
				        System.out.println("Sonuc : "+sorgula.sorgula());<br>
				    }<br>
				    public static void main(String[] args) {<br>
				        OgrenciBilgileri sorgula = new OgrenciBilgileri("Boli Bolingoli",101);<br>
				        yazdir(sorgula);        <br>
				    }<br>
				}<br>
		</div>
		<p>Oluşturduğumuz nesneden gelen veriyi değilde direkt olarak nesneyi parametre olarak kullandık.
		 İşte bu bir polymorphism örneğidir.
		</p>
		<h4>Ekran Çıktısı</h4>
		<div class="cikti">
			run:<br>
				Tebrikler. Burs Kazandınız...<br>
				Sonuc : true<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>
		<b>Dizimizde olmaya "Ali Varan" 122 nolu öğrenciyi parametre olarak gönderdiğimizde ise Ekran Çıktısı</b>
		<div class="cikti">
			run:<br>
				Üzgünüz. Burs Kazanamadınız...<br>
				Sonuc : false<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
		</div>

<a href="anasayfa.php?git=java_15" id="geri"><i><pre><code><< Arayüz Oluşturma (Interface)</code></pre>
 </i></a><a href="anasayfa.php?git=java_17" id="ileri"><i><pre><code> Kapsülleme (Encapsulation)>></code></pre></i></a>


</body>
</html>