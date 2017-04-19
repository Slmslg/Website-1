<!DOCTYPE html>
<html>
<head>
	<title>İki Boyutlu Karakter Dizisi</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Karakter Dizisi "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ İki Boyutlu Karakter Dizisi" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ İki Boyutlu Karakter Dizisi" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ İki Boyutlu Karakter Dizisi" />
</head>
<body>
<p>İki boyutlu Dizilerde karakter dizileri de oluşturabiliriz. Tek farkı kullanımında direkt olarak çif tırnak arasına metni girmeniz. Her karakter bir indise sahip olacaktır. Daha detaylı inceleme için aşağıdaki kodu inceleyin.
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

		char a[][10] = {"Ahmet","Asli","Aysegul"};
//Karakter iki boyutlu dizinin sadece satirlari
		cout<< "//Karakter iki boyutlu dizinin sadece satirlari "<< endl;
	for(int i=0;i < = 2;i++)
		cout<< a[i]<< endl;
		cout<< "Herhangi bir elemana erisim"<< endl;
	
			cout<< a[0][3]<< "\t"<< a[0][8]<<"\t"<< a[0][9]<< endl;
		

	system("pause");
	return 0;
}




	</code>
</pre>
</body>
</html>