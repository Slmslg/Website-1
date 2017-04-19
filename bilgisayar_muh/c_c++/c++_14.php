<!DOCTYPE html>
<html>
<head>
	<title>Çarpım Tablosu </title>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ çarpım tablosu "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ çarpım tablosu" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ asal sayı bulma" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ çarpım tablosu" />
</head>
<body>
<p>Dizilerde şimdide ufak bir çarpım tablosu uygulaması yapalım. 
<h5></br>Örnek : </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{int Carpim[11][11];

	for(int i=1;i<=10;i++)
		for(int j=1;j< 11;j++)
		Carpim[i][j]=i*j;

	for(int i=1;i< 11;i++)
		{
			cout<< endl;
		for(int j=1;j< 11;j++)
			cout<< i<< "x"<< j<< " = " << Carpim[i][j]<< endl;
		}

	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>