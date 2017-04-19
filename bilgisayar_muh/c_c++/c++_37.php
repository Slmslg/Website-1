<!DOCTYPE html>
<html>
<head>
	<title>Dizilerde Sıralama</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Dizilerde Sıralama "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Sıralama" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Sıralama" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Dizilerde Sıralama" />
</head>
<body>
<p>Dizilerde sıralama Örneği : 
<h5></br> </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{
int i,j,N;
cout << "matrisin boyutunu girin: "; cin>>N;
cout<< endl;
int A[40][40];
//Rastgele matris üretimi
cout<< "Uretilen matris"<< endl;
cout<< "______________________"<< endl;
for (i=0;i< N;i++)
{for(j=0;j< N;j++)
{A[i][j]=rand()%10;cout << A[i][j]; if(j==N-1) cout<< endl;}}
cout<<"Sirali Matris"<< endl;
cout<<"______________________"<< endl;
//Rastgele matris elemanlarının sıralanması
for (i=0;i< N;i++)
{int k,ek; for(j=0;j< N;j++){for (k=0;k< N;k++)
{ if (A[i][j]< A[i][k]) { ek=A[i][j]; A[i][j]=A[i][k]; A[i][k]=ek;}
}}}
for (i=0;i< N;i++)
{for(j=0;j< N;j++)
{cout << A[i][j]; if(j==N-1) cout<< endl; }}

	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>