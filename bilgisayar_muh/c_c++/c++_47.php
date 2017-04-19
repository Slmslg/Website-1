<!DOCTYPE html>
<html>
<head>
 <title>Karakter Sayısı </title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Karakter Sayısı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Karakter Sayısı" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Karakter Sayısı" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Karakter Sayısı" />
</head>
<body>
<p>  
Bir metindeki karakter sayısını gösteren program kodu.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>

#include "stdafx.h"
#include < iostream >
using namespace std;
int main()
{
char a[][100] ={ "Guzel bir dunya istiyoruz"};
char s = a[0][0];
char p;
int sayac=0;
cout<<"Aramak istediğiniz karakteri giriniz";
cin>>p;
for(int i = 0; s != '\0'; s =a[0][++i])
{ if (s==p) sayac++;
}
cout<< p<<"karakterinden"<< sayac<<" adet var"<< endl;
system("pause");
return 0;
}



 </code>
</pre>
</body>
</html>