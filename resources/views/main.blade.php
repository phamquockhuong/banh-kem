<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{url('public')}}/bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('public')}}/owlcarousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('public')}}/owlcarousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{url('public')}}/css/style.css">
	<script src="{{url('public')}}/jquery/jquery-3.4.1.min.js"></script>
	<script src="{{url('public')}}/owlcarousel/js/owl.carousel.js"></script>
</head>
<body>
	<div class="container-fluid"  style="background-color: #F8F9FA;margin-top: 114px;" >
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="{{ route('admin.dashboard.index') }}"><img src="{{url('public')}}/img/logo-cake.png" width="230" alt="Responsive image"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<h4  class="name_page"><a class="nav-link" href="{{ route('product_detail') }}">Home <span class="sr-only">(current)</span></a></h4>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h4 class="name_page">Category</h4>
						</a>
						<div class="dropdown-menu " aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h4 class="name_page">Page</h4>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item ">
						<h4  class="name_page"><a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a></h4>
						<!-- <h4 style="margin: 10px;"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a></h4> -->
					</li>
				</ul>

				<form class="form-inline my-2 my-lg-0">
					
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search ...">
						<div class="input-group-append">
							<button class="btn btn-outline-success" type="button">
								<span>
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
										<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									</svg>
								</span>
							</button>
						</div>
					</div>
				</form>
				<ul class="navbar-nav mr-right ">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown bottom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h3 style="margin: 0px;margin-left: 5px;">
								<span style="color: #f90;">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/><span  style="font-size: 14px;color: red;">(3)</span>
									</svg>
								</span><!-- <p style="font-size: 14px;margin:0px; text-align: center;">(3)</p> -->
							</h3>
						</a>	
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>

					<li class="nav-item dropdown" style="margin-right: 20px;">
						<a class="nav-link dropdown bottom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h3 style="margin: 0px;">
								<span style="color: #c60;">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
									</svg>
								</span>		
							</h3>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					
				</ul>
			</div>
		</nav>
	</div>
	
	@yield('content')

	
	<div class="container-fluid">
		<div class="roww">
			<div class="back-to-top">
				<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shift" fill="currentColor" xmlns="	http://www.w3.org/2000/svg">
				   <path fill-rule="evenodd" d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047zM14.346 9.5L8 2.731 1.654 9.5H4.5a1 1 0 0 1 1 1v3h5v-3a1 1 0 0 1 1-1h2.846z"/>
				</svg> -->
				<img class="card-img-top" src="{{url('public')}}/img/section-works/arrow.png" alt="Card image" >
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding: 0;">	
		<div id="footer" class="color-div">
			<div class="container" style="padding-top: 50px;">
				<div class="row">
					<div class="col-sm-3">
						<div class="widget">
							<h4 class="widget-title">Information</h4>
							<div>
								<ul class="fff">
									<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
									<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
									<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
									<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
									<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
									<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="col-sm-10">
							<div class="widget">
								<h4 class="widget-title">Contact Us</h4>
								<div>
									<ul class="fff">
										<div class="contact-info">
											<i class="fa fa-map-marker"></i>
											<p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78<br>Email:bakersalley@gmail.com</p>
											<p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
										</div>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h4 class="widget-title">Newsletter Subscribe</h4>
							<ul class="fff">
								<form action="#" method="post">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search ...">
										<div class="input-group-append">
											<button class="btn btn-success" type="button">
												<span>
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"/>
													</svg>
												</span>
											</button>
										</div>
									</div>
								</form>
								<div class="socialteam">
									<a href="#"><img width="56" class="rotate" alt="" src="{{url('public')}}/img/section-team/twittericon.png"></a> <!--you can edit image and insert the link-->
									<a href="#"><img width="56" class="rotate" alt="" src="{{url('public')}}/img/section-team/instagramicon.png"></a> <!--you can edit image and insert the link-->
									<a href="#"><img width="56" class="rotate" alt="" src="{{url('public')}}/img/section-team/youtubeicon.png"></a> <!--you can edit image and insert the link-->
									<a href="#"><img width="56" class="rotate" alt="" src="{{url('public')}}/img/section-team/dribbleicon.png"></a> <!--you can edit image and insert the link-->

								</div>	
							</ul>
						</div>
					</div>
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- #footer -->
		<div class="copyright"style="padding-top: 30px;">
			<div class="container">
				<p class="footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

					<p class="pull-right pay-options">
						<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
						<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
						<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
						<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
					</p>
					<div class="clearfix"></div>
				</div> <!-- .container -->
			</div> <!-- .copyright -->

		</body>
		<script>
			$(document).ready(function(){
				$('.owl-carousel').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:4
						},

					}
				});
			})

		</script>
		<script src="{{url('public')}}/jquery/jquery-3.4.1.min.js"></script>
		<script src="{{url('public')}}/owlcarousel/js/owl.carousel.js"></script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
		<script src="{{url('public')}}/bootstrap4/js/bootstrap.min.js"></script>
		</html>

