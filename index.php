<?php include('templates/header.php');?>
<body>
<div class="tr-topbar">
<div class="container clearfix">
    <div class="select-language">
    	<ul class="tr-list">
            <li><span><a href="javascript:;"><span class="icon icon-support"></span>Une question ? 04 78 41 79 31</a> - LUNDI AU VENDREDI de 9H à 12H et de 14H à 18H</span></li>   
        </ul>                      
    </div>
    <div class="topbar-right">
        <ul class="tr-list">
            <li><span><a href="javascript:;" class="main-color">Contactez-nous</a></span></li>
            <li><span><a href="javascript:;" class="main-color"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></li>
            <li><span><a href="javascript:;" class="main-color"><i class="fa fa-twitter" aria-hidden="true"></i></a></span></li> 
        </ul>                   
    </div>
</div><!-- /.container -->
</div><!-- /.tr-topbar -->

<div class="topbar-middle">
<div class="container clearfix">
    <a class="tr-logo logo" href=""><img class="img-fluid" src="images/logo.png" alt="Logo"></a>
    <a class="tr-logo tr-logo-2" href=""><img class="img-responsive" src="images/logo-white.png" alt="Logo"></a>
    <form class="search-form" action="#" id="search" method="get">
        <input class="form-control" name="search" type="text" placeholder="Search for an article, a mark ...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form><!-- /.form -->
    <div class="right-content">
        <div class="tr-user">
            <div class="user-image">
                <img src="images/others/user.png" alt="Image" class="img-fluid">
            </div>
            <div class="user-option">
                <div class="tr-dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Elizabeth
                    <span class="caret"></span></a>
                    <ul class="tr-dropdown-menu">
                        <li><a href="javascript:;"> <i class="fa fa-cogs" aria-hidden="true"></i> Settings</a></li>
                        <li><a href="javascript:;"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>                         
                    </ul>
                </div><!-- /.dropdown -->
            </div>
        </div><!-- /.tr-user -->

        <ul class="tr-list cart-content">
            <li class="tr-dropdown"><a href="javascript:;"><span class="icon icon-basket"></span> <span class="cart-number">5</span></a>
                <div class="tr-dropdown-menu">
                    <ul class="tr-list">
                        <li class="remove-item">
                            <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <div class="product">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/man1.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Zigzag Watch</span>
                                    <span class="color">Blue</span>
                                    <span class="price"><del>$560</del>$299</span>
                                </a>
                            </div>                                   
                        </li>
                        <li class="remove-item">
                            <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <div class="product">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/man2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Zigzag Watch</span>
                                    <span class="color">Blue</span>
                                    <span class="price"><del>$560</del>$299</span>
                                </a>
                            </div>                                   
                        </li>
                    </ul>
                    <div class="total-price">
                        <span><strong>Total Price: </strong>$598:00</span>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-primary cart-button" href="shopping-cart">View Cart</a>
                        <a class="btn btn-primary" href="javascript:;">Checkout</a>
                    </div>                                                                
                </div>
            </li>
        </ul>
    </div> 
    <a href="newslatter_popup" class="newslatter_bnt mobile_view" data-toggle="modal" data-target="#newslatter_popup">NEWS LATTER</a>                
</div>
</div>         

<div class="news_latter">
<div class="container">
    <div class="row">
        <a href="newslatter_popup" class="newslatter_bnt desktop_view" data-toggle="modal" data-target="#newslatter_popup" >NEWS LATTER</a>

        <div class="news">
            <div id="newslatter_popup" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="user-account text-center">
                                <h3>Inscrivez vous à notre newsletter</h3>
                                <form action="#" class="tr-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Email Address">
                                    </div>                
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>                         
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-signin --> 
        </div>
    </div>
</div>
</div>

<!-- user-modal -->
<div class="user-modal">
<div id="modal-signin" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="user-account text-center">
                    <h1>Create Account</h1>
                    <p>Don’t worry, we won’t spam you or sell your information.</p>
                    <form action="#" class="tr-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>                  
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        <div class="forgot-password">
                            <a href="javascript:;">Forgot Password</a>
                        </div>
                        <ul class="tr-list social">
                            <li class="pull-left"><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                            <li class="pull-right"><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </form>                         
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal-signin --> 

<div id="modal-signup" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="user-account text-center">
                    <h1>Create Account</h1>
                    <p>Don’t worry, we won’t spam you or sell your information.</p>
                    <form action="#" class="tr-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span>By continuing, you agree to our Terms of Use and Privacy Policy.</span>               
                        <button type="submit" class="btn btn-primary">Create account</button>
                        <div class="already-acount">
                            <a href="javascript:;">Already have an acount?</a>
                        </div>
                    </form>                         
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal-signup -->     
</div><!-- /.user-modal -->   

<nav class="navbar navbar-default">
<div class="container p-r">
    <div class="row">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	  </div>
	  <div class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="javascript:;">homme</a></li>
	      <li class="nav-item tr-dropdown mega-dropdown">
	      	<a href="javascript:;" class="nav-link">femme</a>
	        <ul class="tr-dropdown-menu mega-menu mega-menu-bg-3" role="menu">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-10 col-xs-12 col-sm-10">
						    <div class="row">
						    <div class="col-md-3 col-sm-6 col-xs-12">
				                        <li>
				                        	<span class="title">Voile Haute Mer</span>
				                           	<ul>
				                            	<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Veste de quart haute mer</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Salopette haute mer</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Vêtement polaire, softshell</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Sous-vêtement technique</a></li>
				                            </ul>
				                        </li>
			                </div>
			                <div class="col-md-3 col-sm-6 col-xs-12">
				                        <li>
				                        	<span class="title">Voile Croisière et Régate</span>
				                           	<ul>
				                            	<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Veste de quart</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Salopette, pantalon de navigation</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Vêtement polaire, softshell</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Sous-vêtement technique</a></li>
				                            </ul>
				                        </li>
			                </div>
			                <div class="col-md-3 col-sm-6 col-xs-12">
				                        <li>
				                        	<span class="title">Dériveur/Cata/Kitesurf</span>
				                           	<ul>
				                            	<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Combinaison néoprène, combinaison sèche</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Haut, top de dériveur</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Lycra, top hydrophobe</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Salopette, short</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Sous-vêtement technique</a></li>
				                            </ul>
				                        </li>
			                </div>
			                <div class="col-md-3 col-sm-6 col-xs-12">
				                        <li>
				                        	<span class="title">Mode Marine Femme</span>
				                           	<ul>
				                            	<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Pantalon, short, jupe, robe</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Chemise et pull</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> T-Shirt et polo</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Polaire</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Blouson et veste de pont</a></li>
				                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Ciré traditionnel</a></li>
				                            </ul>
				                        </li>
			                </div>
		            		</div>
		            	</div>
                	</div>
            	</div>
            </ul>
          </li>
	      <li class="nav-item tr-dropdown mega-dropdown">
	      	<a href="javascript:;">enfant</a>
	      	<ul class="tr-dropdown-menu mega-menu mega-menu-bg-4" role="menu">
	      		<div class="container">
	        		<div class="row">
	        			<div class="col-md-10 col-xs-12 col-sm-10">
						    <div class="row">
					        	<div class="col-md-3 col-sm-6 col-xs-12">
			                        <li>
			                        	<span class="title">Enfant</span>
			                           	<ul>
			                            	<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Voile croisière</a></li>
			                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Dériveur et catamaran</a></li>
			                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Vêtement marin enfant</a></li>
			                            </ul>
			                        </li>
		                        </div>
          					</div>
          				</div>
          			</div>
          		</div>
            </ul>
	      </li>
		  <li class="nav-item tr-dropdown mega-dropdown">
		  	<a href="javascript:;">Équipage accessoires</a>
		  	<ul class="tr-dropdown-menu mega-menu mega-menu-bg-5" role="menu">
		  		<div class="container">
	        		<div class="row">
	        			<div class="col-md-10 col-xs-12 col-sm-10">
						    <div class="row">
					        	<div class="col-md-3 col-sm-6 col-xs-12">
			                        <li>
			                        	<span class="title">Équipage</span>
			                           	<ul>
			                            	<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Veste de pont</a></li>
			                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Polo</a></li>
			                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Short</a></li>
			                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Chaussures</a></li>
			                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Sac</a></li>
			                            </ul>
			                        </li>
		                        </div>
                			</div>
                		</div>
                	</div>
                </div>
            </ul>
          </li>
	      <li><a href="javascript:;">Sécurité</a></li>      
	      <li><a href="javascript:;">Chaussure Bateau</a></li>      
	      <li><a href="javascript:;">Navigation</a></li>      
	      <li><a href="javascript:;">Décoration</a></li>      
	      <li><a href="javascript:;">Loisir Nautique</a></li>      
	      <li><a href="javascript:;">Marques</a></li>      
	    </ul>
	  </div>
    </div>
</div>
</nav>

<div id="example2" class="slider-pro">
<div class="sp-slides">
	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>
    <div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>
	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>
	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>

	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>

	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>

	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>

	<div class="sp-slide">
		<a href="javascript:;">
			<img class="sp-image" src="images/slide_1.png" data-src="images/slide_1.png" data-retina="images/slide_1.png"/>
            <p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</a>
	</div>
</div>
</div>

<div class="main-wrapper">
<div class="container">
    <div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
			<div class="about_us">
                <div class="cart-title">
                    <span>About Nautisports</span>
                </div>
    			<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
    			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
			<div class="row">
        		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 float-left">
        			<a href="javascript:;" class="category-info add_img_home">
                        <div class="category-image">
                        	<img src="images/ad_1.png" alt="Image" class="img-fluid">
                        </div>
                    </a>
        		</div>
        		<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 float-left">
        			<a href="javascript:;" class="category-info add_img_home">
                        <div class="category-image">
                        	<img src="images/ad_2.png" alt="Image" class="img-fluid">
                        </div>
                    </a>
        		</div>
        		<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 float-left">
        			<a href="javascript:;" class="category-info add_img_home">
                        <div class="category-image">
                        	<img src="images/ad_3.png" alt="Image" class="img-fluid">
                        </div>
                    </a>
        		</div>
    		</div>
		</div>
    </div>
</div>
</div><!-- /.main-wrapper -->

<div class="tab_slider">
<div class="container">
	<h1 class="category-title">Vêtement de mer homme</h1>
<div class="home_border">
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">Veste de quart haute mer</button>
	  <button class="tablinks" onclick="openCity(event, 'tab2')">Veste de quart croisière et régate</button>
	  <button class="tablinks" onclick="openCity(event, 'tab3')">Salopette de voile croisière</button>
	  <button class="tablinks" onclick="openCity(event, 'tab4')">Veste de quart haute mer</button>
	  <button class="tablinks" onclick="openCity(event, 'tab5')">Veste de quart croisière et régate</button>
	  <button class="tablinks" onclick="openCity(event, 'tab6')">Salopette de voile croisière</button>
	</div>

	<div id="tab1" class="tabcontent active">
		<div class="row">
		    <div class="col-md-12">
		      <div class="carousel carousel-showsixmoveone slide" id="carousel123">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
				            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
				        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
				            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_3.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
				        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>          
		        </div>
		        <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		        <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="fa fa-angle-right"></i></a>
		      </div>
		    </div>
		</div>
	</div>
	<div id="tab2" class="tabcontent">
	  	<div class="row">
		    <div class="col-md-12">
		      <div class="carousel carousel-showsixmoveone slide" id="carousel2nd">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>          
		        </div>
		        <a class="left carousel-control" href="#carousel2nd" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		        <a class="right carousel-control" href="#carousel2nd" data-slide="next"><i class="fa fa-angle-right"></i></a>
		      </div>
		    </div>
		</div>
	</div>

	<div id="tab3" class="tabcontent">
	  	<div class="row">
		    <div class="col-md-12">
		      <div class="carousel carousel-showsixmoveone slide" id="carousel3nd">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>          
		        </div>
		        <a class="left carousel-control" href="#carousel3nd" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		        <a class="right carousel-control" href="#carousel3nd" data-slide="next"><i class="fa fa-angle-right"></i></a>
		      </div>
		    </div>
		</div>
	</div>

	<div id="tab4" class="tabcontent">
	  <div class="row">
		    <div class="col-md-12">
		      <div class="carousel carousel-showsixmoveone slide" id="carousel4nd">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>          
		        </div>
		        <a class="left carousel-control" href="#carousel4nd" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		        <a class="right carousel-control" href="#carousel4nd" data-slide="next"><i class="fa fa-angle-right"></i></a>
		      </div>
		    </div>
		</div>
	</div>

	<div id="tab5" class="tabcontent">
	  <div class="row">
		    <div class="col-md-12">
		      <div class="carousel carousel-showsixmoveone slide" id="carousel5nd">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>          
		        </div>
		        <a class="left carousel-control" href="#carousel5nd" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		        <a class="right carousel-control" href="#carousel5nd" data-slide="next"><i class="fa fa-angle-right"></i></a>
		      </div>
		    </div>
		</div>
	</div>

	<div id="tab6" class="tabcontent">
	  <div class="row">
		    <div class="col-md-12">
		      <div class="carousel carousel-showsixmoveone slide" id="carousel6nd">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>
		          <div class="item">
		            <div class="col-xs-12 col-sm-6 col-md-4">
		            	<div class="product">
                            <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_3.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
		            </div>
		          </div>          
		        </div>
		        <a class="left carousel-control" href="#carousel6nd" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		        <a class="right carousel-control" href="#carousel6nd" data-slide="next"><i class="fa fa-angle-right"></i></a>
		      </div>
		    </div>
		</div>
	</div>

</div>
</div><!-- /.container --> 
</div>
<div class="tab_slider">
<div class="container">
	<h1 class="category-title">Vêtement de mer homme</h1>
	<div class="home_border">
		<div class="tr-section products">
            <div class="bg_white">
                <div class="product col-md-3 col-sm-6 col-xs-12">
                	<div class="over_size">
                	            <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                        	<span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                        	<span class="dark_red"></span>
                                        	<span class="sky_blue"></span>
                                        	<span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                        	<img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
	                                    <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
	                                    <span class="price">€229 <del>€330</del></span>
                                	</div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

			                    <div class="available-sizes">
    								<ul>
                                    	<li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                            			<li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                            			<li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                            			<li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                            		</ul>
								</div>
					</div>

                                
                </div>
                <div class="product col-md-3 col-sm-6 col-xs-12">
                    <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_2.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                    </div>

                                
                </div>
                <div class="product col-md-3 col-sm-6 col-xs-12">
                    <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_3.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                    </div>

                                
                </div>
                <div class="product col-md-3 col-sm-6 col-xs-12">
                    <div class="over_size">
                                <a href="details">
                                    <span class="product-image">
                                        <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                                        <span class="discont">
                                            <span class="disocunt_counter">31%</span>
                                        </span>
                                        <span class="color_pike">
                                            <span class="dark_red"></span>
                                            <span class="sky_blue"></span>
                                            <span class="dark_blue"></span>
                                        </span>
                                        <span class="brand_logo">
                                            <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                                        </span>
                                        <div class="new_left_side">
                                            <span class="new_product"> </span>
                                            <span class="discount_product"> </span>
                                        </div>
                                    </span>
                                    <div class="for_bg">
                                        <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                                        <span class="price">€229 <del>€330</del></span>
                                    </div>
                                </a>
                                <div class="product-icon">
                                    <a href="javascript:;"><span class="icon icon-basket"></span></a>
                                    <a href="javascript:;"><span class="icon icon-pulse"></span></a>
                                </div>

                                <div class="available-sizes">
                                    <ul>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">S</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">M</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">L</a></li>
                                        <li style=""><a href="javascript:;" title="M'S Nano Puff Jkt Forge Grey">XL</a></li>
                                    </ul>
                                </div>
                    </div>        
                </div>
            </div>
        </div>
	</div>
</div>
</div>  


<!-- <div class="category-products currency-EUR">
        <div class="product-item grid4">
            <div class="item first">
                        
                <span class="product-image">
                    <img src="images/product/product_1.png" alt="Image" class="img-fluid">
                    <span class="discont">
                        <span class="disocunt_counter">31%</span>
                    </span>
                    <span class="color_pike">
                        <span class="dark_red"></span>
                        <span class="sky_blue"></span>
                        <span class="dark_blue"></span>
                    </span>
                    <span class="brand_logo">
                        <img src="images/product/brand-1.png" alt="Image" class="brand_logo">
                    </span>
                    <div class="new_left_side">
                        <span class="new_product"> </span>
                        <span class="discount_product"> </span>
                    </div>
                </span>
                <div class="for_bg">
                    <span class="product-title">Veste de quart Skagen 2<br>Jacket Helly Hansen </span>
                    <span class="price">€229 <del>€330</del></span>
                </div>
                <div class="close-roll-over">
                    <img src="https://assets.snowleader.com/skin/frontend/snowleader/refonte2015/images/pictos/black-cross-15.svg" alt="close roll over" name="close roll over" width="15" height="15"/>
                </div>
                <div class="color-variants">
                    <ul>
                        <li>
                            <a href="#" title="M&amp;#39S Nano Puff Jkt Forge Grey">
                                <img src="https://images.snowleader.com/media/catalog/product/cache/1/image/60x/0dc2d03fe217f8c83829496872af24a0/m/_/m_s_nano_puff_jkt_forge_grey-configurable-patagonia-pata00495.jpg" width="60" height="60"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="available-sizes">
                    <ul>
                        <li>
                            <a href="#" title="M'S Nano Puff Jkt Forge Grey">S</a>
                        </li>
                        <li>
                            <a href="#" title="M'S Nano Puff Jkt Forge Grey">M</a>
                        </li>
                        <li>
                            <a href="#" title="M'S Nano Puff Jkt Forge Grey">L</a>
                        </li>
                        <li>
                            <a href="#" title="M'S Nano Puff Jkt Forge Grey">XL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div> -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="rating_like">
					<img src="images/like.png" alt="like" title="like"><br>
					<span>LABEL QUALITE EKOMI</span>
					<span class="rank">4/5</span>
					<ul class="ratting">
						<li><a href="javascript:;"><i class="fa fa-star"></i></a></li>
						<li><a href="javascript:;"><i class="fa fa-star"></i></li>
						<li><a href="javascript:;"><i class="fa fa-star"></i></li>
						<li><a href="javascript:;"><i class="fa fa-star"></i></li>
						<li><a href="javascript:;"><i class="fa fa-star"></i></li>
					</ul>
				</div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="follow_ns contact_us">
                    <h2>Contact Us</h2>

                    <span>Free advice</span>
                    <ul>
                        <li>
                            <span><i class="fa fa-phone"></i> 04.78.41.79.31</span>
                        </li>
                        <li>    
                            <span><i class="fa fa-calendar"></i> Monday to Saturday</span>
                        </li>
                        <li>
                            <span><i class="fa fa-clock-o"></i> from 9:30 to 12:00 </span>
                        </li>
                        <li>
                            <span><i class="fa fa-clock-o"></i> and from 13:30 to 18:00</span>
                        </li>
                        <li>
                            <span> <a href="javascript:;" class="contact_form">Contact form</a> </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="map_section">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14688.729231232996!2d72.52638685!3d23.0170775!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1519799068394" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="map_content">
                        <span>
                            <strong>Our Store</strong><br>Open Monday to Friday from 9:30 to 18:30 13, rue Curie  69006 Lyon
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand_slider">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="carousel carousel-showsixmoveone slide" id="carousel1234">
	        <div class="carousel-inner">
	          <div class="item active">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_1.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_2.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_3.png" class="img-responsive"></a></div>
	          </div>          
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_4.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_5.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_6.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_7.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="images/brands/brand_1.png" class="img-responsive"></a></div>
	          </div>
	        </div>
	        <a class="left carousel-control" href="#carousel1234" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	        <a class="right carousel-control" href="#carousel1234" data-slide="next"><i class="fa fa-angle-right"></i></a>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<div class="tr-convenience">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="convenience">
                    <div class="icon">
                        <img src="images/others/icon1.png" alt="Image" class="img-fluid">
                    </div>
                    <span>Livraison offerte dès 150€</span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="convenience">
                    <div class="icon">
                        <img src="images/others/icon2.png" alt="Image" class="img-fluid">
                    </div>
                    <span>Retours et Echanges 30 jours</span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="convenience">
                    <div class="icon">
                        <img src="images/others/icon3.png" alt="Image" class="img-fluid">
                    </div>
                    <span>Conseils 04.78.41.79.31</span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="convenience">
                    <div class="icon">
                        <img src="images/others/icon4.png" alt="Image" class="img-fluid">
                    </div>
                    <span>Paiement 3X sans frais</span>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.tr-convenience -->
<?php include('templates/footer.php');?>
    