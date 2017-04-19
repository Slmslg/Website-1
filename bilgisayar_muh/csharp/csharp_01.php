<!DOCTYPE html>
<html>
<head>
	<title>Tahmin Oyunu</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,c#.net oop,c#.net nesneye dayalı programlama,görsel programlama,tahmin oyunu" />
	<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
<style type="text/css">
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
	
	#new_project{
		width: 800px;
		height: 400px;
	}

</style>
</head>
<body><center>
		<h4>C#.NET NESNEYE DAYALI PROGRAMLAMA</h4>
		<b>Tahmin Oyunu</b>
	<p>
		Windows Form uygulamasıyla beraber C#.NET Nesneye Dayalı Programlamayı uygulamalı anlatım yapmak bence daha öğretici olur.<br>
		İlk dersimiz Class ve Metot Kullanımı. Bir arada kullanarak öğrenelim.
		 Aynı zamanda form kullanımını da öğrenmiş oluruz.<br>
		Senaryo ile proje yapalım.<br>
		1.Beş tane label, iki buton ve olsun.<br>
		2.Başla Butonuna basıldığında ilk üç label'a rastgele sayılar atansın.<br>
		3.Çıkış butonu formu kapatsın.<br>
		Diğer label'lar da Puanı göstersin.<br>
		Şimdi aşağıdaki adımları izleyelim. [ File New >> Project >> Visual C# >> Windows Form Application ]<br>
		<img src="bilgisayar_muh/csharp/proje1.png" alt="csharp"><br>
		<p>Name kısmına proje ismini Oyun olarak verebiliriz.</p>
		<img src="bilgisayar_muh/csharp/proje2.png" alt="csharp" id="new_project"><br>
		<p>Sağ taraftaki Properties Bölümünden Text seçeneğini Oyun olarak değiştirelim. Bu formumuzun başlık alanını değiştirmemizi sağlar.<br>
		</p>
		<img src="bilgisayar_muh/csharp/proje3.png" alt="csharp"><br>
		<p>Diğer nesnelerimizi ekleyelim ve aynı yöntemle isimlerini değiştirelim.</p>
		<img src="bilgisayar_muh/csharp/proje4.png" alt="csharp">
		<p>Yazı fontlarını değiştirmek için aşağıdaki gibi düzenleme yapınız.</p>
		<img src="bilgisayar_muh/csharp/proje5.png" alt="csharp">	
		</p>
		<p>
		Form'a çift tıklayarak gereken label nesnelerinin değerlerini sıfırlıyoruz.<br>
		Random() fonksiyonu rastgele değer atamak için kullanılır.<br>
		Buton1'e çift tıklayıp ya da sağ tuş view code dedikten sonra rastgele farklı değerler atayalım.<br>
		Bir de çıkış butonuna close() komutunu yazalım.<br>
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

namespace Oyun
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            label1.Text = "";
            label2.Text = "";
            label3.Text = "";
            label5.Text = "";
        }
        int puan=0;
        private void button1_Click(object sender, EventArgs e)
        {
            Random r = new Random();
            label1.Text = Convert.ToString (r.Next(0, 11));
            label2.Text = Convert.ToString(r.Next(0, 11));
            label3.Text = Convert.ToString(r.Next(0, 11));
            
            //sayılardan hangileri aynı???

            if (label1.Text == label2.Text)

                puan = puan + 10;
            else if (label2.Text == label3.Text)
                puan = puan + 10;
            else if (label1.Text == label3.Text)
                puan = puan + 10;
            else if (label1.Text == label2.Text && label2.Text == label3.Text)
                puan = puan + 100;
            else
                puan = puan + 0;
            label5.Text = Convert.ToString(puan);
        }

        //puanı yaz

    
        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
				</code>
			
		</p>
</pre>
	</p>
</center>	
<a href="anasayfa.php?git=muh" id="geri"><i><pre><code><< Bilgisayar Mühendisliği Hakkında</code></pre>
</i></a><a href="anasayfa.php?git=csharp_02" id="ileri"><i><pre><code> Permütasyon Şifreleme>></code></pre></i></a>
</body>
</html>