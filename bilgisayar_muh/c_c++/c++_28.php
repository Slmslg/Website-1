<!DOCTYPE html>
<html>
<head>
 <title>Fonksiyon Uygulaması</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması" />
</head>
<body>
<p>  
Yeni başlayanları için ufak bir fonksiyon uygulaması
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

int f(int x){
 ++x; 
 return x; 
}
int  g(int v)
{ v=f(v);
 v=f(v);
 return v;
}
int h(int x)
 { x=g(x);
 x=g(x);
 x=g(x);
 return x;
}
void main()
{
 int counter=0;
 f(counter);
 cout<< counter<< endl;
 cout<<"f fonksiyonundan donen deger"<< f(counter)<< endl;
 g(counter);
 cout<<"g fonksiyonundan donen deger"<< g(counter)<< endl;
 cout<< counter<< endl;
 cout<<"h fonksiyonundan donen deger"<< h(counter)<< endl;
 cout<< counter<< endl;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>