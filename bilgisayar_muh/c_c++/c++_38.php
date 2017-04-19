<!DOCTYPE html>
<html>
<head>
	<title>Dizilerde Sıralama</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Dizilerde Sıralama "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Sıralama" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Sıralama" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Sıralama" />
</head>
<body>
<p>		
Sıralama Örneği 
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
int dizi[10][10],sayi;

	for(int i=0;i< 10;i++)
	{cout<< endl;
		for(int j=0;j< 10;j++)
		{
			
			dizi[i][j]=1+rand()%10;
			cout<< dizi[i][j]<<"  ";
		}
	}
	cout<< endl<< endl;

		for(int i=0;i< 10;i++)
	{
		for(int j=i+1;j< 10;j++)
		{
			if(dizi[i][i]>dizi[i][j])
			{
				sayi=dizi[i][i];
				dizi[i][i]=dizi[i][j];
				dizi[i][j]=sayi;
			}
		}
	}
		cout<< endl<< endl;

			for(int i=0;i< 10;i++)
	{
		cout<< endl;
		for(int j=0;j< 10;j++)
		{
			cout<<" "<< dizi[i][j];
		}
	}


	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>