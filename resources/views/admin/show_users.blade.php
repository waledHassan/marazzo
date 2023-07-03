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
    <title>Users</title>

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
                  <h6 class="mb-10">Data Users Table</h6>
                  <p class="text-sm mb-20">

                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>Users</h6></th>
                          <th><h6>email</h6></th>
                          <th><h6>Phone</h6></th>
                          <th><h6>Address</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($users as $user)
                            
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-text">
                                <p>{{ $user->name }}</p>
                              </div>
                            </div>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">{{ $user->email }}</a></p>
                          </td>
                          <td class="min-width">
                            <p>{{ $user->phone }}</p>
                          </td>
                          <td class="min-width">
                            <p>{{ $user->address }}</p>
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