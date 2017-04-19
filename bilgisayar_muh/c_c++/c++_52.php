<!DOCTYPE html>
<html>
<head>
 <title>Pointer </title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++ Pointer,C++ İşaretçiler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Pointer,C++ İşaretçiler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Pointer,C++ İşaretçiler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Pointer,C++ İşaretçiler" />
</head>
<body>
<p>  
Pointer örnekleri ile devam ediyoruz. Neden bu kadar çok pointer örneği var diyorsanız.Konu bazen karışık olabiliyor ve önemli bir konu.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>

#include "stdafx.h"
#include < iostream >
using namespace std;
int main(void)
{ /* 
  int a[2][2]={56,12,39,87};
cout<< & a[0][0]<< endl;
cout<< a[0]<< endl;
cout<< & a[1][0]<< endl;
cout<< a[1]<< endl;
cout<< a<<"      "<< *a<< endl;
*/
//POINTER DEGISKEN ORNEKLERI
int *p,b,*q= & b,a;
a=12;b=23;p= & a;*p=45;//a=45;
char *p1="Cuma gunu son dersim";
char **q1= & p1;
q=p;*q=29;//a=29
cout<<(p1+5)<<"     "<<*(p1+5)<< endl;
cout<< a<< endl;//a=29
cout<< b<< endl;//b=23
int w[5];p=w;*(p)=12;p++;*p=8;p=p+3;*p=48;
p--;*p=397;
cout<< q1<< endl;
//w[0]=12,w[1]=8,w[2]=tanımsız,w[3]=397,w[4]=48,

cout<< w[0]<< endl<< w[1]<< endl<< w[2]<< endl<< w[3]<< endl<< w[4]<< endl;
system("pause");return 34;
}
// 28-04-




 </code>
</pre>
</body>
</html>