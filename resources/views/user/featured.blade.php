<section class="section new-arriavls">
    <h3 class="section-title">Featured Products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

      @foreach ($featured_products as $featured_product)
          
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image"> 
                    <a href="{{url('product_detail' , $featured_product->id)}}">
                       <img src="productimage/{{ $featured_product->main_image }}" style="width:60%"> 
                        <img src="productimage/{{ $featured_product->main_image2 }}" alt="" class="hover-image">
                    </a>
                    
                    </div>
              <!-- /.image -->
              
              <div class="tag sale"><span>sale</span></div>
            </div>
            <!-- /.product-image -->
            
            <div class="product-info text-left">
              <h3 class="name"><a href="{{url('product_detail' , $featured_product->id)}}">{{ $featured_product->name }}</a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              <div class="product-price"> <span class="price"> ${{ $featured_product->price }} </span> <span class="price-before-discount">$ 800</span> </div>
              <!-- /.product-price --> 
              
            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <ul class="list-unstyled">
                    <li class="add-cart-button btn-group">
                      <a data-toggle="tooltip" class="btn btn-primary icon" href="{{url('addToCart' , $featured_product->id)}}" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </a>
                      <a class="btn btn-primary cart-btn" href="{{url('addToCart' , $featured_product->id)}}">Add to cart</a>
                    </li>
                    <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToWishlist' , $featured_product->id)}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                    <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('AddToCompare' , $featured_product->id)}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
      
      <!-- /.item --> 
    </div>
    <!-- /.home-owl-carousel --> 
  </section>