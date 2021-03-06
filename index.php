<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Website</title>
<!-----------------Stylesheet--------->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!-------light slider--------------------->
<link rel="stylesheet" type="text/css" href="css/lightslider.css">
<!----jQuery------->
<script src="js/jQuery.js"></script>
<!----light slider js------------------------->
<script src="js/lightslider.js"></script>
<!-----------------------------------------favoutite icon------------------>
<link rel="shortcut icon" href="images/fav-icon.png">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
	<!--------------navigation---------->
	<nav>
		<!----------Social link & phn---------------->
		<div class="social-call">
			<!----------Social links---------->
			<div class="social">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
			<div class="phone">
				<span>Call +919876543210</span>
			</div>
			
		</div>
		<!-------menu----------->
		<div class="navigation">
			<!------logo-------->
			<a href="#" class="logo">
				<img src="images/logo.png"/>
			</a>
			<!----menu icon------------>
			<div class="toggle"></div>
			<!-----menu---------->
			<ul class="menu">
				<li><a href="#">Home</a></li>

				<li><a href="mens1.html">Men</a>
					<span class="sale-lable">Sale</span>
				</li>

				<li><a href="women.html">Women</a></li>
				<li><a href="kids.html">Kids</a></li>
				<li><a href="#">Shops</a></li>
			</ul>
			<!----------right-menu--------->
			<div class="right-menu">
				<!----search--->
				<a href="javascript:void(0);" class="search">
					<i class="fas fa-search"></i>
				</a> 
				<!----user--->
				<a href="javascript:void(0);" class="user">
					<i class="fas fa-user"></i>
				</a>
				<!----cart--->
				<a href="#">
					<i class="fas fa-shopping-cart">
					<!---number of prod in cart----------->
					<span class="num-cart-product">0</span>
					</i>
				</a>
			</div>
			
		</div>
	</nav>
	<!--------search --bar------>
	<div class="search-bar">
		<!----search-input---->
		<div class="search-input">
			<!-----------input------>
			<input type="text" placeholder="Search for Product"/>
			<!-------cancel btn---------->
			<a href="javascript:void(0);" class="search-cancel">
				<i class="fas fa-times"></i>
			</a>

		</div>
	</div>
	<!---------------login and signup form-------------->
		<div class="form">
			<!------login form------------>
			<div class="login-form">
				<!--------cancel-btn------------->
				<a href="javascript:void(0);" class="form-cancel">
					<i class="fas fa-times"></i>
				</a>
				<!----heading---->
				<strong>Log In</strong>
				<!--------inputs----->
				<form>
					<input type="email" placeholder="Example@gmail.com" name="email" required>
					<input type="password" placeholder="password" name="password" required>
					<!----------submit button--------->
					<input type="submit" value="Log In">
				</form>
				<!-----forget---and---sign-up-->
				<div class="form-btns">
					<a href="#" class="forget">Forget your password</a>
					<a href="javascript:void(0);" class="sign-up-btn">Create Account</a>
				</div>
			</div>
			<!------signup form------------>
			<div class="sign-up-form">
				<!--------cancel-btn------------->
				<a href="javascript:void(0);" class="form-cancel">
					<i class="fas fa-times"></i>
				</a>
				<!----heading---->
				<strong>Sign Up</strong>
				<!--------inputs----->
				<form>
					<input type="text" placeholder="Full Name" name="fullname" required>
					<input type="email" placeholder="Example@gmail.com" name="email" required>
					<input type="password" placeholder="password" name="password" required>
					<!----------submit button--------->
					<input type="submit" value="Sign Up">
				</form>
				<!-----forget---and---sign-up-->
				<div class="form-btns">
					<a href="javascript:void(0);" class="already-account">Already have Account?</a>
				</div>
			</div>
		</div>



<!--------------Full---slider------------------------------------------------------------------------>


<ul id="adaptive" class="cs-hidden">
	<li class="item-a">
		<div class="full-slider-box f-slide-1">
			<div class="slider-text-container">
				<div class="f-slider-text">
					<span>Limited offer</span>
					<strong>30% off<br/> with <font>promo code</font></strong>
					<a href="#" class="f-slider-btn">Shop Now</a>
				</div>
			</div>
		</div>
	</li>
	<li class="item-a">
		<div class="full-slider-box f-slide-2">
			<div class="slider-text-container">
				<div class="f-slider-text">
					<span>Limited offer</span>
					<strong>30% off<br/> with <font>promo code</font></strong>
					<a href="#" class="f-slider-btn">Shop Now</a>
				</div>
			</div>
		</div>
	</li>
	<li class="item-a">
		<div class="full-slider-box f-slide-3">
			<div class="slider-text-container">
				<div class="f-slider-text">
					<span>Limited offer</span>
					<strong>30% off<br/> with <font>promo code</font></strong>
					<a href="#" class="f-slider-btn">Shop Now</a>
				</div>
			</div>
		</div>
	</li>
  </ul>

  <!------------Featured categories----------------->
  <div class="feature-heading">
	  <h2>Featured Categories</h2>
  </div>
	  
  <ul id="autoWidth" class="cs-hidden">
	  <!--------------1--------------->
	<li class="item">
		  <!---------------feature----box------------------->
		  <div class="feature-box">
			<a href="#">
				<img src="images/feature_1.jpg">
			</a>
		</div>
		<!-----text------------------------------>
		<span>T-shirt</span>
	</li>
	<!--------------2--------------->
	<li class="item">
		<!---------------feature----box------------------->
		<div class="feature-box">
		  <a href="#">
			  <img src="images/feature_2.jpg">
		  </a>
	  </div>
	  <!-----text------------------------------>
	  <span>T-shirt</span>
  </li>
  <!--------------3--------------->
	<li class="item">
		<!---------------feature----box------------------->
		<div class="feature-box">
		  <a href="#">
			  <img src="images/feature_3.jpg">
		  </a>
	  </div>
	  <!-----text------------------------------>
	  <span>T-shirt</span>
  </li>
   <!--------------4--------------->
	<li class="item">
		<!---------------feature----box------------------->
		<div class="feature-box">
		  <a href="#">
			  <img src="images/feature_4.jpg">
		  </a>
	  </div>
	  <!-----text------------------------------>
	  <span>T-shirt</span>
  </li>
  <!--------------5--------------->
	<li class="item">
		<!---------------feature----box------------------->
		<div class="feature-box">
		  <a href="#">
			  <img src="images/feature_5.jpg">
		  </a>
	  </div>
	  <!-----text------------------------------>
	  <span>T-shirt</span>
  </li>
  <!--------------6--------------->
	<li class="item">
		<!---------------feature----box------------------->
		<div class="feature-box">
		  <a href="#">
			  <img src="images/feature_6.jpg">
		  </a>
	  </div>
	  <!-----text------------------------------>
	  <span>T-shirt</span>
  </li>

  </ul>

  <!----new----arrival-------------------------------------->
  <section class="new-arrival">
	  <!----------heading----------------------->
	  <div class="arrival-heading">
		  <strong>New Arrival</strong>
		  <p>We provide you new design fashion clothes</p>
	  </div>
	  <!-----product-container----------------------------->
	  <div class="product-container">
		  <!-----product box 1----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-1.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 2----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-2.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 3----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-3.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 4----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-4.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 5----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-5.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 6----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-6.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 7----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-7.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  <!-----product box 8----------------------------->
		  <div class="product-box">
			  
			
			<!--------img-------------------------------->
			  <div class="product-img">
				  <!---------add-cart-------------------------->
			  <a href="#" class="add-cart">
				<i class="fas fa-shopping-cart"></i>
				</a>
			
				<img src="images/p-8.png"/>
			  </div>
			
			
			
			  <!----------------detailes--------------------->
			  <div class="product-detailes">
				  <a href="#" class="p-name">Drawstring T-Shirt</a>
				  <span class="p-price">???499</span>
			  </div>
		  </div>
		  
	  </div>
  </section>
  <!-------------sale---------------------------------------------------->
  	<section class="sale">
		  <!-------sale box--1---------------->
		  <div class="sale-box">
			  <!---img----------------------->
			  <img src="images/sale-1.jpg"/>
			  <!-------text------------>
			  <a href="#">
				  <div class="sale-text">
					  <strong>Bag With Rose Pattern</strong>
					  <span>Sale off 25%</span>
				  </div>
			  </a>
		  </div>
		  <!-------sale box--2---------------->
		  <div class="sale-box">
			<!---img----------------------->
			<img src="images/sale-2.jpg"/>
			<!-------text------------>
			<a href="#">
				<div class="sale-text">
					<strong>Bag With Rose Pattern</strong>
					<span>Sale off 25%</span>
				</div>
			</a>
		</div>
		<!-------sale box--3---------------->
		<div class="sale-box">
			<!---img----------------------->
			<img src="images/sale-3.jpg"/>
			<!-------text------------>
			<a href="#">
				<div class="sale-text">
					<strong>Bag With Rose Pattern</strong>
					<span>Sale off 25%</span>
				</div>
			</a>
		</div>
	  </section>
	   <!----feature-products------------------------------------->
  <section class="new-arrival">
	<!----------heading----------------------->
	<div class="arrival-heading">
		<strong>Feature Items</strong>
		<p>We provide you new design fashion clothes</p>
	</div>
	<!-----product-container----------------------------->
	<div class="product-container">
		<!-----product box 1----------------------------->
		<div class="product-box">
			
		  
		  <!--------img-------------------------------->
			<div class="product-img">
				<!---------add-cart-------------------------->
			<a href="#" class="add-cart">
			  <i class="fas fa-shopping-cart"></i>
			  </a>
		  
			  <img src="images/p-1.png"/>
			</div>
		  
		  
		  
			<!----------------detailes--------------------->
			<div class="product-detailes">
				<a href="#" class="p-name">Drawstring T-Shirt</a>
				<span class="p-price">???499</span>
			</div>
		</div>
		<!-----product box 2----------------------------->
		<div class="product-box">
			
		  
		  <!--------img-------------------------------->
			<div class="product-img">
				<!---------add-cart-------------------------->
			<a href="#" class="add-cart">
			  <i class="fas fa-shopping-cart"></i>
			  </a>
		  
			  <img src="images/p-2.png"/>
			</div>
		  
		  
		  
			<!----------------detailes--------------------->
			<div class="product-detailes">
				<a href="#" class="p-name">Drawstring T-Shirt</a>
				<span class="p-price">???499</span>
			</div>
		</div>
		<!-----product box 3----------------------------->
		<div class="product-box">
			
		  
		  <!--------img-------------------------------->
			<div class="product-img">
				<!---------add-cart-------------------------->
			<a href="#" class="add-cart">
			  <i class="fas fa-shopping-cart"></i>
			  </a>
		  
			  <img src="images/p-3.png"/>
			</div>
		  
		  
		  
			<!----------------detailes--------------------->
			<div class="product-detailes">
				<a href="#" class="p-name">Drawstring T-Shirt</a>
				<span class="p-price">???499</span>
			</div>
		</div>
		<!-----product box 4----------------------------->
		<div class="product-box">
			
		  
		  <!--------img-------------------------------->
			<div class="product-img">
				<!---------add-cart-------------------------->
			<a href="#" class="add-cart">
			  <i class="fas fa-shopping-cart"></i>
			  </a>
		  
			  <img src="images/p-4.png"/>
			</div>
		  
		  
		  
			<!----------------detailes--------------------->
			<div class="product-detailes">
				<a href="#" class="p-name">Drawstring T-Shirt</a>
				<span class="p-price">???499</span>
			</div>
		</div>
	</div>
	</section>

	<!---------------------banner------------------------------------------------->
	<div class="banner-box f-slide-3">
		<div class="banner-text-container">
			<div class="banner-text">
				<span>Limited offer</span>
				<strong>30% off<br/> with <font>promo code</font></strong>
				<a href="#" class="banner-btn">Shop Now</a>
			</div>
		</div>
	</div>

	<!--------services-------------------------------------->
		<section class="services">
			<!-----services-box-1------------------------>
			<div class="services-box">
				<i class="fas fa-shipping-fast"></i>
				<span>Free Shipping</span>
				<p>Free Shipping all over India</p>
			</div>
			<!-----services-box-2------------------------>
			<div class="services-box">
				<i class="fas fa-headphones-alt"></i>
				<span>Support 24/7</span>
				<p>We Support 24h a day</p>
			</div>
			<!-----services-box-3------------------------>
			<div class="services-box">
				<i class="fas fa-sync"></i>
				<span>100% Money back</span>
				<p>Ypu have 30 days to return</p>
			</div>
		</section>
		<!-------------------footer-------------->
		<footer>
			<!-------------copyright------------->
			<span class="copyright">
				Copyright 2020 - RVR Embedded Services
			</span>
			<!----subscribe--------------------->
			<div class="subscribe">
				<form>
					<input type="email" placeholder="Example@gmail.com" required/>
					<input type="submit" placeholder="Subscribe">
				</form>
			</div>
		</footer>









 
	
	<!---------script--------->
	<script type="text/javascript">
		/*-----------For search bar------*/
		/*-----For Search Bar-----------------------------*/
    $(document).on('click','.search',function(){
        $('.search-bar').addClass('search-bar-active')
    });
 
    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
	});
	/*-------------login-singup---forms--*/
	$(document).on('click','.user,.already-account',function(){
		$('.form').addClass('login-active').removeClass('sign-up-active')
	});
	$(document).on('click','.sign-up-btn',function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
	});
	$(document).on('click','.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
	});
	/*--------------------full slider script---------------*/
	$(document).ready(function() {
    $('#adaptive').lightSlider({
		adaptiveHeight:true,
		auto:true,
        item:1,
        slideMargin:0,
        loop:true
    });
});
/*------------------feature---slides-----------------*/
	 $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });


  /*------------for fix menu when scroll-----------------*/
  $(window).scroll(function(){
	  if($(document).scrollTop() > 50){
		  $('.navigation').addClass('fix-nav');
	  }
	  else{
		$('.navigation').removeClass('fix-nav');
	  }
  })
  /*----------for responsive menu-------------------------------*/
  $(document).ready(function(){
	  $('.toggle').click(function(){
		  $('.toggle').toggleClass('active')
		  $('.navigation').toggleClass('active')
	  })
  })
	</script>
</body>
</html>