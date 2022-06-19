<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryCotroller extends Controller
{
    //


    public function index()
    {
        //     'users' => DB::table('users')->paginate(15)
        $categories = Category::latest()->paginate(5);
        return view('test.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('test.new-category');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required| unique:categories| max:200'
        ]);



        $past = new category;
        $past->title = $request->title;
        $past->save();
        return redirect('/testing');
    }

    public function edit($id)
    {

        $category = Category::where('id', $id)->first();
        return view('test.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect('/testing');
    }

    public function destroy($id)
    {
        $category = Category::whereId($id)->first();
        $category->delete();
        return redirect('/testing');
    }
}