<!DOCTYPE html>
<html>
<head>
	<title>Asal Köşegenlerin Toplamı</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Asal Köşegenlerin Toplamı"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Asal Köşegenlerin Toplamı" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Asal Köşegenlerin Toplamı" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Asal Köşegenlerin Toplamı" />
</head>
<body>
<p>İki boyutlu dizilerde bir diğer örneğimiz de matrisin asal köşegenleri.
A[N][N]  matrisinde satır ve sutun indisi aynı olan yani A[0][0],A[1][1],A[2][2]....A[N][N] gibi elemanlar matrisin asal köşegenini verir. Aşağıda 3X3 lük bir matrisin asal köşegen toplamı verilmiştir.
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


	int _tmain(int argc, _TCHAR* argv[])
	{
	int A[3][3], Toplam=0;

	cout<< "A[3][3] matrisini giriniz ........"<< endl;

	for(int i=0;i< 3;i++)
	{
		cout<< endl;
		for(int j=0;j < 3;j++)
		{
			cout<< "A["<< i <<"]"<<"["<< j <<"] = ";
			cin>>A[i][j];			
		}
	}
	cout<< endl<< endl;

	for(int k=0;k< 3;k++)
	{
		cout<< endl;
		for(int m=0;m< 3;m++)			
				cout<< A[k][m]<< "  ";			
	}

	cout<< endl << endl;
	for(int k=0;k< 3;k++)
	{
		for(int m=0;m< 3;m++)
			if(k==m)   // Asal köşegenlerdeki mantık indislerin birbirine eşit olması durumudur.
			{
				cout<< A[k][m]<< endl;
				Toplam=Toplam + A[k][m];
			}

	}
	cout<< endl<< "Asal Kosegenler Toplami = " << Toplam<< endl;

	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>