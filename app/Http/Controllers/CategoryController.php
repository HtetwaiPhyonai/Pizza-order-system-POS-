<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //redirect catergoty list
    public function list()
    {
        $data = Category::orderBy('catrgory_id', 'asc')->get();
        return view('admin.category.list' , compact('data'));
    }
    //redirect category create list 

    public function createPage()
    {
        return view('admin.category.create');
    }

    //create category item

    public function store(Request $request)
    {
       $validateData = $request->validate([
        'name' => 'required|unique:categories,name'
       ]);
       Category::create([
        'name' => $validateData['name']]);
       return redirect()->route('catrgoty#list')->with('Create success....' , true);
    }
}
