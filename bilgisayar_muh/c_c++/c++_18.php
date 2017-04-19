<!DOCTYPE html>
<html>
<head>
	<title>Yedek Köşegenlerin Toplamı</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ yedek Köşegenlerin Toplamı"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ yedek Köşegenlerin Toplamı" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ yedek Köşegenlerin Toplamı" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ yedek Köşegenlerin Toplamı" />
</head>
<body>
<p>İki boyutlu dizilerde bir diğer örneğimiz de matrisin yedek köşegenleri.
A[N][N]  matrisinde satır ve sutun indisi toplamı N-1 olan yani A[i][j],A[a][b]
matrisinde i+j = N-1, a+b = N-1 gibi elemanlar matrisin yedek köşegenini verir. Aşağıda 4X4 lük bir matrisin yedek köşegen toplamı verilmiştir.
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


	int Matris[4][4],Toplam=0;

	for(int i=0;i< 4;i++)
	{	cout<< endl;
		for(int j=0;j< 4;j++)
		{
			cout<< "Matris["<< i<< "]["<< j<< "] elemanini giriniz = ";
			cin>>Matris[i][j];
		}

	}

	for(int i=0;i< 4;i++)
	{		cout<< endl;
		for(int j=0;j< 4;j++)
		{
			cout<< Matris[i][j]<<"  ";
					}
	}

	for(int i=0;i< 4;i++)
	{		cout<< endl;
		for(int j=0;j< 4;j++)
		{
			if(i+j==3)
			cout<< Matris[i][j];
			Toplam= Toplam + Matris[i][j];
		}
	}		
		cout<< endl<< "Yedek Kosegenler Toplami = "<< Toplam<< endl;


	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>