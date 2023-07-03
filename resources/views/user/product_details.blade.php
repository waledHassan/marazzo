
    @include('user.head')
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
			@if (Route::has('login'))
			@auth
			<li class="myaccount"><a href="#"><span>{{ Auth::user()->name }}</span></a></li>
			<li class="wishlist"><a href="{{url('myWishlist')}}"><span>Wishlist</span></a></li>
			<li class="header_cart hidden-xs"><a href="{{url('MyCart')}}"><span>My Cart</span></a></li>
			<li class="header_cart hidden-xs"><a href="{{url('MyCompare')}}"><span>My Compare</span></a></li>
{{-- 
			  <x-app-layout>

			  </x-app-layout> --}}
			
			@else
				
			<li class="check"><a href="{{ route('register') }}"><span>Signup</span></a></li>
			<li class="login"><a href="{{ route('login') }}"><span>Login</span></a></li>
			@endauth
			@endif
          </ul>
        </div>

        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>

  
  <!-- ============================================== NAVBAR ============================================== -->

  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{url('/home')}}">Home</a></li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n outer-bottom-xs">
<img src="assets/images/banners/LHS-banner.jpg" alt="Image">
</div>		
  
    
    
    	<!-- ============================================== HOT DEALS ============================================== -->
        <div class="sidebar-widget hot-deals outer-bottom-xs">
            <h3 class="section-title">Hot deals</h3>
            <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
      
              @foreach ($hot_deals as $hot_deal)
              
              <div class="item">
                <div class="products">
                  <div class="hot-deal-wrapper">
                    <div class="image"> 
                    <a href="#">
                    <img src="productimage/{{ $hot_deal->main_image }}" style="width:60%"> 
                    <img src="productimage/{{ $hot_deal->main_image2 }}" alt="" class="hover-image">
                    </a>
                    </div>
                    <div class="sale-offer-tag"><span>49%<br>
                      off</span></div>
                    <div class="timing-wrapper">
                      <div class="box-wrapper">
                        <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                      </div>
                      <div class="box-wrapper">
                        <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                      </div>
                      <div class="box-wrapper">
                        <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                      </div>
                      <div class="box-wrapper">
                        <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.hot-deal-wrapper -->
                  
                  <div class="product-info text-left m-t-20">
                    <h3 class="name"><a href="detail.html">{{ $hot_deal->name }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> ${{ $hot_deal->price }} </span> <span class="price-before-discount">$800.00</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <div class="add-cart-button btn-group">
                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                      </div>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
              </div>
      
              @endforeach
      
            </div>
            <!-- /.sidebar-widget --> 
          </div>
<!-- ============================================== HOT DEALS: END ============================================== -->					

<!-- ============================================== NEWSLETTER ============================================== -->

    
<!-- ============================================== Testimonials: END ============================================== -->

 

				</div>
			</div><!-- /.sidebar -->
			<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
            <div class="detail-block">
				<div class="row">
                
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p1.jpg">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="productimage/{{$product->main_image}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            @foreach ($product_images as $product_image)                
            <div class="single-product-gallery-item" id="slide2">
                <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p2.jpg">
                    <img class="img-responsive" alt="" src="productimage/{{$product_image->image}}" data-echo="productimage/{{$product_image->image}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->
            @endforeach





        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="productimage/{{$product->main_image}}" />
                    </a>
                </div>

            @foreach ($product_images as $product_image)                
                <div class="item">
                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="productimage/{{$product_image->image}}" />
                    </a>
                </div>
            @endforeach


            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			
					<div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
						<div class="product-info">
							<h1 class="name">{{ $product->name  }}</h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="rating rateit-small"></div>
									</div>
									<div class="pull-left">
										<div class="reviews">
											<a href="#" class="lnk">(13 Reviews)</a>
										</div>
									</div>
                                    </div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

		

							<div class="description-container m-t-20">
								<p>{{ $product->description }}</p>
                               
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-30">
								<div class="row">
									

									<div class="col-sm-6 col-xs-6">
										<div class="price-box">
											<span class="price">${{ $product->price }}</span>
											<span class="price-strike">$900.00</span>
										</div>
									</div>

									<div class="col-sm-6 col-xs-6">
										<div class="favorite-button m-t-5">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="{{url('AddToWishlist' , $product->id)}}">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="{{url('AddToCompare' , $product->id)}}">
											   <i class="fa fa-signal"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="qty">
										<span class="label">Qty :</span>
									</div>
									
									<div class="qty-count">
										<div class="cart-quantity">
											<div class="quant-input">
												<div class="arrows">
													<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
													<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
												  </div>
												  <input type="text" value="{{$product->quantity}}">
							              </div>
							            </div>
									</div>

									<div class="add-btn">
										<a href="{{url('addToCart' , $product->id)}}" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs">
					<div class="row">
						<div class="col-sm-12 col-md-3 col-lg-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
								<li><a data-toggle="tab" href="#tags">TAGS</a></li>
								<li><a data-toggle="tab" href="#comments">Comments</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-12 col-md-9 col-lg-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">{{ $product->description }}</p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>

											<div class="reviews">
												<div class="review">
													<div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
													<div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
											    </div>
											</div><!-- /.reviews -->

										</div><!-- /.product-reviews -->
										

										
										<div class="product-add-review">
											<h4 class="title">Add your own review</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 star</th>
																<th>2 stars</th>
																<th>3 stars</th>
																<th>4 stars</th>
																<th>5 stars</th>
															</tr>
														</thead>	
														<tbody>
															<tr>
													<form class="cnt-form" method="POST" action="{{url('add_review' , $product->id)}}">  
														@csrf
																<td class="cell-label">Your Review</td>
																<td><input type="radio" name="review" class="radio" value="1"></td>
																<td><input type="radio" name="review" class="radio" value="2"></td>
																<td><input type="radio" name="review" class="radio" value="3"></td>
																<td><input type="radio" name="review" class="radio" value="4"></td>
																<td><input type="radio" name="review" class="radio" value="5"></td>
																<td><button class="btn btn-primary btn-block" type="submit">Review</button></td>
													</form>
															</tr>
														</tbody>
													</table><!-- /.table .table-bordered -->
												</div><!-- /.table-responsive -->
											</div><!-- /.review-table -->


										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								<div id="tags" class="tab-pane">
									<div class="product-tag">
										
										<h4 class="title">Product Tags</h4>
                                        <?php $alltags = explode(',' , $product->tags);
                                                          foreach($alltags as $tag){
                                                            $tag = str_replace(' ' , '' ,$tag);
                                                            if(! empty($tag)){ ?>

                                                           <a class="btn btn-outline-primary" href='{{url('shopByTag' , $tag)}}' style="font-size:18px;"> {{$tag}}  </a>
                                                       <?php
                                                        }
                                                    }
                                        ?>

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								<div id="comments" class="tab-pane">
									<div class="product-tab">
																				
										<div class="review-form">
											<div class="form-container">
												<form class="cnt-form" method="POST" action="{{url('add_comment' , $product->id)}}">
													@csrf
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="exampleInputReview">Comment <span class="astk">*</span></label>
																<textarea class="form-control txt txt-review" name="comment" id="exampleInputReview" rows="4" placeholder="Write Your Comment" required='require'></textarea>
															</div><!-- /.form-group -->
														</div>
													</div><!-- /.row -->
													<div class="action text-right">
														<button class="btn btn-primary btn-upper">Comment</button>
													</div><!-- /.action -->
												</form><!-- /.cnt-form -->

												@foreach ($comments as $comment)

													<div class="col-lg-10" style="margin: 30px 0 0 0;">
														<b style="font-size: 18px;">{{ $comment->name  }}</b>
														<p style="font-size: 16px;">{{ $comment->comment  }}</p>
														<a style='font-size: 18px;' href="javascript::void(0);" onclick="reply(this)" data-commentid="{{ $comment->id }}">Reply</a>
													</div>

													@foreach ($replies as $reply)

													@if ($reply->comment_id == $comment->id)
										   
													   <div class="col-lg-6" style="margin: 10px 0 0 50px;">
														  <b>{{ $reply->name  }}</b>
														  <p>{{ $reply->reply  }}</p>
													   </div>
										   
													   @endif
										   
													   @endforeach

												@endforeach

												<div class="col-lg-12 replyDiv" style="margin: 10px 0 0 0;display:none;">
													<form action="{{url('add_reply' , $product->id)}}" method="POST">
													   @csrf
														  <input type="hidden" id="commentId" name="commentId">
														  <textarea placeholder="Reply here" name="reply" cols="30" rows="3" class='form-control' required='require'></textarea>
														  <button class="btn btn-outline-primary">Reply</button>
														  <a href="javascript::void(0);" class="btn btn-outline-danger" onclick="reply_close(this)">Close</a>
													</form>
												 </div>
											</div><!-- /.form-container -->
										</div>
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product">
<div class="row">
<div class="col-lg-3">
          <h3 class="section-title">Upsell Products</h3>
         <div class="ad-imgs">
         <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt="">
          <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt="">
         </div>
          </div>
          <div class="col-lg-9">
	<div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
	    	

	


	
@foreach ($upsell_products as $upsell_product)
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="productimage/{{$upsell_product->main_image}}" data-echo="productimage/{{$upsell_product->main_image}}" alt=""></a>
			</div><!-- /.image -->			

            @if ($upsell_product->new_produc==1)
			<div class="tag new"><span>new</span></div>                        		   
            @endif
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">{{ $upsell_product->name }}</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					${{ $upsell_product->price }}		
            	</span>
				 <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->

        @endforeach

			</div><!-- /.home-owl-carousel -->
            </div>
            </div>
</section><!-- /.section -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
@include('user.footer')

@include('user.script')
<script>

	function reply(caller)
	{
		  document.getElementById('commentId').value=$(caller).attr('data-commentid');
		  $('.replyDiv').insertAfter($(caller));
		  $('.replyDiv').show();
	}

	function reply_close(caller)
	{
		  $('.replyDiv').hide();
	}

	

	document.addEventListener("DOMContentLoaded", function(event) { 
		  var scrollpos = localStorage.getItem('scrollpos');
		  if (scrollpos) window.scrollTo(0, scrollpos);
	  });

	  window.onbeforeunload = function(e) {
		  localStorage.setItem('scrollpos', window.scrollY);
	  };

</script>
</body>

</html>
