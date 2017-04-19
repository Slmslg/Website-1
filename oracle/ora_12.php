<!DOCTYPE html>
<html>
<head>
	<title>Triggers</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,Triggers "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği,Triggers" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği,Triggers" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği,Triggers" />
			<link rel="stylesheet" type="text/css" href="css/geri_ileri.css">
			<link rel="stylesheet" type="text/css" href="css/icerik_stil.css">
			<link rel="stylesheet" type="text/css" href="css/oracle.css">
</head>
<body>
		<p>Triggerlar sistemin otomatik olarak yapılmasını sağlayan komutlar kümesidir.<br>
		 Bir işlemin otomatik olarak yapılmasını sağlamak istediğinizde kullanırsınız.<br>
		
			<b>Before :</b> Yapılacak işlem öncesinde çalışacak komutlardır.<br>
			<b>After :</b> Yapılacak işlemler sonrasında çalışacak komutlardır.</br>
			Genel Kullanımı </br>
		</p>
			<fieldset><p><br>
			CREATE OR REPLACE TRIGGER TRIGGER_NAME<br>
			{BEFORE || AFTER }<br>
			{INSERT || UPDATE || DELETE } <br>
			ON TABLE_NAME<br>
			FOR EACH ROW<br>
			DISABLE<br>
			BEGIN<br>
			KOMUTLAR;<br>
			END;<br></p>
			</fieldset>
			<h4>Disable Trigger</h4>
			<fieldset><p><br>
				CREATE OR REPLACE TRIGGER SATIS_TRIGGER<br>
				BEFORE INSERT ON SATIS_TABLOSU<br>
				FOR EACH ROW<br>
				DISABLED<br>
				BEGIN<br>
				NULL;<br>
				END;<br></p>
			</fieldset>
			<h4>TRIGGERI SİLMEK</h4>
			<fieldset>
				DROP TRIGGER TRIGGER_NAME;
			</fieldset><br>
			<h4>DEFAULT DEĞER ATAMAK</h4>
			<fieldset><p><br>
				CREATE OR REPLACE TRIGGER SATIS_TRIGGER<br>
				BEFORE INSERT ON SATIS_TABLOSU<br>
				FOR EACH ROW<br>
				DECLARE<br>
				BEGIN<br>
				:NEW.USER:=USER;<br>
				:NEW.DATE:=SYSDATE;<br>
				END;<br></p>
			</fieldset>
			<br>
			<b>Trigger Örneği</b>
			<fieldset><p><br>
				CREATE OR REPLACE TRIGGER orders_after_insert<br>
				AFTER INSERT<br>
				   ON orders<br>
				   FOR EACH ROW<br>
				   <br>
				DECLARE<br>
				   v_username varchar2(10);<br>
				   <br>
				BEGIN<br>
				   <br>
				   -- Find username of person performing the INSERT into the table<br>
				   SELECT user INTO v_username<br>
				   FROM dual;<br>
				   <br>
				   -- Insert record into audit table<br>
				   INSERT INTO orders_audit<br>
				   ( order_id,<br>
				     quantity,<br>
				     cost_per_item,<br>
				     total_cost,<br>
				     username )<br>
				   VALUES<br>
				   ( :new.order_id,<br>
				     :new.quantity,<br>
				     :new.cost_per_item,<br>
				     :new.total_cost,<br>
				     v_username );<br>
				     <br>
				END;<br></p>
			</fieldset>
			<br>
			<b>Triggers Örneği</b>
			<fieldset><p><br>
				CREATE OR REPLACE TRIGGER orders_before_update<br>
				BEFORE UPDATE<br>
				   ON orders<br>
				   FOR EACH ROW<br>
				   <br>
				DECLARE<br>
				   v_username varchar2(10);<br>
				   <br>
				BEGIN<br>
<br>
				   -- Find username of person performing UPDATE on the table<br>
				   SELECT user INTO v_username<br>
				   FROM dual;<br>
				   <br>
				   -- Update updated_date field to current system date<br>
				   :new.updated_date := sysdate;<br>
				   <br>
				   -- Update updated_by field to the username of the person performing the UPDATE<br>
				   :new.updated_by := v_username;<br>
				   <br>
				END;<br></p>
			</fieldset>
		<a href="anasayfa.php?git=ora_11" id="geri"><i><pre><code><< View | Constraint</code></pre>
		</i></a><a href="anasayfa.php?git=ora_13" id="ileri"><i><pre><code> Index | Sequence>></code></pre></i></a>

</body>
</html>