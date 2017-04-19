<!DOCTYPE html>
<html>
<head>
 <title>Onluk Sayıyı İkilik Sayı Tabanına Çevirme</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C+ Onluk Sayıyı İkilik Sayı Tabanına Çevirme" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Onluk Sayıyı İkilik Sayı Tabanına Çevirme" />
</head>
<body>
<h3>Bu kodlar C++ ile Yazılmıştır.</h3>
<pre>
 <code>
#include "stdafx.h"
#include < iostream >
#include < string >
#include < conio.h >
using namespace std;
int tahmin_hak,kelime_uz,kontrol;
char kelime[20],tahmin[20],girilenler[20],harf;
void harf_tahmin(int k)
{ for(int i=0 ;i < = k+2 ; i++)
  { kontrol=0;
  cout << "Harf giriniz" << endl ;
  cin >> harf;
  girilenler[i]=harf;

  for(int j=0; j < k ;j++)
  { if (kelime[j]==harf){
         tahmin[j]=harf;
         kontrol=1;
        }
  }
  if (kontrol == 0) cout< < "Bu harf bu kelimede yok" << endl;
  for(int j=0;j < k;j++) cout << tahmin[j]; cout << endl;
  kontrol=0;
  for(int j=0;j < k;j++)
  if(kelime[j]!=tahmin[j]) kontrol=1;
  if (kontrol==0) {cout << "Tebrikler kelimeyi tahmin ettiniz \a\a\a\a" << endl;break;}
  //kontrol
  }
if (kontrol!=0)  cout << "Uzgunum bilemediniz" << endl;

}
int main()
{
   cout << "Bu program Adam asmaca oyunudur" << endl;
   cout << "İki kisi ile oynanır. Bir kelime giriniz" << endl;
   string pass ="";
   char ch;
    int i=0;
 ch = _getch();
   while(ch != 13){//character 13 is enter
      kelime[i]=ch;
   pass.push_back(ch);
      cout << '*';
      ch = _getch();
    i++;
   }

   system("pause");
kelime_uz=strlen(kelime);
cout << "Kelime uzunluğu:" << kelime_uz << endl;
system("cls");
for(int i=0;i < kelime_uz;i++)
{tahmin[i]='-';cout << tahmin[i];}
harf_tahmin(kelime_uz);

system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>