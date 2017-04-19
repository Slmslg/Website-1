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
Void pointerlarda II. Örneğimiz.
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

 int a=3;
double g=34.45;
int *i=& a;double *q=& g; void *p;
cout<<"i pointer degeri= "<< i<< endl;
cout<<"q pointer degeri= "<< q<< endl;
p=i;cout<<"p pointer degeri= "<< p<< endl;
p=q;cout<<"p pointer degeri= "<< q<< endl;
system("pause");return 1;
 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>