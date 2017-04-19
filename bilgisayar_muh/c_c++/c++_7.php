<!DOCTYPE html>
<html>
<head>
	<title>Diziyi Ekrana Yazdırma</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,c++ diziyi ekrana yazdırma "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ diziyi ekrana yazdırma" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ diziyi ekrana yazdırma" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ diziyi ekrana yazdırma" />
</head>
<body>
<p>C++'da İki Boyutlu Dizi oluşturmak için  değişken_türü değşiken[satır_sayısı][sutun_sayısı]; yazabilirsiniz.
A[0][1] ile çağırdığımızda 0.satır 1.sutundaki değikeni çağırmış oluruz.</p>
<h5>Dizi Örneği : </h5></br>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


int _tmain(int argc, _TCHAR* argv[])
{

	int A[4][3];

	for(int i=0;i < 4;i++)
	{
	for(int j=0;j < 3;j++)
	{ 
		cout << "Dizini" << "A[" << i << "][" << j << "]" << "elemanini giriniz = ";
		cin>>A[i][j];
			}
	}

	for(int i=0;i < 4;i++)
	{		cout << endl;
	for(int j=0;j < 3;j++)
	{ 
		
		cout<<"[" << A[i][j] << "]  ";

	}
	}




	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>