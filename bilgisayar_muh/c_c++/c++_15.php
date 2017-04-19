<!DOCTYPE html>
<html>
<head>
	<title>İki Matrisin Toplamı</title>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ İki Matrisin Toplamı"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ İki Matrisin Toplamı" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ İki Matrisin Toplamı" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ İki Matrisin Toplamı" />
</head>
<body><p>İki boyutlu dizilerde yani matrislerde toplama işlemi için A[1][3]+B[0][2]; şeklinde bir kod yazabilir hatta değişkene de atayabilirsiniz. Fakat her değişken türlerimiz aynı olmak zorunda ve toplama yapmak için değişken türlerimizin int,double,float gibi sayı içeren bir tür olmasına dikkat edelim. Eğer char türünde toplama yaparsanız ASCII kodlarının karşılığı olarak sonuc alırsınız.String olarak yaparsanız metin şeklinde her sayıyı yanyana almış olursunuz. Aşağıda C++ ile yapılmış bir örnek bulunuyor.
</br></br><h5>Örnek :</h5></p>
<pre>
	<code>
		
// Diziyi Ekrana Yazdırma.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include < iostream >
using namespace std;


int _tmain(int argc, _TCHAR* argv[])
{

	
int A[3][2],B[3][2];

	for(int i=0;i < 3;i++)
	{	
		for(int j=0;j < 2;j++)
		{
		cout << "A["<< i << "," << j << "]" << " elemanini giriniz =  ";
		cin>>A[i][j];
		cout << endl;
		cout << "B[" << i << "," << j << "]" << " elemanini giriniz =  ";
		cin>>B[i][j];
		cout << endl;
		}
	
	}

	for(int i=0;i < 3;i++)
	{ cout << endl;
		for(int j=0;j < 2;j++)
		{
			cout << A[i][j] << "  ";
		}
	}
	cout << endl << endl;

	for(int i=0;i < 3;i++)
	{cout << endl;
		for(int j=0;j < 2;j++)
		{
			cout << B[i][j] << "  ";
		}
	}
	cout << endl;

	for(int i=0;i < 3;i++)
	{cout << endl;
		for(int j=0;j < 2;j++)
		{
			cout << A[i][j]+B[i][j] <<"  ";
		}
	}





	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>