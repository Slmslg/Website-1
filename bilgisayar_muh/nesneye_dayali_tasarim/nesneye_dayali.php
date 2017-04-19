<!DOCTYPE html>
<html>
<head>
	<title>Nesneye Dayalı Tasarım ve Analiz</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,Nesneye Dayalı Tasarım ve Analiz "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Nesneye Dayalı Tasarım ve Analiz" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliğii,Nesneye Dayalı Tasarım ve Analiz" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Nesneye Dayalı Tasarım ve Analiz" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
<style type="text/css">
	p>img{
	 	width: 500px;
	 }
	.giyim{
		height: 500px;
		width: 800px;
	}
	.use-case{
		width: 500px;
	}
	a{
		color: green;
	}
</style>
</head>
<body><center>
<h4>NESNEYE DAYALI TASARIM ve ANALİZ</h4>
	<p>
		Bu ders ile ilgili bilgiyi <a href="anasayfa.php?git=muh_ders_plani.php" title="ders planı">2.Sınıf 2.Dönem (4.Yarıyıl)</a> bölümünden öğrenebilirsiniz.
		Bu derste öncelikli olarak Java ile Object Oriented Programming (OOP), Use-Case, UML Diyagramlarını görmüştük. Visual Paradigm programı ile Class Diyagramlarının çizimini yapmıştık. Bu makalenin içeriği de bu şekilde olacaktır. <br>
		Java ile OOP dersleri için <a href="anasayfa.php?git=java_nesne.php" title="ders planı">Java Nesneye Dayalı Programlama</a> bölümünü takip ederek bakabilirsiniz.<br>
		Öncelikle OOP'den bahsedelim iki cümleyle. OOP ile soyutlama ve soyutlanan verinin somutlaştırılıp etkin kullanılması amaçlanmıştır.
		Abstraction ve Nesne oluşturma buna örnek olarak diyebiliriz.<br>
		Use-Case, UML gibi diyagramları çizmek için Visual Paradigm programını <a title="ders planı" href="http://www.visual-paradigm.com/download/">indirin.</a>
		<h4>Use Case</h4>
		 <p>
		 	Bir projenin ayrıntısız şekille gösterilmesi için çizilmiş şekilsel gösterimdir. Temel gösterimde :
		 	<ul>
		 		<li>Aktörler</li>
		 		<li>Sistem</li>
		 		<li>Akış İşlemleri</li>
		 	</ul>
		 	bulunur. 
		 	<br> Bir mağaza projesi yapmıştık bu derste. Bu proje üzerinden gidelim. Bir mağazanın use-case'i :<br>
		 	<b>Include (İçerme) :</b> Sistem classı seçim sunacak farklı classları içerekse include kullanılır. Siteye girip ürünü seçtiken sonraki Sepete Ekle veya Ürünnü Satın Al classlarında olduğu gibi.<br>
		 	<img src="bilgisayar_muh/nesneye_dayali_tasarim/include.png" alt="include"><br>
		 	<b>Extend (Genişleme) :</b> Genişleme durumu olan senaryolar için kullanılır. Kart ödemesinde makbuz isteme olayında olduğu gibi. İsteğe bağlıdır. Fakat siz bu durumu yok sayamazsınız. <br>
		 	<img src="bilgisayar_muh/nesneye_dayali_tasarim/extend.png" alt="extend"><br>
		 	<p>
		 		Herhangi bir mağazayı düşünün ve aşağıdaki USE-CASE örneğini inceleyin. Sistem akışı bu şekildedir. Her olasılığın akışı eklenmelidir.<br>
		 	</p>
		 	<img src="bilgisayar_muh/nesneye_dayali_tasarim/use-case.jpg" class="use-case" alt="use case"><br>		 	
		 </p>
		<h4>UML Diyagramları</h4>
		<p>
			UML diyagramlarını çizmek için bir diğer program oldukça etkili olan <a title="uml" href="http://www.tamindir.com/diagram-designer/">Diagram Designer</a> programı. Ücretsiz olması daha çekici diyebilirim.<br>
			Giyim mağazasının UML Diyagramı aşağıda gösterilmiştir. Fotoğraf büyük olduğundan indirip inceleyebilirsiniz.<br>
			<p>
				Biraz bahsetmek gerekir tabi. <br>
				Eğer interface kullanacaksanız mutlaka üzerine interface yazmalısınız.<br>
				Interfacelerde metotlar bulunur fakat değişken bulunmaz. Bu yüzden değişken yazmayın.<br>
				Kayıt Adaptörü bir ya da birden fazla olabileceğinden 1..* olarak belirtilir.<br>
				Eğer sadece 1 tane olan bir class yazsaydık 1 sayısını bilemediğimiz kadar olsaydı * yazacaktık.<br>
				Interfaceler implements ettiğinden kesik çizgili olarak gösterilitler.<br>
				<img src="bilgisayar_muh/nesneye_dayali_tasarim/uml1.png" alt="uml diyagramı"><br>
				Bu diyagram kesitinde ise Class görüyoruz. Bu class gelen oklar düz çizgilidir. İçi dolu baklava olmassa olmaz anlamına gelir. Mağaza olmassa personel de olmaz gibi düşünelim.<br>
				<img src="bilgisayar_muh/nesneye_dayali_tasarim/uml2.png" alt="uml diyagramı"><br>
				UML diyagramında yapılan şekiller birbirine benzer fakat anlamlar değişebilir. En üst kısımda Super Class'ımızın olmasına dikkat edelim.<br>
			</p>
			<img src="bilgisayar_muh/nesneye_dayali_tasarim/giyim.jpg" class="giyim" alt="giyim uml"><br>
			<p>
				Bu ders ile ilgili dökümanlara gelince de bu derste hazırladığımız Giyim Mağazası Yazılım Modellemesi :<br>
				<b>Dökümanları indirmek için Tıklayınız : </b><a title="Uml İndir" href="https://drive.google.com/folderview?id=0B-n5_UvPS1x3fnE3dW1WX2hUOGZ3bFJoYnFHLXJISTF3VTBvVDEwbGdfS09kSmx1MDk5Nkk&usp=sharing">Yazılım Modellemesi Dökümanları</a>
				<p>
					İçerisinde Word dosyası olarak yazılmış bir proje. Class ve UML Diyagramları bulunmaktadır. Ayrıca Use-Case de içerisindedir.<br><br>
					<b>Ders Notları için : </b><a title="Class ve UML Diyagramı" href="https://drive.google.com/folderview?id=0B-n5_UvPS1x3fno2T0d1N0FEVEt2ODMtSWRVUll2bEktaG45c2F2blF0NkxORDlVLURmZDA&usp=sharing">Nesneye Dayalı Tasarım ve Analiz Ders Notları</a>
				</p>
			</p>
		</p>
	</p>
</center>	
</body>
</html>