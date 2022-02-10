<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::get();

        return view('adminLTE.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('adminLTE.categories.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required'            
        ]);

        $categories = new Category();

        $categories->category = $request->category;

        $categories->save();

        return redirect()->route('categories');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = Category::find($id);
        return view('adminLTE.categories.update', compact('categories'));
    }


    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'category' => 'required',
        ]);

        $categories = Category::find($id);

        $categories->category = $request->category;

        $categories->save();

        return redirect()->route('categories');
    }


    public function destroy($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        return redirect()->route('categories');
    }
}
