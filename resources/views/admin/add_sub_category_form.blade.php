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
    <title>Add Sub Category</title>

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
      <div class="col-lg-12 mt-3">
        <div class="card-style mb-30">
          <h6 class="mb-25">Add Sub Category</h6>

         <form action="{{url('upload_sub_category' , $id)}}" method="POST" enctype="multipart/form-data">
              @csrf
          <div class="input-style-1">
            <label>Sub Category Name</label>
            <input name="name" type="text" placeholder="Sub Category Name" required='require'/>
          </div>

          <button class="btn btn-outline-primary">Add Sub Category</button>

         </form>
        </div>
      </div>
    </div>




      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
@include('admin.footer')