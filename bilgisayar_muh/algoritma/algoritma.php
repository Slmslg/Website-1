<!DOCTYPE html>
<html>
<head>
	<title>Algoritma</title>
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
	<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
	<link rel="stylesheet" type="text/css" href="css/java.css">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="algoritma,algoritma dersleri,algoritma dökümanları,selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,eğitim planı,düzce üniversitesi ders planı
	,bilgisayar mühendisliği dersleri,bilgisayar mühendisliği eğitim planı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,algoritma,bilgisayar mühendisliği eğitim planı,algoritma uygulamaları" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,düzce üniversitesi ders planı,bilgisayar mühendisliği eğitim planı,algoritma" />
	<meta name="google-site-verification" content="algoritma,selim silgu,bilgisayar mühendisliği,düzce üniversitesi ders planı,bilgisayar mühendisliği eğitim planı" />
	
	<style type="text/css">
	a{
		color: red;
	}
	fieldset{
		margin: 15px;
		border-bottom: 3px solid black;
	}
	</style>
</head>
<body>		<h4>ALGORİTMA ve PROGRAMLAMA</h4>
<p>
			Algoritma dersinde Pazkize hocamızın yazdığı döküman ciddi anlamda gördüğüm en iyi algoritma dökümanlarında biriydi.
			Algoritma derslerini kod ve örneklerle iyi bir şekilde öğrenmek için bu pdf'e göz atın derim.
		</p>
		<fieldset>
			<center><object data="bilgisayar_muh/algoritma/algo.pdf" type="application/pdf" width="700" height="900">
   			 <embed src="algo.pdf" type="application/pdf" tittle="algoritma"  />
			</object></center>
		</fieldset>
			<fieldset>
			<legend><h4>Algoritma Dökümanları</h4></legend>
			<p>
<br>
Algoritma Ders Notları              :       <a href="http://yadi.sk/d/sQMxbmlzCNzuS" title="Algoritma Dökümanları" >SlmSlg Yandex</a><br><br>

Algoritma ve Akış Diyagramları :        <a href="http://yadi.sk/d/XleLx4n6CNzv9" title="Algoritma Dökümanları">SlmSlg Yandex</a><br><br>

Algoritma ve Pascal                   :       <a href="http://yadi.sk/d/ulJpkQ2TCNzw2" title="Algoritma Dökümanları">SlmSlg Yandex</a><br><br>

Algoritma Notları                       :       <a href="http://yadi.sk/d/Dv4OlmBMC7PD4" title="Algoritma Dökümanları">SlmSlg Yandex</a><br><br>

Algoritma ve Programlama (C#) :       <a href="http://yadi.sk/d/W2N6H78hCNzxD" title="Algoritma Dökümanları">SlmSlg Yandex</a><br><br>

Algoritma Yıldız Teknik Üniversitesi :   <a href="http://yadi.sk/d/9xf0uv3bCP22e" title="Algoritma Dökümanları">SlmSlg Yandex</a><br><br>


Sizinde paylaşmak istediğiniz herhangi bir döküman varsa <b>slmslg@yandex.com</b> mail adresine dökümanınızı rar dosyası yapıp paylaşabilirsiniz.
			</fieldset>		
</p>
<br>
<p> Aşağıdaki soruyu da Algoritmaya yeni başlayanlara yazıyorum. Ne yazsam diyenlere daha doğrusu. Sorunuz olursa mail atabilirsiniz. Kolay gelsin. <br>
			<b><center>2013 -2014 BAHAR DÖNEMİ ALGORİTMA VE PROGRAMLAMA 2 ODEVİ</center></b>
<p><br>
	1.  C++ ‘ta max dizi boyutu kadar bir integer dizi tanımlayınız.<br>
	2.  Bu dizinin dışarıdan girilen boyut değeri kadarını işleyerek, elemanlarına 0-255 arasında değişen rastgele değerler atayınız.<br> 
	3.  Bu değerlerin en küçük değerini, en büyük değerini, ranjını(enbüyük-enküçük), 
	medyanını(dizi elemanları sıralandığında ortaya düşen eleman), modunu(en sık tekrar eden değer),
	 ortalama değerini bulan fonksiyonlar yazınız.<br>
	 </p>

</p>
	<p> Rastgele üretilen sayıların sıralaması yapılacak<br>
		Bu sayıların modu medyanı ve en büyük ile en küçük elemanı bulunacak<br>
		<p><b>C++ da yazılmış Kodlar</b></p><br>		
		<h5>Kodlar açıklamalı bir şekilde yazılmıştır.</h5>
		<div class="code">
<code><br>
#include "stdafx.h"<br>
#include < iostream ><br>
#include < ctime ><br>
using namespace std;<br>
<br>
	// RASTGELE DEĞER ATAMA FONKSİYONU//<br>
void  rasgele(int N,int max_dizi[])<br>
{<br>
	for (int i = 0 ; i < N ;i++)<br>
		max_dizi[i]=0+rand()%255;<br>
}<br>
	// SIRALAMA ALGORİTMASI FONKSİYONU//<br>
<br>
void siralama(int N,int max_dizi[])<br>
{<br>
	int tutulan;<br>
<br>
	for(int i=0 ; i < N ; i++ )<br>
	{<br>
		for(int j=0 ; j < N ; j++)<br>
			{<br>
			if(max_dizi[j] > max_dizi[i])<br>
			{<br>
			tutulan=max_dizi[i];<br>
			max_dizi[i]=max_dizi[j];<br>
			max_dizi[j]=tutulan;<br>
			}<br>
		}<br>
	}<br>
<br>
}<br>
	// ORTALAMA BULMA FONKSIYONU //<br>
int ortalamasi(int N,int max_dizi[],double ortalama)<br>
{	<br>
   ortalama=0;<br>
			<br>
	for(int k=0 ; k < N ; k++)<br>
		{ <br>
		ortalama + = max_dizi[k] ;<br>
				<br>
		}<br>
	return	ortalama = ortalama / N ;<br>
			<br>
      // MEDYAN BULMA FONKSİYONU//<br>
void medyan_bul(int N,int max_dizi[])<br>
{	<br>
	double medyan;<br>
			<br>
		if(N%2==0)<br>
		medyan=(max_dizi[N/2] + max_dizi[(N / 2)-1]) / 2 ;<br>
		else <br>
			medyan=max_dizi[N/2];<br>
			<br>
			cout< < endl < <"Dizinin medyani = " < < medyan < < endl < < endl ;<br>
 	<br>
}<br>
<br>
   // MOD ALMA FONKSÝYONU //<br>
<br>
void mod_al(int N,int max_dizi[])<br>
{			<br>
			int sayac,mod=0,degeri ;<br>
<br>
			for(int i=0 ;i < N ; i++)<br>
			{<br>
				sayac=0;<br>
					for(int j=0 ; j < N ; j++)<br>
					{<br>
						if(max_dizi[i] == max_dizi[j])<br>
						{<br>
							sayac ++;<br>
						}<br>
						if(sayac > mod)<br>
						{<br>
							mod = sayac;<br>
							degeri = max_dizi[i];<br>
						}<br>
					}<br>
					<br>
			}<br>
			<br>
			if(mod==1)<br>
				cout<<"Butun sayilardan 1 adet vardir. " < < endl < < "Dolayisiyla sayilarin modu her sayi olabilir." << endl ;<br>
			else<br>
			cout < < endl < < "                 Dizinin Modu   = " <  degeri << endl << mod < < " adet " < < degeri < < " sayisi vardir. " < < endl;<br>
<br>
}<br>
	////// MAIN //////<br>
<br>
int _tmain(int argc, _TCHAR* argv[])<br>
{ bas :<br>
	srand((unsigned int) time(0));<br>
	system("cls") ;<br>
	<br>
	<br>
		// RASTGELE FONKSİYONUNU ÇAĞIRMA //<br>
	int N ; int max_dizi[99999] ;<br>
	cout < < "Kac sayi uretmek istersiniz ? "; cin > > N ;<br>
	cout < < endl < < endl;<br>
	rasgele(N,max_dizi) ;<br>
<br>
		for(int i=0 ; i < N ; i++)<br>
	{	<br>
		cout < < i+1 < < ".eleman = "  < < max_dizi[i] < < endl ;<br>
	}<br>
<br>
		siralama(N,max_dizi);<br>
		cout < <  endl < < endl ; <br>
				int ortalama=0;<br><br>
			cout < < endl< < "Dizinin Kucukten Buyuge Siralanmasi " < < endl < < endl ;<br>
			for(int k=0 ; k < N ; k++)<br>
			{ <br>
				cout << "		" << max_dizi[k] << endl << endl;<br>
			}<br>
		<br>
	////////////////////////En buyuk - En Kucuk Elaman ve Fark //////////////////////////////	
<br><br>
	int enb_eleman=max_dizi[N-1],enk_eleman=max_dizi[0],fark ;<br>
<br>
			<br>
			fark=enb_eleman-enk_eleman ;<br>
			cout << endl << endl << "Dizinin en buyuk elemani = " << enb_eleman << endl ;<br>
			cout << "Dizinin en kucuk elemani = " << enk_eleman << endl ;<br>
			cout << "En buyuk ile en kucuk elemanin arasindaki fark = " << fark << endl ;<br>
<br>
		// ORTALAMA BULMA FONKSIYONUNU ÇAÐIRMA //<br>
			<br>
	ortalamasi(N,max_dizi,ortalama) ;<br>
	cout << endl << "Dizinin sayilarinin ortalamasi = " << ortalamasi (N,max_dizi,ortalama) << endl << endl ;<br>
			<br>
	// MOD VE MEDYAN FONKSIYONUNU ÇAĞIRMA //<br>
	<br>
	<br>
	medyan_bul(N,max_dizi) ;<br>
	mod_al(N,max_dizi) ;<br>
	cout << endl << endl << endl ;<br>
	cout << "	Tekrar denemek istiyor musunuz ? " << endl<br>
		 << "	Bunun icin bir tusa basiniz ..." << endl << endl;<br>
	char tekrar ;<br>
	cin>>tekrar ;<br>
	if(tekrar== '|') ;<br>
	else<br>
	goto bas ;<br>
<br>
	system("pause") ;<br>
	return 0;<br>
}<br>
<br>
<br>
}	<br>
</div><br>
<br>
		<br>
</p><br>
			</p>

</body>
</html>