<!DOCTYPE html>
<html>
<head>
 <title>Pointer Örneleri</title>
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
İşaretçi örneklerimizi daha da karmaşık hale sokalım. Yapılacak hataları göz ardı etmeyelim. Bu da iyi bir işretçi örneği.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
 
#include "stdafx.h"
#include < iostream >
using namespace std;
int main()
{/*int a=23,*p= & a;
cout<<"a="<< a<< endl<<"a adresi="<< & a << endl;
cout<<"p="<< p<< endl<<"p adresi="<< & p<< endl<<"*p="<< *p;
p++;
cout<< endl<<"p="<< p<< endl<<"p adresi="<<&p<< endl<<"*p="<<*p<< endl;
// Farklı bir pointer tanımı
float b=2.31,*q;
q= & b;
// q=b olamaz. q işaretçi adres tutması gerekiyor. 
//Oysa b değişken adres değil
cout<<"b="<< b<< endl<<"b adresi="<<&b<< endl;
cout<<"q="<< q<< endl<<"q adresi="<<&q<< endl<<"*q="<<*q;
b=4.56;
//b=q; Değişkene pointer atanamaz
cout<<"q="<< q<< endl<<"q adresi="<<&q<< endl<<"*q="<<*q;
*q=12.45;// q b degiskeninn adresini tuttuğu için bu adresin içini 
//degistirmek b yi degistirir
cout<<"b="<< b<< endl;
q++;//float işaretçi degerini bir artması float 4byte oldugu icin dört artırır
cout<<"q="<< q<< endl<<"q adresi="<<&q<< endl<<"*q="<<*q;
*/
double x=1.234,y=1.57687,*r= & x;
cout<<"x="<< x<< endl<<"x adresi="<< &x<< endl;
cout<<"y="<< y<< endl<<"y adresi="<<&y<< endl;
cout<<"r="<< r<< endl<<"r adresi="<<&r<< endl<<"*r="<<*r<< endl;
r++;
cout<<"x="<< x<< endl<<"x adresi="<<&x<< endl;
cout<<"y="<< y<< endl<<"y adresi="<<&y<< endl;
cout<<"r="<< r<< endl<<"r adresi="<<&r<< endl<<"*r="<<*r;
cout<< endl;
system("pause");
return 0;
}



 </code>
</pre>
</body>
</html>