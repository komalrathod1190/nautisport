<?php include('templates/header.php');?>
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
                            <li><a href="javascript:;">Settings</a></li>
                            <li><a href="javascript:;">Log Out</a></li>                         
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

<div class="tr-breadcrumb">
    <div class="container">
        <div class="breadcrumb-info">    
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Shopping Cart</li>
            </ol>                       
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="main-wrapper">
    <div class="container">
        <div class="tr-section products-description">
            <div class="cart-title">
                <span>Cart</span>
            </div>
            <form class="woocommerce-cart-form" action="#">
                <div class="item-info-menu">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <span>Item</span>
                        </div>
                        <!-- <div class="col-lg-4 col-md-3 col-sm-2">
                            <span>Color</span>
                        </div> -->
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <span class="price">Price</span>
                        </div>
                         <div class="col-lg-2 col-md-2 col-sm-2">
                            <span>QTY</span>
                        </div>
                    </div><!-- /.row -->
                </div>
                <ul class="tr-list cart-list">
                    <li class="cart-item remove-item">
                        <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="product">
                                    <a href="details_news.html">
                                        <span class="product-image">
                                            <img src="images/product/man1.png" alt="Image" class="img-fluid">
                                        </span>   
                                        <span class="product-title">Jacket Helly Hansen </span>
                                        <span class="color">Black</span>
                                    </a>
                                </div><!-- /.product -->                      
                            </div>
                            <!-- <div class="col-lg-4 col-md-3 col-sm-2">
                                <div class="tr-color">
                                    <input type="radio" name="sellType" id="color1">
                                    <label></label>
                                </div>
                            </div> -->
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <span class="price">$149</span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="product-quantity">
                                    <div class="quantity" data-trigger="spinner">
                                        <a class="btn pull-left" href="javascript:;" data-spin="down"><i class="fa fa-minus"></i></a>
                                        <input type="text" name="quantity" value="1" title="quantity" class="input-text">
                                        <a class="btn pull-right" href="javascript:;" data-spin="up"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>                                               
                            </div>
                            
                        </div>
                    </li>
                    <li class="cart-item remove-item">
                        <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="product">
                                    <a href="details_news.html">
                                        <span class="product-image">
                                            <img src="images/product/man2.png" alt="Image" class="img-fluid">
                                        </span>   
                                        <span class="product-title">Jacket Helly Hansen </span>
                                        <span class="color">Black</span>
                                    </a>
                                </div><!-- /.product -->                             
                            </div>
                            <!-- <div class="col-lg-4 col-md-3 col-sm-2">
                                <div class="tr-color">
                                    <input type="radio" name="sellType" id="color2">
                                    <label></label>
                                </div>
                            </div> -->
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <span class="price">$149</span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="quantity" data-trigger="spinner">
                                    <a class="btn pull-left" href="javascript:;" data-spin="down"><i class="fa fa-minus"></i></a>
                                    <input type="text" name="quantity" value="1" title="quantity" class="input-text">
                                    <a class="btn pull-right" href="javascript:;" data-spin="up"><i class="fa fa-plus"></i></a>
                                </div>                                         
                            </div>
                            
                        </div>
                    </li>
                </ul>                                    
            </form>
            <ul class="tr-list cart-totals">
                <li>
                    <div class="row">
                        <div class="col-4 col-lg-8 col-md-8">
                            <span>Subtotal</span>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <span class="price">$79.99</span>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <span>2 Items</span>
                        </div>
                        
                    </div>
                </li>
                <li class="Promo-code">
                    <div class="row">
                        <div class="col-4 col-lg-8 col-md-8">
                            <span>Promo Code <a href="#">Edit</a></span>
                        </div>
                        <div class="col-4 col-md-2">
                            <span>10%off</span>
                        </div>
                        <div class="col-4 col-lg-1 col-md-2">
                            <span class="price">-€7.99</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-10 col-lg-10 col-md-10">
                            <span>Total</span>
                        </div>
                        <div class="col-2 col-lg-2 col-md-2">
                            <span class="price">$71.99</span>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="buttons">
                <a href="listing.html" class="btn btn-primary button-back pull-left">Back</a>
                <a href="payment.html"  class="btn btn-primary pull-right">Proceed To Checkout</a>
            </div>                          
        </div><!-- /.products-description -->
        <div class="tr-section products-description">
            <div class="cart-title m-0">
                <span>Recently View Products</span>
            </div>
            <div class="similar_product_slider">
            	<div class="row">
			      <div class="carousel carousel-showsixmoveone slide" id="carousel_similar">
			        <div class="carousel-inner">
			          <div class="item active">
			            <div class="col-xs-12 col-sm-6 col-md-3">
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
			            <div class="col-xs-12 col-sm-6 col-md-3">
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
			            <div class="col-xs-12 col-sm-6 col-md-3">
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
			            <div class="col-xs-12 col-sm-6 col-md-3">
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
			        <a class="left carousel-control" href="#carousel_similar" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			        <a class="right carousel-control" href="#carousel_similar" data-slide="next"><i class="fa fa-angle-right"></i></a>
			      </div>
			    </div>
			</div>
        </div>
    </div><!-- /.container -->   
</div><!-- /.main-wrapper -->

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