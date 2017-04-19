<!DOCTYPE html>
<html>
<head>
 <title>Pointerlar</title>
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
Pointer ile ilgili oldukça fazla örnek yapmaya çalışıyorum. Bu da bir diğeri.
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

// Fonksiyon tanımı (definition)
/*int kup(int x)
{int n=34;
 cout<<"n="<< n<< endl;
return x*x*x;
}*/
int faktoryel(int);
//double usal( double taban,int us);
double usal( double taban,int us)
{ double toplam=1;
 for (int i=1;i< =us;i++)toplam*=taban;
 return toplam;
}
double e_taban(int x,int n)
{  double toplam=1;
 for (int i=1;i< =n;i++)
    toplam+=double(usal(x,i))/faktoryel(i);
 return toplam;
}
double sin(double x)
{     double toplam=0;
  for (int i=1;i< =26;i=i+2)
    toplam+=usal(-1,(i-1)/2)*double(usal(x,i))/faktoryel(i);
   return toplam;
}


double toplama(double x=1.5,double y=1.8)
{return x+y;
}

void main()
{
 /*int n=45657;
cout<<"5^3="<< kup(5)<< endl;// fonksiyon cağırma
cout<<"8^3="<< kup(8)<< endl;
cout<<"2^3="<< kup(2)<< endl;
cout<<"n="<< n<< endl;
cout<<"5!="<< faktoryel(5)<< endl;
cout<<"8^5="<< usal(8,5)<< endl;
cout<<"2^16="<< usal(2,16)<< endl;
cout<< e_taban(1,10)<< endl;
cout<< usal(5,0)<< endl;
cout<< usal(-1,5)<< endl;
cout<< usal(-1,4)<< endl;
cout<< usal(-1,0)<< endl;
cout<< sin(3.14/2)<< endl;
cout<< sin(3.14/6)<< endl;
cout<< sin(3.14/3)<< endl;
cout<< faktoryel(faktoryel(3))<< endl;
cout<< usal(usal(2,3),usal(3,2))<< endl;
*/
cout<< toplama(3,4)<< endl;//7
cout<< toplama(3)<< endl;//4.8
cout<< toplama()<< endl;//3.3
cout<< faktoryel()<< endl;
cout<< faktoryel(5)<< endl;
cout<< faktoryel(faktoryel())<< endl;
system("pause");
 return 0;
}
int faktoryel(int x=3)
{ int toplam=1;
 for(int i=x;i>=1;i--)
      toplam*=i;
 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>