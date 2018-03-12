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
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active">Shopping Cart</li>
            </ol>                   
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="main-wrapper">
    <div class="container">
        <div class="tr-section products-description">
            <div class="cart-title">
                <span>Delivery</span>
            </div>

            <form class="contact-form" name="contact-form" method="post" action="#">   
                <ul class="tr-list delivery-category">
                    <li>
                        <input type="radio" name="sellType" value="free-delivery" id="free-delivery">
                        <label for="free-delivery">Free Delivery</label>
                    </li>
                    <li>
                        <input type="radio" name="sellType" value="express-delivery" id="express-delivery">
                        <label for="express-delivery">Express Delivery - $19</label>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" required="required" id="first-name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" required="required" id="last-name">
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" required="required" id="email">
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mobile-number">Mobile Number</label>
                            <input type="number" class="form-control" required="required"  id="mobile-number">
                        </div> 
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group address">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" required="required" id="address" placeholder="Moscow, Pushkinskaya Square, 2">
                        </div> 
                    </div>   
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" required="required" id="city">
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-control-after">
                            <label for="country">Country</label>
                            <select id="country" class="form-control">
                                <option value="#">country</option>
                                <option value="#">Lebanon</option>
                                <option value="#">Brazil</option>
                                <option value="#">Australia</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-control-after">
                            <label for="state">State</label>
                            <select id="state" class="form-control">
                                <option value="#">Russia</option>
                                <option value="#">China</option>
                                <option value="#">United States</option>
                            </select>
                        </div> 
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" required="required" id="zip">
                        </div> 
                    </div>     
                </div>
                <div class="buttons">
                    <a href="payment.html" class="btn btn-primary button-back pull-left">Back</a>
                    <a href="congrats.html"  class="btn btn-primary pull-right">Proceed To Checkout</a>
                </div>
            </form>                           
        </div><!-- /.products-description -->

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