<!DOCTYPE html>
<html>
<head>
 <title>C++'da Class Örneği</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,C++'da Class Örneği,C++'da Sınıf Örneği "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++'da Class Örneği,C++'da Sınıf Örneği" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,C++'da Class Örneği,C++ Sınıflar" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++'da Class Örneği,C++'da Sınıf Örneği" />
</head>
<body>
<p>  
C++ ile Class ( Sınıf ) oluşturma Örneği 2 ;
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
using namespace std;
 
class employee
{   
public:
 char name[80];
    double wage;
 void putname(char *n);
 void getname(char *n);
 void putwage(double w);
 double getwage();
};
//
void employee::putname(char *n)
{strcpy(name,n);}
//
void employee::getname(char *n)
{strcpy(n,name);
}
//
void employee::putwage(double w)
{wage=w;}
//
double employee::getwage()
{return wage;}
//

void main()
{
 employee ted;
char name[80];
ted.putname("Ted Jones");
ted.putwage(75000);
ted.wage=76000;
ted.getname(name);
cout<<"Employee name="<< name<< endl;
cout<<"Employee wage="<< ted.getwage()<< endl;
 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>