<!DOCTYPE html>
<html>
<head>
 <title>Matris Transpozesi</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c++ Matris Transpozesi"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c++ Matris Transpozesi" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,c++ Matris Transpozesi" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c++ Matris Transpozesi" />
</head>
<body>
<p>  
Matris işlemlerinin çoğunu bu blogda kodlamak istiyorum çünkü temeli sağlam atmak gerekir.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
  


#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
#include < ctime >
#include < math.h >
using namespace std;


void main()
{
 int a[4][3]={{1,2,3},{3,4,5},{5,6,7},{7,8,9}};
int b[10][10];
cout<<"\n\n\t\tA matrisi elemanlari\n";
cout<<"\t____________________________________\n";
for (int i=0;i< 4;i++)
{
for (int j=0;j< 3;j++)
cout<<"\t"<< a[i][j]<<"\t";
cout<<"\n";//Matris formatinda yazdirmak için
}
//Matris transpozesi
cout<<"\n\n\t\tA matrisi transpoze matrisi\n";
cout<<"\t____________________________________\n";
for (int j=0;j< 3;j++)
{
for (int i=0;i< 4;i++)
{b[j][i]=a[i][j]; cout<<"\t"<< a[i][j]<<"\t";}
cout<<"\n";//Matris formatinda yazdirmak için
}


 system("pause");
 return 0;
}




 </code>
</pre>
</body>
</html>