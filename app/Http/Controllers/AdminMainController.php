<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class AdminMainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function all_categories_view ()
    {
        return view('admin.all-categories');
    }
    public function add_categories_view ()
    {
        $status = 1;
        $parent_categories = Category::where('status', $status)->where('parent_category', null)->orderBy('id', 'desc')->get();
        // return $parent_categories;
        return view('admin.add-categories', compact('parent_categories'));
    }
    public function add_categories  (Request $request)
    {
        // return $request;
        $category_name   = $request->category_name;
        $category_image  = $request->image;
        $category_type   = $request->category_type;
        $parent_category = $request->parent_category;
        $status          = 1;
        
        $request->validate([
            'category_name' => 'required|max:250',
            'image' => 'required',
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

        }
    }
}
