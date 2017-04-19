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
Pointer örneklerini çoğaltıyoruz. Bulduğunuz sonucları yazabilirsiniz.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
 

#include "stdafx.h"
#include < iostream > 

using namespace std; 

int main()
{ 

 int a[6]={2,4,6,8},b=45;
int *c=a,i;
for (i=0;i<=3;i++)
cout<<"a["<< i<<"]="<< *(c++)<< " adresi= "<< c<< endl;
// Döngüden çıktığı anda i değeri i=4 tür.
c=a+i;//c=c+4'ün anlamı c=c+4*4=c+16 buda a[4] adresidir.
*c=18;//a[4] içeriği 18 yapıldı
c++; //c+20 adresindeyiz
*c=23;//a[5]=23;
c= & b ;//Artık b'yi işaret ediyor 
cout<< *c<< endl;// *c=45
c=a;
for (int i=0;i<=5;i++)
cout<<"a["<< i<<"]="<<*(c++)<<" adresi= "<< c<< endl;

int ba=4;float bb=1.2,*pp= & b a;
return 0; system("pause");
} 


 </code>
</pre>
</body>
</html>