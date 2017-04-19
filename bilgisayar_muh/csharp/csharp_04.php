<!DOCTYPE html>
<html>
<head>
	<title>Koşullu İfadeler</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="tr" />
    <meta name="description" content="Selim Silgu" />
    <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
    duzce uni,bilgisayar,pc,bilgisayar mühendisliği,c#.net Sezar şifreleme,sezar şifreleme "/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c#.net sezar şifreleme,sezar şifreleme" />
    <meta name="google" content="selim silgu,bilgisayar mühendisliği,c#.net sezar şifreleme,sezar şifreleme" />
    <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c#.net sezar şifreleme,sezar şifreleme" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
<style type="text/css">
	 img{
	 	width: 500px;
	 }
	.giyim{
		height: 500px;
		width: 800px;
	}
	.use-case{
		width: 500px;
	}
	a{
		color: green;
	}
</style>
</head>
<body><center>
		<h4>C#.NET NESNEYE DAYALI PROGRAMLAMA</h4>
		<b>Sezar Şifreleme</b>
		Sezar şifrelemenin mantığı alfabe'yi baştan istediğimiz yere kadar alıp sonuna atayarak alfabe'yi yeniden şekillendirerek şifrelemektir. <br>
		<img src="bilgisayar_muh/csharp/sezar.png"> <br>
	<p>
		Burada alfabe'yi G harfi ile başlattık. Şimdi kelimemizin harf index numaralarını yeni alfabedeki index numarasındaki karşılık gelen harflerle değiştirirsek sezar şifrelemeyi yapmış olurduk.<br>
		Örneğin <b>selim</b> kelimesinin sırasıyla index numaraları 18 4 11 8 12. Baş harfi G ile başlattığımızda oluşan şifre <b>ykros</b> olur.</br>
		Örnek bir proje açalım ve Form Applicaton ile Sezar şifrelemeyi yapalım. Açıklamalarıyla kodları aşağıdadır.<br>
		İlk forma bir buton ekleyelim ve aşağıdaki buton1 kodlarını içerisine yazalım.<br>		
	</p>
	
<pre>
				<code>
private void button1_Click(object sender, EventArgs e)
{
label1.Text = "";
byte anahtar=Convert.ToByte(textBox2.Text);
Cesar c = new Cesar(anahtar,textBox1.Text);
label1.Text = c.ToString();
label1.ForeColor = Color.Red;            
}

				</code>			
		
</pre>
		<p>
			Şimdi Project menüsünden Add  Class Sekmesini seçip bir sınıf oluşturalım. İsmine Cesar verelim.<br>
			Kodlar aşağıdaki gibi olmalıdır. Kendinize ait kodları da yapabilirsiniz.<br>
			<pre>
				<code>
					using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CesarCodeClass
{
    class Cesar
    {
      public  string sm = "";

        public Cesar(int anahtar,string metin) {
            char[] alfabe = { 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' };
            <i>//Alfabenin sonuna atacağımız kısmın dizisi</i>
            char [] gecici = new char[alfabe.Length]; 
            <i>// index numaralarını tutan dizi</i>
            int [] index = new int[metin.Length]; 
            <i>//ToCharArray() metodu ile string bbir metni diziye dönüştürür.</i>
            char[] mtn = metin.ToCharArray();

            <i>//Girdiğimiz metni alfabede arayarak indexlerini çekiyoruz.</i>
            for (byte i = 0; i < metin.Length; i++)
            {
                index[i]= Array.IndexOf(alfabe, mtn[i]);
            }
            <i>//Girdiğimiz sayı indexine kadar olan harfleri geçici bir diziye aldık.</i>
            for (byte i = 0; i < anahtar; i++)
            {
                gecici[i] = alfabe[i];                
            }
            <i>//Anahtar indeximizdeki harften başlayarak harfleri başa aldık.</i>
            for (byte i = 0; i < alfabe.Length-anahtar; i++)
            {
                alfabe[i] = alfabe[anahtar+i];
            }
            <i>//gecici dizide tuttuğumuz ilk harfleri sona aldık...</i>
            for (byte i = 0; i < anahtar; i++)
            {
                alfabe[alfabe.Length-anahtar+i] = gecici[i]; 
            }
            <i>//Son olarak index numaralarımızdaki sayıları yeni oluşan alfabede karşılık gelen harfleri metin olarak alıyoruz.</i>
            for (byte i = 0; i < metin.Length; i++)
			{
			 sm+=alfabe[index[i]%26];
			}
        }
        <i>//Şifreli metni elde ettik ve geri değer olarak döndürüyoruz.</i>
     public override string ToString()
{
 	 return sm;
}
    }
}

				</code>

			</pre>
		</p>
		<p>
			Son olarak görüntüsü şu şekilde olmalıdır.<br>
			<img src="bilgisayar_muh/csharp/sezar_ekran.png" alt="Sezar Şifreleme">
		</p>
</center>	
    <a href="anasayfa.php?git=csharp_03" id="geri"><i><pre><code><< Vernam Şifreleme</code></pre>
</i></a><a href="anasayfa.php?git=csharp" id="ileri"><i><pre><code> C# Dersleri>></code></pre></i></a>
</body>
</html>