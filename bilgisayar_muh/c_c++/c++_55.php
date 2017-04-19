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
Karmaşık hale gelen pointer örneklerimizi pekişiriyoruz ve bu sefer biraz daha değişik örnek yapıyoruz. Derste yapılan örneklerden birisiydi. Açıklamalar İngilizce. Yabancı bir siteden işlemiştik. Size tavsiyem yabancı sitelere gözatmanız.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
 
#include "stdafx.h"
#include < iostream >
using namespace std;

int main()
{ 
int a=3;double g=34.45;
int *i= & a;double *q= & g; void *p;
//In this programme first we define int(4 byte),double(8byte) variables and a void variable;
p=q;
//Firstly we assign a double adress to void pointer. Since the interpreter doesn't know the
//type, if we want to show the value of void pointer, we must specify a type as in the follow.
cout<<"p pointer degeri= "<< p<< endl<<"point ettiği deger= "<< *((double*)p)<< endl;
//Second we assign an integer adress to void pointer. So to be able to show truely
//we specify int type.
p=i;cout<<"p pointer degeri= "<< p<< endl<<"point ettiği deger= "<<*((int*)p)<< endl;
//We define a char pointer
char j='p';
char w;
char *k="Pak";
// k will show Pak
//*k, will show P
//(void *) k will show adres
cout<< (void *)k<< endl;
//If you want to all the char variables adress
for (int i=0;i< 2;i++)
cout<<(void *)(k+i)<< endl;
system("pause");return 1;
}
 </code>
</pre>
</body>
</html>