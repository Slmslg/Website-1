<!DOCTYPE html>
<html>
<head>
 <title>Tersi ile Aynı Olan Sayılar</title>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,Tersi ile Aynı Olan Sayılar "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Tersi ile Aynı Olan Sayılar " />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,Tersi ile Aynı Olan Sayılar" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Tersi ile Aynı Olan Sayılar " />
</head>
<body>
<p>  
Derste yapılan örneklerden biri.Tersi ile kendisi aynı olan sayılar.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>


#include "stdafx.h"
#include < iostream >
#include < time.h >
using namespace std;

int _tmain(int argc, _TCHAR* argv[])
{ 
 system("cls");

 int birler,onlar,yuzler;

 for(int i=999;i>=0;i--)
 {
  birler =i%10;  
  yuzler=i/100;  
        onlar =(i-(yuzler*100))/10;

  

  if((i>99 && i< 1000 && birler==onlar && birler==yuzler && yuzler==onlar)|| yuzler==birler)
  {
  cout<< i<< endl;  
  }
  else if (i< 100 && onlar==birler)
  {
   cout<< i<< endl;
  }

  else if(i< 10)
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