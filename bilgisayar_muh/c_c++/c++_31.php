<!DOCTYPE html>
<html>
<head>
 <title>Türev Alma</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++ Türev Alma "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Türev Alma" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Türev Alma" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Türev Alma" />
</head>
<body>
<p>  
x<sup>3</sup>+8x<sup>2</sup>+10 işleminin türevini alma yöntemi

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
double f(double x)
{ return x*x*x+8*x*x+10;
}
void main()
{
 // Bu program türev tanımı ile türev hesabı yapar.
 double turev,x,h=0.001;
 cout<<" Türevini alacağınız x degerini giriniz"<< endl;
 cin>>x;
 turev=(f(x+h)-f(x))/h;
 cout<<"x="<< x<<" için f'(x) degeri="<< turev<< endl;
 //Burda da x=1 ile 3 arasında dx=0.1 için integral hesaplar
 double A=0,xa=1,xu=3,dx=0.001;
 int n;
 n=(xu-xa)/dx;
 for(int i=0;i< n;i++)
  A=A+f(xa+i*dx)*dx;
 cout<<"İntegral="<< A<< endl;


 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>