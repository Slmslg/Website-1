<!DOCTYPE html>
<html>
<head>
	<title>İndis Bulma</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,c++ indis bulma,diziler"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ indis bulma,diziler" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ indis bulma,diziler" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ indis bulma,diziler" />
</head>
<body>
<p>		

<h5></br> Örnek Kod : </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{
int a[5][5];
	for ( int i = 0; i < 5; i++)
		{	cout<< endl;
			for (int j=0;j< 5;j++)
				{a[i][j]=1+rand()%9;
			cout<<"     "<< a[i][j]<<" ";


			}	}
	cout<< endl;

	int eb=a[0][0],ek=a[0][0],byk_satir,byk_sutun,kck_satir,kck_sutun;

	for(int k=0;k< 5;k++)
	{
		for(int m=0;m< 5;m++)
		{
			if(eb < = a[k][m])
			{
				eb=a[k][m];
				byk_satir=k;
				byk_sutun=m;
			}
			if(ek>=a[k][m])
			{
				ek=a[k][m];
				kck_satir=k;
				kck_sutun=m;
			}
		}
	}
	cout<< endl<< " En Buyuk Sayi = A[ "<< byk_satir<< "]["<< byk_sutun<<"] = "<< eb<< endl;
	cout<< " En Kucuk Sayi = A[ "<< kck_satir<< "]["<< kck_sutun<<"] = "<< ek<< endl;



	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>