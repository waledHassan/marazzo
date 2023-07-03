<div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
    <div class="more-info-tab clearfix ">
      <h3 class="new-product-title pull-left">New Products</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
        <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
        <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
        <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
      </ul>
      <!-- /.nav-tabs --> 
    </div>
    <div class="tab-content outer-top-xs">
      <div class="tab-pane in active" id="all">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

            @foreach ($new_products as $new_product)
                

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                    <a href="{{url('product_detail' , $new_product->id)}}">
                       <img src="productimage/{{ $new_product->main_image }}"> 
                        <img src="productimage/{{ $new_product->main_image2 }}" alt="" class="hover-image">
                    </a> 
                 </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{url('product_detail' , $new_product->id)}}">{{ $new_product->name }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ${{ $new_product->price }} </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon" href="{{url('addToCart' , $new_product->id)}}" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </a>
                          <a class="btn btn-primary cart-btn" href="{{url('addToCart' , $new_product->id)}}">Add to cart</a>
                        </li>
                        <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToWishlist' , $new_product->id)}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToCompare' , $new_product->id)}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            @endforeach

          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->


      
      <div class="tab-pane" id="smartphone">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

            @foreach ($newClothingProducts as $newClothingProduct)

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                    <a href="{{url('product_detail' , $newClothingProduct->id)}}">
                       <img src="productimage/{{ $newClothingProduct->main_image }}" alt="" style="width:60%"> 
                        <img src="productimage/{{ $newClothingProduct->main_image2 }}" alt="" class="hover-image">
                    </a>
                    
                    </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{url('product_detail' , $newClothingProduct->id)}}">{{ $newClothingProduct->name }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ${{ $newClothingProduct->price }} </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon" href="{{url('addToCart' , $newClothingProduct->id)}}" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </a>
                          <a class="btn btn-primary cart-btn" href="{{url('addToCart' , $newClothingProduct->id)}}">Add to cart</a>
                        </li>
                        <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToWishlist' , $newClothingProduct->id)}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToCompare' , $newClothingProduct->id)}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>

            @endforeach

          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="laptop">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

            @foreach ($newElectronicsProducts as $newElectronicsProduct)
                

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                    <a href="{{url('product_detail' , $newElectronicsProduct->id)}}">
                       <img src="productimage/{{ $newElectronicsProduct->main_image }}" style="width:60%"> 
                        <img src="productimage/{{ $newElectronicsProduct->main_image2 }}" alt="" class="hover-image">
                    </a>
                    
                    </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{url('product_detail' , $newElectronicsProduct->id)}}">{{ $newElectronicsProduct->name }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ${{ $newElectronicsProduct->price}}</span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon" href="{{url('addToCart' , $newElectronicsProduct->id)}}" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </a>
                          <a class="btn btn-primary cart-btn" href="{{url('addToCart' , $newElectronicsProduct->id)}}">Add to cart</a>
                        </li>
                        <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToWishlist' , $newElectronicsProduct->id)}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToCompare' , $newElectronicsProduct->id)}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            @endforeach

          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="apple">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

            @foreach ($newShoessProducts as $newShoessProduct)
                

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                    <a href="{{url('product_detail' , $new_product->id)}}">
                       <img src="productimage/{{$newShoessProduct->main_image}}" alt=""> 
                        <img src="productimage/{{$newShoessProduct->main_image2}}" alt="" class="hover-image">
                    </a>
                    
                    </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{url('product_detail' , $newShoessProduct->id)}}">{{$newShoessProduct->name}}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ${{$newShoessProduct->price}} </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon" href="{{url('addToCart' , $newShoessProduct->id)}}" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </a>
                          <a class="btn btn-primary cart-btn" href="{{url('addToCart' , $newShoessProduct->id)}}">Add to cart</a>
                        </li>
                        <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToWishlist' , $newShoessProduct->id)}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToCompare' , $newShoessProduct->id)}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            @endforeach

          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane --> 
      
    </div>
    <!-- /.tab-content --> 
  </div>