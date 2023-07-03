<div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
      <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
      <nav class="yamm megamenu-horizontal">
        <ul class="nav">

          @foreach ($categories as $category)
              

          <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{ $category->name }}</a>
            <ul class="dropdown-menu mega-menu">
              <li class="yamm-content">
                <div class="row">
                  <div class="col-sm-12 col-md-3">
                    <ul class="links list-unstyled">
                      @foreach ($sub_categories as $sub_category)

                        @if ($sub_category->category_id == $category->id)

                            @foreach ($child_categories as $child_category)

                                @if ($child_category->sub_category_id == $sub_category->id )

                                    <li><a href="{{url('shopByChildCategory' , $child_category->name)}}">{{$child_category->name}}</a></li>

                                @endif

                            @endforeach

                        @endif

                      @endforeach

                    </ul>
                  </div>

                </div>
                <!-- /.row --> 
              </li>
              <!-- /.yamm-content -->
            </ul>
          </li>

          @endforeach

        </ul>
        <!-- /.nav --> 
      </nav>
      <!-- /.megamenu-horizontal --> 
    </div>
    <!-- /.side-menu --> 
    <!-- ================================== TOP NAVIGATION : END ================================== --> 
    
    <!-- ============================================== HOT DEALS ============================================== -->
    <div class="sidebar-widget hot-deals outer-bottom-xs">
      <h3 class="section-title">Hot deals</h3>
      <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">

        @foreach ($hot_deals as $hot_deal)
        
        <div class="item">
          <div class="products">
            <div class="hot-deal-wrapper">
              <div class="image"> 
              <a href="{{url('product_detail' , $hot_deal->id)}}">
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
              <h3 class="name"><a href="{{url('product_detail' , $hot_deal->id)}}">{{ $hot_deal->name }}</a></h3>
              <div class="rating rateit-small"></div>
              <div class="product-price"> <span class="price"> ${{ $hot_deal->price }} </span> <span class="price-before-discount">$800.00</span> </div>
              <!-- /.product-price --> 
              
            </div>
            <!-- /.product-info -->
            
            <div class="cart clearfix animate-effect">
              <div class="action">
                <div class="add-cart-button btn-group">
                  <a class="btn btn-primary icon" data-toggle="dropdown" href="{{url('AddToWishlist' , $hot_deal->id)}}"> <i class="fa fa-heart" style="font-size: 20px;padding:8px;"></i> </a>
                  <a class="btn btn-primary cart-btn" href="{{url('addToCart' , $hot_deal->id)}}" style="padding:7px;">Add to cart</a>
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
    
    <!-- ============================================== SPECIAL OFFER ============================================== -->
    
    <div class="sidebar-widget outer-bottom-small">
      <h3 class="section-title">Special Offer</h3>
      <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">

          @foreach ($special_offers as $special_offer)
              
          <div class="item">
            <div class="products special-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="{{url('product_detail' , $special_offer->id)}}"> <img src="productimage/{{ $special_offer->main_image }}" alt=""> </a> </div>
                        <!-- /.image --> 
                        
                      </div>
                      <!-- /.product-image --> 
                    </div>
                    <!-- /.col -->
                    <div class="col col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="{{url('product_detail' , $special_offer->id)}}">{{ $special_offer->name }}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> ${{ $special_offer->price }} </span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                    </div>
                    <!-- /.col --> 
                  </div>
                  <!-- /.product-micro-row --> 
                </div>
                <!-- /.product-micro --> 
                
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>

    </div>
    <div class="sidebar-widget product-tag">


    </div>

    <div class="sidebar-widget outer-bottom-small">
      <h3 class="section-title">Special Deals</h3>
      <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
          <div class="item">
            <div class="products special-product">
              @foreach ($special_deals as $special_deal)
                  
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="{{url('product_detail' , $special_deal->id)}}"> <img src="productimage/{{ $special_deal->main_image }}"  alt=""> </a> </div>

                        
                      </div>
                    </div>
                    <div class="col col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="{{url('product_detail' , $special_deal->id)}}">{{ $special_deal->name }}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> ${{ $special_deal->price }} </span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              @endforeach

            </div>
          </div>

        </div>
      </div>
    </div>

    
  </div>