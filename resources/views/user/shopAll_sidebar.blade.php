<div class='col-xs-12 col-sm-12 col-md-3 sidebar'> 
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
    <div class="sidebar-module-container">
      <div class="sidebar-filter"> 
        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
        <div class="sidebar-widget">
          <h3 class="section-title">Shop by</h3>
          <div class="widget-header">
            <h4 class="widget-title">Category</h4>
          </div>
          <div class="sidebar-widget-body">
            <div class="accordion">

              <div class="accordion-group">
              
              @foreach ($sub_categories as $sub_category)
              
                <div class="accordion-heading"> <a href="#collapse{{$sub_category->name}}" data-toggle="collapse" class="accordion-toggle collapsed"> {{ $sub_category->name }} </a> </div>
                  <div class="accordion-body collapse" id="collapse{{$sub_category->name}}" style="height: 0px;">
                    <div class="accordion-inner">

                        @foreach ($child_categories as $child_category)

                            @if ($child_category->sub_category_id == $sub_category->id )

                              <ul>
                                <li><a href="{{url('shopByChildCategory' , $child_category->name)}}">{{ $child_category->name }}</a></li>
                              </ul>
                            @endif

                        @endforeach

                    </div>
                  </div>

              @endforeach

            </div>

            </div>
            <!-- /.accordion --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
        
        <!-- ============================================== PRICE SILDER============================================== -->
        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-title">Price Slider</h4>
          </div>
          <div class="sidebar-widget-body m-t-10">
            <div class="price-range-holder">
               <span class="min-max"> <span class="pull-left">$200.00</span>
                <span class="pull-right">$800.00</span> </span>
              <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
              <input type="text" class="price-slider" value="" >
            </div>

           </div>
          <!-- /.sidebar-widget-body --> 
        </div>

        {{-- <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-title">Colors</h4>
          </div>
          <div class="sidebar-widget-body">
            <ul class="list">
              @foreach ($colors as $color)
              <li><a href="{{$color->product_id}}">{{ $color->color }}</a></li>
              @endforeach
            </ul>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div> --}}
        <!-- /.sidebar-widget --> 
        <!-- ============================================== COLOR: END ============================================== --> 
        <!-- ============================================== COMPARE============================================== -->

        <!-- /.sidebar-widget --> 
        <!-- ============================================== COMPARE: END ============================================== --> 

        <!-- /.sidebar-widget --> 

       
      </div>
      <!-- /.sidebar-filter --> 
    </div>
    <!-- /.sidebar-module-container --> 
  </div>