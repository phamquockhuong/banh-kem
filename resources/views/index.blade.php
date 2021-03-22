@extends('main')
@section('content')
	<div class="container-fluid " style="padding:0px;">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<div class="topwaves"></div>
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{url('public')}}/img/section-slide/1/slide19o.jpg" alt="Los Angeles" style="width: 100%;min-height: 200px;">
					<div class="carousel-caption">
						<h3>Los Angeles</h3>
						<p>We had such a great time in LA!</p>
					</div>   
				</div>
				<div class="carousel-item">
					<img src="{{url('public')}}/img/section-slide/2/slide24b.jpg" alt="Chicago" style="width: 100%;min-height: 200px;">
					<div class="carousel-caption">
						<h3>Chicago</h3>
						<p>Thank you, Chicago!</p>
					</div>   
				</div>
				<div class="carousel-item">
					<img src="{{url('public')}}/img/section-slide/3/slide3n.jpg" alt="New York" style="width: 100%;min-height: 200px;">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>We love the Big Apple!</p>
					</div>   
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon" ></span>
			</a>
		</div>
	</div>
	<div class="container title">
		<a href="{{route('admin.category.index')}}"><p class="text-center">New Products</p></a>
	</div>
	<div class="container">
		<div class="row">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="{{url('public')}}/img/section-slide/3/slide3n.jpg">
								<img class="pic-2" src="{{url('public')}}/img/section-slide/3/slide3n.jpg">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="">
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
									<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
								<li>
									<a href="" data-tip="Buy Now">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
										</svg>
									</a>
								</li>
								<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="">
									<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
							<span class="product-discount-label">NEW</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
						<div class="product-content">
							<h3 class="title"><a href="#">Women's Blouse</a></h3>
							<div class="price">$16.00
								<span>$20.00</span>
							</div>
							<a class="add-to-cart" href="">+ Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
									<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
								<li>
									<a href="" data-tip="Buy Now">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
										</svg>
									</a>
								</li>
								<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
							<span class="product-discount-label">NEW</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
						<div class="product-content">
							<h3 class="title"><a href="#">Women's Blouse</a></h3>
							<div class="price">$16.00
								<span>$20.00</span>
							</div>
							<a class="add-to-cart" href="">+ Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
									<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
								<li>
									<a href="" data-tip="Buy Now">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
										</svg>
									</a>
								</li>
								<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
							<span class="product-discount-label">NEW</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
						<div class="product-content">
							<h3 class="title"><a href="#">Women's Blouse</a></h3>
							<div class="price">$16.00
								<span>$20.00</span>
							</div>
							<a class="add-to-cart" href="">+ Add To Cart</a>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
									<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
								<li>
									<a href="" data-tip="Buy Now">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
										</svg>
									</a>
								</li>
								<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
							<span class="product-discount-label">NEW</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
						<div class="product-content">
							<h3 class="title"><a href="#">Women's Blouse</a></h3>
							<div class="price">$16.00
								<span>$20.00</span>
							</div>
							<a class="add-to-cart" href="">+ Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
									<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
								<li>
									<a href="" data-tip="Buy Now">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
										</svg>
									</a>
								</li>
								<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
							<span class="product-discount-label">NEW</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
						<div class="product-content">
							<h3 class="title"><a href="#">Women's Blouse</a></h3>
							<div class="price">$16.00
								<span>$20.00</span>
							</div>
							<a class="add-to-cart" href="">+ Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
									<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
								<li>
									<a href="" data-tip="Buy Now">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
										</svg>
									</a>
								</li>
								<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
									<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
								</svg></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
							<span class="product-discount-label">NEW</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
						<div class="product-content">
							<h3 class="title"><a href="#">Women's Blouse</a></h3>
							<div class="price">$16.00
								<span>$20.00</span>
							</div>
							<a class="add-to-cart" href="">+ Add To Cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container title">
		<p class="text-center text-danger">Services We Provide</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="media p-3">
					<img src="{{url('public')}}/img/section-services/service1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
					<div class="media-body">
						<h4 class="provider">Cake Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>      
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="media p-3">
					<img src="{{url('public')}}/img/section-services/service2.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
					<div class="media-body">
						<h4 class="provider">Best Cupcakes</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>      
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="media p-3">
					<img src="{{url('public')}}/img/section-services/service3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
					<div class="media-body">
						<h4 class="provider">Desserts</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>      
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="media p-3">
					<img src="{{url('public')}}/img/section-services/service4.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
					<div class="media-body">
						<h4 class="provider">Menu Planners</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>      
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="media p-3">
					<img src="{{url('public')}}/img/section-services/service5.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
					<div class="media-body">
						<h4 class="provider">Awesome Recipes</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>      
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="media p-3">
					<img src="{{url('public')}}/img/section-services/service6.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
					<div class="media-body">
						<h4 class="provider">Home Delivery</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>      
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row " style="position: relative;">
			
			<div class="col-sm-12 banner container text-center">
				<div class="container banner2 text-left" ><img style="max-width: 60px;" src="{{url('public')}}/img/section-testimonials/topquote.png"></div>
				<p class="text-center" style="margin: 0px;margin-right: 20px;margin-left: 20px;font-size: 30px;color: white;font-family:  'lobster_1.3regular'">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> <br>
				<!-- <img alt="" src="img/"> -->
				<div class="row justify-content-center">
					<div class="col-sm-8"style="margin: 0px;font-size: 18px;color: white;font-family:  'lobster_1.3regular'">Quidem hic explicabo odit, voluptatem consequuntur quaerat facere rem exercitationem corporis labore aliquam quod sequi et quis a ab, velit, assumenda delectus eaque repudiandae rerum eum.Lem exercitationem corporis labore aliquam quod sequi et quis a ab, velit, assumenda delectus eaque repudiandae rerum eum
					</div>
				</div>
				<div class="container banner3 text-right" ><img style="max-width: 60px;" src="{{url('public')}}/img/section-testimonials/bottomquote.png"></div>
			</div>
		</div>
	</div>
	<div class="container title">
		<p class="text-center text-danger">Sale Products</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
								<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
								<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
							<li>
								<a href="" data-tip="Buy Now">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
									</svg>
								</a>
							</li>
							<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
								<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">NEW</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star disable"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Women's Blouse</a></h3>
						<div class="price">$16.00
							<span>$20.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-3.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-4.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><i class="fa fa-search">sws</i></a></li>
							<li><a href="" data-tip="Add to Wishlist"><span style="color: black;">swxc</span></a></li>
							<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i>sws</a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">50%</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
						<div class="price">$5.00
							<span>$10.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-5.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-6.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
							<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">50%</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
						<div class="price">$5.00
							<span>$10.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-7.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-8.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
							<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">50%</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
						<div class="price">$5.00
							<span>$10.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
								<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
								<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
							<li>
								<a href="" data-tip="Buy Now">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
									</svg>
								</a>
							</li>
							<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
								<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">NEW</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star disable"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Women's Blouse</a></h3>
						<div class="price">$16.00
							<span>$20.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
								<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
								<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
							<li>
								<a href="" data-tip="Buy Now">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
									</svg>
								</a>
							</li>
							<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
								<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">NEW</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star disable"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Women's Blouse</a></h3>
						<div class="price">$16.00
							<span>$20.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
								<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
								<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
							<li>
								<a href="" data-tip="Buy Now">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
									</svg>
								</a>
							</li>
							<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
								<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">NEW</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star disable"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Women's Blouse</a></h3>
						<div class="price">$16.00
							<span>$20.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#">
							<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
							<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
						</a>
						<ul class="social">
							<li><a href="" data-tip="Quick View"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
								<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
								<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
							<li>
								<a href="" data-tip="Buy Now">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z"/>
									</svg>
								</a>
							</li>
							<li><a href="" data-tip="Add to Cart"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
								<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
							</svg></a></li>
						</ul>
						<span class="product-new-label">Sale</span>
						<span class="product-discount-label">NEW</span>
					</div>
					<ul class="rating">
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star"></li>
						<li class="fa fa-star disable"></li>
					</ul>
					<div class="product-content">
						<h3 class="title"><a href="#">Women's Blouse</a></h3>
						<div class="price">$16.00
							<span>$20.00</span>
						</div>
						<a class="add-to-cart" href="">+ Add To Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container title">
		<p class="text-center text-danger">The Blog</p>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="card" style="background: #FFF3DE">
					<img class="card-img-top" src="{{url('public')}}/img/section-works/imgworks5.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<h5 class="card-title">John Doe text some exae</h5>
						<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						<a href="#" class="btn btn-primary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card" style="background: #FFF3DE">
					<img class="card-img-top" src="{{url('public')}}/img/section-works/imgworks5.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<h5 class="card-title">John Doe text some example</h5>
						<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						<a href="#" class="btn btn-primary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card" style="background: #FFF3DE">
					<img class="card-img-top" src="{{url('public')}}/img/section-works/imgworks5.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<h5 class="card-title">John Doe text some example</h5>
						<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						<a href="#" class="btn btn-primary">See Profile</a>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-3 col-sm-6">
				<div class="card" style="background: #FFF3DE">
				    <img class="card-img-top" src="{{url('public')}}/img/section-works/imgworks5.jpg" alt="Card image" style="width:100%">
				    <div class="card-body">
				      <h5 class="card-title">John Doe text some example text</h5>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				    </div>
				  </div>
				</div> -->
			</div>
		</div>

		<div class="container title">
			<p class="text-center text-danger">Our Team</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="card" style="background: #FFF3DE">
						<img class="card-img-top" src="{{url('public')}}/img/section-team/team1.png" alt="Card image" style="width:100%">
						<div class="card-body">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="card"style="background: #DAEEFF">
						<img class="card-img-top" src="{{url('public')}}/img/section-team/team1.png" alt="Card image" style="width:100%">
						<div class="card-body">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<img class="card-img-top" src="{{url('public')}}/img/section-team/team1.png" alt="Card image" style="width:100%">
						<div class="card-body">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<img class="card-img-top" src="{{url('public')}}/img/section-team/team1.png" alt="Card image" style="width:100%">
						<div class="card-body">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
@stop()

