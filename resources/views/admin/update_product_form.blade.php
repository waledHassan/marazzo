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
    <title>Update Product</title>

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
          <h6 class="mb-25">Update Product</h6>

         <form action="{{url('do_update_product' , $products->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
          <div class="input-style-1">
            <label>Product Name</label>
            <input name="name" type="text" placeholder="Product Name" required='require' value="{{ $products->name }}"/>
          </div>

          @foreach ($productsColors as $key=>$productsColor)              
            <div class="input-style-1">
              <label> Color</label>
              <input name="colors[{{$key}}][id]" type="hidden" placeholder="Product Color" required='require' value="{{ $productsColor->id }}"/>
              <input name="colors[{{$key}}][color]" type="text" placeholder="Product Color" required='require' value="{{ $productsColor->color }}"/>
            </div>
          @endforeach

          @foreach ($productsSizes as $key=>$productsSize)              
          <div class="input-style-1">
            <label> Size</label>
            <input name="sizes[{{$key}}][id]" type="hidden" placeholder="Product Color" required='require' value="{{ $productsSize->id }}"/>
            <input name="sizes[{{$key}}][size]" type="text" placeholder="Product Color" required='require' value="{{ $productsSize->size }}"/>
          </div>
        @endforeach

          <div class="input-style-1">
            <label for="">Description</label>
            <textarea name="description" placeholder="Product Description" rows="5" required='require'>{{ $products->description }}</textarea>
          </div>

          <div class="input-style-1">
            <label>Product Quantity</label>
            <input name="quantity" type="number" placeholder="Product Quantity" required='require' value="{{ $products->quantity }}"/>
          </div>

          <div class="input-style-1">
            <label>Product Price</label>
            <input name="price" type="text" placeholder="Product Price" required='require' value="{{ $products->price }}"/>
          </div>

          <div class="input-style-1">
            <label>Product Discount If Exist !</label>
            <input name="discount" type="text" placeholder="Product Discount If Exist" value="{{ $products->discount }}"/>
          </div>

          <div class="input-style-1">
            <label>Product Taxes If Exist !</label>
            <input name="taxs" type="text" placeholder="Product Taxes If Exist" value="{{ $products->taxs }}"/>
          </div>

          <div class="input-style-1">
            <label>Product Tags ( Sperate With , )</label>
            <input name="tags" type="text" placeholder="Product Discount If Exist" required='require' value="{{ $products->tags }}"/>
          </div>

          <div class="select-style-2">
            <div class="select-position">
                <label for="">Select Category</label>
              <select name="category">
                <option value="{{ $products->category_name }}" selected>{{ $products->category_name }}</option>
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
                <option value="{{ $products->sub_category_name }}" selectes>{{ $products->sub_category_name }}</option>
                @foreach ($sub_categories as $sub_category)

                    <option value="{{ $sub_category->name}}">{{ $sub_category->name }}</option>

                @endforeach
              </select>
            </div>
          </div>

          <div class="select-style-2">
            <div class="select-position">
                <label for="">Select Child Category</label>
              <select name="child_category">
                <option value="{{ $products->child_category_name }}" selectes>{{ $products->child_category_name }}</option>
                @foreach ($child_categories as $child_category)

                    <option value="{{ $child_category->name }}">{{ $child_category->name }}</option>

                @endforeach
              </select>
            </div>
          </div>

          <div class="input-style-1">
            <label>Product Main Image</label>
            <input name="file" type="file"/>
            <img src="productimage/{{ $products->main_image }}" style="width:150px;margin-top:10px;">
          </div>
<hr>
<hr>

          @foreach ($productsImages as $productsImage)
                <img src="productimage/{{ $productsImage->image }}" style="width:150px;margin-top:10px;">
          @endforeach   
          
                <div class="input-style-1">
                  <label>Change Images !!</label>
                  <input name='images[]' type="file" multiple/>
                </div>

          <button class="btn btn-outline-primary">Update Product</button>
          
          <a href="{{url('add_color_form' , $products->id)}}" class="btn btn-outline-primary">Add Color</a>
          <a href="{{url('add_size_form' , $products->id)}}" class="btn btn-outline-primary">Add Size</a>

         </form>
        </div>
      </div>
    </div>




      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
@include('admin.footer')