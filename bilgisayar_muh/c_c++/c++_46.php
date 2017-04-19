<!DOCTYPE html>
<html>
<head>
	<title>Dizilerde Pointer Dizi Kullanımı</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Dizilerde Pointer Dizi Kullanımı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Pointer Dizi Kullanımı" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Pointer Dizi Kullanımı" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Pointer Dizi Kullanımı" />
</head>
<body>
<p>		
Tek boyutlu dizilerde pointer kullanımı ve karakter dizisi şu şekilde yapılır. *p bir pointerdır aynı zamanda dizi belirtir. atadığımız herhangi bir metni dizi şeklinde tutar.
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
		char a[]="selim";
		char *p=a;
			for( int i=strlen(a); i>=0;i--)
			{
				p=&a[i];cout<< p<< endl;
			}
				cout<< "\n"<< endl;



	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>