<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //redirect catergoty list
    public function list()
    {
        return view('admin.category.list');
    }
}
