<!DOCTYPE html>
<html>
<head>
 <title>Elektrik Devre İşlemleri</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Elektrik Devre İşlemleri "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Elektrik Devre İşlemleri" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Elektrik Devre İşlemleri" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++Elektrik Devre İşlemleri" />
</head>
<body>
<p>  
Direnc hesabi,
Kondansator hesabi,
Enduktans hesabi
işlemlerini paralel yada seri olması durumları ile fonksiyon kullanmadan yapmıştık üniversite 1.sınıfta. Gayet kolay bir uygulamaydı. Buyrun kodları :
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
tekrar:
 double Res=0,direnc,seri,paralel,enduktans,sonuc=0,N;
int secim;
cout<<"ANA MENU"<< endl;
cout<<"1-Direnc hesabi"<< endl;
cout<<"2-Kondansator hesabi"<< endl;
cout<<"3-Enduktans hesabi"<< endl;
cout<<"4-Cikis"<< endl;
cout<<"Secim Yapiniz.";
cin>>secim;
switch(secim){

 case 1: cout<<"direnc hesabi"<< endl;
  cout<<"secim yapiniz"<< endl;
  cin>>secim;
  if(secim==1){ cout<<"Seri Direnc Hesabi "<< endl<<"Kac direnc gireceksiniz = "; 
   cin>>N;
   for(int i=1;i<=N;i++)
   {cout<< i<<"direnci giriniz."<< endl;
   cin>>direnc;
   sonuc=sonuc+direnc;
   }
   cout<<"sonuc="<< sonuc; goto tekrar;
  }
  else if (secim==2) {cout<<"Paralel Direnc Hesabi "<< endl<<"Kac direnc gireceksiniz = "; 
   cin>>N;
   for(int i=1;i<=N;i++){
   cout<< i<<"direnci giriniz."<< endl;
   cin>>direnc;
   sonuc=sonuc+1/direnc;
    }cout<<"sonuc="<< 1/sonuc;break;goto tekrar;
  }

 case 2: cout<<"kondansator hesabi"<< endl;
   for(int i=1;i<=N;i++)
   cout<< i<<"kondansator sayisini girin."<< endl;
    cin>>N;{
   cout<<"seri kondansator hesabi icin 1'i,paralel kondansator hesabi icin 2 yazin ekrana."<< endl;
    cin>>secim;
    if (secim==1){    
    
    cout<<"sonuc=";}
   }
 case 3: cout<<"enduktans hesabi"<< endl;break;
   
    for (int i=1;i<=N;i++){
    cout<< i<<"enduktans sayisini girin."<< endl;
       cin>>N;
    sonuc=direnc+sonuc;}
   

 case 4: cout<<"cıkıs"<< endl;break;
cout<<"programimi kullandiğiniz icin tesekkurler."<< endl; }

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>