<!DOCTYPE html>
<html>
<head>
	<title>Getter and Setter Metodları</title>
	,<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java Getter and Setter Metodları,Getter and Setter Metodları "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java Getter and Setter Metodları,Getter and Setter Metodları" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,Getter and Setter Metodları,java Getter and Setter Metodları" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java Getter and Setter Metodları,Getter and Setter Metodları" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Getter and Setter Metodları</h4>
		<p>Objelerin kontrol edilmesi için getter() ve setter() metotları kullanılır. 
		Örneğin yas değişkeninin sıfırdan küçük olup olmadığı kontrolü sonrası işleve katılması için kullanabiliriz.</p>
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
			        Scanner scann = new Scanner(System.in);<br><br>
			        System.out.println("Kullanici adını giriniz :");<br>
			        this.ad = scann.next();<br><br>
			        System.out.println("Kullanici soyadını giriniz :");<br>
			        this.soyad = scann.next();<br><br>
			        System.out.println("Kullanici yaşını giriniz :");<br>
			        this.yas = scann.nextInt();<br><br>
			        System.out.println("Kullanici id numarasını giriniz :");<br>
			        this.id = scann.nextInt();<br><br>
			        <br>
			    }<br>
<br>
			    public int <b style="color : yellow">getYas()</b> {<br>
			        return yas;<br>
			    }<br>
			    <br>
			    public void <b style="color : yellow">setYas(int yas)</b> {<br>
			        if (yas < 15 ) {<br>
			             this.yas = 0;<br>
			        }else<br>
			        this.yas = yas;<br>
			    }<br>
			    <br>
			    @Override<br>
			    public String toString() {<br>
			        setYas(this.yas);<br>
			        return  "ad=" + ad + ", soyad=" + soyad + ", id=" + id + ", yas=" + yas ;<br>
			    }   <br>
			}<br>
		</div><br>
		<p>Artık yas değişkenine sınırlama koymuş olduk.</p>
		
<a href="anasayfa.php?git=java_12" id="geri"><i><pre><code><< Instance ve Nesne Oluşturma</code></pre> 
</i></a><a href="anasayfa.php?git=java_14" id="ileri"><i><pre><code> Soyutlama (Abstraction)>></code></pre></i></a>


</body>
</html>