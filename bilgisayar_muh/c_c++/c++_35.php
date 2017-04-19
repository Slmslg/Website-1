<!DOCTYPE html>
<html>
<head>
	<title>Dizide Eleman Karşılaştırma</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,c++ Dizide Eleman Karşılaştırma "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Dizide Eleman Karşılaştırma" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Dizide Eleman Karşılaştırma" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Dizide Eleman Karşılaştırma" />
</head>
<body>
<p>				//      SORU       //
// Dışarıdan bir sayı girilir. Girilen bu sayıdan büyük olan dizinin elemanlarını başka
//bir dizide tutar ve sonrasında büyük olan sayıların sayısı ile birlikte ekrana yazdırır.
//Büyük olmayan elemanların indislerinde 0 yazılmıştır.

<h5></br> Örnek Kod : </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{
int dizi[6][6],n,sayac=0,tutulan[6][6];

	for(int i=0;i< 6;i++)
		{	cout<< "|"<< endl<< "|";
			for(int j=0;j< 6;j++)
		{		dizi[i][j]=1+rand()%9;
			cout<<" "<< dizi[i][j]<<"   ";
		}}

	cout<< endl<<" Karsilastirilacak sayiyi giriniz = ";
	cin>>n;

		for(int i=0;i< 6;i++)
			{ 
				cout<<""<< endl<<"";
				for(int j=0;j< 6;j++)
			{
				if(dizi[i][j]>n)
					{
						tutulan[i][j]=dizi[i][j];
						sayac++;
						
				}
				else tutulan[i][j]=0;cout<< tutulan[i][j]<< "  ";
			}
		}
	
	
		cout<< endl<< endl<<"Eleman sayisi = "<< sayac;

	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>