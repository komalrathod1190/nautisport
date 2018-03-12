
<div class="tr-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left-content">
                        <h3>Sign up for newsletter</h3>
                        <p>Enter your email to receive relevant messaging tips and examples.</p>
                        <form action="#">
                            <input class="form-control" type="email" required="required" placeholder="Enter Your Email Id">
                            <input type="submit" class="btn">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>We Accept</h3>
                    <p>Enter your email to receive relevant messaging tips and examples.</p>
                    <div class="payment-card">
                        <ul class="tr-list">
                            <li><img src="images/others/card1.png" alt="Image" class="img-fluid"></li>
                            <li><img src="images/others/card2.png" alt="Image" class="img-fluid"></li>
                            <li><img src="images/others/card3.png" alt="Image" class="img-fluid"></li>
                            <li><img src="images/others/card4.png" alt="Image" class="img-fluid"></li>
                            <li><img src="images/others/card5.png" alt="Image" class="img-fluid"></li>
                            <li><img src="images/others/card6.png" alt="Image" class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-widget">
                <h3>About</h3>
                <ul class="tr-list">
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Contactez-nous</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Qui sommes-nous ?</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> On parle de nous</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Conditions générales de vente</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Sites partenaires</a></li>
                </ul>
            </div><!-- /.footer-widget -->
            <div class="footer-widget">
                <h3>Your Order</h3>
                <ul class="tr-list">
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Paiement sécurisé</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Frais et délais de livraison</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Retours et échanges</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Créer un compte</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Suivre votre commande</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Programme Points Fidélité</a></li>
                </ul>
            </div><!-- /.footer-widget -->
            <div class="footer-widget">
                <h3>Your Satisfaction</h3>
                <ul class="tr-list">
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Garantie des articles</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Garantie 100% satisfait</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Ils nous font confiance</a></li>
                    <li><a href="javascript:;"><i class="fa fa-chevron-circle-right"></i> Partagez votre avis</a></li>
                </ul>
            </div><!-- /.footer-widget -->
            <div class="footer-widget">
                <h3>Follow NAUTISPORTS</h3>
                <ul class="tr-list social_footer">
                    <li><a href="javascript:;" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" class="linkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" class="like"><img src="images/face_li.png" alt="facebook_like" title="facebook_like"></a></li>
                </ul>
                <div class="pay_footer">
                	<img src="images/van.png" alt="van" title="van"/><br>
                	<img src="images/country.png" alt="van" title="van"/>
                </div>
            </div><!-- /.footer-widget -->
        </div><!-- /.container -->
        <div class="container">
            <div class="row">
                <span class="copyright_footer">Mentions légales - Copyright 2016 - Nautisports.com - TANGO SPORTS</span>
            </div>
        </div>
    </div><!-- /.footer-bottom -->
</div><!-- /.tr-footer -->         
<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery-ui-min.js"></script>
<script src="js/jquery.spinner.min.js"></script>
<script src="js/main.js"></script>
<script src="js/index.js"></script>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
</body>
</html> 