<!DOCTYPE html>
<html>
<head>
 <title>Taş - Kağıt - Makas Oyunu</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Taş - Kağıt - Makas Oyunu "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Taş - Kağıt - Makas Oyunu" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Taş - Kağıt - Makas Oyunu" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Taş - Kağıt - Makas Oyunu" />
</head>
<body>
<p>  
Derste yapılan örneklerden biri. II. TOK Oyunu.
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

  
 char user;int comp;
int c_puan=0,u_puan=0;
basla:
cout<<"t tas,k kagit, m makas,e çikis"<< endl;
cin>>user;
comp=rand()%3;
switch(comp)
{case 0:cout<<"Tas"<< endl;break;
case  1:cout<<"Kagit"<< endl;break;
case  2:cout<<"Makas"<< endl;break;
}
switch(user)
{case 't':case 'T':if (comp==1) c_puan++;else if(comp==2) u_puan++;break;
case 'k':case 'K':if (comp==2) c_puan++;else if(comp==0) u_puan++;break;
case 'm':case 'M':if (comp==0) c_puan++;else if(comp==1) u_puan++;break;
case 'e':case 'E':cout<<"Cikmak istediniz"<< endl;goto son;break;
default: cout<<"Yanlis karakter girdiniz"<< endl;
}
goto basla;
son:
cout<<"User :"<< u_puan<< endl<<"Comp :"<< c_puan<< endl;
if(u_puan>c_puan)cout<<"Siz kazandınız"<< endl;else if(u_puan==c_puan) cout<<"Berabere"<< endl; else
 cout<<"Ben kazandim"<< endl;

 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>