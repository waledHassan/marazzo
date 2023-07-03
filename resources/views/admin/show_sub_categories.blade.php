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
    <title>Sub Categories</title>

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
                  <h6 class="mb-10">Data Sub Categories Table</h6>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>Sub Category</h6></th>
                          <th><h6>Action</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($sub_categories as $category)
                            
                        <tr>
                          <td class="min-width">
                            <a href="{{url('show_child_category' , $category->id)}}">
                                <p>{{ $category->name }}</p>
                            </a>
                          </td>
                          <td>
                            <div class="action">
                              <a href="{{url('delete_sub_category' , $category->id)}}" onclick="return confirm('Are you Sure to Delete This Product')" class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </a>
                              <a style="margin-left:10px;" href="{{url('update_sub_category_form' , $category->id)}}" class="btn btn-outline-secondary">
                               Update
                              </a>
                              <a style="margin-left:10px;" href="{{url('add_child_category_form' , $category->id)}}" class="btn btn-outline-secondary">
                                Add Child Category
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