<!DOCTYPE html>
<html>
<head>
 <title>Asal Sayı Kontrolu</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ asal sayı bulma "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ asal sayı bulma" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ asal sayı bulma" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ asal sayı bulma" />
</head>
<body>
<p>  
Asal sayı kontrolü için aşağıdaki C++ kodunu kullanabilirsiniz.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
using namespace std;

void main()
{
 int n,kontrol;
tekrar:
 cout<< endl<<"Bir sayi giriniz = ";
tekrar2: cin>>n;
 cout<< endl;

 if(n==0 || n==1 || n==2){cout<< endl<<"Farkli bir sayi giriniz = "; goto tekrar2;}

 for(int i=2;i< n;i++)
 {
 kontrol=n%i;
 if (kontrol==0){cout<< n<<"  Asal sayi degildir."<< endl; break;}
 }
 if(kontrol!=0){cout<< n<<" Asal sayidir."<< endl;}
 goto tekrar;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>