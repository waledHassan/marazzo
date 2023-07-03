<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Products;

use App\Models\User;

use App\Models\Categories;

use App\Models\sub_categories;

use App\Models\child_category;

use App\Models\product_colors;

use App\Models\product_sizes;

use App\Models\product_image;

use App\Http\Controllers\Item;


use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{

    ///////////// products 
    public function add_product_form()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $categories = Categories::all();
                $sub_categories = sub_Categories::all();
                $child_categories = child_Category::all();
                return view('admin.add_product_form' , compact('categories', 'sub_categories', 'child_categories'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function upload_product(Request $request)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $data = new products;

                $image = $request->file;
                $imagename = time().'.'.$image->getClientoriginalExtension();
                $request->file->move('productimage' , $imagename);

                $image2 = $request->file2;
                $imagename2 = time().'.'.$image2->getClientoriginalExtension();
                $request->file2->move('productimage' , $imagename2);

                $data->main_image=$imagename;
                $data->main_image2=$imagename2;
                $data->name=$request->name;
                $data->description=$request->description;
                $data->price=$request->price;
                $data->discount=$request->discount;
                $data->taxs=$request->taxs;
                $data->tags=$request->tags;
                $data->category_name=$request->category;
                $data->sub_category_name=$request->sub_category;
                $data->child_category_name=$request->child_category;
                $data->quantity=$request->quantity;
                $data->save();
                Alert::success('Product Added Successfully' , 'We Add This Product Successfully');
                return redirect()->back();
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function show_products()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $data = Products::all();
                return view('admin.show_products', compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function delete_product($id)
    {
        $data = products::find($id);
        $data->delete();
        Alert::info('Product Deleted Successfully' , 'We Delete This Product Successfully');
        return redirect()->back();
    }


    public function update_product_form($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $products = Products::find($id);
                $productsColors = product_colors::where('product_id' , $id)->get();
                $productsSizes = product_sizes::where('product_id' , $id)->get();
                $productsImages = product_image::where('product_id' , $id)->get();
                $categories = Categories::all();
                $sub_categories = sub_Categories::all();
                $child_categories = child_Category::all();
                return view('admin.update_product_form' , compact('products', 'productsColors', 'productsSizes', 'productsImages','categories', 'sub_categories', 'child_categories'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function do_update_product(Request $request , $id)
    {
        $productsimages = product_image::where('product_id' , $id)->get();
        $data = products::find($id);
        $image = $request->file;
        if($image)
        {
            $imagename = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('productimage' , $imagename);
            $data->main_image=$imagename;
        }

        $data->name=$request->name;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->discount=$request->discount;
        $data->taxs=$request->taxs;
        $data->tags=$request->tags;
        $data->category_name=$request->category;
        $data->sub_category_name=$request->sub_category;
        $data->child_category_name=$request->child_category;
        $data->quantity=$request->quantity;

        foreach($request->input('colors') as $color){
            $id=$color['id'] ;
            $color_name=$color['color'] ;
            product_colors::where('id', $id)->update([
               'color'=>$color_name 
              ]) ;
         }

         foreach($request->input('sizes') as $size){
            $id=$size['id'] ;
            $size_name=$size['size'] ;
            product_sizes::where('id', $id)->update([
               'size'=>$size_name 
              ]) ;
         }

        $data->save();
        Alert::success('Product Updated Successfully' , 'We Update This Product Successfully');
        return redirect()->back();
    }


    public function add_color_form($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
               return view('admin.add_color_form' , compact('id'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function upload_color(Request $request , $id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $data = new product_colors;
                $data->color = $request->color;
                $data->product_id = $id;
                $data->save();
                Alert::info('Color Added Successfully' , 'We Add This Color Successfully');
                return redirect()->back();
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function add_size_form($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                return view('admin.add_size_form' , compact('id'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function upload_size(Request $request , $id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $data = new product_sizes;
                $data->size = $request->size;
                $data->product_id = $id;
                $data->save();
                Alert::info('Size Added Successfully' , 'We Add This Size Successfully');
                return redirect()->back();
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }
//////////////// End Products


/////////////// Categories

    public function show_categories()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $categories = Categories::all();
                return view('admin.show_categories' , compact('categories'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function show_sub_category($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $sub_categories = sub_Categories::where('category_id' , $id)->get();
                return view('admin.show_sub_categories' , compact('sub_categories'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function show_child_category($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $child_categories = child_Category::where('sub_category_id' , $id)->get();
                return view('admin.show_child_category' , compact('child_categories'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function update_category_form($id)
    {
        $category = Categories::find($id);
        return view('admin.update_category_form' , compact('category'));
    }


    public function do_update_category(Request $request , $id)
    {
        $data = Categories::find($id);
        $data->name = $request->name;
        $data->save();
        Alert::success('Category Updated Successfully' , 'We Update This Category Successfully');
        return redirect()->back();
    }


    public function delete_category($id)
    {
        $categories = Categories::find($id);
        $sub_categories = sub_categories::where('category_id' , $id)->delete();
        $child_categories = child_Category::where('category_id' , $id)->delete();

        $categories->delete();

        Alert::info('Category Delted Successfully' , 'We Delete This Category Successfully');
        return redirect()->back();
    }


    public function update_sub_category_form($id)
    {
        $sub_category = sub_Categories::find($id);
        return view('admin.update_sub_category_form' , compact('sub_category'));
    }


    public function do_update_sub_category(Request $request , $id)
    {
        $data = sub_Categories::find($id);
        $data->name = $request->name;
        $data->save();
        Alert::success('Sub Category Updated Successfully' , 'We Update This Sub Category Successfully');
        return redirect()->back();
    }


    public function delete_sub_category($id)
    {
        $sub_categories = sub_categories::find($id);
        $child_categories = child_Category::where('sub_category_id' , $id)->delete();
        $sub_categories->delete();
        Alert::info('Category Deleted Successfully' , 'We Delete This Sub Category Successfully');
        return redirect()->back();
    }


    public function add_category_form()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                return view('admin.add_category_form');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
        
    }


    public function upload_category(Request $request)
    {
        $data = new Categories;
        $data->name = $request->name;
        $data->save();
        Alert::success('Category Addedd Successfully' , 'We Add This Category Successfully');
        return redirect()->back();
    }


    public function add_sub_category_form($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                return view('admin.add_sub_category_form' , compact('id'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }

    public function upload_sub_category(Request $request , $id)
    {
        $data = new sub_categories();
        $data->name = $request->name;
        $data->category_id = $id;
        $data->save();
        Alert::success('Sub Category Addedd Successfully' , 'We Add This Sub Category Successfully');
        return redirect()->back();
    }


    public function add_child_category_form($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                return view('admin.add_child_category_form' , compact('id'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function upload_child_category(Request $request , $id)
    {
        $data = new child_category();
        $data->name = $request->name;
        $data->sub_category_id = $id;
        $data->save();
        Alert::success('child Category Addedd Successfully' , 'We Add This child Category Successfully');
        return redirect()->back();
    }


    public function update_child_category_form($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $child_category = child_Category::find($id);
                return view('admin.update_child_category_form' , compact('child_category'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function do_update_child_category(Request $request , $id)
    {
        $data = child_Category::find($id);
        $data->name = $request->name;
        $data->save();
        Alert::success('child Category Updated Successfully' , 'We Update This Child Category Successfully');
        return redirect()->back();
    }


    public function delete_child_category($id)
    {
        $data = child_Category::find($id);
        $data->delete();
        Alert::info('Child Category Deleted Successfully' , 'We Delete This Child Category Successfully');
        return redirect()->back();
    }
///////////////// End Categories

//////////////// Users

    public function show_users()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $users = User::where('usertype' ,'!=' , '1');
                return view('admin.show_users' , compact('users'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }
}