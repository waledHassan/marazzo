<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;

use App\Models\categories;

use App\Models\Products;

use App\Models\sub_categories;

use App\Models\child_category;

use App\Models\product_colors;

use App\Models\product_sizes;

use App\Models\product_image;

use App\Models\cart;

use DB;

use App\Models\order;

use App\Models\review;

use App\Models\compare;

use App\Models\wishlist;

use App\Models\comment;

use App\Models\reply;




class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
    {
            $usertype = Auth::user()->usertype;
            if($usertype == '1')
            {
                return view('admin.home');
            }
            else
            {
                $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
                $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
                $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
                $featured_products = products::where('featured', '=' , 1)->get();
                $hot_deals = products::where('hot_deals', '=' , 1)->get();
                $special_offers = products::where('special_offer', '=' , 1)->get();
                $special_deals = products::where('special_deals', '=' , 1)->get();
                $new_products = products::where('new_product', '=' , 1)->get();
                $categories = categories::all();
                $sub_categories = sub_Categories::all();
                $child_categories = child_Category::all();
                $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();

                $carts = cart::all();
                $total_revenue = 0;
                foreach($carts as $cart)
                {
                    $total_revenue = $total_revenue + $cart->price;
                }
                $total_cart = cart::all()->count();

                return view('user.home' , compact('total_revenue', 'total_cart', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
            }
        }

        else
        { 
            $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
            $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
            $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
            $featured_products = products::where('featured', '=' , 1)->get();
            $hot_deals = products::where('hot_deals', '=' , 1)->get();
            $special_offers = products::where('special_offer', '=' , 1)->get();
            $special_deals = products::where('special_deals', '=' , 1)->get();
            $new_products = products::where('new_product', '=' , 1)->get();
            $categories = categories::all();
            $sub_categories = sub_Categories::all();
            $child_categories = child_Category::all();
            $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();

            $total_revenue = 0;

            $total_cart = 0;
            return view('user.home' , compact('total_cart', 'total_revenue', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
        }
    }



    public function shopAll()
    {
        $colors = product_colors::all();
        $products = Products::paginate(2);
        $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
        $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
        $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
        $featured_products = products::where('featured', '=' , 1)->get();
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $special_offers = products::where('special_offer', '=' , 1)->get();
        $special_deals = products::where('special_deals', '=' , 1)->get();
        $new_products = products::where('new_product', '=' , 1)->get();
        $categories = categories::all();
        $sub_categories = sub_Categories::all();
        $child_categories = child_Category::all();
        $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();
        $carts = cart::all();
        $total_revenue = 0;
        foreach($carts as $cart)
        {
            $total_revenue = $total_revenue + $cart->price;
        }
        $total_cart = cart::all()->count();
        return view('user.shopAll' , compact('total_cart', 'colors', 'total_revenue', 'products', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
    }


    public function priceLow()
    {
        $colors = product_colors::all();
        $products = Products::orderby('price' , 'ASC')->paginate(2);
        $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
        $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
        $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
        $featured_products = products::where('featured', '=' , 1)->get();
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $special_offers = products::where('special_offer', '=' , 1)->get();
        $special_deals = products::where('special_deals', '=' , 1)->get();
        $new_products = products::where('new_product', '=' , 1)->get();
        $categories = categories::all();
        $sub_categories = sub_Categories::all();
        $child_categories = child_Category::all();
        $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();
        $carts = cart::all();
        $total_revenue = 0;
        foreach($carts as $cart)
        {
            $total_revenue = $total_revenue + $cart->price;
        }
        $total_cart = cart::all()->count();
        return view('user.shopAll' , compact('total_cart', 'total_revenue', 'colors', 'products', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
    }


    public function priceHigh()
    {
        $colors = product_colors::all();
        $products = Products::orderby('price' , 'DESC')->paginate(2);
        $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
        $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
        $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
        $featured_products = products::where('featured', '=' , 1)->get();
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $special_offers = products::where('special_offer', '=' , 1)->get();
        $special_deals = products::where('special_deals', '=' , 1)->get();
        $new_products = products::where('new_product', '=' , 1)->get();
        $categories = categories::all();
        $sub_categories = sub_Categories::all();
        $child_categories = child_Category::all();
        $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();
        $carts = cart::all();
        $total_revenue = 0;
        foreach($carts as $cart)
        {
            $total_revenue = $total_revenue + $cart->price;
        }
        $total_cart = cart::all()->count();
        return view('user.shopAll' , compact('total_cart', 'total_revenue', 'colors', 'products', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
    }


    public function name_A_To_Z()
    {
        $colors = product_colors::all();
        $products = Products::orderby('name' , 'ASC')->paginate(2);
        $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
        $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
        $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
        $featured_products = products::where('featured', '=' , 1)->get();
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $special_offers = products::where('special_offer', '=' , 1)->get();
        $special_deals = products::where('special_deals', '=' , 1)->get();
        $new_products = products::where('new_product', '=' , 1)->get();
        $categories = categories::all();
        $sub_categories = sub_Categories::all();
        $child_categories = child_Category::all();
        $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();
        $carts = cart::all();
        $total_revenue = 0;
        foreach($carts as $cart)
        {
            $total_revenue = $total_revenue + $cart->price;
        }
        $total_cart = cart::all()->count();
        return view('user.shopAll' , compact('total_cart', 'total_revenue', 'colors', 'products', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
    }


    public function shopByChildCategory($name)
    {
        $colors = product_colors::all();
        $products = Products::where('child_category_name', $name)->paginate(2);
        $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
        $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
        $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
        $featured_products = products::where('featured', '=' , 1)->get();
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $special_offers = products::where('special_offer', '=' , 1)->get();
        $special_deals = products::where('special_deals', '=' , 1)->get();
        $new_products = products::where('new_product', '=' , 1)->get();
        $categories = categories::all();
        $sub_categories = sub_Categories::all();
        $child_categories = child_Category::all();
        $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();
        $carts = cart::all();
        $total_revenue = 0;
        foreach($carts as $cart)
        {
            $total_revenue = $total_revenue + $cart->price;
        }
        $total_cart = cart::all()->count();
        return view('user.shopAll' , compact('total_cart', 'total_revenue', 'colors', 'products', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
    }


    public function product_detail($id)
    {
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $product = Products::find($id);
        $upsell = $product->sub_category_name;
        $upsell_products = Products::where('sub_category_name' , $upsell)->get();
        $product_images = product_image::where('product_id' , $id)->get();
        $comments = comment::where('prodcut_id' , $id)->get();
        $replies = reply::where('product_id' , $id)->get();
        return view('user.product_details' , compact('replies', 'comments', 'hot_deals', 'product' , 'product_images' , 'upsell_products'));
    }



    public function shopByTag($tag)
    {
        $colors = product_colors::all();
        $products = Products::where('tags' , 'like' , "%$tag%")->paginate(2);
        $newShoessProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Shoes')->get();
        $newElectronicsProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Electronics')->get();
        $newClothingProducts = Products::where('new_product' , '=' , 1)->where('category_name' , '=' , 'Clothing')->get();
        $featured_products = products::where('featured', '=' , 1)->get();
        $hot_deals = products::where('hot_deals', '=' , 1)->get();
        $special_offers = products::where('special_offer', '=' , 1)->get();
        $special_deals = products::where('special_deals', '=' , 1)->get();
        $new_products = products::where('new_product', '=' , 1)->get();
        $categories = categories::all();
        $sub_categories = sub_Categories::all();
        $child_categories = child_Category::all();
        $electronics_categories = sub_categories::where('category_id' , '=' , 2)->get();
        return view('user.shopAll' , compact('colors', 'products', 'special_deals', 'special_offers', 'hot_deals', 'featured_products', 'electronics_categories', 'newShoessProducts', 'newElectronicsProducts', 'newClothingProducts', 'new_products', 'categories', 'sub_categories', 'child_categories'));
    }



    public function AddToCart(Request $request , $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = products::find($id);

            $product_exist_id = cart::where('product_id' , '=' , $id)->where('user_id' , '=' , $user->id)->get('id')->first();

            if($product_exist_id)
            {
                $cart = cart::find($product_exist_id)->first();
                $quantity = $cart->quantity;
                $cart->quantity = $quantity + 1;
            }
            else
            {

                $cart = new cart;
                $cart->name = $user->name ;
                $cart->email = $user->email ;
                $cart->phone = $user->phone ;
                $cart->address = $user->address ;
                $cart->user_id = $user->id ;
                $cart->product_name = $product->name ;
                $cart->quantity = 1 ;

                if($product->taxs != null)
                {
                    $cart->price = $product->price;
                }
                else
                {
                    $cart->price = $product->price;
                }

                if($product->discount != null)
                {
                    $cart->discount = $product->discount;
                }
                else
                {
                    $cart->discount = 0;
                }
                $cart->image = $product->main_image ;
                $cart->product_id = $id ;

            }
            $cart->save();
            Alert::success('Product Added Successfully' , 'We Add This Product To Your Cart');
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }
    }


    public function AddToWishlist(Request $request , $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = products::find($id);

            $product_exist_id = wishlist::where('product_id' , '=' , $id)->where('user_id' , '=' , $user->id)->get('id')->first();

            if($product_exist_id)
            {
                $wishlist = wishlist::find($product_exist_id)->first();
                $quantity = $wishlist->quantity;
                $wishlist->quantity = $quantity + 1;
            }
            else
            {

                $wishlist = new wishlist;
                $wishlist->name = $user->name ;
                $wishlist->email = $user->email ;
                $wishlist->phone = $user->phone ;
                $wishlist->address = $user->address ;
                $wishlist->user_id = $user->id ;
                $wishlist->product_name = $product->name ;
                $wishlist->quantity = 1 ;

                if($product->taxs != null)
                {
                    $wishlist->price = $product->price;
                }
                else
                {
                    $wishlist->price = $product->price;
                }

                if($product->discount != null)
                {
                    $wishlist->discount = $product->discount;
                }
                else
                {
                    $wishlist->discount = 0;
                }
                $wishlist->image = $product->main_image ;
                $wishlist->product_id = $id ;

            }
            $wishlist->save();
            Alert::success('Product Added Successfully' , 'We Add This Product To Your Wishlist');
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }
    }



    public function MyCart()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $cart = cart::where('user_id' , $userid)->get();

            return view('user.cart' , compact('cart'));
        }
        else
        {
            return redirect('login');
        }
    }


    public function cash_order()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $data = cart::where('user_id' , '=' , $userid)->get();

            foreach($data as $data)
            {
                $order = new order;

                $order->name = $data->name;
                $order->email = $data->email;
                $order->phone = $data->phone;
                $order->address = $data->address;
                $order->user_id = $data->user_id;
                $order->product_title = $data->product_name;
                $order->price = $data->price;
                $order->quantity = $data->quantity;
                $order->image = $data->image;
                $order->product_id = $data->product_id;
                $order->payment_status = 'Cash on Delivery';
                $order->delivery_status = 'Processing';

                $order->save();

                $cart_id = $data->id;
                $cart = cart::find($cart_id);
                $cart->delete();
            }

            Alert::success('Products Orderd Successfully' , 'We Have Received Your Order . We Will Contact You Soon');
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }
    }


    public function myWishlist()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $wishlist = wishlist::where('user_id' , $userid)->get();
            return view('user.wishlist' , compact('wishlist'));
        }
        else
        {
            return redirect('login');
        }
    }



    public function addToCartFromWish(Request $request , $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $wishlist = wishlist::find($id);

            $product_exist_id = cart::where('product_id' , '=' , $id)->where('user_id' , '=' , $user->id)->get('id')->first();

            if($product_exist_id)
            {
                $cart = cart::find($product_exist_id)->first();
                $quantity = $cart->quantity;
                $cart->quantity = $quantity + 1;
            }
            else
            {

                $cart = new cart;
                $cart->name = $user->name ;
                $cart->email = $user->email ;
                $cart->phone = $user->phone ;
                $cart->address = $user->address ;
                $cart->user_id = $user->id ;
                $cart->product_name = $wishlist->product_name ;
                $cart->quantity = 1 ;

                if($wishlist->discount != null)
                {
                    $cart->discount = $wishlist->discount;
                }
                else
                {
                    $cart->discount = 0;
                }
                $cart->price = $wishlist->price;
                $cart->image = $wishlist->image ;
                $cart->product_id = $id ;

            }
            $cart->save();
            Alert::success('Product Added Successfully' , 'We Add This Product To Your Cart');
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }
    }


    public function DeleteFromCart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        Alert::warning('Product Removed Successfully' , 'We remove This Product from Your Cart');
        return redirect()->back();
    }


    public function deleteFromWishlist($id)
    {
        $wishlist = wishlist::find($id);
        $wishlist->delete();
        Alert::warning('Product Removed Successfully' , 'We remove This Product from Your Wishlist');
        return redirect()->back();
    }



    public function MyCompare()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $compare = compare::where('user_id' , $userid)->get();
            return view('user.MyCompare' , compact('compare'));
        }
        else
        { 
            return redirect('login');
        }
    }



    public function AddToCompare(Request $request , $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = products::find($id);

            $product_exist_id = compare::where('product_id' , '=' , $id)->where('user_id' , '=' , $user->id)->get('id')->first();

            if($product_exist_id)
            {
                Alert::success('This Product Already Exist' , 'We Add This Product To Your Compare');
                
            }
            else
            {

                $compare = new compare;
                $compare->user_id = $user->id ;
                $compare->product_name = $product->name ;
                $compare->description = $product->description ;
                $compare->price = $product->price ;
                $compare->name = $user->name ;
                $compare->email = $user->email ;
                $compare->phone = $user->phone ;
                $compare->address = $user->address ;
                $compare->quantity = 1 ;

                if($product->discount != null)
                {
                    $compare->discount = $product->discount;
                }
                else
                {
                    $compare->discount = 0;
                }
                $compare->image = $product->main_image ;
                $compare->product_id = $id ;

                $compare->save();
                Alert::success('Product Added Successfully' , 'We Add This Product To Your Compare');
            }
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }
    }



    public function addTocartFromCompare(Request $request , $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $compare = compare::find($id);

            $product_exist_id = cart::where('product_id' , '=' , $id)->where('user_id' , '=' , $user->id)->get('id')->first();

            if($product_exist_id)
            {
                $cart = cart::find($product_exist_id)->first();
                $quantity = $cart->quantity;
                $cart->quantity = $quantity + 1;
            }
            else
            {

                $cart = new cart;
                $cart->name = $user->name ;
                $cart->email = $user->email ;
                $cart->phone = $user->phone ;
                $cart->address = $user->address ;
                $cart->user_id = $user->id ;
                $cart->product_name = $compare->product_name ;
                $cart->quantity = 1 ;

                if($compare->discount != null)
                {
                    $cart->discount = $compare->discount;
                }
                else
                {
                    $cart->discount = 0;
                }
                $cart->price = $compare->price;
                $cart->image = $compare->image ;
                $cart->product_id = $id ;

            }
            $cart->save();
            Alert::success('Product Added Successfully' , 'We Add This Product To Your Cart');
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }
    }


    public function deleteFromCompare($id)
    {
        $compare = compare::find($id);
        $compare->delete();
        Alert::warning('Product Removed Successfully' , 'We remove This Product from Your Cpmare');
        return redirect()->back();
    }


    public function add_review(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = Auth::user()->id;
            $review = new review;
            $review->product_id = $id ;
            $review->user_id = $user ;
            $review->review = $request->review ;
            $review->save();
            Alert::success('Review Added Successfully' , 'We Add This Review from You');
            return redirect()->back();
        }
        else
        { 
            return redirect('login');
        }

    }


    public function add_comment(Request $request , $id)
    {
        if(Auth::id())
        {
            $comment = new comment;
            $username = Auth::user()->name;
            $userid = Auth::user()->id;

            $comment->name=$username;
            $comment->user_id=$userid;
            $comment->prodcut_id=$id;
            $comment->comment=$request->comment;

            $comment->save();
            Alert::success('Your Comments Added Successfully' , 'We Add This Comment Successfully');
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }



    public function add_reply(Request $request , $id)
    {
        if(Auth::id())
        {
            $reply = new reply;
            $username = Auth::user()->name;
            $userid = Auth::user()->id;

            $reply->name=$username;
            $reply->comment_id=$request->commentId;
            $reply->reply=$request->reply;
            $reply->user_id=$userid;
            $reply->product_id=$id;

            $reply->save();
            Alert::success('Your Reply Added Successfully' , 'We Add This reply Successfully');
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }





    public function search(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $products=DB::table('products')->where('name','LIKE','%'.$request->search."%")->get();
    if($products)
    {
    foreach ($products as $key => $product) {
    $output.=
    "<div class='col-sm-6 col-md-4 col-lg-3'>
            <div class='item'>
              <div class='products'>
                <div class='product'>
                  <div class='product-image'>
                    <div class='image'> 
                    <a href='product_detail/$product->id'>
                       <img src='productimage/$product->main_image' alt=''> 
                        <img src='productimage/$product->main_image2' alt='' class='hover-image'>
                    </a> 
                 </div>

                  </div>
                  
                  <div class='product-info text-left'>
                    <h3 class='name'><a href='product_detail/$product->id'> $product->name </a></h3>
                    <div class='rating rateit-small'></div>
                    <div class='description'></div>
                    <div class='product-price'> <span class='price'>  $product->price  </span> <span class='price-before-discount'>$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class='cart clearfix animate-effect'>
                    <div class='action'>
                      <ul class='list-unstyled'>
                        <li class='add-cart-button btn-group'>
                          <a data-toggle='tooltip' class='btn btn-primary icon' href='addToCart/$product->id' title='Add Cart'> <i class='fa fa-shopping-cart'></i> </a>
                          <a class='btn btn-primary cart-btn' href='addToCart/$product->id'>Add to cart</a>
                        </li>
                        <li class='lnk wishlist'> <a data-toggle='tooltip' class='add-to-cart' href='AddToWishlist/$product->id' title='Wishlist'> <i class='icon fa fa-heart'></i> </a> </li>
                        <li class='lnk'> <a data-toggle='tooltip' class='add-to-cart' href='AddToCompare/$product->id' title='Compare'> <i class='fa fa-signal' aria-hidden='true'></i> </a> </li>
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
            </div>";
    }
    return Response($output);
       }
       }
    }

}
