<!DOCTYPE html>
<html>
<head>
 <title>Fibonacci Sayısı</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Fibonacci Sayısı "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Fibonacci Sayısı" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Fibonacci Sayısı" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Fibonacci Sayısı" />
</head>
<body>
<p>  
 Fibonacci Sayıları.cpp : Defines the entry point for the console application.
Genel Bilgi: 0,1, 1, 2, 3, 5, 8, 13, 21, 34, 55,89,… sayılarına Fibonacci sayıları adı verilir.
Bu sayılar ilk iki terim dışında son iki terimin toplamı ile elde edilir.

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
 int sayi,sonuc=0,a=0;
 int dizi[100000]={{0},{1},{1},{2}};
 cout<< endl;
 cout<<"Kac tane Fibonacci Sayi dizisini görmek İstersiz ? "<< endl<<
  "Sayiyi giriniz = ";cin>>sayi;
 cout<< endl<< endl<<"                       Fibonacci Sayilari"<< endl<< dizi[0]<< endl<< dizi[1]<< endl<< dizi[2]<< endl;
 

 for(int i=2;i<=sayi;i++)
 {    
 dizi[i+2]=dizi[i+1]+dizi[i];
 cout<< dizi[i+1]<< endl;
 

 }


 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>