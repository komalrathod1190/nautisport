<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Conceptioni">
    <meta name="description" content="">
    <title>NAUTISPORTS</title>
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <!-- icons -->
    <link rel="icon" href="images/ico/favicon.png"> 
    <link rel='stylesheet prefetch' href='css/bootstrap.3.3.4.min.css'>
	<link rel="stylesheet" type="text/css" href="css/slider-pro.min.css" media="screen"/>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="css/product_style.css" media="all"/>
    <script type="text/javascript" src="js/product_js.js"></script> -->


	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#example2' ).sliderPro({
				width: '50%',
				height: 500,
				aspectRatio: 1.5,
				visibleSize: '100%',
				forceSize: 'fullWidth'
			});
			$( '#example2 .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
				event.preventDefault();
				if ( $( '#example2' ).hasClass( 'sp-swiping' ) === false ) {
					$.fancybox.open( $( '#example2 .sp-image' ).parent( 'a' ), { index: $( this ).parents( '.sp-slide' ).index() } );
				}
			});
		});
	</script>
</head>
<body>