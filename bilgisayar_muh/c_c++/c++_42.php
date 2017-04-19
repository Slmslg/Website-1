<!DOCTYPE html>
<html>
<head>
 <title>Üniversite Harf Notu Uygulaması </title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++ Üniversite Harf Notu Uygulaması "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Üniversite Harf Notu Uygulaması" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Üniversite Harf Notu Uygulaması" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Üniversite Harf Notu Uygulaması" />
</head>
<body>
<p>  
Basit bir Üniversite Harf Notu Uygulaması. Genelde ilk verilen ödevlerden biridir. Bunu paylaşmak istedim. Aslında daha da geliştirilebilir bir uygulama.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
#include < ctime >
#include < math.h >
using namespace std;



void main()
{
int sayi ;
 xx:cout<<"Notunuzu giriniz."<< endl;
 cin>>sayi;

 if (sayi<=45)
 
  cout<<"Notun Harf Karsiligi = FF"<< endl;
 else if(sayi< =55 && sayi>45)
  cout<<"Notun Harf Karsiligi = FD"<< endl; 
 else if(sayi>55 && sayi< = 60 )
 cout<<"Notun Harf Karsiligi = DD"<< endl;
 else if(sayi>60 && sayi< = 70 )
 cout<<"Notun Harf Karsiligi = DC"<< endl;
 else if(sayi>70 && sayi< = 85 )
 cout<<"Notun Harf Karsiligi = CB"<< endl;
 else if(sayi>85 && sayi< = 100 )
 cout<<"Notun Harf Karsiligi = BA"<< endl;
 
 
 goto xx;
 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>