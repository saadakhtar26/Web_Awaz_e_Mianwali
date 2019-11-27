<!DOCTYPE html>
<html>
<head>

	<meta name="google-site-verification" content="Mqyum0V0Nh4gYclUOAbHNyboEL3zUhCxwBJn4DGMJ2c" />
	<?php include("meta.php"); ?>

	<script language="JavaScript">
		var i = 0
		images = new Array
		images[0] = "pics/img2.jpg"
		images[1] = "pics/img3.jpg"
		images[2] = "pics/img7.jpg"
		images[3] = "pics/img8.jpg"
		images[4] = "pics/img9.jpg"
		images[5] = "pics/img10.jpg"
		images[6] = "pics/img11.jpg"
		images[7] = "pics/img5.jpg"
		images[8] = "pics/img6.jpg"
		images[9] = "pics/img4.jpg"
		images[10] = "pics/img.jpg"
		images[11] = "pics/img2.jpg"

		function previmg(){
			if (i != 0){
				document.image1.src = images[i-1]
				i--
			}
		}

		function nextimg(){
			if (i != 11){
				document.image1.src = images[i+1]
				i++
			}
		}

	</script>

	<style>
		body{
			font-family: verdana;
		}
		.w3-card, .w3-bar{
			padding-left: 25px;
			margin-bottom: 20px;
		}
		.right{
			margin: 0px 0px 0px 25px;
			border: 2px solid #000;
		}
		.mainimg{
			width: 100%;
			height: 300px;
		}
		.w3-tangerine{
  		font-family: "Tangerine", verdana;
		}
		p{
			font-size: 150%;
		}
		@media (max-width:1100px) {
			.left{
				min-width: 33%;
				min-width: 34%;
			}
			.right{
				margin: 0px 7px 0px 7px;
				max-width: 63%;
			}
		}
		@media (max-width:1000px) {
			.left{
				min-width: 40%;
				margin-left: 29%;
			}
			.right{
				min-width: 97%;
				display: block;
				margin: 15px;
				border: none;
			}
		}
		@media (max-width:800px) {
			.left{
				min-width: 50%;
				margin-left: 25%;
			}
		}
		@media (max-width:650px) {
			.left{
				min-width: 65%;
				margin-left: 15%;
			}
			p{
				font-size: 130%;
			}
		}
		@media (max-width:450px) {
			.left{
				min-width: 85%;
				margin-left: 7%;
			}
		}
		@media (max-width:350px) {
			.w3-bar a{
				display: block;
				min-width: 99%;
			}
			.w3-card, .w3-bar{
				padding: 0px;
				margin-bottom: 10px;
			}
		}
	</style>
</head>

<body>
	<?php include("nav.php"); ?>

	<div class="w3-row">

		<div class="w3-col w3-container left" style="width:30%">
			<img class="mainimg" src="pics/img2.jpg" name="image1" />
			<button class="w3-left" onClick="previmg();"><img src="pics/pre-btn.png" /></button>
			<button class="w3-right" onClick="nextimg();"><img src="pics/for-btn.png" /></button>
		</div>


  	<div class="w3-col w3-container right" style="width:65%">
			<h1 class="w3-jumbo w3-tangerine w3-center"><b>آواز میانوالی</b></h1>

			<p class="w3-right-align">آواز میانوالی، سچائی اور حقیقت پر مبنی اخبار ہے جو صرف حق اور سچ کی زبان جانتا ہے۔ الحمدللہ اس میں اللہ پاک کے کرم سے ہم عوام کی آواز کا واحد سہارا بنا۔			ہم نے وہ کام انجام دئے ہیں جن میں میانوالی کی عوام کی آواز اور دعا شامل ہوئی اور اللہ پاک کے کرم سے ان کاموں کو ہم نے عملی طور پر انجام دلوایا۔<br />
			آواز میانوالی کسی سیاسی جماعت یا لیڈر کو ترجیع نہیں دیتا۔ اگر ترجیع دیتا ہے تو سچ کو، حق کو، انصاف کو اور ظلم کے خلاف لڑنے کو ترجیع دیتا ہے۔
			ہمارا نظریہ یہ ہے کہ ہمارے خطے اور ملک پاکستان میں امن کی فضا چھائے۔<br />
			<i class="w3-left"><u>18/05/2019</u></i></p>


			<h2 class="w3-tangerine w3-xxxlarge w3-center">عملہ</h2>
			<p class="w3-right-align">بانی: محمد محمود جاوید خان۔<br />
			چیف ایڈیٹر: حاجی مشتاق حسنین۔<br />
			پبلشر: شہزاد مسعود خان<br />
			پرنٹنگ پریس: واحد پرنٹنگ پریس، بلڈنگ ڈسٹرکٹ پریس کلب، میانوالی۔<br />
			فیکس نمبر: 0459234455<br />رابطہ نمبر:
			0090806-0300<br />
			0300-6080900&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

			<h2 class="w3-tangerine w3-xxxlarge w3-center">میانوالی ضلع</h2>
			<p class="w3-right-align w3-xlarge">میانوالی، صوبہ پنجاب کے شمال مغرب میں واقعہ ایک ضلع ہے۔ اس کے حدود چکوال، اٹک، کوہاٹ، کرک، لکی مروت، ڈیرہ اسماعیل خان، بھکر، اور خوشاب کے اضلاع سے ملتی ہیں۔
			میانوالی 5،840 مربہ کلومیٹر (2،250 مربہ میل) کا علاقہ گھیرے ہوئے ہے۔ شمال کا علاقہ پوٹوہار سطح مرتفع اور کوہستان نمک کا تسلسل ہے۔ ضلع کا جنوبی علاقہ تھل سحرا کا ایک علاقہ ہے۔ دریا سندھ، میانوالی سے گزرتا ہے۔</p>

			<h2 class="w3-tangerine w3-xxxlarge w3-center">قابل غور افراد</h2>
			<p class="w3-right-align">عمران خان - پاکستان کرکٹ ٹیم کے سابقہ کپتان اور اسلامی جمہوریہ پاکستان کے 22 ویں وزیر اعضم، میانوالی سے ہیں۔
			<br />عطا اللہ خان عیساخیلوی - ایک عظیم لوک گلوکار میانوالی سے ہیں۔
			<br />عبدالستار خان نیازی - پاکستان کے ایک عظیم سیاسی و مذہبی لیڈر، میانوالی سے ہیں۔
			<br />مصباع الحق - ایک عظیم پاکستانی کرکٹر ، میانوالی سے ہیں۔
			<br />طارق نیازی - ٹریک اور فیلڈ میں گولڈ میڈل لینے والے ایک عظیم اولمپیئن، میانوالی سے ہیں۔
			<br />شیر افغان نیازی - سابقہ وزیر قانون اور پارلیمانی رکن، میانوالی سے ہیں۔
			<br />شاداب خان - ایک عظیم پاکستانی کرٹر، میانوالی سے ہیں۔
			<br />عقیلہ آصفی - ایک عظیم افغان پناہ گزین اور استانی، جس نے ہزاروں دوسرے افغانی پناہ گزینوں کو تعلیم دی، میانوالی سے ہیں۔</p>

			<br /><br /><p class="w3-left-align w3-xlarge">Website Developer: <a href="https://www.facebook.com/bittronics/" target="_blank">Bittronics</a></p>
		</div>

	</div>
	<br />

</body>
</html>
