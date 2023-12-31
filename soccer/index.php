<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FootBaller</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<section id="header_main" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="col-sm-6 space_all">
     <div class="header_main_1">
       <ul>
       <li><i class="fa fa-phone"></i><a href="#">03132566239</a></li>
		<li><i class="fa fa-envelope"></i><a href="#">abbasimaier1@gmail.com</a></li>
	   </ul>
     </div>
    </div>
    <div class="col-sm-6 space_all">
     <div class="header_main_3">
      <ul>
      <li><a href="www.facbook.com"><i class="fa fa-facbook"></i></a></li>
		<li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
		<li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
		<li><a href="www.youtube.com"><i class="fa fa-youtube"></i></a></li>
		<li><a href="login.php"><i class="fa-thin fa-person" style="color: #000205;"></i>Logout</a></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="header" class="cd-secondary-nav">
 <div class="container">
  <div class="row">
   <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="index.html"><span class="well_2">FOOT</span>BALLER <span class="well_1"><i class="fa fa-dribbble"></i></span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" class="hvr-underline-from-center">HOME</a></li>
		<li><a href="blog.html" class="hvr-underline-from-center">BLOG</a></li>
		<li><a href="details.html" class="hvr-underline-from-center">DETAILS</a></li>

		<li><a href="gallery.html" class="hvr-underline-from-center">GALLERY</a></li>
		<li><a href="contact.html" class="hvr-underline-from-center">CONTACT</a></li>
        <li class="dropdown">
		<a href="#" class="hvr-wobble-to-top-right" data-toggle="dropdown">DROPDOWN <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			 <li class="tell_1"><a href="gallery.html">GALLERY</a></li>
			 <li class="tell_1"><a href="details.html">DETAILS</a></li>
		</li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
  </div>
 </div>
</section>
<section id="center">
  <div class="center">
   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <div class="overlay"></div>
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item slides">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Sed Dignissim Lacinia</h1> 
			 <h3>Vestibulum Lacinia Arcu Eget</h3>   
			 <h4><a href="#">CONUDIA NOSTRA</a></h4>    
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Torquent Per Conubia Nostra</h1> 
			 <h3>Vestibulum Lacinia Arcu Eget</h3>   
			 <h4><a href="#">CONUDIA NOSTRA</a></h4>    
        </hgroup>
      </div>
    </div>
    <div class="item slides active">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Fusce Nec Tellus Sed Augue</h1> 
			 <h3>Vestibulum Lacinia Arcu Eget</h3>   
			 <h4><a href="#">CONUDIA NOSTRA</a></h4>    
        </hgroup>
      </div>
    </div>
  </div> 
  </div>
  </div>
 </section>
<section id="middle">
 <div class="container">
  <div class="row">
   <div class="middle_1">
    <h2>Latest Results</h2>
	<hr class="hr_1">
	<h3>WC CHAMPIONSHIP</h3>
   </div>
   <div class="middle_2 clearfix">
    <div class="col-sm-3">
	 <div class="middle_3">
	  <h3><a href="#">Pink Flamingos</a></h3>
	  <hr class="hr_2">
	  <h4>WIN</h4>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="middle_4">
	  <a href="#"><img src="img/4.png" alt="abc" class="img_responsive"></a>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="middle_5">
	  <h3><a href="#">Pink Flamingos</a></h3>
	  <hr class="hr_3">
	  <h4>LOSS</h4>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="our">
 <div class="container">
  <div class="row">
   <div class="our_1 clearfix">
    <div class="col-sm-4">
	 <div class="our_2 clearfix">	  
	  <h4>Next Match</h4>
	 </div>
	 <div class="our_3 clearfix">
	  <div class="col-sm-3 space_all">
	   <div class="our_4 clearfix">
	    <h3>24</h3>
		<h4>day</h4>
	   </div>
	  </div> 
	  <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h3>07</h3>
		<h4>hrs</h4>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h3>03</h3>
		<h4>mins</h4>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h3>24</h3>
		<h4>secs</h4>
	   </div>
	  </div>  	  
	 </div>	
     <div class="our_5 clearfix">
	  <div class="col-sm-5 space_all">
	   <div class="our_6">
	    <a href="#"><img src="img/5.png"></a>
		<p>STRONG RAMS</p>
	   </div>
	  </div>
	  <div class="col-sm-2 space_all">
	   <div class="our_7">
	    <h3>  VS  </h3>
	   </div>
	  </div>
	  <div class="col-sm-5 space_all">
	   <div class="our_8">
	    <a href="#"><img src="img/6.png"></a>
		<p>KANGAROOS</p>
	   </div>
	  </div>
	 </div>	 
	 <div class="our_9">
	  <h6>May 3, 2020 <br/>Green park</h6>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="our_10">
	  <h4>UPCOMING FIXTURES</h4>
	  <ul>
	      <li><a href="#">WILD KANGAROOS</a></li>
		  <li>- VS -</li>
		  <li><a href="#">STRONG RAMS</a></li>
	  </ul>
	 </div>
	 <div class="our_11">
	  <h6>May 3, 2020 | 3:00 pm <br/>Green park</h6>
	 </div>
	 <div class="our_12">
	   <ul>
	      <li><a href="#">CROCODILES</a></li>
		  <li>- VS -</li>
		  <li><a href="#">STREAM SHARKS</a></li>
	  </ul>
	 </div>
	 <div class="our_13">
	  <h6>May 24, 2020 | 4:00 pm <br/>Big Stadium</h6>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="our_2 clearfix">	  
	  <h4>Next Match</h4>
	 </div>
	 <div class="our_3 clearfix">
	  <div class="col-sm-3 space_all">
	   <div class="our_4 clearfix">
	    <h3>24</h3>
		<h4>day</h4>
	   </div>
	  </div> 
	  <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h3>07</h3>
		<h4>hrs</h4>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h3>03</h3>
		<h4>mins</h4>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h3>24</h3>
		<h4>secs</h4>
	   </div>
	  </div>  	  
	 </div>	
     <div class="our_5 clearfix">
	  <div class="col-sm-5 space_all">
	   <div class="our_6">
	    <a href="#"><img src="img/7.png"></a>
		<p>STRONG RAMS</p>
	   </div>
	  </div>
	  <div class="col-sm-2 space_all">
	   <div class="our_7">
	    <h3>  VS  </h3>
	   </div>
	  </div>
	  <div class="col-sm-5 space_all">
	   <div class="our_8">
	    <a href="#"><img src="img/8.png"></a>
		<p>KANGAROOS</p>
	   </div>
	  </div>
	 </div>	 
	 <div class="our_9">
	  <h6>May 3, 2020 <br/>Green park</h6>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="related">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">   
    <div class="related_2">
     <div class="row">
        <div class="row">
            <div class="col-md-9">
			 <div class="related_1">
              <h2>TOP PRODUCTS</h2>
             </div>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example-generic" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example-generic" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/9.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/10.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product Example</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/11.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Next Sample</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/12.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/13.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Grouped Product</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/14.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="features">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="features_1">
	 <h2>LATEST NEWS</h2>
	</div>
   </div>
   <div class="col-sm-12">
                                    <!-- Nav tabs --><div class="card">
 <ul class="nav nav-tabs" role="tablist">
   <li role="presentation"><a href="http://bootsnipp-env.elasticbeanstalk.com/iframe/b2eVW#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Home</a></li>
   <li role="presentation"class="active"><a href="http://bootsnipp-env.elasticbeanstalk.com/iframe/b2eVW#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Profile</a></li>
 </ul>

                                    <!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane" id="home">
		 <div class="col-sm-4 space_all">
		  <div class="features_2">
		   <a href="#"><img src="img/15.jpg" alt="abc" class="img-responsive"></a>
		   <h3>THE MOST EPIC MATCH</h3>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque amet impedit illo. Veniam unde magnam repudiandae non amet cupiditate</p>
		  </div>
		  <div class="features_3 clearfix">
		   <div class="col-sm-8">
		    <div class="features_4">
			 <h5>September 1, 2023</h5>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="features_5">
			 <p><i class="fa fa-comment"></i> 0</p>
			</div>
		   </div>
		  </div>
		 </div>
		 <div class="col-sm-4 space_all">
		  <div class="features_2">
		   <a href="#"><img src="img/16.jpg" alt="abc" class="img-responsive"></a>
		   <h3>THE FASTET GOAL WORLD</h3>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque amet impedit illo. Veniam unde magnam repudiandae non amet cupiditate </p>
		  </div>
		  <div class="features_3 clearfix">
		   <div class="col-sm-8">
		    <div class="features_4">
			 <h5>September 1, 2023</h5>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="features_5">
			 <p><i class="fa fa-comment"></i> 0</p>
			</div>
		   </div>
		  </div>
		 </div>
		 <div class="col-sm-4 space_all">
		  <div class="features_2">
		   <a href="#"><img src="img/17.jpg" alt="abc" class="img-responsive"></a>
		   <h3>STREAM SHARKS BOUGHT A</h3>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque amet impedit illo. Veniam unde magnam repudiandae non amet cupiditate</p>
		  </div>
		  <div class="features_3 clearfix">
		   <div class="col-sm-8">
		    <div class="features_4">
			 <h5>September 1, 2023</h5>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="features_5">
			 <p><i class="fa fa-comment"></i> 0</p>
			</div>
		   </div>
		  </div>
		 </div>
		</div>
		<div role="tabpanel" class="tab-pane" id="profile">
		 <div class="col-sm-4 space_all">
		  <div class="features_2">
		   <a href="#"><img src="img/18.jpg" alt="abc" class="img-responsive"></a>
		   <h3>LIST OF BEST FOOTBALL</h3>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque amet impedit illo. Veniam unde magnam repudiandae non amet cupiditate</p>
		  </div>
		  <div class="features_3 clearfix">
		   <div class="col-sm-8">
		    <div class="features_4">
			 <h5>September 1, 2023</h5>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="features_5">
			 <p><i class="fa fa-comment"></i> 0</p>
			</div>
		   </div>
		  </div>
		 </div>
		 <div class="col-sm-4 space_all">
		  <div class="features_2">
		   <a href="#"><img src="img/19.jpg" alt="abc" class="img-responsive"></a>
		   <h3>WORLD’S GOALKEEPERS</h3>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque amet impedit illo. Veniam unde magnam repudiandae non amet cupiditate</p>
		  </div>
		  <div class="features_3 clearfix">
		   <div class="col-sm-8">
		    <div class="features_4">
			 <h5>September 1, 2023</h5>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="features_5">
			 <p><i class="fa fa-comment"></i> 0</p>
			</div>
		   </div>
		  </div>
		 </div>
		 <div class="col-sm-4 space_all">
		  <div class="features_2">
		   <a href="#"><img src="img/20.jpg" alt="abc" class="img-responsive"></a>
		   <h3>GOLDEN GLOVES OF THE</h3>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque amet impedit illo. Veniam unde magnam repudiandae non amet cupiditate</p>
		  </div>
		  <div class="features_3 clearfix">
		   <div class="col-sm-8">
		    <div class="features_4">
			 <h5>September 1, 2023</h5>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="features_5">
			 <p><i class="fa fa-comment"></i> 0</p>
			</div>
		   </div>
		  </div>
		 </div>
		</div>
	  </div>
     </div>
   </div>
  </div>
 </div>
</section>
<section id="related">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">   
    <div class="related_2">
     <div class="row">
        <div class="row">
            <div class="col-md-9">
			 <div class="related_1">
              <h2>AWARDS</h2>
             </div>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
 <a class="left fa fa-chevron-left btn btn-primary" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example-generic_1" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" 
					href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example-generic_1" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic_1" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/21.png" class="img-responsive" alt="a">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/22.png" class="img-responsive" alt="a">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/23.png" class="img-responsive" alt="a">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/24.png" class="img-responsive" alt="a">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/25.png" class="img-responsive" alt="a">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/26.png" class="img-responsive" alt="a">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   </div>
  </div>
 </div>
</section>
<!-- <section id="book" class="clearfix">
   <div class="book_1">
    <div class="col-sm-6 space_all">
	 <div class="book_2">
	  <h5>They Endure</h5>
	  <h3>RECEIVE OR READY</h3>
	 </div>
	</div>
	<div class="col-sm-6 space_all">
	 <div class="book_3">
	  <h3>WE ARE READY TO RECEIVE YOUR CALL</h3>
	  <h4>+1234 567 123</h4>
	 </div>
	</div>
   </div>
</section>
<section id="team">
 <div class="container">
  <div class="row">
   <div class="team_1">
    <h2>MEET TEAM</h2>
	<p>Our highly trained and efficient guides at your service</p>
   </div>
   <div class="team_2 clearfix">
    <div class="col-sm-4">
	 <div class="team_main clearfix">
	  <div class="team_3">
	  <a href="#"><img src="img/27.jpg" alt="abc" class="img_responsive"></a>
	 </div>
	 <div class="team_4">
	  <h3>Jason Stratham</h3>
	  <p>TOURISM EXPERT</p>
	  <ul>
	      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	  </ul>
	 </div>
	 </div>	 
	</div>
	<div class="col-sm-4">
	 <div class="team_main clearfix">
	  <div class="team_3">
	  <a href="#"><img src="img/28.jpg" alt="abc" class="img_responsive"></a>
	 </div>
	 <div class="team_4">
	  <h3>Cleona Tropez</h3>
	  <p>ADVENTURE GURU</p>
	  <ul>
	      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	  </ul>
	 </div>
	 </div>	 
	</div>
	<div class="col-sm-4">
	 <div class="team_main clearfix">
	  <div class="team_3">
	  <a href="#"><img src="img/29.jpg" alt="abc" class="img_responsive"></a>
	 </div>
	 <div class="team_4">
	  <h3>Martin Blake</h3>
	  <p>TREKKING GUIDE</p>
	  <ul>
	      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	  </ul>
	 </div>
	 </div>	 
	</div>
   </div>
  </div>
 </div>
</section> -->
<section id="footer" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="col-sm-12 space_all">
  <div class="col-sm-4">
    <div class="footer_1">
	 <h4>SEMPER</h4>
	<p>Lorem ipsum dolor sit amet, consectetur
	adipiscing elit. Integer nec odionec odio Sed cursus ante
	Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis
	nostra, per inceptos . Curabitursodales ligula in libero
	Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum</p>
	</div>
	</div>
	<div class="col-sm-4">
	 <div class="footer_2">
	  <h4>FOLLOW US</h4>
	  <ul>
	       <li class="well_3"><i class="fa fa-facebook"></i></li>
		   <li class="well_4"><i class="fa fa-twitter"></i></li>
		   <li class="well_5"><i class="fa fa-linkedin"></i></li>
		   <li class="well_6"><i class="fa fa-instagram"></i></li>
		   <li class="well_7"><i class="fa fa-rss"></i></li>
	  </ul>
	  <ul>
	       <li class="well_8"><i class="fa fa-youtube"></i></li>
		   <li class="well_9"><i class="fa fa-pinterest"></i></li>
		   <li class="well_10"><i class="fa fa-dribbble"></i></li>
		   <li class="well_11"><i class="fa fa-google"></i></li>
		   <li class="well_12"><i class="fa fa-skype"></i></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="footer_4">
	<h4>Contact Us</h4>
		<ul>
		   <li><i class="fa fa-map-marker"></i>Address: Pakistan, karachi</li>
		   <li><i class="fa fa-phone"></i>Phones: <a href="details.html">03132566239</a></li>
		   <li><i class="fa fa-envelope"></i>E-mail:<a href="details.html"> abbasimaier1@gmail.com</a></li> 
     </ul>
	</div>
	</div>
  </div>
  </div>
 </div>  
</section>
<section id="footer_main" class="clearfix">
	 <div class="col-sm-12 space_all">
	  <div class="footer_main_1">
      <p>© 2023 Foot Baller. All Rights Reserved. Design by Maier </p>
	  </div>
	 </div>
</section>
<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
		$(window).on('scroll', function(){
			if($(window).scrollTop() > secondaryNavTopPosition ) {
				secondaryNav.addClass('is-fixed');	
			} else {
				secondaryNav.removeClass('is-fixed');
			}
		});	
		
});
</script>
</body>
</html>