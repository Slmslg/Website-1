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
Ufak bir uygulama daha. Basit bir yapay zeka. Siz bunu ileriye taşıyabilirsiniz. Görselini de oluşturabilirseniz güzel bir oyun olmuş olur.
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

  
 char secim ;
 int rakip_secim, rakip=0;
 int oyuncu=0;
 
 cout<<"Seciminizi giriniz...\n  ";
 cout<<"Tas icin t\n "<<"Kagit icin k\n"<<"Makas icin m"<<" tusuna basiniz.\nCikis islemi icin c tusuna basiniz.\n";
 for(int i=1;i< 10;i++){

 cin>>secim;
 rakip_secim = rand()%3;

 switch (secim)
 {
    case 't'   :  //Taş
  if(rakip_secim==1){ cout<<"Rakip Makas secti.\n Kazandin... "; oyuncu++ ;}
  else if(rakip_secim==2){ cout<<"Rakip Kagit secti. \n Kaybettin..."; rakip++;}
  else if(rakip_secim==0) cout<<"Berabere kaldiniz...\n";
  break ;

 case 'm'   : //Makas
  if(rakip_secim==1){ cout<<"Rakip Tas secti. \n Kaybettin..."; rakip++ ;}
  else if(rakip_secim==2){ cout<<"Rakip Kagit secti.\n Kazandin... "; oyuncu++;}
  else if(rakip_secim==0) cout<<"Berabere kaldiniz...\n";;
  break;

 case 'k'   :  //Kağıt
  if(rakip_secim==1){ cout<<"Rakip Makas secti.\n Kaybettin... "; rakip++ ;}
  else if(rakip_secim==2) {cout<<"Rakip Tas secti.\n  Kazandin..."; oyuncu++;}
  else  cout<<"Berabere kaldiniz...\n";
  break ;

    case 'c'   : //Çıkış
  if(oyuncu>rakip) cout<<"Kazandiniz\n "; else if (rakip>oyuncu) cout<<"Bilgisayar Kazandi\n ";
     else cout<<"Berabere Kaldiniz \n";
  break;


  default: cout<<"Uygun bir karakter girmediniz\n"<< endl;break;
 }
 
}
 cout<< endl<<"\nOyun bitti.... \nSonuc ==";
 if(oyuncu>rakip) cout<<"\nKazandiniz\n "; else if (rakip>oyuncu) cout<<"\nBilgisayar Kazandi\n ";
     else cout<<"\nBerabere Kaldiniz \n";
 cout<<"Puanin : "<< oyuncu<< endl<<"Bilgisayarin Puani : "<< rakip<< endl;


 system("pause");
 return 0;
}


 </code>
</pre>
</body>
</html>