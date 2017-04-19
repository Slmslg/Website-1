<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="description" content="Selim Silgu" />
	<meta name="keywords" content="selim,selim silgu,silgu,slmslg,slm slg,slm.slg,düzce,duzce,duzce üniversitesi,
	duzce uni,bilgisayar,pc,bilgisayar mühendisliği,elektrik elektronik dersleri,bilgisayar dersleri,slmslg,slm slg,
	bilgisayar mühendisliği dersleri,bilgisayar mühendisliği hakkında "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="selim silgu,bilgisayar mühendisliği" />
	<meta name="google" content="selim silgu,bilgisayar mühendisliği" />
	<meta name="google-site-verification" content="selim silgu,bilgisayar mühendisliği" />
	<script src="jquery-1.10.2.min.js"></script>
	<script src="jquery-1.10.2.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){	
			var value = $("li").attr('id');
			$("li").hover(function(){	
				$(this).stop().animate({width :'700px'});
			},function(){
				$(this).stop().animate({width :'400px'});
			},function(){
				$(".slmslg").animate({width : '100px'});
			});	

			$(".ust_menu p").hide();
			$(".ust_menu").hover(function(){
				$(".ust_menu p").slideDown();
			});
			$(".ust_menu").mouseleave(function(){
				$(".ust_menu p").slideUp();
				$(".ust_menu p").css();

			});
		});
	</script>
	<style type="text/css">
	body{
		background: #30332e;
		background-repeat: no-repeat;
		margin: 0;
		padding: 0;
		color: white;
		cursor: url("cursor/Blue.cur"),default;
	}
	a{
		text-decoration: none;
		font: 20px Courier New;
		color: white;
	}
	.ust_menu{
		height: 50px;
		background-color: black;
		opacity: 0.3;
	}
	.ust_menu p{
		text-align: center;
	}
	ul{
		padding: 0;
		margin: 0;
		margin-top: 200px; float: left;
	}
	ul li{
		border:2px solid orange;
		border-left: 0px;
		background-color: black;
		width: 400px;
		height: 50px;
		display: block;
		text-decoration: none;
		text-align: center;
		padding-top: 25px;
		border-radius: 0px 50px 50px 0px;
		margin-bottom: 10px;
	}
	#pc:hover{
		background-color: #009638; cursor: url("cursor/Green.cur"),default;
	}
	#ora:hover{
		background-color: #f60909; cursor: url("cursor/Red.cur"),default;
	}
	#java:hover{
		background-color: #f6c109; cursor: url("cursor/Orange.cur"),default;
	}
	.facebook{
		background-image: url("img/facebook.png");
		width: 60px;
		height: 60px;
		float: right;
		margin-top: -500px;

	}
	.facebook:hover{
		background-image: url("img/facebook_mavi.png");
		margin-right: 10px;
	}
	.linkedin{
		background-image: url("img/linkedin.png");
		width: 60px;
		height: 60px;
		float: right;
		margin-top: -400px;
	}
	.linkedin:hover{
		background-image: url("img/linkedin_mavi.png");
		margin-right: 10px;
	}
	.twitter{
		background-image: url("img/twitter.png");
		width: 60px;
		height: 60px;
		float: right;
		margin-top: -300px;
	}
	.twitter:hover{
		background-image: url("img/twitter_mavi.png");
		margin-right: 10px;
	}
	</style>
</head>
<body>
		<header>
		<div class="ust_menu">
			<p>
				Bu site Bilgisayar Mühendisi, Mühendis adayı olan veya olmak isteyen kişiler için bilgi edinecek bir platform olması
				için yapılmıştır. Her türlü istek ve şikayetlerinizi iletebilirsiniz. Elimden geldiğince yardımcı olmaya çalışacağım.
				Bilgi paylaştıkça çoğalır. Siz de kendi bildiklerinizi paylaşın. Biz de paylaşmanızda sizlere yardımcı olalım.
			</p>			
		</div>
			<div class="menu">
				<ul>				
				<a href="anasayfa.php?git=muh" title="selim silgu"><li id="pc">Bilgisayar Mühendisliği</li></a>
				<a href="anasayfa.php?git=oracle" title="oracle"><li id="ora">Oracle</li></a>
				<a href="anasayfa.php?git=java" title="java"><li id="java">Java</li>	</a>				
				</ul>				
			</div><div><img id="slmslg" src="img/yan.png"></div>
			<a href=""><div class="facebook"></div></a>
			<a href=""><div class="linkedin"></div></a>
			<a href=""><div class="twitter"></div></a>
		</header>

</body>
</html>