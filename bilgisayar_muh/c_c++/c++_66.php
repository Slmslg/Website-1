<!DOCTYPE html>
<html>
<head>
 <title>Global Değişkenler </title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Global Değişkenler"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Global Değişkenler" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Global Değişkenler" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Global Değişkenler />
</head>
<body>
<p>  
Visual Studio ile C++'da basit bir görsel programlama ile hesap makinesi yapacağız.Öncelikle aşağıdaki formu oluşturalım.
</br><div class="separator" style="clear: both; text-align: center;"><a title="Global Değişkenler" href="http://3.bp.blogspot.com/-Wnqxbk5NocY/VWwp2FND-9I/AAAAAAAACrU/sHfFwXnvzHU/s1600/ekran.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" src="http://3.bp.blogspot.com/-Wnqxbk5NocY/VWwp2FND-9I/AAAAAAAACrU/sHfFwXnvzHU/s320/ekran.png" /></a></div>
</br> Bu formu oluşturduktan sonra kodları yazmaya başlayabiliriz. </br>
İlgili Butonlara aşağıdaki kodları yazalım ve sonucunu görelim.
<h5></br> </br></h5>
<pre>
 <code>
 
// Toplama Butonu
 private: System::Void button1_Click(System::Object^  sender, System::EventArgs^  e) {

     label1->Text="+";
    }
    // Çarpma Butonu
private: System::Void button3_Click(System::Object^  sender, System::EventArgs^  e) {

    label1->Text="*";
   }
   // Çıkarma Butonu
private: System::Void button2_Click(System::Object^  sender, System::EventArgs^  e) {

    label1->Text="-";
   }
   //Bölme Butonu
private: System::Void button4_Click(System::Object^  sender, System::EventArgs^  e) {

    label1->Text="/";
   }
   // Eşittir Butonu 
private: System::Void button5_Click(System::Object^  sender, System::EventArgs^  e) {

    try
 {

    if(label1->Text =="+")
    {
     double toplam = System::Convert::ToDouble(textBox1->Text)+System::Convert::ToDouble(textBox2->Text);
     textBox3->Text = ""+ toplam;
    }
    else if(label1->Text =="-")
    {
    double cikar = System::Convert::ToDouble(textBox1->Text)-System::Convert::ToDouble(textBox2->Text);
     textBox3->Text = ""+ cikar;
    }
    else if(label1->Text =="*")
    {
    double carp = System::Convert::ToDouble(textBox1->Text)*System::Convert::ToDouble(textBox2->Text);
     textBox3->Text = ""+ carp;
    }
    else if(label1->Text =="/")
    {
    double bol = System::Convert::ToDouble(textBox1->Text)/System::Convert::ToDouble(textBox2->Text);
     textBox3->Text = ""+ bol;
    }
    }
 catch(...)
 {
  MessageBox::Show("Hatalı Giriş yaptınız....");
 }
   }
   // Sinus Butonu
private: System::Void button6_Click(System::Object^  sender, System::EventArgs^  e) {

   double sinus= Math::Sin(System::Convert::ToDouble(textBox1->Text));
   textBox3->Text = ""+ sinus;
   }
   // Cosinus Butonu
private: System::Void button7_Click(System::Object^  sender, System::EventArgs^  e) {

    double cosinus= Math::Cos(System::Convert::ToDouble(textBox1->Text));
   textBox3->Text = ""+ cosinus;
   }
   // Tanjant Butonu
private: System::Void button8_Click(System::Object^  sender, System::EventArgs^  e) {

    double tanjant= Math::Tan(System::Convert::ToDouble(textBox1->Text));
   textBox3->Text = ""+ tanjant;
   }
   // Cotanjant Butonu
private: System::Void button9_Click(System::Object^  sender, System::EventArgs^  e) {

    double cotan= Math::Tan(System::Convert::ToDouble(textBox1->Text));
    double sonuc =1/cotan;
   textBox3->Text = ""+ sonuc;
   }

 </code>

</pre>
<p><b><h5>Yaptığımız bu uygulamayı ve source kodlarını idirmek için </p><a  tittle="c++ uygulama" href="https://yadi.sk/d/Wn6NZUdSgzVbH">Tıklayınız...</a></h5></b>
</body>
</html>