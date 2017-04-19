<!DOCTYPE html>
<html>
<head>
 <title>Void Pointer</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++ Void Pointer "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Void Pointer" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Void Pointer" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Void Pointer" />
</head>
<body>
<p>  
Pointerlarda bir de void işaretçiler konusu var. Buna da örnek olarak bu kodları yazmıştım.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>


#include "stdafx.h"
#include < iostream >
#include < time.h >
using namespace std;

void main()
{ 
 system("cls");

  int a=34,b=45,*p= & a;
double x=1e3,y=5.6e-3,*q= & x;
void *r;
*p=48;
p= & b;
*p=74;
p= & a;
*q=2e-2;
q= & y;
*q=5.9;
//r= & a;
//*r=12;
//r= & x ;
//*r=2.6;
cout<<"a="<< a<<" a nin adresi="<<&a<< endl;
cout<<"b="<< b<<" b nin adresi="<<&b<< endl;
cout<<"*p="<<*p<<" p nin degeri="<< p<< endl;
cout<<"*q="<<*q<<" q nin degeri="<<&q<< endl;
cout<<"x="<< x<<" x nin adresi="<<&x<< endl;
cout<<"y="<< y<<" y nin adresi="<<&y<< endl;
//cout<<"*r="<<*r<<" r nin degeri="<<&r<< endl;

 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>