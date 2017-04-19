<!DOCTYPE html>
<html>
<head>
 <title>C++'da Çizgi Çizdirme</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++'da Çizgi Çizdirme "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++'da Çizgi Çizdirme" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++'da Çizgi Çizdirme" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++'da Çizgi Çizdirme" />
</head>
<body>
<p>  
C++ ile üniversitede yaptığımız en basit ve zevkli uygulamaydı Çizgi çizdirme. Bu nedenle bu kodu paylaşmak istiyorum.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
#include < ctime >
using namespace std;

void ciz(int boyut,int d_y,int x,int y)
  { system("cls");
   //Konum belirleme
   for (int i=1;i< =y;i++)cout<< endl;
   for(int i=1;i< x;i++)cout<<" ";
   for(int i=1;i<=boyut;i++)
    if (d_y==1) {cout<<"|"<< endl;for(int i=1;i< x;i++)cout<<" ";} else cout<<"_";
   cout<< endl<< endl;
  }

void main()
{
 int boyut,d_y, x,y;
  cout<<"Dikey mi yatay mı?(dikey=1,yatay=2)"<< endl;
  cin>>d_y;
  cout<<"Boyut giriniz"<< endl;
  cin>>boyut;
  cout<<"x konumu"<< endl;
  cin>>x;
  cout<<"y konumu"<< endl;
  cin>>y;
  ciz(boyut,d_y,x,y);

 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>