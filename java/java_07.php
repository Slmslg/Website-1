<!DOCTYPE html>
<html>
<head>
	<title>Döngüler</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,java koşullu ifadeler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,java döngüler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,java döngüler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,java döngüler" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/java.css">
</head>
<body>
		<h4>Döngüler</h4>
		<p>
				<p>Bir işlem tekrar ediyor ya da belirli bir kurala göre devam ediyorsa bu işlemler döngülerle halledilir. Örneğin 
			ekrana yüz defa adnızı yazdırmak ya da öncelikle beş defa adınızı sonra yirmi defa soyadınızı yazdırıp bu işlemi on kere tekrar ettirmeniz gerekebilir.
			Bunun için tek tek elle yazmanız uzun sürer fakat bunu döngülerle yapabilirsiniz.</p>
			<h4>For Döngüsü</h4>
			<p>Bunu bir örnekle açıklamak isterim. Bir önceki derste dizilere eleman yerleştirirken tek tek elle girmiştik fakat eğer 20X20 lik bir matris olsaydı bunu yapmamız çok büyük zaman alacaktı.
			Bunun için for döngüsü kullanalım. Ama öncesinde tek boyutlu diziye eleman atayalım.</p>
			<div class="code">
				 int [] dizi1 = new int[20];<br>
			        for (int i = 0; i < 20; i++)<br>
			        {<br>
			            dizi1[i] = i*2;<br>
			        }	<br>		    
			</div>
			<p>Çok Boyutlu Diziye değer atama : Burada iç içe for kullanmamız gerekir.</p>
			<div class="code">
				for (int i = 0; i < 20; i++) <br>
				{<br>
		            for (int j = 0; j < 20; j++) <br>
		            		{<br>
		                		dizi1[i][j] = i*3;<br>
		            		}<br>
        		}<br>
			</div><div class="clear"></div>
			<h4>While Döngüsü</h4>
			<p>İstenilen koşula kadar işlemi devam ettiren döngüdür.</p>
			<div class="code">
				public static void main(String[] args) {<br><br>
				        int x = 0;<br>
				        while (x < 10) {<br>            
				            System.out.println("GALATASARAY");<br>
				            x++;<br>
				            if (x==10) {<br>
				                System.out.println("ŞAMPİYON");<br>
				            }<br>
				              <br>
				        }<br>
				    }<br>
			</div>
			<h5>Ekran Çıktısı</h5>
			<div class="cikti">
				run:<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					GALATASARAY<br>
					ŞAMPİYON<br>
					BUILD SUCCESSFUL (total time: 0 seconds)<br>
			</div>
			<p>Bir de sonsuz döngü yapalım.</p>
			<div class="code">
				while(true){<br>
					System.out.println("Selim Silgu");<br>
				}<br>
			</div>
			<h4>Do While</h4>
			<p>While döngüsünden tek farklı döngüye bir kerecik ne olursa olsun girmesidir.</p>
			<div class="code">
				 public static void main(String[] args) <br>
				 <br>
				  int x = 0;<br>
		        do {            <br>
		            System.out.println((x+2));<br>
		            x=x+2;<br>
		        } while (x<=15);<br>
		        <br>
		        }<br>
			</div>
			<h5>Ekran Çıktısı</h5>
			<div class="cikti">
				run:<br>
					2<br>
					4<br>
					6<br>
					8<br>
					10<br>
					12<br>
					14<br>
					16<br>
					BUILD SUCCESSFUL (total time: 0 seconds)<br>
			</div>
			<p>Şimdide koşul doğru olmadığı halde bir kere döngüye sokalım.</p>
			<div class="code">
				 public static void main(String[] args) {<br>
			        int x = 0;<br>
			        do {          <br>  
			            System.out.println((x+2));<br>
			            x=x+2;<br>
			        } <br>
			        while (x>15);<br>
			        <br>
			        }<br>
			</div>
			<h5>Ekran Çıktısı</h5>
			<p>Ekran çıktısında görüldüğü gibi x sayısı 15 sayısından büyük olmadığı halde bir kere döngüye girip değerini arttırdı.</p>
			<div class="cikti">
				run:<br>
				2<br>
				BUILD SUCCESSFUL (total time: 0 seconds)<br>
			</div>
		</p>
<a href="anasayfa.php?git=java_06" id="geri"><i><pre><code><< Koşullu İfadeler</code></pre> 
</i></a><a href="anasayfa.php?git=java_08" id="ileri"><i><pre><code> Diziler>></code></pre></i></a>


</body>
</html>