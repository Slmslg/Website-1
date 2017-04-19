<!DOCTYPE html>
<html>
<head>
 <title>Merge Algoritması</title>
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
Merge Algoritmasını araştırırken yabancı sitelerden birinde bulmuştum bu kodu. Bu kodla anlamıştım umarım işinize yarar.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>

#include "stdafx.h"
#include < iostream >
#include < algorithm >

using namespace std;
 void mergesort(int arr[], int l, int h);


int _tmain(int argc, _TCHAR* argv[])
{
  int dizi[100],n,i = 0; 
  
 cout<<"Enter the number of elements to be sorted: ";
 cin>>n;
 cout<<"\n Enter the elements to be sorted: \n";

  for(i = 0 ; i < n ; i++ )
   {
  cout<< i;
  cin>>dizi[i];
   }
  cout<< endl;
  
 cout<<" Before Mergesort: ";  //Array Before Mergesort
 for(i = 0; i < n; i++)
   {
   cout<< dizi[i];
   }
 cout<< endl;
  
 mergesort(dizi, 0, n - 1); 
 
 cout<<"\n After Mergesort: ";  //Array After Mergesort
 for(i = 0; i < n; i++)
 {
  cout<< dizi[i];
 }
 cout<< endl;




 system("pause");
 return 0;
}


 void mergesort(int dizi2[], int l, int h) 
{
 int i = 0;
 int uzunluk = h - l + 1;
 int pivot  = 0;
 int merge1 = 0;
 int merge2 = 0;
 int temp[100];
  
 if(l == h)
 return;
  
 pivot  = (l + h) / 2;
  
 mergesort(dizi2, l, pivot);
 mergesort(dizi2, pivot + 1, h);
   
 for(i = 0; i < uzunluk; i++)
 {
  temp[i] = dizi2[l + i];
 }
  
 merge1 = 0;
 merge2 = pivot - l + 1;
  
 for(i = 0; i < uzunluk; i++) 
 {
  if(merge2 <= h - l)
  {
   if(merge1 <= pivot - l)
   {
    if(temp[merge1] > temp[merge2])
    {
     dizi2[i + l] = temp[merge2++];
    }
 
    else
    {
     dizi2[i + l] = temp[merge1++];
    }
   }
 
   else
   {
    dizi2[i + l] = temp[merge2++];
   }
  }
 
  else
  {
   dizi2[i + l] = temp[merge1++];
  }
 }
}


 </code>
</pre>
</body>
</html>