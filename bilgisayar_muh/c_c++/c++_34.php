<!DOCTYPE html>
<html>
<head>
	<title>Dizilerde Büyüklük Küçüklük</title>
	 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
  bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++'da Dizilerde Büyüklük Küçüklük "/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++'da Dizilerde Büyüklük Küçüklük" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++'da Dizilerde Büyüklük Küçüklük" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++'da Dizilerde Büyüklük Küçüklük" />
</head>
<body>
<p>/Dizideki elemanlardan, kullanıcının girdiği sayının büyük olması durumunda 0;
		// kullanıcının girdiği sayının
		// küçük olması durumunda ise 1 yazılması ................................
<h5></br> Örnek : </br></h5>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


void main()
{

			int	dizi[10][10],n;
		
		for(int i=0;i< 10;i++)
		{	cout<< endl;
			for(int j=0;j< 10;j++)
		{		dizi[i][j]=1+rand()%9;
			cout<< dizi[i][j]<< "   ";
		}}

		cout<< "Bir sayi giriniz = ";
		cin>>n;
		cout<< endl;

		for(int i=0;i< 10;i++)
		{	cout<< endl;
			for(int j=0;j< 10;j++)
		{		if(n < = dizi[i][j])
			{
			dizi[i][j]=1;
			}
		else
			dizi[i][j]=0;
			cout<< dizi[i][j]<<"   ";
		}}
	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>