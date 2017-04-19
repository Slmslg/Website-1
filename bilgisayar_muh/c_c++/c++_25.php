<!DOCTYPE html>
<html>
<head>
 <title>Onluk Sayıyı İkilik Sayı Tabanına Çevirme</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,c++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme" />
</head>
<body>
<p>Kodlar C++ ile yazılmıştır.</p>
<pre>
 <code>
#include "stdafx.h"
#include < iostream >
using namespace std;
void decimal2bin(int say,int n, int b[])
{ for(int i=n ; i >=1 ; i--)
  {b[i]=say / pow(2.0,i) ;
  say=say%int(pow(2.0,i)) ;
  cout << b[i] ;
  }
b[0]=say ;
cout << b[0] << endl;
}
int main()
{int say1, n,b[100];
cout << "Bu program girdiğiniz sayiyi iki tabanina dönüstürür" << endl;
cin >> say1;
n=log(double(say1)) / log(2.0);
decimal2bin(say1,n,b);

system("pause");
return 0;
}


 </code>
</pre>
<a href="http://slmslg.blogspot.com.tr/2015/05/1diziyi-ekrana-yazdrma.html">1.Diziyi Ekrana Yazdırma -->></a>
</body>
</html>