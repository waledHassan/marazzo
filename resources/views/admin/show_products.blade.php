<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="admin/assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>Products</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="admin/assets/css/lineicons.css" />
    <link rel="stylesheet" href="admin/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="admin/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="admin/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="admin/assets/css/main.css" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
                    @include('sweetalert::alert')
 @include('admin.sidebar')

    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
@include('admin.header')
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
    <div class="container-fluid">
        <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12 mt-3">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Products Table</h6>
                  <p class="text-sm mb-20">

                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>Product</h6></th>
                          <th><h6>Description</h6></th>
                          <th><h6>Price</h6></th>
                          <th><h6>Discount</h6></th>
                          <th><h6>Taxs</h6></th>
                          <th><h6>Tags</h6></th>
                          <th><h6>quantity</h6></th>
                          <th><h6>Action</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($data as $product)
                            
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">
                                <img
                                  src="productimage/{{ $product->main_image }}"
                                  alt=""
                                />
                              </div>
                              <div class="lead-text">
                                <a href="{{url('update_product_form' , $product->id)}}">
                                    <p>{{ $product->name }}</p>
                                </a>
                              </div>
                            </div>
                          </td>
                          <td class="min-width">
                            <p>{{ $product->description }}</p>
                          </td>
                          <td class="min-width">
                            <p>{{ $product->price }}</p>
                          </td>
                          <td class="min-width">
                            <p>{{ $product->discount }}</p>
                          </td>
                          <td class="min-width">
                            <p>{{ $product->taxs }}</p>
                          </td>
                          <td class="min-width">
                            <p>{{ $product->tags }}</p>
                          </td>
                          <td class="min-width">
                            <p>{{ $product->quantity }}</p>
                          </td>
                          <td>
                            <div class="action">
                              <a href="{{url('delete_product' , $product->id)}}" onclick="return confirm('Are you Sure to Delete This Product')" class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>

          </div>
    </div>




      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
@include('admin.footer')