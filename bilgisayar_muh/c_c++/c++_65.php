<!DOCTYPE html>
<html>
<head>
 <title>Hesap Makinesi </title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta name="description" content="Selim Silgu" />
  <meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversites,
  duzce uni,bilgisayar,pc,bilgisayar mühendisliği,C++ Hesap Makinesi"/>
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,C++ Hesap Makinesi" />
  <meta name="google" content="selim silgu,bilgisayar mühendisliği,C++ Hesap Makinesi" />
  <meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,C++ Hesap Makinesi" />
</head>
<body>
<p>  
Formumuzu şu şekilde oluşturalım.</br>
<div class="separator" style="clear: both; text-align: center;"><a href="http://1.bp.blogspot.com/-mfDZnCm2Q2g/VWwtPdJshNI/AAAAAAAACrg/me1oxeqftfM/s1600/gHesap.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" src="http://1.bp.blogspot.com/-mfDZnCm2Q2g/VWwtPdJshNI/AAAAAAAACrg/me1oxeqftfM/s320/gHesap.png" /></a></div>
<h5></br> Kodları da şu şekilde :  </br></h5>
<pre>
 <code>
  // Form'un Load Kısmına
private: System::Void Form1_Load(System::Object^  sender, System::EventArgs^  e) {

sonuc=0;
sayac=0;
sonuc2=1;
sayac2=0;
sayac3=0;
mod=1; 

  textBox2->Text="0"; 
    }
private: System::Void button13_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox3->Text=textBox2->Text + " + " + textBox1->Text + " =";
    sonuc=System::Convert::ToDouble(textBox2->Text)+System::Convert::ToDouble(textBox1->Text);
    textBox1->Text="";
    textBox2->Text=System::Convert::ToString(sonuc);
    
   }
private: System::Void button14_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox3->Text=textBox2->Text + " - " + textBox1->Text + " = ";
    sayac++;
   if (sayac==1){
    sonuc=System::Convert::ToDouble(textBox1->Text)-sonuc;}
   else {sonuc=sonuc-System::Convert::ToDouble(textBox1->Text);}
    textBox1->Text="";
    textBox2->Text=System::Convert::ToString(sonuc);
   }
private: System::Void button15_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox3->Text=textBox2->Text + " * " + textBox1->Text + " = ";
    sonuc2=System::Convert::ToDouble(textBox2->Text)*System::Convert::ToDouble(textBox1->Text);
    textBox1->Text="";
    textBox2->Text=System::Convert::ToString(sonuc2);
   }
private: System::Void button16_Click(System::Object^  sender, System::EventArgs^  e) {

    textBox3->Text=textBox2->Text + " / " + textBox1->Text +" = ";
    sayac2++;
    if(sayac2==1){
     sonuc2=System::Convert::ToDouble(textBox1->Text)/sonuc2;}
    else{ sonuc2=sonuc2/System::Convert::ToDouble(textBox1->Text);}
    textBox1->Text="";
    textBox2->Text=System::Convert::ToString(sonuc2);
   }
private: System::Void button17_Click(System::Object^  sender, System::EventArgs^  e) {
      
    textBox3->Text=textBox2->Text + " MOD(" + textBox1->Text + ") = ";
   sayac3++;   
   if(sayac3==1){
     mod=System::Convert::ToInt32(textBox1->Text);
   }
    else{ mod=System::Convert::ToInt32(textBox2->Text)%System::Convert::ToInt32(textBox1->Text);}
   
    textBox2->Text=System::Convert::ToString(mod);
   }
private: System::Void button1_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox1->Text+=""+"1";
   }
private: System::Void button2_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text+=""+"2";
   }
private: System::Void button3_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox1->Text+=""+"3";
   }
private: System::Void button5_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text+=""+"4";
   }
private: System::Void button6_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text+=""+"5";
   }
private: System::Void button4_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text+=""+"6";
   }
private: System::Void button7_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text+=""+"7";
   }
private: System::Void button8_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox1->Text+=""+"8";
   }
private: System::Void button9_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox1->Text+=""+"9";
   }
private: System::Void button10_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text+=""+"0";
   }
private: System::Void button11_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox1->Text+=""+".";   
   }
private: System::Void textBox1_TextChanged(System::Object^  sender, System::EventArgs^  e) {
    
   }
private: System::Void button18_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox3->Text=""+ "Sin(" + textBox1->Text + ") = ";
    double sinus= Math::Sin(System::Convert::ToDouble(textBox1->Text));
    textBox2->Text =""+ System::Convert::ToString(sinus);
   }
private: System::Void button19_Click(System::Object^  sender, System::EventArgs^  e) {
    textBox3->Text=""+ "Cos(" + textBox1->Text + ") = ";
    double cosinus= Math::Cos(System::Convert::ToDouble(textBox1->Text));
    textBox2->Text =""+ System::Convert::ToString(cosinus);
   }
private: System::Void button12_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox3->Text=""+ "Tan(" + textBox1->Text + ") = ";
    double tanjant= Math::Tan(System::Convert::ToDouble(textBox1->Text));
    textBox2->Text =""+ System::Convert::ToString(tanjant);
   }
private: System::Void button21_Click(System::Object^  sender, System::EventArgs^  e) {

      textBox3->Text=""+ "Cot(" + textBox1->Text + ") = ";
    double cotanjant= Math::Tan(System::Convert::ToDouble(textBox1->Text));
    cotanjant=1/cotanjant;
    textBox2->Text =""+ System::Convert::ToString(cotanjant);
   }
private: System::Void button20_Click(System::Object^  sender, System::EventArgs^  e) {
     textBox1->Text ="";
     textBox2->Text ="";
     textBox3->Text ="";
   }
};


 </code>
</pre>
<h6>Uygulamayı kodları ve çalıştırılabilir .exe dosyası için </h6><a href="https://yadi.sk/d/aSxirNrUgzVmo">Tıklayınız...</a></br>
</body>
</html>