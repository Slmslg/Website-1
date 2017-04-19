<!DOCTYPE html>
<html>
<head>
 <title>İntegral ve Türev Hesabı I </title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ İntegral ve Türev Hesabı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ İntegral ve Türev Hesabı" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ İntegral ve Türev Hesabı" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ İntegral ve Türev Hesabı" />
</head>
<body>
<p>  
İntegral ve Türev hesabı yapan programı algoritma I dersinde yapmıştık bu da kodları.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>

#include "stdafx.h"
#include < iostream >
using namespace std;
double alt_sinir,ust_sinir;
class math
{
 public:
 int a,b;
 double h;
 double f(double);
 double integral();
 double turev();
 math();
};
double math::f(double x)
{return (x*x*x-5*x+8);
}
double math::integral()
{ return ((f(double(a))+f(double(b)))/2)*(b-a);}

double math::turev()
{
 return (f(double(a)+h)-f(double(a)))/h;
}
math::math()
 {  a=1;
   b=1.5;
   h=0.001;
 }

int _tmain(int argc, _TCHAR* argv[])
{
 cout<< exp(1.0)<< endl;
math m1;
cout<<"1'den 2'ye (x*x*x-5*x+8) integrali="<< m1.integral()<< endl;
math m2;
m2.a=2;
cout<<" 2 için (x*x*x-5*x+8) turevi="<< m2.turev()<< endl;
}


 </code>
</pre>
</body>
</html>