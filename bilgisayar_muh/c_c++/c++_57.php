<!DOCTYPE html>
<html>
<head>
 <title>C++'da Class Örneği</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++'da Class Örneği,C++'da Sınıf Örneği "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++'da Class Örneği,C++'da Sınıf Örneği" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,C++'da Class Örneği,C++ Sınıflar" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++'da Class Örneği,C++'da Sınıf Örneği" />
</head>
<body>
<p>  
C++ ile Class ( Sınıf ) oluşturma Örneği ;
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
using namespace std;
 
double pi=3.14;
class cember{
public:
 double r;
 
 double cevre();
 double alan();
 void oku();
 cember();
 
};
double cember::alan()
{
 return pi*r*r;
}
 double cember::cevre()
 {
  return 2*pi*r;
 }
 void cember::oku()
 {
  cout<<"Cemberin yaricapini giriniz = ";
  cin>>r;
 }
 cember::cember()
 {
 double r=5;
 }

void main()
{
   cember C;
  C.oku();
  cout<<"Cemberin alani = "<< C.cevre();
  cout<<"Cemberin cevresi"<< C.alan();

 system("pause");
 return 0;
}
 </code>
</pre>
</body>
</html>