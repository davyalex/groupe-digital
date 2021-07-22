<!DOCTYPE html>
<html>

<head>
	<title> Groupe digital | @yield('title','Bienvenue') </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css"  />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/search.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"  />
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"  />
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"  />

	{{-- <link href="{{ asset('css/docs.theme.min.css') }}" rel="stylesheet" type="text/css" /> --}}


	<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css"  />
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"type="text/css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"type="text/css">
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

	{{-- <link rel="stylesheet" href="{{ asset('css/froala_editor.css') }}">
	<link rel="stylesheet" href="{{ asset('css/froala_style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/code_view.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/image_manager.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/image.css') }}"> --}}
  
{{--   
	  <script type="text/javascript" src="{{asset('js/froala_editor.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/align.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/code_beautifier.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/code_view.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/draggable.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/image.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/image_manager.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/link.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/lists.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/paragraph_format.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/paragraph_style.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/url.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/entities.min.js') }}"></script> --}}
  
	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
	<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>
<style>
	.divpub{
		text-align: center;
		box-shadow:0 6px 8px 0 #cecece ;
	  background-color: #FFF;
	  margin-bottom: 10px
	}
	.figure-img{
		width: 100%;
		height: auto;
	}
</style>
<body style="background-color:#f2f3f5;">

	
	@include('pages.partials.menu')
    {{-- @include('pages.partials.inner') --}}
	
	@yield('content')

	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>Groupe digital</h3>
				<p>Nous vous accompagnons dans votre transformation digitale. En outre, nous mettons à votre disposition une variété de services afin de vous permettre d’asseoir votre suprématie dans votre domaine.
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Liens Rapides</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="{{ route('offre.index') }}" >OFFRES </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="{{ route('freelance.index') }}" >FREELANCES</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="" >FORMATIONS</a>
					</li>
					
				</ul>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Contact </h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>abidjan, <span>Cocody.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@digital-groupe.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+225 07 796 135 93</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			{{-- <div class="footer_grids">
				<div class="col-md-4 footer_grid_left">
					<h3>Sign up for our Newsletter</h3>
				</div>
				<div class="col-md-8 footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div> --}}
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
			<div class="footer_bottom">
				<div class="col-md-3 footer_bottom_grid">
					<style>
			
						.RS ul li{
							list-style: none;
							display: inline-block
						}
						.RS ul li i{
							text-align: center;
							margin: 10px
						}
						.RS  a{
							
						line-height: 10px
							
						}
					</style>
					<h6>Suivez-nous</h6>
					<div class="RS">
						<ul>
							<li ><a href="#"><i class="fa fa-facebook-square " style="font-size:20px;background-color:transparent;"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square " style="font-size:20px;background-color:transparent;" ></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp "style="font-size:20px;background-color:transparent;"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9 footer_bottom_grid">
					<div class="footer_bottom1">
						<a href="/">
							<img class="img-fluid img-responsive figure-img logo" src="{{ asset('images/logo.png') }}" alt="">
							{{-- <h1 style="font-family:omegle;"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> Groupe <label style="color:#ff9800;text-align:right;">digital</label></h1> --}}
						</a>
						<p>© 2021 Groupe digital. Tous droit reservé </p>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //footer -->
<style>
	#scroll_to_top {
  position: fixed;
  width: 35px;
  height: 35px;
  bottom: 50px;
  right: 60px;
  display: none;
  background-color: #FF9900;
}
	
</style>
<a href="">
	<div id='scroll_to_top' class='text-center opacity'>
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	  </div>
</a>

<script>

$(document).ready(function() {
    function scroll_to_top(div) {
        $(div).click(function() {
            $('html,body').animate({scrollTop: 0}, 'slow');
        });
        $(window).scroll(function(){
            if($(window).scrollTop()<500){
                $(div).fadeOut();
            } else{
                $(div).fadeIn();
            }
        });
    }
    scroll_to_top("#scroll_to_top");
});
</script>
	<!-- js -->	
	
</body>

</html>
