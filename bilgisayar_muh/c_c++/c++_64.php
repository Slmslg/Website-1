<!DOCTYPE html>
<html>
<head>
 <title>Hafıza Oyunu</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Hafıza Oyunu"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C+ Hafıza Oyunu" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Hafıza Oyunu" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Hafıza Oyunu" />
</head>
<body>
<p>  
Birazda Farklı bişeyler yapıp hafıza oyunu yapıyoruz. Çok basit ve tam ayrıntılı bir şekilde olmasa da kolay bir örnek.
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
 
char harfler[2][4]={2,5,6,14,5,14,2,6},yildiz[2][4];
 int satir1,sutun1,satir2,sutun2,sayac=0,dongu=8;
 char secim[2][4];

 // Ilk Ekran 
 for (int i=0;i< 2;i++)
  {
   cout<< endl;
  for(int j=0;j< 4;j++)
  { cout<< harfler[i][j]<<"  ";
   
  }}
   Sleep(5000); 
   system("CLS");
    
   // Yilizlari ekranda gosterme
 for (int i=0;i< 2;i++)
  {
   cout<< endl;
  for(int j=0;j< 4;j++)
  { yildiz[i][j]='*'; secim[i][j]='*';
   cout<< yildiz[i][j]<<"  ";
  }}

  //Kullanicinin secim yapması
 for (int i=0;i< dongu;i++)
 {
 cout<< endl<< endl<< "Girmek istediginiz satir ve sutun numaralarini giriniz = ";
 cin>>satir1>>sutun1;

 cout<< endl<<"Girmek istediginiz satir ve sutun numaralarini giriniz = ";
 cin>>satir2>>sutun2;
 //Sadece secilen karakterlerin ekranda gostermesi icin atama
 secim[satir1][sutun1]=harfler[satir1][sutun1];
 secim[satir2][sutun2]=harfler[satir2][sutun2];

  // Secilen karakterlerin dogrulugunu kontrol etme icin
 if(harfler[satir1][sutun1]==harfler[satir2][sutun2])
 {
   yildiz[satir1][sutun1]=harfler[satir1][sutun1];
   yildiz[satir2][sutun2]=harfler[satir2][sutun2];
   sayac++; dongu--;
 }
 // Karakterler aynı degilse 
 else {
      for (int i=0;i< 2;i++)
      {
          cout<< endl;
      for(int j=0;j< 4;j++)
       { cout<< secim[i][j]<<"  ";
        
       }
      } 
   }

 secim[satir1][sutun1]='*';
 secim[satir2][sutun2]='*';

 Sleep(1000); system("CLS");
 cout<< endl<< endl;



     for (int k=0;k< 2;k++)
      {   
   cout<< endl;
  for(int l=0;l< 4;l++)
  { 
   cout<< yildiz[k][l]<<"  ";
  }
   }
    if(sayac==4)
    {
    system("cls");
    cout<< endl<<"Kazandiniz..... Tebrikler"<< endl<< endl;
    }
    else if(dongu>8)
    {
     cout<< endl<< endl<<"\t Kaybettiniz Uzgunuz....."<< endl;
     system("cls");
    }

 }

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>