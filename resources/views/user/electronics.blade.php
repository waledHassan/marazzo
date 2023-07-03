<section class="section featured-product">
    <div class="row">
    <div class="col-lg-3">
      <h3 class="section-title">Electronics & Digital</h3>
      <ul class="sub-cat">
        @foreach ($electronics_categories as $electronics_category)
            <li><a href="{{url('shopByChildCategory' , $electronics_category->name)}}">{{ $electronics_category->name }}</a></li>
        @endforeach
      </ul>
      </div>
      <div class="col-lg-9">
      <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">

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
                
                <div class="tag sale"><span>sale</span></div>
              </div>
              <!-- /.product-image -->
              
              <div class="product-info text-left">
                <h3 class="name"><a href="{{url('product_detail' , $newElectronicsProduct->id)}}">{{ $newElectronicsProduct->name }}</a></h3>
                <div class="rating rateit-small"></div>
                <div class="description"></div>
                <div class="product-price"> <span class="price"> ${{ $newElectronicsProduct->price }} </span> <span class="price-before-discount">$ 800</span> </div>
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
        <!-- /.item --> 
      </div>
      </div>
      </div>
      <!-- /.home-owl-carousel --> 
    </section>