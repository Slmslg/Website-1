<!DOCTYPE html>
<html>
<head>
	<title>Kalıtım (Inheritance)</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Miras Alma | Kalıtım (Inheritance)</h4>
		<p>Tıpkı insanlardaki gibi kalıtım özellikleri de programlamada yerini almış durumda. Sınıflar sahip oldukları özellikleri anne-baba'nın çocuklarına aktardığı gibi aktarabilirler. Bir kaç sınıfta kullanacağımız bir metotumuz olsun ya da metotlarımız. Bunu sürekli yazmak yerine oluşturduğumuz sınıftan miras alarak kullanabiliriz. Böylelikle fazla kod yazmayı engellemiş oluruz.
		<b>Extends :</b> Bir sınıfın başka bir sınıfa ait özellikeri alması için kullanılan deyimdir. Miras almayı bu deyim sağlar.
		Bir örnekle açıklayalım.<br>
		Senaryomuz : <br>
		1.Mudur ve Isci sınıflarımız olacak.<br>
		2.Her ikisi de çalışan olduğu için Calisan isimli super sınıfımızın özelliklerini barındıracak.<br>
		3.Ad,soyad,yaş,id ve unvanı özelliklerine sahiptirler.<br>
		4.Sınıfımızı oluşturduğumuzda direkt olarak nesneden metot çağırmadan super sınıfımızdan bize bu bilgileri girmemizi isteyecek.<br>
		5.Son olarak da bilgileri yazıracak.<br></p>
		<b>Calisan.java</b>
		<div class="code">			
				package siniflar;<br>
				import java.util.Scanner;<br>
<br>
				public class Calisan {<br>
				    private String ad,soyad,unvan;<br>
				    private int id,yas;<br>
<br>
				    public Calisan() {<br>
				        System.out.println("Kullanici bilgileri alanı :");<br>
				        Scanner scann = new Scanner(System.in);<br>
				        System.out.println("Kullanici adını giriniz :");<br>
				        this.ad = scann.next();<br>
				        System.out.println("Kullanici soyadını giriniz :");<br>
				        this.soyad = scann.next();<br>
				        System.out.println("Kullanici yaşını giriniz :");<br>
				        this.yas = scann.nextInt();<br>
				        System.out.println("Kullanici id numarasını giriniz :");<br>
				        this.id = scann.nextInt();<br>
				    }<br>
<br>
				    @Override<br>
				    public String toString() {<br>
				        return  "ad=" + ad + ", soyad=" + soyad + ", id=" + id + ", yas=" + yas ;<br>
				    }<br>
				   <br>
				}<br>
		</div>
		<p>Burada da görüldüğü üzere Constructor oluşturduk ve bilgi girilmesi için bu metoda kodlarımızı yazdık.
		   <b>toString()</b> metodu yazdığımız değerleri döndüren metottur. Extends edildiği sınıfta çağırıldığında ekrana yazdırılabilirler. <b>@Override</b> ise ezme anlamına gelir. Alt sınıfta değerleri değiştirmek için kullanılır.		   
		</p>
		<b>Isci.java</b>
		<div class="code">
			package siniflar;<br>
		public class Isci <b>extends</b> Calisan {<br>
		    public Isci() {<br>
		        super();<br>
		        String unvan = "İşci";<br>
		        System.out.println(unvan+" BİLGİLERİ : \n"+toString());<br>
		    }		    <br>
		}<br>
		</div>
		<p>Extends işlemi yaparak miras alma işlemini gerçekleştirdik.Artık Calisan classının özelliklerini taşıyoruz ve kullanabiliriz.
		 Burada devreye kalıtım işlemi giriyor. Yazdırma işleminde toString metodunu çağırarak return edilen bilgileri ekrana yazıyoruz. 
		Burada önemli olan kısım <b>super()</b> metodu. Bu metot ile super classını çağırıp bilgilerin girilmesini sağlıyoruz. 
		Burada Isci classından farklı özellikler de ekleyebilirdik. Eğer böyle birşey isteseydik şu şekilde yapardık.</p>
		<b>Düzeltme : </b><br><b> Isci.java</b>
		<div class="code">
			package siniflar;<br>
			public class Isci extends Calisan {<br>
			    public Isci(String departman) {<br>
			        super();<br>
			        String unvan = "İşçi";<br>
			        System.out.println(unvan+" BİLGİLERİ : \n"+toString()+departman);<br>
			    }			    <br>
			}<br>
		</div>
		<b>Mudur.java</b>
		<div class="code">
			package siniflar;<br>
			public class Mudur extends Calisan{<br>
			    public Mudur(String il) {        <br>
			        super();   <br>
			        String unvan = "Mudur";<br>
			        System.out.println(unvan+" BİLGİLERİ : \n"+toString()+il);<br>
			    }    <br>
			}<br>
		</div>
		<b>Main Class'ımız </b>
		<div class="code">
			package siniflar;<br>
		public class Siniflar {	<br>	    
		    public static void main(String[] args) {<br>
		    Mudur mudur = new Mudur("İstanbul");<br>
		        System.out.println("***********************");<br>
		    Isci isci = new Isci("Network");<br>
		    }		    <br>
		}<br>
		</div>
		<p>Burada Siniflar.java main class'ımızda tek bir parametre gönderip Constructor metodumuzu çağırdık ve nesne türetürken hiçbir metodu main classında ağırmadık.
		İşte bu yapıcı metodun en önemli özelliğidir. 
		Main kısmında sadece classı çağırarak işlem yaptırdık</p>
		<br><b>Ekran Çıktısı : </b>
		<div class="cikti">
			run:<br>
				Kullanici bilgileri alanı :<br>
				Kullanici adını giriniz :<br>
				Selim<br>
				Kullanici soyadını giriniz :<br>
				Silgu<br>
				Kullanici yaşını giriniz :<br>
				25<br>
				Kullanici id numarasını giriniz :<br>
				120<br>
				Müdür BİLGİLERİ : <br>
				ad=Selim, soyad=Silgu, id=120, yas=25 İstanbul<br>
				***********************<br>
				Kullanici bilgileri alanı :<br>
				Kullanici adını giriniz :<br>
				Mehmet<br>
				Kullanici soyadını giriniz :<br>
				Kaya<br>
				Kullanici yaşını giriniz :<br>
				23<br>
				Kullanici id numarasını giriniz :<br>
				789<br>
				İşçi BİLGİLERİ : <br>
				ad=Mehmet, soyad=Kaya, id=789, yas=23Network<br>
				BUILD SUCCESSFUL (total time: 43 seconds)s<br>
		</div>
		
<a href="anasayfa.php?git=java_10" id="geri"><i><pre><code><< Nesneye Dayalı Programlamaya Giriş-Sınıflar (Class)</code></pre> 
</i></a><a href="anasayfa.php?git=java_12" id="ileri"><i><pre><code> Instance ve Nesne Oluşturma>></code></pre></i></a>


</body>
</html>