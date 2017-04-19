<!DOCTYPE html>
<html>
<head>
	<title>İstenen Karakterin Sayısı</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ İstenen Karakterin Sayısı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ İstenen Karakterin Sayısı" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ İstenen Karakterin Sayısı" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ İstenen Karakterin Sayısı" />
</head>
<body>
<p>Dizilerde artık char ile işlemler yapmanın vakti geldi. Bu konuda sizlere "strlen()" fonksiyonunu kullanmayı öğreteceğim. Bu komut karakter dizisinin uzunluğunu verir. 
<h5></br>Örnek : </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{
char cumle[]={"selim_silgu@hotmail.com"},harf;
	int sayac=0;
	cout<< "Dizi Icersinde bulmak istediginiz harfi giriniz."<< endl;

	do{
	cin>>harf;
	cout<< endl<< endl;
	}while(ispunct(harf));

	for(int i=0;i< strlen(cumle);i++)
	{
	if(harf==cumle[i])
		sayac++;
	}
	cout<< cumle<<" stringinde "<< endl<< endl<< harf<<" harfinden "<< sayac<<" adet var."<< endl<< endl;
	

	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>