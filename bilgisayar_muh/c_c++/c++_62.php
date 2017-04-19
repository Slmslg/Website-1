<!DOCTYPE html>
<html>
<head>
 <title>Tahmni Oyunu</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Tahmin Oyunu"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Tahmin Oyunu" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Tahmni Oyunu" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Tahmni Oyunu" />
</head>
<body>
<p>  

0-1000 arası tutulan sayiyi tahmin etme oyunu. Derste öylesine yaptığım bir uygulama. Geliştirmek sizin elinizde.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>


#include "stdafx.h"
#include < iostream >
#include < time.h >
using namespace std;

int _tmain(int argc, _TCHAR* argv[])
{ 
 srand((unsigned int)time(0));
 int tahmin,tutulan_sayi,sayac=0;
 tutulan_sayi=rand()%100;
 for(int i=5;i>=1;i--)
 {

 
 cout<<"Sayiyi tahmin ediniz = ";
 cin>>tahmin;
 
 if(tutulan_sayi==tahmin){cout<< endl<<"TEBRIKLER.....KAZANDINIZ......"<< endl;}
 else if(tutulan_sayi< tahmin){cout<<"Tutulan sayi tahmin ettiginiz sayidan kucuktur."<< endl<< i<<" hakkiniz kalmistir.";}
 else if(tutulan_sayi>tahmin){cout<<"Tutulan sayi tahmin ettiginiz sayidan buyuktur."<< endl<< i<<" hakkiniz kalmistir.";
 }
 
 
 }

 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>