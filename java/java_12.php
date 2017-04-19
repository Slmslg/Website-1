<!DOCTYPE html>
<html>
<head>
	<title>Yapıcı Metotlar | Instance</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance,yapıcı metot,javada yapıcı metot,java constructor"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance,yapıcı metot,javada yapıcı metot,java constructor" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance,yapıcı metot,javada yapıcı metot,java constructor" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java inheritance,java kalıtım,kalıtım,inheritance,yapıcı metot,javada yapıcı metot,java constructor" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
<style type="text/css">
	.konular ul li{
		list-style: circle;
		display: block;
		color: orange;
		float: left;
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
	}
</style>
</head>
<body>
		<h4>NESNEYE DAYALI PROGRAMLAMA (OOP)</h4>
		<p>Nesneye dayalı programlamaya aslında sınıflar konusuyla giriş yapmıştık fakat OOP için bilmemiz gerekn sınıf kavramları mevcuttur.
		Bu konuya geçmeden önce göreceğimiz tanımları görelim.<br></p>
		<div class="konular">
		<ul>
			<li>Kalıtım (Inheritance)</li>
			<li>Instance</li>
			<li>Constructors (Yapıcı Metotlar)</li>			
			<li>Override</li>
			<li>Extend</li>
			<li>Super Class</li>
			<li>Getter ve Setter Metotları</li>
			<li>Soyutlama (Abstraction)</li>
			<li>Interface</li>			
			<li>Çok biçimlilik (Polymorphism)</li>
			<li>Kapsülleme (Encapsulation)</li>
		</ul></div><div class="clear"></div>
		<h4>Instance (Örnek)</h4>
		<p>Bir sınıftan nesne oluşturma işlemine instance denir. Aşağıda görüldüğü gibi bir instance oluşturduk. 
		New operatörü kullanılarak nesne oluşturuldu ve bellketen yeni bir yer ayrıldı.</p>
		<div class="code">
			 class_ismi nesne = new class_ismi();
		</div>
		<h4>Yapıcı Metotlar (Constructors)</h4>
		<p>Oluşturduğumuz sınıf ile aynı isimde bir metot yazarsak bu yapıcı metot olur. İlk nesne oluşturduğumuz anda metot çağırmadan default olarak
		işlem yaptırabiliriz. Bunu çeşitli parametreler vererek de yapabiliriz.</p>
		<h4>Constructors Örnekleri:</h4>
		<br><b>Parametresiz Yapıcı Metot</b>
		<div class="code">
			public class yapiciMetot {<br>
<br>
				    public yapiciMetot() {<br>
				        System.out.println("Düzce Üniversitesi");<br>
				    }<br>
				    <br>
				}<br>
		</div>
		<b>Parametre Alan Yapıcı Metot</b>
		<div class="code">			
			public class yapiciMetot {<br>
			    public yapiciMetot(String adSoyad,String tuttuguTakim) {<br>
			        System.out.println(adSoyad+"bir"+tuttuguTakim+"taraftarıdır.");<br>
			    }			    <br>
									}<br>
		</div>
		<h4>Nesne Oluşturma</h4>
		<div class="code">
			public class JavaIlkProgram { <br> 
   <br>
		    public static void main(String[] args) {    <br>
		        yapiciMetot nesne1 = new yapiciMetot();<br>
		        yapiciMetot nesne2 = new yapiciMetot("Selim Silgu ", " GALATASARAY");<br>
		        }<br>
		    }<br>
		</div>
		<p>Nesne oluşturduktan sonra herhangi bir metot çağırmadık fakat sonuç olarak bize default olan işlemleri ekrana getirdi.<br></p>
		<b>Ekran Çıktısı</b>
		<div class="cikti">
			run:<br>
				Düzce Üniversitesi Bilgisayar Mühendisliği : <br>
				Selim Silgu   bir  GALATASARAY taraftarıdır.<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>

		</div>
		<p>
		Son olarak kısa yol olarak Constructor oluşturulması Netbeans'te ;<br>
		Alt + Insert >> Cunstructor... <br>
		Menu >> Source >> Insert Code >> Constructor... <br></p>
		<br><img src="java/proje_img/const.png" alt="kısayol">
		

<a href="anasayfa.php?git=java_11" id="geri"><i><pre><code><< Miras Alma | Kalıtım (Inheritance)</code></pre> 
</i></a><a href="anasayfa.php?git=java_13" id="ileri"><i><pre><code> Getter ve Setter Metotları>></code></pre></i></a>


</body>
</html>