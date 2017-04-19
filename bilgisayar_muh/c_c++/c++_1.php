<!DOCTYPE html>
<html>
<head>
 <title>C++'da Continue ve Break Kullanımı</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği" />
</head>
<body>
<p>  
Continue ve Break kullanımını aşağıdaki örnekte görebilirsiniz.
<h5></br> Örnek Kod : </br></h5>
<pre>
 <code>
#include "stdafx.h"
#include < iostream >
#include < Windows.h >
#include < time.h >
#include < stdlib.h >
using namespace std;

void main()
{
 int i;
for (i=10;i>1;i--)
 {
  if(i==8) continue;
  else if(i==5) break;
  cout<<"i="<< i<< endl;
 }

 system("pause");
 return 0;
}
 </code>
</pre>
</body>
</html>