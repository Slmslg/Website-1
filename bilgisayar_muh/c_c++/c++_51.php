<!DOCTYPE html>
<html>
<head>
 <title>Pointer ( İşaretçiler ) Uygulaması </title><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
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
Pointerları pekiştirme amaçlı bir uygulama.
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


void degistir(int &a,int &b)
{ int ek=a;
a=b;
b=ek;
cout<<"a= "<< a<<"  b="<< b<< endl;
}
void degistir(double &x1,double &y1)
{ double ek=x1;
x1=y1;
y1=ek;
cout<<"x1= "<< x1<<"  y1="<< y1<< endl;
}


void main()
{
 int x=34,y=45;
degistir(x,y);
cout<<"x="<< x<<" y="<< y<< endl;
double z=45.54,t=5443.576;
degistir(z,t);
cout<<"z="<< z<<" t= "<< t<< endl;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>