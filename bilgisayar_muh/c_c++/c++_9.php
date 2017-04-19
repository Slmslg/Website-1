<!DOCTYPE html>
<html>
<head>
	<title>Matris Elemanlarının En Büyüğünü ve En Küçüğünü Bulma</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,matris,c++,en büyük,en küçük, "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,matris,c++" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,matris,c++" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,matris,c++" />
</head>
<body>
<p>İki boyutlu dizilerdeki en büyük ve en küçük elemanı bulmak için C++ ile yazılmıştır.
<h5></br>Örnek : </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{

cout<< endl<< endl;
	int matris[50][50],n,m,EnBuyuk,EnKucuk;

	cout<< "Lutfen matrisin satir boyutunu giriniz = ";
	cin>>m;
	cout<< "Lutfen matrisin sutun boyutunu giriniz = ";
	cin>>n;
	cout<< endl<< endl;

	for(int i=0;i< m;i++)
	{
		for(int j=0;j< n;j++)
		{
			cout<< "Matris["<< i<< "]["<< j<< "] elemanini giriniz = ";
			cin>>matris[i][j]; 
			

			}
	}
	EnBuyuk=matris[0][0],EnKucuk=matris[0][0];
	cout<< endl<< endl;

	for(int i=0;i< m;i++)
	{		cout<< endl<< endl;
		for(int j=0;j< n;j++)
		{
			cout<< matris[i][j]<< "  ";
			if(matris[i][j]>EnBuyuk)
			{
			EnBuyuk=matris[i][j];
			}
			else if(matris[i][j]< EnKucuk)
			{
			EnKucuk=matris[i][j];
			}
			
		
		}
	}
	cout<< endl<< endl;
	cout<<"Matrisin En Buyuk Elemani = "<< EnBuyuk<< endl<< endl<< "Matrisin En Kucuk Elemani = "<< EnKucuk<< endl<< endl; 



	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>