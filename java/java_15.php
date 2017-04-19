<!DOCTYPE html>
<html>
<head>
	<title>Interface</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,Interface Sınıflar,java Interface Sınıflar,Interface "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Interface Sınıflar,java Interface Sınıflar,Interface" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java Abstract Sınıflar,java Interface Sınıflar,Interface" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Interface Sınıflar,java Interface,Interface" />

			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Interface (Arayüz)</h4>		
		<p>
			Şuana kadar hep bir sınıfa birden fazla kalıtım uygulamadık.
			 Yani birden fazla sınıfı super class olarak kullanamayıp farklı işlevlerdeki metotları kullanamadık. 
			 Java gibi programlama dillerinde birden fazla sınıfı kullanmak amacıyla interfaceler kullanılır.
			  Interfaceler kullanılırken extends değil de <b>Implement</b> edilirler. Sadece abstract metotlar kullanılabilir.
		Yine bir senaryo ile anlatıma devam edelim.<br>
		1.Arayuz isminde main classımız,Interface1 ve Interface2 isimli iki tane interface'imiz ve bir de Hizmet isminde classımız olsun.
	<br>2.İlk Interface'imizde kullanılabilecek paketlerin olduğu, ikincisinde ise operatörlerin sorgulandığı abstract metotlar bulunsun.<br>   3.Hizmet Class'ında tüm bu metotları birleştirip operatör ve yaşa göre kullanılabilecek paketleri sorgulatalım.<br>
		4.Son olarak main classında yazdıralım.<br>
		</p>
		<h4>Interface1.java</h4>
		<div class="code">
			public interface Interface1 {<br>
			    public abstract void bilgiler(String adSoyad,int yas);<br>
			    public void kullanacagiPaketler(int yas);    <br>
			}<br>
		</div>
		<p>Interfaceler içerisindeki tüm metotlar abstracttır dediğimize göre abstract yazmamıza gerek yoktur fakat yazınca da bir sıkıntı olmayacaktır. Interface yazılarak arayüzler belirtilir.</p>
		<h4>Interface2.java</h4>
		<div class="code">
			   public interface Interface2 {<br>
			    void operator(String telNo);<br>
					}<br>
		</div>
		<h4>Hizmet.java</h4>
		<p>Paketler ve Operatörleri bir dizide topladık. Interface abstract metotlarının içine kodlarımızı yazdık. Fakat buradaki esas nokta Interface kullanırken <b>implements</b> deyimini kullanmamız ve iki inerface kullanmamız durumunda "," ile ayırmamızdır.
		Gerekli kontroller sonucu fonksiyonlar hazır.</p>
		<div class="code">							
				public class Hizmet <b>implements</b> Interface1,Interface2{<br>
				        String adSoyad,telNo;<br>
				        int yas;<br>
				       private String [] operatorler = {"Avea","Turkcell","Vodafone"};<br>
				       private String [] paketler = {"Bal Paketi","Çilek Paketi","Aşk Paketi","Aile Paketi","Yurtdışı Paketi","Yurtiçi Paketi"};<br>
<br>
				    @Override<br>
				    public void bilgiler(String adSoyad, int yas) {<br>
				     this.adSoyad = adSoyad;<br>
				     this.yas = yas;<br>
				        System.out.println("AD - SOYAD : "+this.adSoyad+"\nYAŞ : "+this.yas);<br>
				    }<br>
<br>
				    @Override<br>
				    public void kullanacagiPaketler(int yas) {<br>
				        System.out.println("Kullanabileceği Paketler : \n");<br>
				        if (yas < 18) {<br>
				            for (int i = 0; i < 3; i++) {<br>
				                System.out.println(paketler[i]+"\n");<br>
				            }<br>
				        }<br>
				        else if(yas >= 18)<br>
				        {<br>
				            for (int i = 3; i < 6; i++) {<br>
				                System.out.println(paketler[i]+"\n");<br>
				            }<br>
				        }<br>
				    }<br>
				    @Override<br>
				    public void operator(String telNo) {<br>
				        this.telNo = telNo;<br>
				        <br>
				        if (this.telNo.startsWith("050")) {<br>
				            System.out.println(operatorler[0]);<br>
				        }<br>
				        else if(this.telNo.startsWith("053"))<br>
				        {<br>
				            System.out.println(operatorler[1]);<br>
				        }<br>
				        else if(this.telNo.startsWith("054"))<br>
				        {<br>
				            System.out.println(operatorler[2]);<br>
				        }<br>
				    }		<br>		    
				}<br>
		</div>
		<h4>Arayuz.java (Main Class)</h4><br>
		<p>
			Gerekli fonksiyonlara parametler göndererek test ediyoruz.
		</p>
		<div class="code">			
			public class Arayuzler{<br>
			    public static void main(String[] args) {<br>
			        Hizmet sorgula = new Hizmet();<br>
			        int yas = 28;<br>
			        sorgula.bilgiler("Selim Silgu", yas);<br>
			        sorgula.operator("05071905105");<br>
			        sorgula.kullanacagiPaketler(yas);<br>
			    }<br>
			}<br>
		</div>
		<b>Ekran Çıktısı</b>
		<div class="cikti">
			run:<br>
				AD - SOYAD : Selim Silgu<br>
				YAŞ : 28<br>
				Avea<br>
				Kullanabileceği Paketler : <br>
<br>
				Aile Paketi<br>
<br>
				Yurtdışı Paketi<br>
<br>
				Yurtiçi Paketi<br>
<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
<br>
		</div>
		

<a href="anasayfa.php?git=java_14" id="geri"><i><pre><code><< Soyutlama (Abstraction)</code></pre> 
</i></a><a href="anasayfa.php?git=java_16" id="ileri"><i><pre><code> Çok Biçimlilik (Polymorphısm)>></code></pre></i></a>


</body>
</html>