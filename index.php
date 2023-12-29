<?php
    require 'config.php';
    if(!empty($_SESSION['id']))
    {
        $email2=$_SESSION['id'];
        $result=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `Srno`='$email2'");
        $row=mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jazz affiliate marketing website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="nav.js"></script>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong><?php echo $row['Username']; ?></strong></div>
	
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/jazz_l.jpeg" alt="Jazz" width="200" height="90"/></a>
		<form class="form-inline navbar-search" method="post">
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class="">
	 <a href="logout.php" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
 
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="https://www.myntra.com/"><img src="themes/images/carousel/1.jpeg" alt="special offers" style=" width: 70% ;height: 70%;"/></a>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="https://www.ajio.com/s/up-to-40-percent-off-5233-42561"><img style=" width: 65% ;height: 60%;" src="themes/images/carousel/2.jpeg" alt=""/></a>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="https://www.ajio.com/s/50-to-70-percent-off-5233-42561"><img src="themes/images/carousel/3.jpeg" alt="" style=" width: 65% ;height: 65%;"/></a>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="https://www.forever21.in/c/party-wear-23-10948?page=1&orderway=asc&orderby=position"><img src="themes/images/carousel/4.jpeg" alt="" style=" width: 35% ;height: 40%;"/></a>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="https://www.adidas.co.in/"><img src="themes/images/carousel/5.jpeg" alt="" style=" width: 35% ;height: 40%;"/></a>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="https://in.puma.com/in/en/mens"><img src="themes/images/carousel/6.jpeg" alt="" style=" width: 30% ;height: 40%;"/></a>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a>CLOTHES</a>
				<ul>
					<li><a class="active" href="p_women_cloth.html"><i class="icon-chevron-right"></i>Women's Clothing  </a></li>
					<li><a href="p_women_shoes.html"><i class="icon-chevron-right"></i>Women's Shoes</a></li>
					<li><a href="p_women_bags.html"><i class="icon-chevron-right"></i>Women's Hand Bags </a></li>
					<li><a href="p_men_cloth.html"><i class="icon-chevron-right"></i>Men's Clothings </a></li>
					<li><a href="p_men_shoes.html"><i class="icon-chevron-right"></i>Men's Shoes </a></li>
					<li><a href="p_kids_cloth.html"><i class="icon-chevron-right"></i>Kid's Clothing </a></li>
					<li><a href="p_kids_shoes.html"><i class="icon-chevron-right"></i>Kid's Shoes  </a></li>
				</ul>
			</li>
			
			<li><a href="#">HEALTH & BEAUTY </a></li>
			<li><a href="#">SPORTS & LEISURE</a></li>
			<li><a href="#">BOOKS & ENTERTAINMENTS</a></li>
						
			</ul>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
		
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<img src="themes/images/products/1.jpeg" alt=""/></a>
					<div class="caption">
					  <h5>Tshirt</h5>
					  <p style="font-size: 12px;"> 
						Keep it stylish by wearing this easy breezy Black Graphic tshirt from Forever21. 
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="https://www.forever21.in/p/forever-21-graphic-tshirts-854598.html" class="btn" href="#">Buy Now<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.539.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<img src="themes/images/products/2.jpeg" alt=""/>
					<div class="caption">
					  <h5>Button-front trousers</h5>
					  <p> 
						Trousers in heavy jersey. High waist with concealed elastication, straight legs.
					  </p>
					 <h4 style="text-align:center"><a href="https://www2.hm.com/en_in/productpage.1133068008.html" class="btn" href="#">Buy Now<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.1,499.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<img src="themes/images/products/13.jpeg" alt=""/>
					<div class="caption">
					  <h5>Cotton Rich Super Mario™ Sweatshirt</h5>
					  <p> 
						Young gamers will love this cotton-rich sweatshirt and its cheerful Super Mario™ design.It features a fun Mario graphic on the front.Design best quality by M&S.
					  </p>
					   <h4 style="text-align:center"><a class="btn" href="https://www.marksandspencer.in/cotton-rich-super-mario%E2%84%A2-sweatshirt/p/000000060558942004.html?utm_source=google&utm_medium=cpc&utm_campaign=15852717312&adgroupid=&utm_content=PerformanceMax&utm_term=&gclid=CjwKCAjw15eqBhBZEiwAbDomEpBBYDWoLnWiqpoH1cMV8SXnwIWTzldinXxXhF7CeL6uKhcWxmQOpBoC3Q0QAvD_BwE&gclsrc=aw.ds" class="btn" href="#">Buy Now<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs1,799.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<img src="themes/images/products/20.jpeg" alt=""/>
					<div class="caption">
					  <h5>Small shoulder bag</h5>
					  <p> 
						Shoulder bag with a metal chain shoulder strap, flap with a metal lock and a zipped inner compartment. Lined. 
					  </p>
					  <h4 style="text-align:center"><a class="btn" href="https://www2.hm.com/en_in/productpage.1192988002.html?gclid=CjwKCAjw15eqBhBZEiwAbDomEvQY6JSN08DRhZDkSRUo4lTETrbL08HI1LFYzQAo_Mq2lzSSOhWlGxoC6_AQAvD_BwE" class="btn" href="#">Buy Now<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs1,499.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<img src="themes/images/products/19.jpeg" alt=""/>
					<div class="caption">
					  <h5>ADI STRIDX M</h5>
					  <p> 
						Colour: Core Black / Cloud White / Semi Impact Orange / Dove Grey 
					  </p>
					  <h4 style="text-align:center"><a class="btn" href="https://www.adidas.co.in/adi-stridx-m/IQ8819.html?pr=product_rr&slot=8&rec=ds" class="btn" href="#">Buy Now <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.4299.00
					</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<img src="themes/images/products/21.jpeg" alt=""/>
					<div class="caption">
					  <h5>AVRYN SHOES</h5>
					  <p> 
						Step into the BOOST and Bounce technologies of AVRYN for a new combo of versatility and comfort. It's the best of breakthrough sneaker tech now in a lifestyle shoe for all. Styling options unlimited.
					  </p>
					   <h4 style="text-align:center"><a class="btn" href="https://www.adidas.co.in/avryn-shoes/HP5972.html" class="btn" href="#">Buy Now<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs9,799.50</a></h4>
					</div>
				  </div>
				</li>
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a> 
				<a href="tac.html">TERMS AND CONDITIONS</a> 
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="#">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Jazz</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
		<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
	<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
	<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
		<div id="themeContainer">
		<div id="hideme" class="themeTitle">Style Selector</div>
		<div class="themeName">Oregional Skin</div>
		<div class="images style">
		<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
		</div>
		<div class="themeName">Bootswatch Skins (11)</div>
		<div class="images style">
			<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
			<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
			<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
			<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
		</div>
		<div class="themeName">Background Patterns </div>
		<div class="images patterns">
			<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
			<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
			
			<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
			
			<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
			<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
			 
		</div>
		</div>
	</div>
	<span id="themesBtn"></span>
	


</body>
</html>