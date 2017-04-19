<!DOCTYPE html>
<html>
<head>
	<title>Üçgenin Alan ve Hipotenüsü</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Üçgenin Alan ve Hipotenüsü"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Üçgenin Alan ve Hipotenüsü" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Üçgenin Alan ve Hipotenüsü" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Üçgenin Alan ve Hipotenüsü" />
</head>
<body><h4>Bu kod C++ ile yazılmıştır.</h4>
<pre>
	<code>
		
// hip.cpp : Bu program Alan ve hipotenüs hesaplaması için kullanılır.
//Eğer Alan hesabı yapmak istiyorsanız 1'i 
//Hipotenüs kenarının değerini öğrenmek istiyorsanız 2'yi tıklayınız.


#include "stdafx.h"
#include < iostream >
using namespace std;

int main()
{

	double a, b,alan,hip,secim ;
	
	xx:	cout<<"                Lutfen ucgenin birinci dik kenar uzunlugunu giriniz." << endl <<"a = "; 
		cin >>a;

        cout<<"                Lutfen ucgenin ikinci dik kenar uzunlugunu giriniz." << endl << "b = ";
		cin >>b;

       cout<<"                Alan hesaplamasi icin 1 " << endl << "                Hipotenus hesaplamasi icin 2 yi giriniz..." << endl ; 
	    cin >> secim;

	alan=(b*a)/2 ;
	hip= sqrt((b*b)+(a*a));
	
	secim==1 ? cout << "Alan = "<< alan << endl  : cout<<"Hipotenus = " << hip << endl;
	cout << "SELİM SİLGU ";
	system("pause");
	goto xx;
	
	return 0;
}




	</code>
</pre>
</body>
</html>