<!DOCTYPE html>
<html>
<head>
 <title>Yazı Rengini Değiştirme</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++'da yazı rengini değiştirme "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++'da yazı rengini değiştirme" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++'da yazı rengini değiştirme" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++'da yazı rengini değiştirme" />
</head>
<body>
<p>  
C++'da consoledaki yazı rengini değiştirmeye bir örnek.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>


#include "stdafx.h"
#include < iostream >
#include < time.h >
#include "windows.h"
using namespace std;

void main()
{ 
 system("cls");
 system("color 02");
 cout<<"Dısaridan girilen 10 adet sayinin"<< endl;
 cout<<" birden o sayiya kadar olan sayilarin toplamlarini bulan "<< endl;
 cout<<"sonrasinda bulunan toplamlari toplayan program"<< endl;

 int sayi=1,toplam=0 ;

 for (int i=1;i<=10;i++)
 {
  cout<< i<<". Sayiyi giriniz = ";
  cin>> sayi;

  for (int j=1; j<=sayi ;j++)
  {
  toplam = toplam + j ;
    }
  cout<<"Toplam = "<< toplam<< endl<< endl;
  if (i==10)
  {
  cout<<"İslem tamamlanmistir."<< endl;
  system("cls");
  cout<<"Toplam = "<< toplam<< endl<< endl;

  for (int k=0;k< = 100;k--)
  {
   
  cout<<"010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101"<< endl;
  
  }


  }
 }

system("pause");
 return 0;

 </code>
</pre>
</body>
</html>