<!DOCTYPE html>
<html>
<head>
 <title>Üstel Fonksiyon</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Üstel Fonksiyonı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Üstel Fonksiyon" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Üstel Fonksiyon" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Üstel Fonksiyon" />
</head>
<body>
<p>  
Üstel fonksiyon ve Faktoriyel Alma işlemlerini yapan bir uygulama.

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

int kuvvet(int taban,int us)
{ int sonuc=1;
 for(int i=1;i< = us;i++)
  sonuc*=taban;
 return sonuc;
}
int faktoryel(int i)
{ int sonuc=1;
 for (int j=i;j>=1;j--)
  sonuc*=j;
 return sonuc;
}
double ustel(int x=1)
{ 
 double toplam=1;
 for(int i=1;i< = 10;i++)
  toplam+=double(kuvvet(x,i))/faktoryel(i);
 return toplam;

}

void main()
{
 //cout<<"2.5^3="<< kuvvet(2.5,3)<< endl;
 //cout<<"5!="<< faktoryel(3)<< endl; 
 cout<<"e^1="<< ustel()<< endl;
 cout<<"e^1="<< ustel(1)<< endl;
 cout<<"e^2="<< ustel(2)<< endl;
 cout<<"e^3="<< ustel(3)<< endl;
 cout<<"e^(e^2)="<< ustel(ustel(2))<< endl;
 cout<<"e^7="<< ustel(7)<< endl;
 cout<< kuvvet(ustel(1),kuvvet(2,3))<< endl;
  cout<< faktoryel(faktoryel(3))<< endl;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>