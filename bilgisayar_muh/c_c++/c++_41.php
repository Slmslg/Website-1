<!DOCTYPE html>
<html>
<head>
 <title>Merge Algoritması While Döngüsü İle</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++ Merge Algoritması "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Merge Algoritması" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Merge Algoritması" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Merge Algoritması" />
</head>
<body>
<p>  
Merge Algoritmasından Üçüncü örneğimiz. While döngüsüyle yapalım dedim.Merge Sort'u bir çok yolla yapmış olduk.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
 

#include "stdafx.h"
#include < iostream > 

using namespace std; 

int ekranaBastir(int dizi[],int dizininBoyutu){ 
for(int i=0;i< dizininBoyutu;i++){ 
cout<< dizi<<"-"; 
} 
} 

int siralama(int dizi[],int dizininBoyutu){ 
int enKucukSayi=0; 
int enKucukSayiIndexi =0; 
for(int i=0;i< dizininBoyutu-1;i++) 
{ 
enKucukSayi = dizi[i]; 
enKucukSayiIndexi=i; 
for(int j=i+1;j< dizininBoyutu;j++) 
{ 
if(enKucukSayi>dizi[j]) // Eşitlik durumunda değiştirmeye gerek yok. 
{ 
enKucukSayi = dizi[j]; 
enKucukSayiIndexi = j; 
} 
} 
//Enkucuk sayi bulundu. 
if(i!=enKucukSayiIndexi) 
{ 
// Dizi elemanları yer değiştiriliyor. 
int geciciSayi = dizi[i]; 
dizi[i] = enKucukSayi; 
dizi[enKucukSayiIndexi] = geciciSayi; 
} 
} 

//artık sıralandı 
ekranaBastir(dizi,dizininBoyutu); 


int main()
{ 

int x; 
cout<<"Kac tane sayi giricegini gir :"; 
cin>>x; 
int dizi[10]; 
for(int i=0;i< x;i++){ 
cout<<(i+1)<<". sayiyi girin:"; 
cin>>dizi[i]; 
} 

siralama(dizi,x); 

return 0; system("pause");
} 


 </code>
</pre>
</body>
</html>