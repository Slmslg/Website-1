<!DOCTYPE html>
<html>
<head>
 <title>Pointerlar</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,c++ Pointerlar "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Pointerlar" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Pointerlar" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Pointerlars" />
</head>
<body>
<p>  
isupper()
ispunct() 
islower()
tolower()
fonksiyonları pointer ile ilgili uygulmamız.
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


void main()
{
 /*double a=13.34e100,*p = & a,b=10.2,*q= & b;
q= & a;
*q=13;
p=q;
*q=23;
q= & b;
*q=a;
cout<<"a="<< a<< endl<<"b="<< b<< endl<<"*p="<<*p<< endl<<"*q="<<*q<< endl;*/
 
  /*int a=12,*p= & a;
for (int i=0;i< 1000000;i++)
{p++;*p=23;}*/

 /*char p;
for (int i=0;i< 20;i++)
{cout<<"Bir karakter giriniz"<< endl;
cin>>p;
cout<<"isupper('k')="<< isupper(p)<< endl;
cout<<"ispunct('k')="<< ispunct(p)<< endl;
cout<<"islower('k')="<< islower(p)<< endl;
cout<<"tolower('k')="<< tolower(p)<< endl;
}
*/
 /*int a=3;int *p= & a;
cout<<"a= "<< a<< endl;
cout<<"a nın adresi= "<< &a<< endl;
cout<<"p nin adresi= "<< &p<< endl;
cout<<"p nin gösterdiği değişken= "<< *p<< endl;
cout<<"p nin degeri="<< p<< endl;*/
 /*int b=10,*p= & b;
 double c=1.02e8,*q= & c;
 char a='k',*r= & a;
 cout<<"p="<< p<< endl<<"q="<< q<< endl<<"r="<< r<< endl;
 cout<<"*p="<<*p<< endl<<"*q="<<*q<< endl<<"*r="<<*r<< endl;
 p++;q++;r++;
 cout<<"p="<< p<< endl<<"q="<< q<< endl<<"r="<< r<< endl;
 cout<<"*p="<<*p<< endl<<"*q="<<*q<< endl<<"*r="<<*r<< endl;*/
 // diziler ve isaretçiler
 int a[3]={2,3,4};
 char b[5]={'a','B','c'};
 cout<< a[0]<< endl<< a[1]<< endl<< a[2]<< endl<< a<< endl;
 cout<< b[0]<< endl<< b[1]<< endl<< b[2]<< endl<< b<< endl;


 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>