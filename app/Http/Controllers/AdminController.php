<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){
        $categories = category::all();
        return view('admin.category',compact('categories'));
    }

    public function add_category(Request $request){
        $data = new Category();

        $data-> category_name = $request->category;
        $data -> save();
        return redirect() -> back()->with('message','Category Added Successfully');
    }
}
