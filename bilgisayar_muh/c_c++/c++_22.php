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
Fibonacci Sayılarının önemi oldukça çok olduğundan bu kodu paylaşmak istedim. 
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

int fib(int x)
{  if (x==1) return 1;
 if (x==2) return 1;
 return fib(x-1)+fib(x-2);
}

void main()
{
 time_t ilk,son;
double sure;
int x;
cout<<"x degerini giriniz=";cin>>x;
time(&ilk);
cout<<"1 den "<< x<<". fib sayisi="<< fib(x)<< endl;
time(&son);
sure=son-ilk;
cout<<"Sure: "<< sure;
system("pause");return 0;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>