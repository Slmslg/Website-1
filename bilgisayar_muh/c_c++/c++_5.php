<!DOCTYPE html>
<html>
<head>
 <title>Dışarıdan Girilen Sayıların Toplamı</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,c++ dışarıdan girilen sayıların toplamı "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ dışarıdan girilen sayıların toplamı " />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ dışarıdan girilen sayıların toplamı" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ dışarıdan girilen sayıların toplamı " />
</head>
<body>
<p>  
Vize uygulama sınavı sorusuydu ve çok basitti.Dışarıdan girilen 10 adet sayının, birden o sayıya kadar olan sayıların toplamlarını bulan ve sonrasında bul bulunan toplamları toplayan program.
Yani mesela 3 - 8 - 10 girdik. Öncelikle 1-3 arasındaki sayıları sonra 1-8 arasındaki sayıları ve 1-10 arasındaki sayılarını toplayıp, en sonunda da buradan çıkan sonuçları ekrana yazıran program kodu.( C++ile )

<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>


#include "stdafx.h"
#include < iostream >
#include < time.h >
using namespace std;

void main()
{ 
 system("cls");
int sayi=0,toplam=0 ;

 for (int i=1;i<=10;i++) //10 adet sayi girişi için döngü.
 {
  cout<< i<<". Sayiyi giriniz = ";
  cin>> sayi;   

 for (int j=1; j<=sayi ;j++) //1'den girilen sayıya kadar döngü olacak. 
  {
  toplam = toplam + j ;  //Toplam'ı bulmak için.
  }

  cout<<"Toplam = "<< toplam<< endl<< endl; //Toplam'ı ekrana yazdırmak için.

  if (i==10) // Eğer i değeri 10dan küçük yada eşitse burayı es geçer ve döngünün başına döner i sayıısı 1 artar.
  {
  cout<<"İslem tamamlanmistir."<< endl;
  
  cout<<"Toplam = "<< toplam<< endl<< endl;  //10 adet sayı girildikten sonra bütün toplamları ekrana yazdırır.

  

 }
 }



 </code>
</pre>
</body>
</html>