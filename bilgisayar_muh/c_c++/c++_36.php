<!DOCTYPE html>
<html>
<head>
 <title>Sıralama ( Sorting )</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Sıralama "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Sıralama" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Sıralama" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Sıralama" />
</head>
<body>
<p>  
Sıralamak istediğiniz kadar sayıyı giriniz ve sıralayınız.
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

  int dizi[99999],n,tut;
  cout<<"Kac tane eleman istersiniz ? "<< endl;
  cin>>n;
  
  for (int i=0;i< =n;i++)
   dizi[i]=0+rand()%255;
  
  for (int i=0;i< =n;i++)

  { for (int j=0;j< =n;j++)

    {
     if(dizi[j]>dizi[i])

     { 
      tut=dizi[i];
      dizi[i]=dizi[j];
      dizi[j]=tut;
     }    
    }
  }
  for (int i=0;i< =n;i++)
   cout<< dizi[i]<< endl;

 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>