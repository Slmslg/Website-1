<!DOCTYPE html>
<html>
<head>
 <title>Fonksiyon Uygulaması</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,c++ Fonksiyon Uygulaması "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Fonksiyon Uygulaması" />
</head>
<body>
<p>  
Fonksiyonlar için güzel bir uygulama yatak ve dikey çizgi oluşturma.
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


double random(int x)
{ double k;
 int i=x;
 k=i/44488;
 i=48271*(i%44488)-3399*k;
 if (i< 0) i=i+2147483647;
 return float(i)/2147483647;
}
void locate(int x,int y)
{ for(int i=0;i< x;i++)cout<< endl;
 for(int i=0;i< y;i++)cout<<" ";
}
void yatay_dogru_ciz(int l)
{
  for(int i=0;i< l;i++)cout<<"_";
}
void dikey_dogru_ciz(int x,int l)
{
 for(int i=0;i< l;i++)
 {for(int i=0;i < x;i++)
    cout<<" ";
  cout<<"|"<< endl;
  
 }
}


void main()
{
 srand ((unsigned int) time(0));

 /*locate(12,23);
 /yatay_dogru_ciz(20);
 cout<< endl;
 dikey_dogru_ciz(20,8);
 */
 double toplam=0;
 for(int i=0;i< 10000;i++)
  toplam+=random(rand());
 cout<<"1000 sayı ortalaması="<< toplam/10000<< endl;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>