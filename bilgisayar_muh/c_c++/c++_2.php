<!DOCTYPE html>
<html>
<head>
 <title>Global Değişkenler </title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,c++ global değişkenler "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ global değişkenler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ global değişkenler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ global değişkenler" />
</head>
<body>
<p>  
C++ ile global Değişken Uygulaması. "::" ile gösterilen değişkenler global değişkenlerdir.
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

int a=4,b=1,c=78/18;

void main()
{
cout<<"a="<< a<< endl<<"b="<< b<< endl<<"c="<< c<< endl;
  int a=3;b=14;c=6;
  cout<<"global a = "<< a<< endl<<"global b= " << ::b<< endl<<"global c= "<< ::c<< endl;

  a+=::b;

  ::b+=c;
  
  c+=::a;

 system("pause");
 return 0;
}

 </code>
</pre>
</body>
</html>