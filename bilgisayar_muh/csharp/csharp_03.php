<!DOCTYPE html>
<html>
<head>
	<title>Vernam Şifreleme</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="tr" />
    <meta name="description" content="Selim Silgu" />
    <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
    duzce uni,bilgisayar,pc,bilgisayar mühendisliği,permütasyon,permütasyon şifreleme,bilgisayar dersleri,slmslg,slm slg,
    bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama "/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama" />
    <meta name="google" content="selim silgu,bilgisayar mühendisliği,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama" />
    <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama,tahmin oyunu" />
    <link rel="stylesheet" type="text/css" href="css/geri_ileri.css">

</head>
<body>
<h4>C#.NET NESNEYE DAYALI PROGRAMLAMA</h4>
		<p>
			<b>
				VERNAM ŞİFRELEME
			</b>
			Vernam şifreleme normalde XOR olarak anahtar ve metin olarak alınıp şifrelenir. Biz biraz daha basit bir şifreleme yapacağız.
			aynı uzunluktaki metin ve anahtar metni alıp her iki metnin karşılıklı harflerinin index toplamlarını alıp alfebedeki yeni index numarasına karşılık gelen harflerden şifre üreteceğiz.
			Aslında Vernam'daki mantık da bu şekilde.<br>
			Bir form açıp içerisine nesnelerimizi şu şekilde yerleştirip butona şu kodları yazalım.<br>
			<img src="bilgisayar_muh/csharp/vernam_ekran.png"><br>
			<pre>
				<code>
				 private void button1_Click(object sender, EventArgs e)
        {
            //Exception h1 = new Exception();
            try
            {
                vernam v = new vernam(textBox1.Text, textBox2.Text);//şifreli metin ve anahtarı al
                textBox3.Text = v.ToString();
                //MessageBox.Show(h1.Message);
            }
            catch (Exception hata)
            {
                MessageBox.Show(hata.Message);
            }
        }
				</code>
			</pre>
			Bir Class oluşturalım ve içersine açıklaması bulunan bu kodu yazalım.<br>
			<pre>
				<code>
			using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Vernam_Yapıcı_Metod
{
    class vernam
    {
        private string sonuc; 
        <i>//Şifrelenecek metni ve anahtar metnini parametre olarak alacağımız yapıcı metodumuz.</i>
        public vernam (string metin, string anahtar)
        {
        <i>//Alınan metinleri ToCharArray ile diziye dönüştürdük.</i>
            char[] m = metin.ToCharArray(); 
            char[] a = anahtar.ToCharArray();
            char[] alfabe = { 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' };
            sonuc = "";
            <i>
            	//Uarı mesajı vermek için uyarıcı kodumuz ArgumentException gönderiyoruz.
            </i>
            if (metin.Length != anahtar.Length)
            {
                ArgumentException uyarı = new ArgumentException("Metin ve anahtar aynı uzunlukta olmalı!!!");//hata nesnesi tanımlandı
                throw uyarı;//hata mesajını gönder
            }
             for (byte i = 0; i < m.Length; i++)
            <i>//şifreli metin alfabedeki harf indekslerinden yararlanılarak oluşturuluyor.</i>
                sonuc += alfabe[(   Array.IndexOf(alfabe,m[i]) + Array.IndexOf(alfabe, a[i])   ) %26];
            //ArgumentException s = new ArgumentException(sonuc);
             //throw s;
       }
       <i>//Şifreli metni döndürüyoruz.</i>
        public override string ToString()
        {
            return sonuc;
        }

       
    
    }
}
	
				</code>
			</pre>
		</p>
		<p>
			Bu derste C#.NET'te öğrendiklerimiz.<br>
			Constructor (Yapıcı Metot) Kullanımı<br>
			ToString() metodu ile değer döndürme.<br>
			ArgumentException() ve throw() uyarı ve hata fırlatma.<br>			
		</p>
<a href="anasayfa.php?git=csharp_02" id="geri"><i><pre><code><< Permütasyon Şifreleme</code></pre>
</i></a><a href="anasayfa.php?git=csharp_04" id="ileri"><i><pre><code> Sezar Şifreleme>></code></pre></i></a>
</body>
</html>