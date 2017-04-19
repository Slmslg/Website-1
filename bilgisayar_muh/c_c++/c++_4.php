<!DOCTYPE html>
<html>
<head>
 <title>Denklem kökü bulma</title>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,c++ denklem kökü,c++ denklem kökü bulma "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ denklem kökü,c++ denklem kökü bulma " />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ denklem kökü,c++ denklem kökü bulma " />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ denklem kökü,c++ denklem kökü bulma " />
</head>
<body>
<p>  
II.Dereceden bir denklemi artık programlamada yazabiliriz. Fakat burada unutmamaız gereken < math.h > kütüphanesini unutmamak.
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
 int a,b,c;
 double x1,x2,delta;

 bas:cout<<"x^2 ifadesindeki katsayiyi giriniz.\n";
 cin>>a;
 cout<< endl<<"x ifadesindeki katsayiyi giriniz.\n";
 cin>>b;
 cout<<"\nSabit terimi giriniz.\n";
 cin>>c;
 
 delta = b*b - 4*a*c;
 cout<<"Delta = "<< delta;
 delta>=0? x1=(-b+sqrt(delta))/(2*a):x1=0;
 cout<<"\nBirinci kok x1 = "<< x1;
 delta>=0? x2=(-b-sqrt(delta))/(2*a):x2=0;
 cout<<"\nIkinci kok  x2 = "<< x2<< endl<< endl;

 goto bas; 
 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>