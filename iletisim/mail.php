<?php
if(isset($_[POST]['name']) && isset($_[POST]['mail']) && isset($_[POST]['konu']) && isset($_[POST]['mesaj']))
{
   if(empty($_[POST]['name']) || empty($_[POST]['mail']) || empty($_[POST]['konu']) || empty($_[POST]['mesaj']))
   {
      echo "Lütfen formu tam doldurunuz";
   }
   else
   {
      $name    = strip_tags($_POST['name']);
      $email   = strip_tags($_POST['mail']);
      $subject = strip_tags($_POST['konu']);
      $message = strip_tags($_POST['mesaj']);
      $icerik  = 'İsim: ' .$name. '<br/>E-Mail: ' .$email. '<br/>'. $mesaj;
      mail('selimsilgu@hotmail.com', $subject, $icerik);
      
//selimsilgu@hotmail.com yerine mail hangi adrese gidecek ise o adresi yazıyoruz.

      echo "Mesajınız başarı ile gönderildi.";
   }
}
else
{
   echo 'Lütfen Formu Doldurun';
}
?>