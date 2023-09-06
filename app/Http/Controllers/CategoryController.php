<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //redirect catergoty list
    public function list()
    {
        $data = Category::when(request('searchKey'), function ($query) {
            $searchKey = request('searchKey');
            $query->orWhere('name', 'like', '%' . $searchKey . '%');
        })
            ->orderBy('category_id', 'asc')->paginate(10);
        return view('admin.category.list', compact('data'));
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
            'name' => $validateData['name']
        ]);
        return redirect()->route('category#list')->with('Create success....', true);
    }

    //edit category

    public function edit($id)
    {
        $data = Category::where('category_id', $id)->first();

        return view('admin.category.update', compact('data'));
    }

    //category update

    public function update(Request $request, $id)
    {

        $data = Category::where('category_id', $id);
        $data->update([
            'name' => $request->input(['updateName'])
        ]);

        return redirect()->route('category#list', $id);
    }


    //delete category

    public function delete($id)
    {
        Category::where('category_id', $id)->delete();

        return back();
    }
}
