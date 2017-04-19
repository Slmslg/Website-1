<!DOCTYPE html>
<html>
<head>
 <title>Farklı Sayı Üretme</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Farklı Sayı Üretme "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Farklı Sayı Üretme" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Farklı Sayı Üretme" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Farklı Sayı Üretme" />
</head>
<body>
<p>  
İstediğiniz kadar birbirinden farklı tekrarsız sayı üretmek için yazdığım C++ kodlarını paylaşayım istedim. Random fakat farklı işlemler yapmak istediğinizde kullanabileceğiniz bir kod.
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
 srand((unsigned)time(0));
 int sayi,random;
tekrar: int  dizi [100000]={}; 

 cout<<"Uretmek istediginiz sayi uzunlugunu giriniz."<< endl;
 cin>>sayi;
 cout<< endl;

    for(int i=1;i< = sayi;i++)
 { 
  
  while(i< = sayi)
  { 
       
                   random=rand()%sayi;    
  
     if(dizi[random]==0)
    
                 {
    dizi[random]=i; 
    break;
     }  
  }
  } 
 
 cout<<"Uretilen farkli sayilar"<< endl;
 for(int i=0;i< sayi;i++)
 {
  cout<< i+1<<". sayi = "<< dizi[i]<< endl;
 } 
 goto tekrar;

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>