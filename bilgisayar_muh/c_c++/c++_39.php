<!DOCTYPE html>
<html>
<head>
 <title>Hafıza Oyunu</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++ Hafıza Oyunu "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Hafıza Oyunu" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Hafıza Oyunu" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Hafıza Oyunu" />
</head>
<body>
<p>  
Sıralama Algoritmalarından en çok bilinen ve en iyilerinden olan merge algoritmasının mantığı gifteki gibidir. 
<h5>Merge Sort gif</h5>
<div class="separator" style="clear: both; text-align: center;"><a tittle="Merge Algoritması" href="http://4.bp.blogspot.com/-aC0l4qI3nvY/VWsrzOoiUAI/AAAAAAAACqs/Y-xCCA80epY/s1600/merge.gif" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" src="http://4.bp.blogspot.com/-aC0l4qI3nvY/VWsrzOoiUAI/AAAAAAAACqs/Y-xCCA80epY/s320/merge.gif" /></a></div>
<h5>Bubble Sort gif</h5>
<div class="separator" style="clear: both; text-align: center;"><a tittle="Bubble Sort Algoritması" href="http://3.bp.blogspot.com/-YuNC8tIbNwI/VWstvVr_dVI/AAAAAAAACq4/9eE2-A6ZG0M/s1600/Bubble.gif" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" src="http://3.bp.blogspot.com/-YuNC8tIbNwI/VWstvVr_dVI/AAAAAAAACq4/9eE2-A6ZG0M/s320/Bubble.gif" /></a></div>
<h5></br>Bubble Sort ve Merge Sort Algoritması C++ Kodu </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
using namespace std;

    /*   MERGE ALGORITMASI    */
 
  void birlestir(int a[], int b[], int toplam[],int N1,int N2) 
 { 
 int i=0,j=0,p,k=0;

 while (i < N1 && j < N2) 
   { 
 
   if (a[i] < = b[j]) 
   { 
    toplam[k] = a[i]; 
    i++; 
   } else 
   { 
    toplam[k] = b[j]; 
    j++; 
    } 
  k++; 
  } 

  if (i < N1) 
  { 
   for (int p = i; p < N1; p++) 
    { 
     toplam[k] = a[p]; 
        k++; 
    } 
  }
  else
  { 
  for (int p = j; p < N2; p++) 
  { 
    toplam[k] = b[p]; 
       k++; 
     } 
 } 
 } 
 

    
 
    /* RANDOM */
  void rastgele(int N,int dizi[])
  {
   for (int i=0;i< N;i++)
    dizi[i]=10+rand()%91;
   
  }
   /* BUBBLE SORT ALGORITMASI */
  void bubble_sort(int N,int bubble[])
  {
   int tutulan;
    for(int i=0;i< N-1;i++)
    {
     for(int j=0;j< N-1;j++)
     {
      if(bubble[j]>bubble[j+1])
      {
       tutulan=bubble[j];
       bubble[j]=bubble[j+1];
       bubble[j+1]=tutulan;
      }
     }
    
    }  
  }

void main()
{
 srand(time(0));
 int N1,N2,dizi1[1000],dizi2[1000];

 cout<<"   Uretmek istediginiz ilk dizinin eleman sayisini giriniz = ";
 cin>>N1;
 rastgele(N1,dizi1);
 cout<<"   1.Dizinin elemanları ( Sirasiz )"<< endl;
 for (int i=0;i< N1;i++)
    cout<<"          "<< dizi1[i]<< endl;
 cout<< endl<< endl;

 cout<<"   Uretmek istediginiz ikinci dizinin eleman sayisini giriniz = ";
 cin>>N2;
 rastgele(N2,dizi2);
 cout<<"   2.Dizinin elemanlari ( Sirasiz )"<< endl;
 for (int i=0;i< N2;i++)
    cout<<"          "<< dizi2[i]<< endl;
 cout<< endl<< endl;

 cout<<"   1.Dizinin elemanlarinin siralanmasi "<< endl;
 bubble_sort(N1,dizi1);
  for(int k=0;k<  N1;k++)
     cout<<"   "<< dizi1[k]<< endl;

  cout<< endl<< endl;

  cout<<"   2.Dizinin elemanlarinin siralanmasi "<< endl;
 bubble_sort(N2,dizi2);
  for(int k=0;k< N2;k++)
     cout<<"   "<< dizi2[k]<< endl;
  cout<< endl;
  ////////////////////////////////////////////////////////////////////////////
  int toplam[9999];

  birlestir(dizi1,dizi2,toplam,N1,N2);
  cout<<"   Iki dizinin birlestirilip siralanmasi "<< endl<< endl;
  cout<<"   ";
  for(int a=0;a<(N1+N2);a++)
  cout<< toplam[a]<<"   ";
  


 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>