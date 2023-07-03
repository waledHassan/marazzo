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
    <title>Add Products</title>

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
          <h6 class="mb-25">Add Product</h6>

         <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
          <div class="input-style-1">
            <label>Product Name</label>
            <input name="name" type="text" placeholder="Product Name" required='require'/>
          </div>

          <div class="input-style-1">
            <textarea name="description" placeholder="Product Description" rows="5" required='require'></textarea>
          </div>

          <div class="input-style-1">
            <label>Product Quantity</label>
            <input name="quantity" type="number" placeholder="Product Quantity" required='require'/>
          </div>

          <div class="input-style-1">
            <label>Product Price</label>
            <input name="price" type="text" placeholder="Product Price" required='require'/>
          </div>

          <div class="input-style-1">
            <label>Product Discount If Exist !</label>
            <input name="discount" type="text" placeholder="Product Discount If Exist"/>
          </div>

          <div class="input-style-1">
            <label>Product Taxes If Exist !</label>
            <input name="taxs" type="text" placeholder="Product Taxes If Exist"/>
          </div>

          <div class="input-style-1">
            <label>Product Tags ( Sperate With , )</label>
            <input name="tags" type="text" placeholder="Product Discount If Exist" required='require'/>
          </div>

          <div class="select-style-2">
            <div class="select-position">
                <label for="">Select Category</label>
              <select name="category">
                @foreach ($categories as $category)

                    <option value="{{ $category->name }}">{{ $category->name }}</option>

                @endforeach
              </select>
            </div>
          </div>

          <div class="select-style-2">
            <div class="select-position">
                <label for="">Select Sub Category</label>
              <select name="sub_category">
                @foreach ($sub_categories as $sub_category)

                    <option value="{{ $sub_category->name }}">{{ $sub_category->name }}</option>

                @endforeach
              </select>
            </div>
          </div>

          <div class="select-style-2">
            <div class="select-position">
                <label for="">Select Child Category</label>
              <select name="child_category">
                @foreach ($child_categories as $child_category)

                    <option value="{{ $child_category->name }}">{{ $child_category->name }}</option>

                @endforeach
              </select>
            </div>
          </div>

          <div class="input-style-1">
            <label>Product Image</label>
            <input name="file" type="file" required='require'/>
          </div>

          <div class="input-style-1">
            <label>Product Image 2</label>
            <input name="file2" type="file" required='require'/>
          </div>

          <button class="btn btn-outline-primary">Add Product</button>

         </form>
        </div>
      </div>
    </div>




      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
@include('admin.footer')