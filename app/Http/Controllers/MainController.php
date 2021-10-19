<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home_view()
    {
        return view('index');
    }
    public function about_view()
    {
        return view('about-us');
    }
    public function products_view()
    {
        return view('our-products');
    }
    public function cateogry_products_view()
    {
        return view('category-products');
    }
    public function products_detail_view()
    {
        return view('product-detail');
    }
    public function add_to_quote_view()
    {
        return view('add-to-quote');
    }
    public function quote_form_view()
    {
        return view('quote-form');
    }
    public function factory_view()
    {
        return view('our-factory');
    }
    public function blog_view()
    {
        return view('blogs');
    }
    public function blog_detail_view()
    {
        return view('blog-detail');
    }
    public function contact_view()
    {
        return view('contact');
    }
}
