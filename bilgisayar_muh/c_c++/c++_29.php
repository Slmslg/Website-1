<!DOCTYPE html>
<html>
<head>
 <title>İntegral Hesabı I </title><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ İntegral Hesabı "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ İntegral Hesabı" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ İntegral Hesabı" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ İntegral Hesabı" />
</head>
<body>
<p>  
Matematik Bölümünden gelen sorunun cevabıydı bu kod. Bir ara İntegral hesabı yapan kod yazar mısın demişlerdi. Bu kodu yazmıştım.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>

#include "stdafx.h"
#include < iostream >
using namespace std;
double alt_sinir,ust_sinir;
class integral{ 
public:
 double kenar1,kenar2;
    integral();
    void oku();
    double f(double);
    double hesapla();
    
    
};
 double integral::f(double x)
 {
  return x*x-5*x+10;
 }
 double integral::hesapla()
 {
  return (f(double (alt_sinir))+f(double (ust_sinir)))/2*(ust_sinir-alt_sinir);
 }
 
 integral::integral()
 {
  alt_sinir=0;
  ust_sinir=1;

 }
 void integral::oku()
{cout<<"Kenar1 ve kenar2 degerlerini giriniz"<< endl;
cin>>kenar1>>kenar2;
cout<<"Kenar1="<< kenar1<< endl;
cout<<"Kenar2="<< kenar2<< endl;
}
int _tmain(int argc, _TCHAR* argv[])
{
 integral i1;
 
 cout<<"Alan = "<< i1.hesapla();
 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>