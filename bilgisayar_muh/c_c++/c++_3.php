<!DOCTYPE html>
<html>
<head>
 <title>Basamak Sayısı Bulma</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,c++ basamak sayısı,c++ basamak sayısı bulma "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ basamak sayısı,c++ basamak sayısı bulma " />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ basamak sayısı,c++ basamak sayısı bulma " />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ basamak sayısı,c++ basamak sayısı bulma " />
</head>
<body>
<p>  
Bu program 1-10000 arasındaki sayıların basamak sayıları sıfır olmamak şartıyla
basamak sayılarının çarpımına bölümünü beş bulmaya yarar...
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
  int birler,onlar,yuzler,binler;
 for (int i=2;i< 10000;i++)
 {
 
  binler=i/1000;
  yuzler=(i%1000)/100;
  onlar=((i-yuzler*100)%100)/10;
  birler=(i-yuzler*100)%10;
  

  if(birler==0 || onlar==0 || yuzler==0 || binler== 0)
  {
  
  }
  else if((birler*onlar*yuzler*binler)/(birler+onlar+yuzler+binler)==5)
  {
  cout<< i<< endl;
  }
 }
 system("pause");
 return 0;
}
 </code>
</pre>
</body>
</html>