<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class AdminMainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function all_categories_view ()
    {
        $parent_categories = Category::where('parent_category' , null)->get();
            foreach($parent_categories as $obj)
            {
                $id = $obj->id;

                $secondary_categories = Category::where('parent_category', $id)->get();
                $obj['secondary_categories'] = $secondary_categories;
            }
        return view('admin.all-categories', compact('parent_categories'));
    }
    public function add_categories_view ()
    {
        $status = 1;
        $parent_categories = Category::where('status', $status)->where('parent_category', null)->orderBy('id', 'desc')->get();
        return view('admin.add-categories', compact('parent_categories'));
    }
    public function add_categories  (Request $request)
    {
        $category_name   = $request->category_name;
        $category_image  = $request->image;
        $category_type   = $request->category_type;
        $parent_category = $request->parent_category;
        $status          = 1;
        
        $request->validate([
            'category_name' => 'required|max:250',
            'image'         => 'required|mimes:jpeg,jpg,png,gif|max:3000kb',
            'category_type' => 'required',
        ]);

        if ($category_type == "secondary") {
            $request->validate([
                'parent_category' => 'required',
            ]);
        }
        
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $orignal_name = $file->getClientOriginalName();
            $name = time().rand(1,100000000).'.'.$file->extension();
            $move_file = $file->move(public_path().'/uploads/categories', $name);  
            $array = [
                'category_name'     => $category_name,
                'category_image'    => $name,
                'category_type'     => $category_type,
                'parent_category'   => $parent_category,
                'status'            => $status,
            ];
            $category = Category::create($array);
            if ($category) {
                return back()->withErrors('category_added');
                
            }else{
                return back()->withErrors('category_not_added');
            }
        }else{
            return back()->withErrors('unknownError');

        }
    }
    public function all_products_view()
    {
        $products = Product::where('status', '=', 1)->orderBy('id', 'desc')->get();
            foreach($products as $obj)
            {
                $id = $obj->product_category;

                $product_categories = Category::where('id', $id)->get();
                $cat_name = $product_categories[0]->category_name;
                $obj['cat_name'] = $cat_name;
            }
        return view('admin.all-products', compact('products'));
    }
    public function add_products_view ()
    {
        $parent_categories = Category::where('parent_category', '=', null)->orderBy('id', 'desc')->get();
        $secondary_categories = Category::where('parent_category', '!=', null)->orderBy('id', 'desc')->get();
        return view('admin.add-products', compact('secondary_categories', 'parent_categories'));
    }
    public function add_product(Request $request){

        $product_name         =  $request->product_name;
        $code                 =  $request->product_code;
        $product_description  =  $request->product_description;
        $product_photo        =  $request->image;
        $product_category     =  $request->product_category;
        $product_code         =  "MFT-".$code;
        // return $request;
        $request->validate([
            'product_name'         =>  'required|max:250',
            'product_code'         =>  'required|max:15',
            'product_description'  =>  'required',
            'image'                =>  'required|mimes:jpeg,jpg,png,gif|max:3000', 
            'product_category'     =>  'required',
            
        ]);
        // return $product_code;
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $orignal_name = $file->getClientOriginalName();
            $name = time().rand(1,100000000).'.'.$file->extension();
            $move_file = $file->move(public_path().'/uploads/products', $name);
            $status = 1;
            $array = [
                'product_name'          =>    $product_name,
                'product_code'          =>    $product_code,
                'product_description'   =>    $product_description,
                'product_photo'         =>    $name,
                'product_category'      =>    $product_category,
                'status'                =>    $status,
            ];
            $product = Product::create($array);
            if ($product) {
                return back()->withErrors('product_added');
                
            }else{
                return back()->withErrors('product_not_added');
            }

        }else{
            return back()->withErrors('unknownError');
        }
    }
    public function edit_product_view($id)
    {
        $product        = Product::where('id', $id)->get();
        $code           = $product[0]->product_code;
        $ex_code        = explode('-', $code);
        $product_code   = $ex_code[1];

        foreach($product as $obj)
            {
                $cat_id = $obj->product_category;

                $product_categories = Category::where('id', '!=', $cat_id)->get();
                $p_cat = Category::where('id', '=', $cat_id)->get();
                $p_cat_name = $p_cat[0]->category_name;
                $obj['p_cat_name']                 = $p_cat_name;
                $obj['product_categories']    = $product_categories;
            }
        return view('admin.edit-product', compact('product', 'product_code'));
    }
    public function edit_product(Request $request){

        $product_id           =  $request->product_id;
        $product_name         =  $request->product_name;
        $code                 =  $request->product_code;
        $product_description  =  $request->product_description;
        $product_photo        =  $request->image;
        $product_category     =  $request->product_category;
        $product_code         =  "MFT-".$code;

        $request->validate([
            'product_name'         =>  'required|max:250',
            'product_code'         =>  'required|max:15',
            'product_description'  =>  'required',
            'image'                =>  'mimes:jpeg,jpg,png,gif|max:3000', 
            'product_category'     =>  'required',
            
        ]);
        if ($product_photo == null) {
            $array = [
                'product_name'          =>    $product_name,
                'product_code'          =>    $product_code,
                'product_description'   =>    $product_description,
                'product_category'      =>    $product_category,
            ];
            $product = Product::where('id', $product_id)->update($array);
            if ($product) {
                return redirect('/admin/all/products')->withErrors('product_update');
                
            }else{
                return redirect('/admin/all/products')->withErrors('product_not_update');
            }
        }else{
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $orignal_name = $file->getClientOriginalName();
                $name = time().rand(1,100000000).'.'.$file->extension();
                $move_file = $file->move(public_path().'/uploads/products', $name);
                $status = 1;
                $array = [
                    'product_name'          =>    $product_name,
                    'product_code'          =>    $product_code,
                    'product_description'   =>    $product_description,
                    'product_photo'         =>    $name,
                    'product_category'      =>    $product_category,
                    'status'                =>    $status,
                ];
                $product = Product::where('id', $product_id)->update($array);
                if ($product) {
                    return redirect('/admin/all/products')->withErrors('product_update');
                    
                }else{
                    return redirect('/admin/all/products')->withErrors('product_not_update');
                }

            }else{
                return redirect('/admin/all/products')->withErrors('unknownError');
            }
        }
    }
    public function product_trash(Request $request)
    {
        $product_id  = $request->id;
        $status      = 0;
        $array = [
            'status'                =>    $status,
        ];
        $product = Product::where('id', $product_id)->update($array);
        if ($product) {
            return redirect('/admin/all/products')->withErrors('product_deleted');
            
        }else{
            return redirect('/admin/all/products')->withErrors('product_not_deleted');
        }
    }
    public function product_archive (Request $request)
    {
        $product_id  = $request->id;
        $status      = 2;
        $array = [
            'status'                =>    $status,
        ];
        $product = Product::where('id', $product_id)->update($array);
        if ($product) {
            return redirect('/admin/all/products')->withErrors('product_archive');
            
        }else{
            return redirect('/admin/all/products')->withErrors('product_not_archive');
        }
    }
    public function product_unarchive (Request $request)
    {
        $product_id  = $request->id;
        $status      = 1;
        $array = [
            'status'                =>    $status,
        ];
        $product = Product::where('id', $product_id)->update($array);
        if ($product) {
            return redirect('/admin/all/products')->withErrors('product_unarchive');
            
        }else{
            return back()->withErrors('product_not_unarchive');
        }
    }
    public function archive_products_view()
    {
        $products = Product::where('status', '=', 2)->orderBy('id', 'desc')->get();
            foreach($products as $obj)
            {
                $id = $obj->product_category;

                $product_categories = Category::where('id', $id)->get();
                $cat_name = $product_categories[0]->category_name;
                $obj['cat_name'] = $cat_name;
            }
        return view('admin.archive-products', compact('products'));
    }
    public function trash_products_view()
    {
        $products = Product::where('status', '=', 0)->orderBy('id', 'desc')->get();
            foreach($products as $obj)
            {
                $id = $obj->product_category;

                $product_categories = Category::where('id', $id)->get();
                $cat_name = $product_categories[0]->category_name;
                $obj['cat_name'] = $cat_name;
            }
        return view('admin.trash-products', compact('products'));
    }
}