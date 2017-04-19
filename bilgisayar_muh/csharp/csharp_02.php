<!DOCTYPE html>
<html>
<head>
	<title>Permutasyon Şifreleme</title>
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
    <style type="text/css">
    #tablo tr td{
        padding: 10px; 
        border: 1px dashed black;        
    }
    #tablo{
        border: 1px solid black;
    }
    p>img{
        width: 500px;
     }
    .giyim{
        height: 500px;
        width: 800px;
    }
    .use-case{
        width: 500px;
    }
    .gecis>a{
        color:red;
    }
    #new_project{
        width: 800px;
        height: 400px;
    }
    </style>
</head>
<body>
<h4>Permütasyon Şifreleme</h4>
	<p>
		Bu şifreleme aldığı metnin boyutu ile kare matris oluşturur.<br>
		Örneğin selim metninde 5 harf vardır. 5'ten büyük ya da eşit en yakın kareli sayı 9 dur.<br>
		Yani 3X3'lük kare matris oluşturulur. Bu beş harfi şu şekilde dizer. Dizerken boş yerlere anahtar karakteri atar.<br>
		<pre>
        <table id="tablo">
            <tr>
            <td>s</td>
            <td>i</td>
            <td>x</td>
            </tr>
            <tr>
            <td>e</td>
            <td>m</td>
            <td>x</td>
            </tr>
            <tr>
            <td>l </td>
            <td>x </td>
            <td>x </td>
            </tr>
        </table>
		</pre>
		Şifrelerken ise satır olarak alır.<br>
		Şifreli Metin : <b>sixemxlxx</b>
	</p>
	<p>
		Açıklamalı kodları aşağıdaki gibidir.<br>
		<pre>
			<code>
				using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Permutasyon_Fn_Ornek
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        void Permutasyon(char [] metin, char harf, ref char[] smetin)
        {
            //n*n lik matris bulunuyor
            int n=0;
            int boyut=new int();
            do
            {
                if (metin.Length == n * n) //metin boyutu n*n ye eşitse;1,4,9,16 vb...
                    boyut = n;

                n = n + 1;
                boyut = n;
            }

            while (metin.Length > n*n);//metin boyutuna kadar arama yapılıyor

            //eksik kalan kısmlar harf ile dolduruluyor
            int e = metin.Length;//eski uzunluk saklanıyor ve
                      
            Array.Resize(ref metin, boyut * boyut);//metin boyutu artırılıyor;1,4,9,16 gibi

            for (int i = e; i < boyut * boyut; i++)//eksik kalan kısımlara
                metin[i] = harf;//harfi ata

            //yeni metin matrise yerleştiriliyor
            char[,] matris = new char[boyut, boyut];
            int sayac=0;
            for (int i = 0; i < boyut; i++)
            {
                for (int j = 0; j < boyut; j++)
                {
                    matris[j, i] = metin[sayac]; //sütun satır
                    sayac = sayac + 1;//metnin 0. elemanından boyut*boyut ncu elemanına ulaşmak için
                }
            }

            //matris okunuyor
            Array.Resize(ref smetin, boyut * boyut);
            sayac = 0;
            for (int i = 0; i < boyut; i++)
            {
                for (int j = 0; j < boyut; j++)
                {
                    smetin[sayac] = matris[i, j];//sifreli metin matristen satır-sütun olarak alınıyor
                    sayac = sayac + 1;//metnin 0. elemanından (boyut*boyut). elemanına ulaşmak için
                }
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            label4.Text = "";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            char[] m = textBox1.Text.ToCharArray();
            char h = Convert.ToChar (textBox2.Text);
            char[] sm=new char[0];
            Permutasyon(m, h, ref sm);
            for (int i = 0; i < sm.Length; i++)
                label4.Text = label4.Text + sm[i];

        }
    }
}

			</code>
		</pre>
	</p>
	<p>
		<b>Bu derste C#.NET'te öğrendiklerimiz.</b><br>
		Metot kullanımı<br>
		char dizisi oluşturma ve metoda parametre olarak dizi yollama.<br>
		Diziyi Array.Resize() metodu ile yeniden boyutlandırma.<br>
		While döngüsünü kullanma.
	</p>
<div class="gecis">
   <a href="anasayfa.php?git=csharp_01" id="geri"><i><pre><code><< Tahmin Oyunu</code></pre></i></a>
<a href="anasayfa.php?git=csharp_03" id="ileri"><i><pre><code> Vernam Şifreleme>></code></pre></i></a> 
</div>

</body>
</html>